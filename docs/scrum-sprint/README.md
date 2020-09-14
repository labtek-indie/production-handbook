# Getting Started

Berikut ini merupakan panduan umum untuk pelaksanaan scrum sprint di Labtek Indie.
Karena topik-topik pelaksanaan dalam kegiatan scrum sprint sangatlah luas,  maka 
untuk di dokumen ini hanya menjelaskan proses secara umum, sedangkan untuk detail
di masing-masing phase dapat dilihat sesuai dengan bahan dibawah ini.

## Cara Kerja dan Target Kerja

### Cara Kerja

Dalam melakukan proses development kita menganut metodologi scrum seperti yang
tergambar pada bagan dibawah ini

![Scrum Overview](./assets/overview-2.png)

Pada dasarnya tidak ada yang membedakan proses scrum sprint dengan scrum sprint pada umumnya, namun di setiap 2-3 hari 
perlu melakukan daily review sebagai suatu cara apakah yang sudah dikerjakan itu sudah sesuai dengan bayangan Product Owner
apa tidak, dengan metode seperti ini kita bisa:

- melakukan kroscek di tengah sprint terkait dengan kualitas produk yang dihasilkan
- masih ada waktu untuk perbaikan di tengah sprint apabila dalam daily review tersebut masih terdapat ketidak sesuaian

Sehingga dari bagan tersebut akan:

- Setiap individual yang tergabung dalam tim wajib :
  - mengikuti proses dimulai dari awal hingga akhir
  - menjalankan pekerjaan-pekerjaan yang didefinisikan bersama oleh anggota tim 
    sesuai dengan keahliannya, namun tidak terbatas hanya pada keahlian tersebut
  - dapat membantu pekerjaan role lain apabila dibutuhkan (bersifat cross functional);
- Mengerjakan tugas sesuai dengan backlog, acceptance critera atau design yang 
  sudah tersedia (tidak lebih dan tidak kurang)
- Melakukan daily scrum minimal 5 (lima) jam per hari dengan cara melaporkan 
  hasil pekerjaan kepada scrum master untuk dicatat dalam laporan working hours
  nantinya
- Mengikuti checkin di tengah hari guna untuk saling berkomunikasi antar masing-masing indidu.
  Komunikasi dalam hal ini bisa tanya soal kendala, update progress dan lain-lain yang berkaitan 
  dengan proses development. Untuk pelaksanaan checkin kami rekomendasikan di jam 12.00 - 13.00,
  namun apabila dirasa tidak cocok silahkan di diskusikan pada sprint planning meeting nanti
- Mengikuti daily standup sesuai dengan jadwal yang sudah disepakati secara tepat
  waktu, apabila telat, berhalangan hadir wajib memberitahukan hal tersebut melalui
  scrum master paling telah 3 (tiga) jam sebelum pelaksanaan daily standup
- Mengikuti daily review untuk mendemokan apa yang telah dikerjakan kepada seluruh individual
- Dalam hal proses pengerjaan apabila mengalami jalan buntu:
  - tolong di timer untuk mencari solusi maksimal 1 (satu) jam
  - apabila tidak menemukan solusi segera informasikan kepada scrum master 
    melalui slack channel
  - scrum master akan memfasilitasi dan mencarikan solusi terkait 
- Apabila diperlukan dapat berkoordinasi dengan klien.

Detail untuk masing-masing kegiatan bisa dilihat pada link berikut ini:

* [Kick Off Meeting Client](kickoffmeeting-client.md)
* [Kick Off Meeting Internal](kickoffmeeting-internal.md)
* [Sprint Planning](sprint-planning-meeting.md)
* [Daily Scrum](daily-scrum.md)
* [Daily Scrum](daily-scrum.md)
* [Sprint Review Meeting](sprint-review-meeting.md)
* [Restrospective Meeting](retrospective-meeting.md)

### Target Kerja

