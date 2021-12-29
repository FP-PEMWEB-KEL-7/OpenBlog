<div align="center">
    <img src=".ignoreme/codeigniter.svg" height="70" alt="Open Blog">
    <h1>Open Blog</h1>
    <strong>Sebuah aplikasi blog sederhana yang menyediakan para penulis tempat untuk menulis.</strong>
</div>
<br>
<div align="center">
    <a href="https://drone-gh.zecrea.my.id/FP-PEMWEB-KEL-7/OpenBlog">
        <img src="https://drone-gh.zecrea.my.id/api/badges/FP-PEMWEB-KEL-7/OpenBlog/status.svg" alt="CI/CD">
    </a>
	<a href="https://github.com/FP-PEMWEB-KEL-7/OpenBlog/blob/master/license.txt">
        <img src="https://img.shields.io/github/license/FP-PEMWEB-KEL-7/OpenBlog" alt="License">
    </a>
</div>
<div align="center">
    <br>
    <a href="https://pemwebn.zecrea.my.id/"><b>Website</b></a>
</div>

## Jika ingin menggunakan dengan xampp (localhost)
1. Download repository ini
2. Extract file zipnya ke dalam htdocs (xampp)
3. Import `database.sql` menggunakan phpMyAdmin xampp
4. Jika folder extract tidak pada root atau htdocs-nya bercabang, maka ubah `$config['base_url'] = '';` sesuai dengan folder (extract) yang digunakan
5. Ubah `hostname`, `username`, dan `password` sesuai dengan yand di xampp. Ubahlah variabel tersebut pada file `application/config/database.php`
6. Selesai, silahkan buka browser dan lihat `localhost` atau `localhost/path`
## Cara Kontribusi
- Untuk membuat / mengubah / menghapus route, silahkan lakukan di file `application/config/routes.php`
- Untuk membuat / mengubah / menghapus logic sebuah route, silahkan lakukan di file `application/controllers/[nama_controller].php`
- Untuk melakukan interaksi dengan database, silahkan lakukan di file `application/models/[nama_model].php`

## Open diskusi
Silahkan ajukan pertanyaan ke [Discussion](https://github.com/FP-PEMWEB-KEL-7/OpenBlog/discussions) atau Grup Whatsapp

## License

This repository is licensed under the terms of the MIT license.
