<?php

include __DIR__. '/vendor/autoload.php';

use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Ext\Autolink\AutolinkExtension;
use League\CommonMark\Ext\SmartPunct\SmartPunctExtension;
use League\CommonMark\Ext\Strikethrough\StrikethroughExtension;
use League\CommonMark\Ext\TaskList\TaskListExtension;

ini_set('date.timezone', 'Asia/Jakarta');

function parser ($directory, $path) {

  // Obtain a pre-configured Environment with all the CommonMark parsers/renderers ready-to-go
  $environment = Environment::createCommonMarkEnvironment();

  // Add this extension
  $environment->addExtension(new AutolinkExtension());
  $environment->addExtension(new SmartPunctExtension());
  $environment->addExtension(new StrikethroughExtension());
  $environment->addExtension(new TaskListExtension());

  $converter = new CommonMarkConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
    'smartpunct' => [
      'double_quote_opener' => '“',
      'double_quote_closer' => '”',
      'single_quote_opener' => '‘',
      'single_quote_closer' => '’',
    ],
  ], $environment);

  $template   = file_get_contents(__DIR__.'/assets/template.html.stub');
  $path       = __DIR__ . '/' . $path;

  if (!is_dir($path)) {
    mkdir($path, 0777, true);
  }

  array_map(function($file) use ($converter, $template, $path) {

    $content = file_get_contents($file);
    $text    = $converter->convertToHtml($content);
    $text    = str_replace(
      ['{content}', 'md', '{title}', '{DATE}'], 
      [$text, 'html', basename($file), date('d F Y H:i:s')], 
      $template
    );

    $filename = basename(str_replace('.md', '.html', $file));

    file_put_contents( $path . $filename, $text);
    if (strtolower($filename) == 'readme.html') {
      file_put_contents( $path. 'index.html', $text);
    }

  }, $directory);
}

// parse root directory
parser(glob(__DIR__.'/*.md'), 'public/');