- Dengan melakukan SPM (Sprin Plannning Meeting) kita membuat target kerja selama
  1 (satu) sprint kedepan
- Mohon untuk fokus dalam kegiatan SPM, apabila dirasa ada backlog, acceptance criteria, flow
  maupun design yang kurang jelas silahkan ditanyakan kembali kepada product owner

## Product Owner

- Seaktif mungkin untuk menanyakan progress pekerjaan sampai sejauh mana kepada scrum tim melalui scrum master
- Sekomunikatif mungkin untuk menyampaikan pertanyaan-pertanyaan yang berasal dari scrum tim untuk disampaikan kepada client
  guna memperoleh perspektif bisnis dari kacamata client
- Proses SPM adalah proses terjadinya negosiasi jumlah product backlog yang akan diambil dan disepakati secara bersama
  oleh scrum sprint untuk di kerjakan dalam satu sprintnya. Sudah barang tentu akan ada kemungkinan jumlah product backlog
  tidak akan terbawa semua pada saat satu sprint berlangsung. 
- Setelah proses SPM selesai lakukan komunikasi kepada client terkait dengan kesepakatan jumlah job story yang nantinya akan 
  dikerjakan
- Melakukan observasi dengan bantuan scrum master di tengah sprint, apakah jumlah job story yang dikerjakan masih dalam 
  waktu yang direncakan apa tidak. Apabila ada kendala yang menyebabkan proses deliveri tidak lancar maka perlu di telusuri
  apa yang menyebabkan kendalan tersebut untuk dicatat dan disampaikan kepada client
- Melakukan meeting dengan client terkait dengan apa yang sudah dicapai dalam tengah sprint guna untuk melakukan penyamaan 
  ekspektasi kembali dengan bahan point di atas tadi
- Lebih lengkap untuk presentasi client dan tata caranya bisa dilihat di [presentasi client](../general-sop/interaksi-lead-client.md)

## Scrum Master

- untuk memandu pelaksanaan SPM sesuai dengan yang ada di handbook
- awasi pendistribusian backlog dan tim yang mengerjakan
- sedapat mungkin untuk segera memfasilitasi mencari solusi pada saat melakukan daily standup
- sebelum memulai daily standup, tolong melakukan check ketersediaan scrum development tim apakah sudah lengkap
- mengawali kegiatan dengan melakukan :
  - checkin untuk masing-masing invidu, agar dapat mencairkan suasana
  - check apakah kanban product backlog sudah terupdate
- akan ada dokumen yang perlu dilengkapi setelah sprint berlangsung dengan mengacu 
  https://docs.google.com/document/d/1vHlGLw88ateEeP41mcWdbFFw-ig7YlfKLnlCL2Atrm4/edit?usp=sharing
- tolong buatkan event di google calendar untuk pelaksanaan daily standupnya

## Flow Kanban

Berikut ini adalah flow kanban dalam pelaksanaan scrum sprint / design sprint, dengan masing-masing status phase
memiliki peran penting untuk melakukan solving problem.

![Flow Kanban](./assets/flow-scrum.png)

- Open : 
  - ini merupakan issue yang ditulis oleh PO
- Todo :
  - wewenang scrum master untuk memprioritaskan backlog dan memindahkan backlog ke status ini
  - SM memastikan antrian todo maksimal 5-6 task dalam satu board list
  - SM melakukan assignment terhadap antrian todo yang di masukkan
- Doing : 
  - wewenang developer untuk memindahkan backlog **doing** 
  - developer silahkan mengambil task yang berada pada TODO 
  - apabila saat ini sedang mengerjakan ke DOING dan 
  - membuat branch pada lokal branch, satu branch itu adalah satu issue jika developer lebih dari satu
    maka tetap menggunakan satu branch tersebut
  - memindahkannya ke DONE apabila task tersebut sudah selesai di selesaikan
