# Sistem Informasi PTB

Sistem Informasi Perguruan Tinggi Bermasalah (PTB) adalah sebuah sistem informasi yang digunakan untuk mengelola data
Perguran Tinggi Bermasalah dan Rekapitulasi Monev

## Step 
- Lakukan git clone https://github.com/dialdwitama/msib4-ptb
- Ketik composer install
- Setelah itu ketik npm install
- Copy file .env.example dan ubah menjadi .env
- Lakukan perintah php artisan:key generate
- Lakukan migrasi dengan cara php artisan migrate -seed
- Setelah itu jalankan laravel dengan php artisan serve (berbarengan dengan npm run dev)
