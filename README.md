# TUGAS DOT SPRINT 1
## Installasi
- silahkan clone repository ini dan sesuaikan pada branch (branch DOT1 untuk Sprint 1 dan DOT 2 untuk Sprint 2) 
- link (git clone --branch DOT1 https://github.com/TechHijau/DOT.git)
- kemudian ubah .env.example menjadi .env 
- selanjutnya atur koneksi database pada .env sesuai dengan database yang di buat di mysql
- kemudian jalankan 'composer install' untuk menginstall defedenci
- jalankan 'php artisan migrate' untuk membuat database.

## Pengujian Sprint 1 soal 1
- jalankan program dengan perintah 'php artisan serve'
- Untuk mengetahui apakah integrasi dengan API RajaOngkir sudah berhasil atau belum dapat dengan mengakses API yang sudah saya sediakan dan pastikan hasilnya sesuai yang di harapkan.
- Uji coba dapat di lakukan dengan aplikasi Postman
- API uji Provinsi 'http://127.0.0.1:8000/api/provinces' method GET
- API uji Kota  'http://127.0.0.1:8000/api/cities' method GET

## Pengujian Sprint 1 soal 2
- jalankan program dengan perintah 'php artisan serve'
- untuk memasukkan data provinsi atau kota ke dalam database dapat dengan mengetikkan perintah di termintal "php artisan insertData {provinsi/kota}"
- Provinsi "php artisan insertData provinsi"
- kota "php artisan insertData kota"
- tindakan ini akan mengganti data lama yang ada di database dengan data baru dari API RajaOngkir.
- akan muncul pertanyaan apakah setuju atas pernyataan di atas. jika setuju ketik yes maka data akan tersimpan, jika tidak setuju ketik no maka data batal disimpan