- Done :
  - wewenang developer untuk memindahkan backlog **done**
  - software tester akan melakukan testing terhadap task yang sudah selesai dikerjakan oleh
    developer 
  - tuliskan skenario testing dengan cara melakukan *edit* pada issue gitlab
  - apabila belum DONE tolong langsung geser ke bagian TODO
  - dan apabila belum done tolong di komunikasikan ke SM terkait issue yang belum selesai tersebut
    screenshoot sangat dibutuhkan
  - lead engineer silahkan langsung merge pull request yang dibuat    
- Review :
  - wewenang software tester untuk memnindahkan backlog **review** 
  - setiap 2 atau 3 hari kita akan melakukan review terhadap issue yang ada di sini, atau sesuai dengan kesepakatan
  - developer silahkan melakukan presentasi terkait dengan hasil yang sudah dicapai dengan maksimal
    waktu presentasi adalah 2 jam kepada product owner
  - apabila sudah sesuai maka silahkan close issue tersebut, jika belum sesuai maka silahkan di set ke 
    TODO kembali
- Closed :
  - Closed

## Komunikasi

- Usahakan menggunakan slack untuk day to day komunikasinya
- Apabila ada kendala terkait pengerjaan langsung saja lempar pertanyaan di slack, dan tolong usahakan
  mention ke orang yang ingin anda ajak berbicara
- Tolong scrum master selalui aware terkait dengan pertanyaan yang mungkin tertelan

## Tips

- Sisa waktu yang terdapat setelah pelaksanaan SPM dapat digunakan untuk melakukan koordinasi terkait dengan plan 
  untuk pengerjaan projek seperti apa, dengan melakukan kegiatan sebagai berikut:
  - secara bersama-sama membuat user journey/flow chart kasar tentang tata cara mekanisme sistem bekerja
  - melakukan validasi terkait dengan user journey tersebut secara bersama-sama
  - menuangkan user journey tersebut dalam dokumen yang nantinya dijadikan sebagai acuan bersama
- Jangan hanya menunggu daily standup untuk saling berkomunikasi, gunakan waktu sebelum daily standup untuk saling
  berkomunikasi dan bertukar pikiran
- Terkait dengan teknologi/tool yang dipakai, usahakan untuk melakukan diskusi kepada tim

Khusus Design Sprint:

- Di hari pertama semua orang dalam tim wajib :
  - melakukan kerja bersama-sama dengan waktu maksimal sesuai waktu daily scrum
  - melakukan co creation kecil-kecilan untuk membuat UX dari user journey yang sudah dibuat
  - product owner memberikan panduan dan arahan terkait ketercapaiannya UX di proses ini sehingga bisa digunakan untuk 
    daily scrum berikutnya
  - role UI sangat dianjurkan untuk membantu role UX dalam pembuatan UX prototipe dengan arahan role UX tentunya
  - developer memberikan saran dan masukan terkait dengan UX yang dibuat apakah dimungkinkan untuk dilakukan implementasi
    apa tidak
  - harapannya UX design itu sudah selesai semua di hari pertama
- Di hari kedua dan seterusnya
  - role UX sangat dianjurkan untuk membantu role UI dalam melakukan design UI dengan arahan role UI, tentunya kalau 
    pekerjaan UX sudah selesai dikerjakan
- Jangan jadikan role sebagai limitasi kamu untuk belajar diluar role yang saat ini kamu dapatkan
- Jadikan project ini sebagai cara untuk meningkatkan kepercayaan tim terhadap kamu, karena di akhir project akan ada
  feedback dari masing-masing individu terhadap pekerjaan kamu selama project ini berlangsung.

> Kata Labtek Indie
> 
> Project ini adalah projet tim bukan project perorangan, maka sukses dan tidaknya project ini tergantung dari kekompakan kamu 
> dan tim kamu untuk secara bersama-sama

## Mekanisme Development

- Silahkan di bahas oleh scrum tim
