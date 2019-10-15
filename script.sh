#!/bin/bash

set -e

composer require league/commonmark \
    league/commonmark-ext-autolink \
    league/commonmark-ext-smartpunct \
    league/commonmark-ext-strikethrough \
    league/commonmark-ext-task-list \
    league/commonmark-ext-table

if [ -d "./public" ]; then
  rm -rf public
  mkdir public
else
  mkdir public
fi

cp -rf ./assets public 
php ./markdown.php
# sed -i "s|{CI_COMMIT_SHA}|${CI_COMMIT_SHA:0:8}|g" public/*.html