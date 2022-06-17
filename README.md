# TUGAS DOT SPRINT 2
### Info
- Seluruh tugas sprint 1 juga  dapat di uji di project sprint 2.
- karena project ini lanjutan dari project sprint 1 tanpa mengganggu atau mengubah hasil pengerjaan sprint 1.

## Installasi
- silahkan clone repository ini dan sesuaikan pada branch (branch DOT1 untuk Sprint 1 dan DOT 2 untuk Sprint 2) 
- link (git clone --branch DOT2 https://github.com/TechHijau/DOT.git)
- kemudian ubah .env.example menjadi .env 
- selanjutnya atur koneksi database pada .env sesuai dengan database yang di buat di mysql
- kemudian jalankan "composer install" untuk menginstall defedenci
- jalankan "php artisan migrate" untuk membuat database.
- ketikkan printah "php artisan serve" untuk menjalankan

## Pengujian Sprint 1 Soal 1
- dalam soal sumber data pencarian saya membuat beberapa konfigurasi yaitu.
- dapat mengakses data dari database atau dari API dengan penambahan from di URL.
    * contoh from db
        * provinsi "http://127.0.0.1:8000/api/swap/provinces?from=db&id=2"
        * kota"http://127.0.0.1:8000/api/swap/cities?from=db&id=2" 
    * contoh from API
        * provinsi "http://127.0.0.1:8000/api/swap/provinces?from=api&id=2"
        * kota "http://127.0.0.1:8000/api/swap/cities?from=api&id=2"
- jika from bukan api atau db maka akan mengambik konfigurasi selanjutnya yaitu bila pc terkoneksi internet maka akan mengambil data API
    * contoh link saat koneksi internet hidup
        * provinsi "http://127.0.0.1:8000/api/swap/provinces?id=2"
        * kota "http://127.0.0.1:8000/api/swap/cities?id=2"
- sebagai perhatian karena soal ini terkait dengan soal nomor 2 maka untuk login terlebih dahulu dan di postment di tab authorization pastikan type = bearer token dan isi token sesuai token user saat login
