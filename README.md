# bookapp
 
Nama : Kevin Renjiro
NIM  : 185150700111005

version 1.0.0

ABOUT
Versi pertama dari bookapp yang dapat menampilkan buku secara keseluruhan dan/atau
berdasarkan id buku tersebut


STEPS 
1. Buat project baru melalui composer
2. Buat database bookapp_lumen
3. Setting environment pada file .env
4. Uncomment fitur facade dan eloquent pada file bootstrap/app.php
5. Buat migration create_books_table
6. Buat schema pada file migration/create_books_table
7. Lakukan migrate ke database
8. Buat seeder untuk memasukkan data pertama ke dalam database pada file database/seeders/DatabaseSeeder.php
9. Lakukan seeding ke database
10. Buat model Book pada direktori app/Models
11. Buat BooksController.php pada direktori app\Http\Controllers
12. Buat route untuk memanggil BookController
13. Buat route baru lagi untuk mencari book berdasarkan id pada web.php
14. Buat method baru pada BookController
15. Jalankan projek dengan command "php -S localhost:8000 -t public"
16. Tes projek pada Postman


# # # DONE # # #