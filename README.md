# LAPORAN FINAL PROJECT
# APLIKASI OPEN BLOG
## MATA KULIAH PEMROGAMAN WEB (A)

### Disusun Oleh : Kelompok 7
1. Michael Jeffry Setiawan [19081010007]
2. Nico Natanael [19081010023]
3. Muhammad Rakha Firjatullah [19081010050]
4. Abiyan Naufal Hilmi [19081010135]
5. Dimas Aditya Putra [19081010190]

# SCREENSHOT HALAMAN UTAMA
![image](https://user-images.githubusercontent.com/95847038/147682805-12affaf6-874a-4bc3-8842-a97e2504ebeb.png)

# DESKRIPSI APLIKASI
Open blog adalah sebuah website artikel blog yang ramah digunakan untuk semua kalangan usia. Dimana di dalam nya dapat menuangkan kata kata yang berasal dari sebuah ide kreatifitas dengan tampilan web yang user friendly dan juga melihat artikel artikel yang menarik untuk dibaca.

# SITEMAP
![image](https://user-images.githubusercontent.com/95756766/147681350-15870519-685b-40ce-bde1-a7d5daf7fa3d.png)

# PENJELASAN SITEMAP
-> Pada Home Page, pengguna bisa mengakses/menuju ke Home Page, Login, dan Sign Up.<br>
-> Selanjutnya, saat berada di home page juga dapat Melihat Semua Artikel, dan Membaca Artikel Pilihan.<br>
-> Saat pengguna selesai melakukan Login atau Sign Up, akan menuju ke halaman Home Login.<br>
-> Pada Home Login pengguna dapat mengakses Log Out, Membaca Artikel Pilihan, Membaca Artikel, Update Profil, Update Artikel, dan Melihat Artikel yang Telah Ditulis<br>

# TEKNOLOGI YANG DIGUNAKAN
### CI3
Codeigniter 3 merupakan salah satu Framework PHP kuat dan tahan lama yang sangat populer dengan menggunakan Konsep MVC dan sering digunakan oleh developer dan komunitas di seluruh penjuru dunia. Dengan menggunakan Framework ini pula kita tidak akan terlalu kesulitan mencari tutorial yang membahas framework ini karena Developer Codeigniter 3 sudah menyediakan dokumentasi secara lengkap atau Table of Content yang bisa kalian lihat di User Guide.

### JSON
JavaScript object notation atau JSON adalah format yang digunakan untuk menyimpan dan mentransfer data.

Berbeda dengan XML (extensive markup language) dan format lainnya yang memiliki fungsi serupa, JSON memiliki struktur data yang sederhana dan mudah dipahami. File tersebut biasanya lebih simpel sekaligus lebih ringan dan file ini merupakan alternatif dari XML (Extensive Markup Language) yang memiliki fungsi sama seperti JSON.

### CSS
CSS adalah kepanjangaan dari Cascading Style Sheets yang berguna untuk menyederhanakan proses pembuatan website dengan mengatur elemen yang tertulis di bahasa markup.

CSS dipakai untuk mendesain halaman depan atau tampilan website (front end). CSS menangani tampilan dan ‘rasa’ dari halaman website.

### SCSS
SCSS atau Sassy CSS adalah sintaks terbaru dari SASS (Syntactically Awesome Style Sheets). SASS sendiri adalah preprocessor CSS, yaitu sebuah program untuk mengolah data menggunakan syntax tertentu dengan output CSS.

SCSS banyak digunakan karena memiliki aturan penulisan yang lebih ramah bagi developer. Selain itu, banyak fitur yang ditawarkan agar coding jadi lebih efisien. Jadi, Anda tak perlu berulang kali menulis kode yang sama seperti ketika coding dengan CSS.

### MARIA DB
MariaDB adalah relational database management system (DBMS) open source yang merupakan pengganti drop-in yang kompatibel. MariaDB adalah pengganti dari MySQL. Dengan kata lain, MariaDB merupakan pengganti MySQL yang ditingkatkan dan drop-in.

# CARA PENGGUNAAN APLIKASI
Sesuai dengan deskripsi aplikasi diawal, website ini berisi artikel artikel dimana user juga dapat membuat artikel secara pribadi dan dipublikasikan. 

#### SEBELUM LOGIN
Pada tahap awal sebelum login, user akan diperlihatkan dengan website yang sederhana, namun memanjakan mata.
Disini user akan diperlihatkan beberapa artikel yang telah tersedia . Namun, pengguna yang belum login tidak dapat membuat artikel, dapat langsung menuju fitur sign up, dan melukan login.
Untuk about, login dan sign up, terletak pada bagian kanan atas website. Jika kita menekan logo OpenBlog maka akan menuju ke tampilan home. User juga dapat melihat perancang website OpenBlog dengan menekan About, yang terletak pada navigation.
#### SETELAH LOGIN
Pada tahap selanjutnya, user kita asumsikan telah melakukan tahap login. Disini cara penggunaan aplikasi tidak jauh berbeda saat user belum melakukan login. Yang berbeda hanya user dapat melakukan penulisan artikel dan diposting. User juga dapat melihat halaman profil yang terletak di foto profil bagian atas kanan. Pada foto profil bagian kanan atas juga terdapat fitur sign out. Untuk melakukan penulisan artikel terletak pada logo (+(plus)) yang terletak pada kiri foto profil.

## FITUR WEBSITE SEBELUM LOGIN

#### 1. Navigation
Pada Navigation terdapat fitur home, sign in, dan sign up.

Untuk fitur home sendiri terletak pada logo OpenBlog. Jika kita menekan logo OpenBlog maka akan menuju ke halaman home.

Untuk fitur sign in terletak pada kanan atas navigation. Dimana jika kita menekan-nya akan menuju ke halaman sign in. User akan mengisi email dan password yang telah dibuat saat sign up.

Untuk fitur sign up terletak disamping kanan sign in, dengan nama 'Get Started'. Jika kita menekan-nya makan akan menuju ke halaman sign up, user diharapkan menisi email dan password.

#### 2. Header
Pada header website terdapat tampilan sederhana, yang mana didalam nya terdapat kalimat 'Start Writing'. Jika user menekan-nya, user akan langsung menuju halaman login.

#### 3. Body
Pada body website terdapat tampilan artikel artikel yang telah dibuat oleh user. Dan terdapat search bar untuk mencari artikel.

#### 4. Halaman Postingan
Pada halaman ini user melihat isi artikel yang telah dipilih untuk dibaca. Terdapat penulis, dan juga foto artikel.

## FITUR WEBSITE SETELAH LOGIN
#### 1. Navigation
Berbeda dengan navigation sebelum login. Pada saat user melewati tahapan login. Tampilan navigation akan berubah warna, terdapat foto profil, dan juga logo (+).
Pada foto profil dapat ditekan dan menampilkan markdown yang berisi setting, dan juga sign out.
Jika kita ingin menulis artikel dapat menekan logo (+). Sama halnya dengan navigation pada saat user belum login, logo OpenBlog jika ditekan akan menuju ke halaman home.
#### 2. Setting
Pada halaman setting terdapat fitur untuk mengganti foto profil, nama, dan juga password.
#### 3. Body
Untuk body website OpenBlog berisi artikel artikel yang user telah buat. Dan dapat dilihat dengan menekan judul artikel.
#### 4. Halaman Postingan
Pada halaman ini user melihat isi artikel yang telah dipilih untuk dibaca. Terdapat penulis, dan juga foto artikel.
#### 5. Halaman Write Artikel
Pada halaman ini, user akan mengisi foto artikel, judul artikel, dan isi artikel. Jika telah selesai, menekan tombol submit.

# SOURCE CODE DAN PENJELASAN


