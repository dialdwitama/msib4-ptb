# Sistem Informasi PTB

Sistem Informasi Perguruan Tinggi Bermasalah (PTB) adalah sebuah sistem informasi yang digunakan untuk mengelola data
Perguran Tinggi Bermasalah dan Rekapitulasi Monev

## Step 
- Lakukan git clone https://github.com/dialdwitama/msib4-ptb
- Ketik composer install
- Copy file .env.example dan ubah menjadi .env
- Lakukan perintah php artisan:key generate
- Setelah itu ketik npm install
- Lakukan npm run build (jika ingin file tersebut bisa di akses di htdocs)
- Lakukan migrasi dengan cara php artisan migrate -seed
- Setelah itu jalankan laravel dengan php artisan serve (berbarengan dengan npm run dev)


Note :
Jika terdapat error "Unable to get the vite" tambahkan perintah ini di manifest.json

"resources/assets/images/blue.png": {
    "file": "assets/images/blue.png",
    "isEntry" : true,
    "src": "resources/assets/images/blue.png"
  },

  "resources/assets/images/LOGO-SIM.png": {
    "file": "assets/images/LOGO-SIM.png",
    "isEntry" : true,
    "src": "resources/assets/images/LOGO-SIM.png"
  }
