# Policy Development

Dokumen ini menjelaskan bagaimana cara untuk melakukan proses development dengan baik dan benar 
dengan mengakomodir fitur keamanan pada saat nantinya sebuah sistem akan di naikkan ke dalam proses
production.

## Setup, Konfigurasi dan Environment

- Semua config dari sebuah sistem harus di tulis dan di passing menggunakan `env`, implementasi dari 
  masing-masing kode program yang nantinya ditulis bisa melihat library di masing-masing bahasa
  pemrogaman sebagai berikut :
  - JavaScript : https://github.com/motdotla/dotenv
  - PHP : https://github.com/vlucas/phpdotenv
  - GoLang : https://github.com/joho/godotenv
  - Phyton : https://github.com/theskumar/python-dotenv
- File `.env` yang dibuat harus di skip dari git data sehingga file tersebut tidak ikut dalam dari
  pencatatan git history.
- Masing - masing project yang harus menyertakan `.env.example` yang nantinya dijadikan contoh/template
  untuk melakukan passing environment terhadap sistem yang nantinya akan dijalankan.

Apabila sudah terlanjur melakukan commit terhadap file tersebut segera lakukan git revert dan melakukan 
force push untuk menghapus historikalnya, berikut ini beberapa artikel untuk melakukan git revert:

- https://code.likeagirl.io/how-to-undo-the-last-commit-393e7db2840b
- https://www.atlassian.com/git/tutorials/undoing-changes/git-revert
- https://git-scm.com/docs/git-revert

## Kekayaan Intelektual dan Licensi

Anda berhak untuk melakukan :

- Anda berhak menyimpan source code untuk keperluan pribadi
- Anda berhak menjadikan projek ini sebagai portofolio pribadi maupun secara tim

Anda tidak berhak untuk melakukan :

- Anda tidak berhak mendistribusikan source code secara fisik maupun non fisik kepada siapapun 
  sehingga mengakibatkan :
  - source code tersebar secara bebas
  - celah keamanan dari source code yang terbuka
  - kerugian secara materiil yang diterima oleh client

## Tanggung Jawab Lead Engineer

- Memastikan policy development ini dapat di implementasikan di setiap proses development yang ia 
  pimpin

---

<small>Last updated 2020-03-17 13:35</small>