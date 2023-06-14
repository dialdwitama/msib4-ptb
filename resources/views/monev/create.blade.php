<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambahkan Data Monev
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-10">
        <!-- Form -->
        <form class="bg-white p-5 rounded-md" action="{{route('monevs.store')}}" method="POST">
            @csrf
            <div class="grid gap-2 lg:gap-5">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="kode"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Kode</label>
                        <input type="text" name="kode" id="kode"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="nama_pt"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Nama PT</label>
                        <select name="nama_pt" id="nama_pt"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                               <option value="pilih">-----Silahkan pilih-----</option>
                               <option value="Akademi Kebidanan Bunda Auni Bogor">Akademi Kebidanan Bunda Auni Bogor</option>
<option value="Akademi Kebidanan Citama Raya Depok">Akademi Kebidanan Citama Raya Depok</option>
<option value="Akademi Kebidanan Farmako Husada Al-Muctari Bogor">Akademi Kebidanan Farmako Husada Al-Muctari Bogor</option>
<option value="Akademi Kebidanan Gema Nusantara Bekasi">Akademi Kebidanan Gema Nusantara Bekasi</option>
<option value="Akademi Kebidanan Graha Husada Cirebon">Akademi Kebidanan Graha Husada Cirebon</option>
<option value="Akademi Kebidanan Isma Husada Cirebon">Akademi Kebidanan Isma Husada Cirebon</option>
<option value="Akademi Kebidanan Karya Bunda Husada">Akademi Kebidanan Karya Bunda Husada</option>
<option value="Akademi Kebidanan Medica Obgin">Akademi Kebidanan Medica Obgin</option>
<option value="Akademi Kebidanan Prima Husada Bogor">Akademi Kebidanan Prima Husada Bogor</option>
<option value="Akademi Kebidanan Sayid Sabiq Indramayu">Akademi Kebidanan Sayid Sabiq Indramayu</option>
<option value="Akademi Kebidanan Sentra Bina Yudistira Tangerang">Akademi Kebidanan Sentra Bina Yudistira Tangerang</option>
<option value="Akademi Kebidanan Suka Wangi Bekasi">Akademi Kebidanan Suka Wangi Bekasi</option>
<option value="Akademi Kebidanan Wijaya Husada">Akademi Kebidanan Wijaya Husada</option>
<option value="Akademi Kebidanan Yayasan Husada Madani">Akademi Kebidanan Yayasan Husada Madani</option>
<option value="Akademi Keperawatan Al-Ikhlas Cisarua">Akademi Keperawatan Al-Ikhlas Cisarua</option>
<option value="Akademi Keperawatan Buntet Pesantren">Akademi Keperawatan Buntet Pesantren</option>
<option value="Akademi Keperawatan Dharma Husada Cirebon">Akademi Keperawatan Dharma Husada Cirebon</option>
<option value="Akademi Keperawatan Kebonjati">Akademi Keperawatan Kebonjati</option>
<option value="Akademi Keperawatan RS Efarina">Akademi Keperawatan RS Efarina</option>
<option value="Akademi Keperawatan Yatna Yuana Lebak">Akademi Keperawatan Yatna Yuana Lebak</option>
<option value="Akademi Keperawatan YPIB Majalengka">Akademi Keperawatan YPIB Majalengka</option>
<option value="Akademi Keuangan dan Bisnis Indonesia Internasional">Akademi Keuangan dan Bisnis Indonesia Internasional</option>
<option value="Akademi Komunitas Insan Tazakka">Akademi Komunitas Insan Tazakka</option>
<option value="Akademi Komunitas Multistrada">Akademi Komunitas Multistrada</option>
<option value="Akademi Komunitas Presiden">Akademi Komunitas Presiden</option>
<option value="Akademi Komunitas Qurrota Ayun">Akademi Komunitas Qurrota Ayun</option>
<option value="Akademi Komunitas Toyota Indonesia">Akademi Komunitas Toyota Indonesia</option>
<option value="Akademi Manajemen Informatika dan Komputer Citra Buana Indonesia">Akademi Manajemen Informatika dan Komputer Citra Buana Indonesia</option>
<option value="Akademi Manajemen Informatika Dan Komputer Garut">Akademi Manajemen Informatika Dan Komputer Garut</option>
<option value="Akademi Manajemen Informatika dan Komputer Mapan Tangerang">Akademi Manajemen Informatika dan Komputer Mapan Tangerang</option>
<option value="Akademi Manajemen Informatika dan Komputer Pakarti Luhur">Akademi Manajemen Informatika dan Komputer Pakarti Luhur</option>
<option value="Akademi Manajemen Informatika dan Komputer Purnama Niaga">Akademi Manajemen Informatika dan Komputer Purnama Niaga</option>
<option value="Akademi Manajemen Informatika Dan Komputer Serang">Akademi Manajemen Informatika Dan Komputer Serang</option>
<option value="Akademi Manajemen Informatika Dan Komputer YPAT">Akademi Manajemen Informatika Dan Komputer YPAT</option>
<option value="Akademi Manajemen Informtika dan Komputer Wahana Mandiri Tangerang">Akademi Manajemen Informtika dan Komputer Wahana Mandiri Tangerang</option>
<option value="Akademi Maritim Cirebon">Akademi Maritim Cirebon</option>
<option value="Akademi Maritim Suaka Bahari">Akademi Maritim Suaka Bahari</option>
<option value="Akademi Pariwisata Bandung">Akademi Pariwisata Bandung</option>
<option value="Akademi Pariwisata BSI Bandung">Akademi Pariwisata BSI Bandung</option>
<option value="Akademi Pariwisata Citra Buana Indonesia">Akademi Pariwisata Citra Buana Indonesia</option>
<option value="Akademi Pariwisata Nasional Indonesia Bandung">Akademi Pariwisata Nasional Indonesia Bandung</option>
<option value="Akademi Pariwisata NHI Bandung">Akademi Pariwisata NHI Bandung</option>
<option value="Akademi Pariwisata Nusantara Tangerang">Akademi Pariwisata Nusantara Tangerang</option>
<option value="Akademi Pariwisata Siliwangi">Akademi Pariwisata Siliwangi</option>
<option value="Akademi Pariwisata Tunas Nusantara Mandiri">Akademi Pariwisata Tunas Nusantara Mandiri</option>
<option value="Akademi Pariwisata Yasmi">Akademi Pariwisata Yasmi</option>
<option value="Akademi Perdagangan Bandung">Akademi Perdagangan Bandung</option>
<option value="Akademi Perhotelan Tunas Indonesia">Akademi Perhotelan Tunas Indonesia</option>
<option value="Akademi Perpajakan Maria Mediatrix">Akademi Perpajakan Maria Mediatrix</option>
<option value="Akademi Perpajakan Padang Bekasi">Akademi Perpajakan Padang Bekasi</option>
<option value="Akademi Radiognostik Dan Radioterapi Yapenpernus">Akademi Radiognostik Dan Radioterapi Yapenpernus</option>
<option value="Akademi Sekretari Dan Manajemen Ariyanti">Akademi Sekretari Dan Manajemen Ariyanti</option>
<option value="Akademi Sekretari Dan Manajemen Insulindo">Akademi Sekretari Dan Manajemen Insulindo</option>
<option value="Akademi Sekretari Dan Manajemen Kencana Bandung">Akademi Sekretari Dan Manajemen Kencana Bandung</option>
<option value="Akademi Sekretari Manajemen Taruna Bakti">Akademi Sekretari Manajemen Taruna Bakti</option>
<option value="Akademi Sekretari Triguna">Akademi Sekretari Triguna</option>
<option value="Akademi Tata Boga Bandung">Akademi Tata Boga Bandung</option>
<option value="Akademi Teknologi Aeronautika Siliwangi">Akademi Teknologi Aeronautika Siliwangi</option>
<option value="Akademi Teknologi Bandung">Akademi Teknologi Bandung</option>
<option value="Akademi Teknologi Bogor">Akademi Teknologi Bogor</option>
<option value="Akademi Telekomunikasi Bogor">Akademi Telekomunikasi Bogor</option>
<option value="Akademi Telekomunikasi Nusantara">Akademi Telekomunikasi Nusantara</option>
<option value="AMIK Bumi Nusantara">AMIK Bumi Nusantara</option>
<option value="AMIK Sultan Agung">AMIK Sultan Agung</option>
<option value="AMIK Wira Nusantara">AMIK Wira Nusantara</option>
<option value="Institut Bisnis dan Informatika Kesatuan">Institut Bisnis dan Informatika Kesatuan</option>
<option value="Institut Bisnis Muhammadiyah Bekasi">Institut Bisnis Muhammadiyah Bekasi</option>
<option value="Institut Budi Utomo Nasional">Institut Budi Utomo Nasional</option>
<option value="Institut Digital Ekonomi LPKIA">Institut Digital Ekonomi LPKIA</option>
<option value="Institut Keguruan dan Ilmu Pendidikan Siliwangi">Institut Keguruan dan Ilmu Pendidikan Siliwangi</option>
<option value="Institut Kesehatan dan Bisnis Annisa">Institut Kesehatan dan Bisnis Annisa</option>
<option value="Institut Kesehatan Immanuel">Institut Kesehatan Immanuel</option>
<option value="Institut Kesehatan Rajawali">Institut Kesehatan Rajawali</option>
<option value="Institut Manajemen Wiyata Indonesia">Institut Manajemen Wiyata Indonesia</option>
<option value="Institut Pendidikan dan Bahasa Invada">Institut Pendidikan dan Bahasa Invada</option>
<option value="Institut Pendidikan Indonesia Garut">Institut Pendidikan Indonesia Garut</option>
<option value="Institut Teknologi Al-Muhajirin">Institut Teknologi Al-Muhajirin</option>
<option value="Institut Teknologi dan Bisnis Banten">Institut Teknologi dan Bisnis Banten</option>
<option value="Institut Teknologi Dan Bisnis Bina Sarana Global">Institut Teknologi Dan Bisnis Bina Sarana Global</option>
<option value="Institut Teknologi dan Bisnis Riyadlul Ulum">Institut Teknologi dan Bisnis Riyadlul Ulum</option>
<option value="Institut Teknologi dan Bisnis Visi Nusantara Bogor">Institut Teknologi dan Bisnis Visi Nusantara Bogor</option>
<option value="Institut Teknologi dan Kesehatan Mahardika">Institut Teknologi dan Kesehatan Mahardika</option>
<option value="Institut Teknologi Garut">Institut Teknologi Garut</option>
<option value="Institut Teknologi Harapan Bangsa">Institut Teknologi Harapan Bangsa</option>
<option value="Institut Teknologi Nasional Bandung">Institut Teknologi Nasional Bandung</option>
<option value="Institut Teknologi Petroleum Balongan">Institut Teknologi Petroleum Balongan</option>
<option value="Institut Teknologi Sains Bandung">Institut Teknologi Sains Bandung</option>
<option value="Institut Teknologi Tangerang Selatan">Institut Teknologi Tangerang Selatan</option>
<option value="Monash University Indonesia">Monash University Indonesia</option>
<option value="Politeknik Agroindustri">Politeknik Agroindustri</option>
<option value="Politeknik Al-Islam Bandung">Politeknik Al-Islam Bandung</option>
<option value="Politeknik Bhakti Asih Purwakarta">Politeknik Bhakti Asih Purwakarta</option>
<option value="Politeknik Bhakti Kartini">Politeknik Bhakti Kartini</option>
<option value="Politeknik Bina Budaya Cipta">Politeknik Bina Budaya Cipta</option>
<option value="Politeknik Bina Madani">Politeknik Bina Madani</option>
<option value="Politeknik Bisnis Mayasari">Politeknik Bisnis Mayasari</option>
<option value="Politeknik Digital Boash Indonesia">Politeknik Digital Boash Indonesia</option>
<option value="Politeknik Enjinering Indorama">Politeknik Enjinering Indorama</option>
<option value="Politeknik Gajah Tunggal">Politeknik Gajah Tunggal</option>
<option value="Politeknik Geologi Dan Pertambangan AGP">Politeknik Geologi Dan Pertambangan AGP</option>
<option value="Politeknik Gunakarya Indonesia Bekasi">Politeknik Gunakarya Indonesia Bekasi</option>
<option value="Politeknik IDN Bogor">Politeknik IDN Bogor</option>
<option value="Politeknik Industri ATMI">Politeknik Industri ATMI</option>
<option value="Politeknik Istikom Bina Citra Informatika">Politeknik Istikom Bina Citra Informatika</option>
<option value="Politeknik Kelapa Sawit Citra Widya Edukasi">Politeknik Kelapa Sawit Citra Widya Edukasi</option>
<option value="Politeknik Kent">Politeknik Kent</option>
<option value="Politeknik Kepribadian">Politeknik Kepribadian</option>
<option value="Politeknik Kesehatan Aisyiyah Banten">Politeknik Kesehatan Aisyiyah Banten</option>
<option value="Politeknik Kesehatan Bhakti Pertiwi Husada">Politeknik Kesehatan Bhakti Pertiwi Husada</option>
<option value="Politeknik Kesehatan Genesis Medicare">Politeknik Kesehatan Genesis Medicare</option>
<option value="Politeknik Kesehatan KMC Kuningan">Politeknik Kesehatan KMC Kuningan</option>
<option value="Politeknik Kesehatan TNI-AU Ciumbuleuit">Politeknik Kesehatan TNI-AU Ciumbuleuit</option>
<option value="Politeknik Kesehatan YBA Bandung">Politeknik Kesehatan YBA Bandung</option>
<option value="Politeknik Krakatau">Politeknik Krakatau</option>
<option value="Politeknik Lembaga Pendidikan dan Pengembangan Profesi Indonesia">Politeknik Lembaga Pendidikan dan Pengembangan Profesi Indonesia</option>
<option value="Politeknik Maritim Eka Utama Subang">Politeknik Maritim Eka Utama Subang</option>
<option value="Politeknik Merdeka Belajar Indonesia">Politeknik Merdeka Belajar Indonesia</option>
<option value="Politeknik Meta Industri Cikarang">Politeknik Meta Industri Cikarang</option>
<option value="Politeknik Pajajaran Insan Cinta Bangsa Bandung">Politeknik Pajajaran Insan Cinta Bangsa Bandung</option>
<option value="Politeknik Pariwisata Prima Internasional">Politeknik Pariwisata Prima Internasional</option>
<option value="Politeknik Perdana Mandiri">Politeknik Perdana Mandiri</option>
<option value="Politeknik PGRI Banten">Politeknik PGRI Banten</option>
<option value="Politeknik Piksi Ganesha">Politeknik Piksi Ganesha</option>
<option value="Politeknik Piksi Input Serang">Politeknik Piksi Input Serang</option>
<option value="Politeknik Praktisi Bandung">Politeknik Praktisi Bandung</option>
<option value="Politeknik Sains Seni Rekakreasi">Politeknik Sains Seni Rekakreasi</option>
<option value="Politeknik Siber Cerdika Internasional">Politeknik Siber Cerdika Internasional</option>
<option value="Politeknik Sukabumi">Politeknik Sukabumi</option>
<option value="Politeknik Takumi">Politeknik Takumi</option>
<option value="Politeknik TEDC">Politeknik TEDC</option>
<option value="Politeknik Tiara Bunda">Politeknik Tiara Bunda</option>
<option value="Politeknik TMKM">Politeknik TMKM</option>
<option value="Politeknik Triguna Tasikmalaya">Politeknik Triguna Tasikmalaya</option>
<option value="Politeknik Tunas Pemuda">Politeknik Tunas Pemuda</option>
<option value="Politeknik Yusuf Mansur Indonesia">Politeknik Yusuf Mansur Indonesia</option>
<option value="Politeknik Zanjabila Banten">Politeknik Zanjabila Banten</option>
<option value="Politenik Kesehatan Yapkesbi Sukabumi">Politenik Kesehatan Yapkesbi Sukabumi</option>
<option value="Sekolah Tinggi Analis Bakti Asih">Sekolah Tinggi Analis Bakti Asih</option>
<option value="Sekolah Tinggi Analis Kimia Cilegon">Sekolah Tinggi Analis Kimia Cilegon</option>
<option value="Sekolah Tinggi Bahasa Asing Bina Dinamika Cianjur">Sekolah Tinggi Bahasa Asing Bina Dinamika Cianjur</option>
<option value="Sekolah Tinggi Bahasa Asing Cipto Hadi Pranoto">Sekolah Tinggi Bahasa Asing Cipto Hadi Pranoto</option>
<option value="Sekolah Tinggi Bahasa Asing IEC Bekasi">Sekolah Tinggi Bahasa Asing IEC Bekasi</option>
<option value="Sekolah Tinggi Bahasa Asing JIA">Sekolah Tinggi Bahasa Asing JIA</option>
<option value="Sekolah Tinggi Bahasa Asing Technocrat">Sekolah Tinggi Bahasa Asing Technocrat</option>
<option value="Sekolah Tinggi Bahasa Asing Yapari">Sekolah Tinggi Bahasa Asing Yapari</option>
<option value="Sekolah Tinggi Desain Indonesia Bandung">Sekolah Tinggi Desain Indonesia Bandung</option>
<option value="Sekolah Tinggi Farmasi Indonesia Bandung">Sekolah Tinggi Farmasi Indonesia Bandung</option>
<option value="Sekolah Tinggi Farmasi Muhammadiyah Cirebon">Sekolah Tinggi Farmasi Muhammadiyah Cirebon</option>
<option value="Sekolah Tinggi Hukum Bandung">Sekolah Tinggi Hukum Bandung</option>
<option value="Sekolah Tinggi Hukum Galunggung">Sekolah Tinggi Hukum Galunggung</option>
<option value="Sekolah Tinggi Hukum Garut">Sekolah Tinggi Hukum Garut</option>
<option value="Sekolah Tinggi Hukum Pasundan">Sekolah Tinggi Hukum Pasundan</option>
<option value="Sekolah Tinggi Ilmu Administrasi Bagasasi">Sekolah Tinggi Ilmu Administrasi Bagasasi</option>
<option value="Sekolah Tinggi Ilmu Administrasi Bandung">Sekolah Tinggi Ilmu Administrasi Bandung</option>
<option value="Sekolah Tinggi Ilmu Administrasi Banten">Sekolah Tinggi Ilmu Administrasi Banten</option>
<option value="Sekolah Tinggi Ilmu Administrasi Cimahi">Sekolah Tinggi Ilmu Administrasi Cimahi</option>
<option value="Sekolah Tinggi Ilmu Administrasi Maulana Yusuf">Sekolah Tinggi Ilmu Administrasi Maulana Yusuf</option>
<option value="Sekolah Tinggi Ilmu Administrasi Menarasiswa">Sekolah Tinggi Ilmu Administrasi Menarasiswa</option>
<option value="Sekolah Tinggi Ilmu Administrasi Sandikta">Sekolah Tinggi Ilmu Administrasi Sandikta</option>
<option value="Sekolah Tinggi Ilmu Administrasi YPPT Tasikmalaya">Sekolah Tinggi Ilmu Administrasi YPPT Tasikmalaya</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Bisnis Internasional Indonesia">Sekolah Tinggi Ilmu Ekonomi Bisnis Internasional Indonesia</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Bisnis Perdana Mandiri">Sekolah Tinggi Ilmu Ekonomi Bisnis Perdana Mandiri</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Budi Pertiwi">Sekolah Tinggi Ilmu Ekonomi Budi Pertiwi</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Cirebon">Sekolah Tinggi Ilmu Ekonomi Cirebon</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Dewantara">Sekolah Tinggi Ilmu Ekonomi Dewantara</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Dharma Agung Indonesia">Sekolah Tinggi Ilmu Ekonomi Dharma Agung Indonesia</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Dharma Negara">Sekolah Tinggi Ilmu Ekonomi Dharma Negara</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Dr Kh Ez Muttaqien">Sekolah Tinggi Ilmu Ekonomi Dr Kh Ez Muttaqien</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Dwimulya">Sekolah Tinggi Ilmu Ekonomi Dwimulya</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Ekadharma Indonesia">Sekolah Tinggi Ilmu Ekonomi Ekadharma Indonesia</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Ekuitas">Sekolah Tinggi Ilmu Ekonomi Ekuitas</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Fajar">Sekolah Tinggi Ilmu Ekonomi Fajar</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Gema Widya Bangsa">Sekolah Tinggi Ilmu Ekonomi Gema Widya Bangsa</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Gici">Sekolah Tinggi Ilmu Ekonomi Gici</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Harapan Bangsa">Sekolah Tinggi Ilmu Ekonomi Harapan Bangsa</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Hidayatullah Depok">Sekolah Tinggi Ilmu Ekonomi Hidayatullah Depok</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Kalpataru">Sekolah Tinggi Ilmu Ekonomi Kalpataru</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Latifah Mubarokiyah">Sekolah Tinggi Ilmu Ekonomi Latifah Mubarokiyah</option>
<option value="Sekolah Tinggi ilmu Ekonomi Manajemen Bisnis Indonesia">Sekolah Tinggi ilmu Ekonomi Manajemen Bisnis Indonesia</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Miftahul Huda Subang">Sekolah Tinggi Ilmu Ekonomi Miftahul Huda Subang</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Mulia Pratama">Sekolah Tinggi Ilmu Ekonomi Mulia Pratama</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Pandu Madania">Sekolah Tinggi Ilmu Ekonomi Pandu Madania</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Paripurna">Sekolah Tinggi Ilmu Ekonomi Paripurna</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Pariwisata YAPARI">Sekolah Tinggi Ilmu Ekonomi Pariwisata YAPARI</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Pasundan">Sekolah Tinggi Ilmu Ekonomi Pasundan</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Pengembangan Sistem Informasi Manajemen (Pasim)">Sekolah Tinggi Ilmu Ekonomi Pengembangan Sistem Informasi Manajemen (Pasim)</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Ppi">Sekolah Tinggi Ilmu Ekonomi Ppi</option>
<option value="Sekolah Tinggi Ilmu Ekonomi STAN IM">Sekolah Tinggi Ilmu Ekonomi STAN IM</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Sutaatmadja">Sekolah Tinggi Ilmu Ekonomi Sutaatmadja</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Tri Bhakti">Sekolah Tinggi Ilmu Ekonomi Tri Bhakti</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Tribuana Tambun">Sekolah Tinggi Ilmu Ekonomi Tribuana Tambun</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Triguna">Sekolah Tinggi Ilmu Ekonomi Triguna</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Wibawa Karta Raharja">Sekolah Tinggi Ilmu Ekonomi Wibawa Karta Raharja</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Yasa Anggana">Sekolah Tinggi Ilmu Ekonomi Yasa Anggana</option>
<option value="Sekolah Tinggi Ilmu Ekonomi Yasmi">Sekolah Tinggi Ilmu Ekonomi Yasmi</option>
<option value="Sekolah Tinggi Ilmu Ekonomi YP-Karya">Sekolah Tinggi Ilmu Ekonomi YP-Karya</option>
<option value="Sekolah Tinggi Ilmu Ekonomi YPN">Sekolah Tinggi Ilmu Ekonomi YPN</option>
<option value="Sekolah Tinggi Ilmu Hukum dan Politik Pelopor Bangsa">Sekolah Tinggi Ilmu Hukum dan Politik Pelopor Bangsa</option>
<option value="Sekolah Tinggi Ilmu Hukum Dharma Andhiga">Sekolah Tinggi Ilmu Hukum Dharma Andhiga</option>
<option value="Sekolah Tinggi Ilmu Hukum Gunung Jati">Sekolah Tinggi Ilmu Hukum Gunung Jati</option>
<option value="Sekolah Tinggi Ilmu Hukum Painan">Sekolah Tinggi Ilmu Hukum Painan</option>
<option value="Sekolah Tinggi Ilmu Keperawatan PPNI Jawa Barat">Sekolah Tinggi Ilmu Keperawatan PPNI Jawa Barat</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Ahmad Dahlan">Sekolah Tinggi Ilmu Kesehatan Ahmad Dahlan</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Aksari">Sekolah Tinggi Ilmu Kesehatan Aksari</option>
<option value="Sekolah Tinggi Ilmu Kesehatan An Nasher Cirebon">Sekolah Tinggi Ilmu Kesehatan An Nasher Cirebon</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Banten">Sekolah Tinggi Ilmu Kesehatan Banten</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Bhakti Husada Cikarang">Sekolah Tinggi Ilmu Kesehatan Bhakti Husada Cikarang</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Bina Putra Banjar">Sekolah Tinggi Ilmu Kesehatan Bina Putra Banjar</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Bogor Husada">Sekolah Tinggi Ilmu Kesehatan Bogor Husada</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Budhi Luhur Cimahi">Sekolah Tinggi Ilmu Kesehatan Budhi Luhur Cimahi</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Cianjur">Sekolah Tinggi Ilmu Kesehatan Cianjur</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Cirebon">Sekolah Tinggi Ilmu Kesehatan Cirebon</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Dharma Husada">Sekolah Tinggi Ilmu Kesehatan Dharma Husada</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Faathir Husada">Sekolah Tinggi Ilmu Kesehatan Faathir Husada</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Holistik">Sekolah Tinggi Ilmu Kesehatan Holistik</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Horizon Karawang">Sekolah Tinggi Ilmu Kesehatan Horizon Karawang</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Indramayu">Sekolah Tinggi Ilmu Kesehatan Indramayu</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Karsa Husada Garut">Sekolah Tinggi Ilmu Kesehatan Karsa Husada Garut</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Khas Kempek">Sekolah Tinggi Ilmu Kesehatan Khas Kempek</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Kuningan">Sekolah Tinggi Ilmu Kesehatan Kuningan</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Lenggogeni">Sekolah Tinggi Ilmu Kesehatan Lenggogeni</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Ciamis">Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Ciamis</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Cirebon">Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Cirebon</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Kuningan">Sekolah Tinggi Ilmu Kesehatan Muhammadiyah Kuningan</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Pelita Ilmu Depok">Sekolah Tinggi Ilmu Kesehatan Pelita Ilmu Depok</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Permata Nusantara">Sekolah Tinggi Ilmu Kesehatan Permata Nusantara</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Prima Indonesia">Sekolah Tinggi Ilmu Kesehatan Prima Indonesia</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Respati">Sekolah Tinggi Ilmu Kesehatan Respati</option>
<option value="Sekolah Tinggi Ilmu Kesehatan RS Dustira">Sekolah Tinggi Ilmu Kesehatan RS Dustira</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Salsabila Serang">Sekolah Tinggi Ilmu Kesehatan Salsabila Serang</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Santo Borromeus">Sekolah Tinggi Ilmu Kesehatan Santo Borromeus</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Sukabumi">Sekolah Tinggi Ilmu Kesehatan Sukabumi</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Widya Dharma Husada Tangerang">Sekolah Tinggi Ilmu Kesehatan Widya Dharma Husada Tangerang</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Wijaya Husada Bogor">Sekolah Tinggi Ilmu Kesehatan Wijaya Husada Bogor</option>
<option value="Sekolah Tinggi Ilmu Kesehatan Yayasan Lembaga Pendidikan Prada">Sekolah Tinggi Ilmu Kesehatan Yayasan Lembaga Pendidikan Prada</option>
<option value="Sekolah Tinggi Ilmu Kesehatan YPSDMI">Sekolah Tinggi Ilmu Kesehatan YPSDMI</option>
<option value="Sekolah Tinggi Ilmu Komputer El Rahma">Sekolah Tinggi Ilmu Komputer El Rahma</option>
<option value="Sekolah Tinggi Ilmu Komputer Poltek Cirebon">Sekolah Tinggi Ilmu Komputer Poltek Cirebon</option>
<option value="Sekolah Tinggi Ilmu Komunikasi Bandung">Sekolah Tinggi Ilmu Komunikasi Bandung</option>
<option value="Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya">Sekolah Tinggi Ilmu Komunikasi Wangsa Jaya</option>
<option value="Sekolah Tinggi Ilmu Manajemen Budi Bakti">Sekolah Tinggi Ilmu Manajemen Budi Bakti</option>
<option value="Sekolah Tinggi Ilmu Sosial Dan Ilmu Politik Bekasi">Sekolah Tinggi Ilmu Sosial Dan Ilmu Politik Bekasi</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Bina Putera Banjar">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Bina Putera Banjar</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Guna Nusantara">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Guna Nusantara</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Samudera Indonesia Selatan">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Samudera Indonesia Selatan</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Syamsul Ulum">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Syamsul Ulum</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Tasikmalaya">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Tasikmalaya</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Trimasda Cilegon">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Trimasda Cilegon</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Widyapuri Mandiri">Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Widyapuri Mandiri</option>
<option value="Sekolah Tinggi Ilmu Sosial dan Ilmu Poltik Banten Raya">Sekolah Tinggi Ilmu Sosial dan Ilmu Poltik Banten Raya</option>
<option value="Sekolah Tinggi Ilmu Teknik Bina Putera Banjar">Sekolah Tinggi Ilmu Teknik Bina Putera Banjar</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Al-Amin Indramayu">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Al-Amin Indramayu</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Babunnajah Pandeglang">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Babunnajah Pandeglang</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Bina Mutiara">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Bina Mutiara</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Muhammadiyah Kuningan">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Muhammadiyah Kuningan</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Mutiara Banten">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Mutiara Banten</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nahdlatul Ulama Indramayu">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nahdlatul Ulama Indramayu</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pancakarya">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pancakarya</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pangeran Dharma Kusuma Segeran Juntinyuat Indramayu">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pangeran Dharma Kusuma Segeran Juntinyuat Indramayu</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pasundan">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pasundan</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Purwakarta">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Purwakarta</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Sinar Cendekia">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Sinar Cendekia</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Situs Banten di Serang">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Situs Banten di Serang</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Surya">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Surya</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Syekh Manshur">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Syekh Manshur</option>
<option value="Sekolah Tinggi Keguruan dan Ilmu Pendidikan Yasika">Sekolah Tinggi Keguruan dan Ilmu Pendidikan Yasika</option>
<option value="Sekolah Tinggi Kesehatan Indonesia Wirautama">Sekolah Tinggi Kesehatan Indonesia Wirautama</option>
<option value="Sekolah Tinggi Manajaemen Informatika dan Komputer Cilegon">Sekolah Tinggi Manajaemen Informatika dan Komputer Cilegon</option>
<option value="Sekolah Tinggi Manajamen Informatika dan Komputer Tulus Cendekia">Sekolah Tinggi Manajamen Informatika dan Komputer Tulus Cendekia</option>
<option value="Sekolah Tinggi Manajemen dan Ilmu Komputer Jabar">Sekolah Tinggi Manajemen dan Ilmu Komputer Jabar</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Al Muslim">Sekolah Tinggi Manajemen Informatika dan Komputer Al Muslim</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Al-Fath">Sekolah Tinggi Manajemen Informatika dan Komputer Al-Fath</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Antar Bangsa">Sekolah Tinggi Manajemen Informatika dan Komputer Antar Bangsa</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Bandung">Sekolah Tinggi Manajemen Informatika dan Komputer Bandung</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer DCI">Sekolah Tinggi Manajemen Informatika dan Komputer DCI</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Negara">Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Negara</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Putra">Sekolah Tinggi Manajemen Informatika dan Komputer Dharma Putra</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Ganesha Bandung">Sekolah Tinggi Manajemen Informatika dan Komputer Ganesha Bandung</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Horizon Karawang">Sekolah Tinggi Manajemen Informatika dan Komputer Horizon Karawang</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer IM">Sekolah Tinggi Manajemen Informatika dan Komputer IM</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer LIKMI">Sekolah Tinggi Manajemen Informatika dan Komputer LIKMI</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Mardira Indonesia">Sekolah Tinggi Manajemen Informatika dan Komputer Mardira Indonesia</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Masa Depan">Sekolah Tinggi Manajemen Informatika dan Komputer Masa Depan</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Mercusuar">Sekolah Tinggi Manajemen Informatika dan Komputer Mercusuar</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer MIC Cikarang">Sekolah Tinggi Manajemen Informatika dan Komputer MIC Cikarang</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Pamitran">Sekolah Tinggi Manajemen Informatika dan Komputer Pamitran</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer PGRI Tangerang">Sekolah Tinggi Manajemen Informatika dan Komputer PGRI Tangerang</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Pranata Indonesia">Sekolah Tinggi Manajemen Informatika dan Komputer Pranata Indonesia</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Rosma">Sekolah Tinggi Manajemen Informatika dan Komputer Rosma</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer Tasikmalaya">Sekolah Tinggi Manajemen Informatika dan Komputer Tasikmalaya</option>
<option value="Sekolah Tinggi Manajemen Informatika dan Komputer WIT Cirebon">Sekolah Tinggi Manajemen Informatika dan Komputer WIT Cirebon</option>
<option value="Sekolah Tinggi Manajemen Informatka dan Komputer IKMI Cirebon">Sekolah Tinggi Manajemen Informatka dan Komputer IKMI Cirebon</option>
<option value="Sekolah Tinggi Matematika & Ilmu Pengetahuan Alam">Sekolah Tinggi Matematika & Ilmu Pengetahuan Alam</option>
<option value="Sekolah Tinggi Pariwisata Ars Internasional">Sekolah Tinggi Pariwisata Ars Internasional</option>
<option value="Sekolah Tinggi Pariwisata Bogor">Sekolah Tinggi Pariwisata Bogor</option>
<option value="Sekolah Tinggi Pendidikan Holistik Berbasis Karakter">Sekolah Tinggi Pendidikan Holistik Berbasis Karakter</option>
<option value="Sekolah Tinggi Seni Musik Bandung">Sekolah Tinggi Seni Musik Bandung</option>
<option value="Sekolah Tinggi Teknik Karawang">Sekolah Tinggi Teknik Karawang</option>
<option value="Sekolah Tinggi Teknologi Bandung">Sekolah Tinggi Teknologi Bandung</option>
<option value="Sekolah Tinggi Teknologi Bina Tunggal">Sekolah Tinggi Teknologi Bina Tunggal</option>
<option value="Sekolah Tinggi Teknologi Cipasung">Sekolah Tinggi Teknologi Cipasung</option>
<option value="Sekolah Tinggi Teknologi Cirebon">Sekolah Tinggi Teknologi Cirebon</option>
<option value="Sekolah Tinggi Teknologi Dr Kh Ez Muttaqien">Sekolah Tinggi Teknologi Dr Kh Ez Muttaqien</option>
<option value="Sekolah Tinggi Teknologi Duta Bangsa">Sekolah Tinggi Teknologi Duta Bangsa</option>
<option value="Sekolah Tinggi Teknologi Fatahillah Cilegon">Sekolah Tinggi Teknologi Fatahillah Cilegon</option>
<option value="Sekolah Tinggi Teknologi Ilmu Komputer Insan Unggul">Sekolah Tinggi Teknologi Ilmu Komputer Insan Unggul</option>
<option value="Sekolah Tinggi Teknologi Industri dan Farmasi Bogor">Sekolah Tinggi Teknologi Industri dan Farmasi Bogor</option>
<option value="Sekolah Tinggi Teknologi Informatika Sony Sugema">Sekolah Tinggi Teknologi Informatika Sony Sugema</option>
<option value="Sekolah Tinggi Teknologi Mandala">Sekolah Tinggi Teknologi Mandala</option>
<option value="Sekolah Tinggi Teknologi Mineral Indonesia">Sekolah Tinggi Teknologi Mineral Indonesia</option>
<option value="Sekolah Tinggi Teknologi Muhammadiyah Cileungsi">Sekolah Tinggi Teknologi Muhammadiyah Cileungsi</option>
<option value="Sekolah Tinggi Teknologi Pratama Adi">Sekolah Tinggi Teknologi Pratama Adi</option>
<option value="Sekolah Tinggi Teknologi Terpadu Nurul Fikri Depok">Sekolah Tinggi Teknologi Terpadu Nurul Fikri Depok</option>
<option value="Sekolah Tinggi Teknologi Texmaco">Sekolah Tinggi Teknologi Texmaco</option>
<option value="Sekolah Tinggi Teknologi Wastukancana">Sekolah Tinggi Teknologi Wastukancana</option>
<option value="Sekolah Tinggi Teknologi YBS Internasional">Sekolah Tinggi Teknologi YBS Internasional</option>
<option value="STIKES Raflesia">STIKES Raflesia</option>
<option value="STKIP Arrahmaniyah">STKIP Arrahmaniyah</option>
<option value="STMIK AMIK Bandung">STMIK AMIK Bandung</option>
<option value="Universitas 'Aisyiyah Bandung">Universitas 'Aisyiyah Bandung</option>
<option value="Universitas 17 Agustus 1945 Cirebon">Universitas 17 Agustus 1945 Cirebon</option>
<option value="Universitas Adhirajasa Reswara Sanjaya">Universitas Adhirajasa Reswara Sanjaya</option>
<option value="Universitas Advent Indonesia">Universitas Advent Indonesia</option>
<option value="Universitas Al-Ghifari">Universitas Al-ghifari</option>
<option value="Universitas Al-Khairiyah">Universitas Al-Khairiyah</option>
<option value="Universitas Bakti Tunas Husada">Universitas Bakti Tunas Husada</option>
<option value="Universitas Bale Bandung">Universitas Bale Bandung</option>
<option value="Universitas Bani Saleh">Universitas Bani Saleh</option>
<option value="Universitas Banten">Universitas Banten</option>
<option value="Universitas Banten Jaya">Universitas Banten Jaya</option>
<option value="Universitas Bestari">Universitas Bestari</option>
<option value="Universitas Bhakti Kencana">Universitas Bhakti Kencana</option>
<option value="Universitas Bina Bangsa">Universitas Bina Bangsa</option>
<option value="Universitas Bina Insani">Universitas Bina Insani</option>
<option value="Universitas Binaniaga Indonesia">Universitas Binaniaga Indonesia</option>
<option value="Universitas Buana Perjuangan Karawang">Universitas Buana Perjuangan Karawang</option>
<option value="Universitas Buddhi Dharma">Universitas Buddhi Dharma</option>
<option value="Universitas Catur Insan Cendekia">Universitas Catur Insan Cendekia</option>
<option value="Universitas Cendekia Abditama">Universitas Cendekia Abditama</option>
<option value="Universitas Cipasung Tasikmalaya">Universitas Cipasung Tasikmalaya</option>
<option value="Universitas Djuanda">Universitas Djuanda</option>
<option value="Universitas Faletehan">Universitas Faletehan</option>
<option value="Universitas Galuh Ciamis">Universitas Galuh Ciamis</option>
<option value="Universitas Garut">Universitas Garut</option>
<option value="Universitas Global Jakarta">Universitas Global Jakarta</option>
<option value="Universitas Halim Sanusi Bandung">Universitas Halim Sanusi Bandung</option>
<option value="Universitas Ibn Khaldun">Universitas Ibn Khaldun</option>
<option value="Universitas Ichsan Satya">Universitas Ichsan Satya</option>
<option value="Universitas Indonesia Mandiri">Universitas Indonesia Mandiri</option>
<option value="Universitas Indonesia Membangun">Universitas Indonesia Membangun</option>
<option value="Universitas Informatika Dan Bisnis Indonesia">Universitas Informatika Dan Bisnis Indonesia</option>
<option value="Universitas Insan Cendekia Mandiri">Universitas Insan Cendekia Mandiri</option>
<option value="Universitas Insan Pembangunan Indonesia">Universitas Insan Pembangunan Indonesia</option>
<option value="Universitas Internasional Jakarta">Universitas Internasional Jakarta</option>
<option value="Universitas Islam 45">Universitas Islam 45</option>
<option value="Universitas Islam Al-Ihya Kuningan">Universitas Islam Al-Ihya Kuningan</option>
<option value="Universitas Islam Bandung">Universitas Islam Bandung</option>
<option value="Universitas Islam Nusantara">Universitas Islam Nusantara</option>
<option value="Universitas Islam Syekh Yusuf">Universitas Islam Syekh Yusuf</option>
<option value="Universitas Jenderal Achmad Yani">Universitas Jenderal Achmad Yani</option>
<option value="Universitas Kartamulia Purwakarta">Universitas Kartamulia Purwakarta</option>
<option value="Universitas Katolik Parahyangan">Universitas Katolik Parahyangan</option>
<option value="Universitas Kebangsaan Republik Indonesia">Universitas Kebangsaan Republik Indonesia</option>
<option value="Universitas Komputer Indonesia">Universitas Komputer Indonesia</option>
<option value="Universitas Koperasi Indonesia">Universitas Koperasi Indonesia</option>
<option value="Universitas Kristen Maranatha">Universitas Kristen Maranatha</option>
<option value="Universitas Kuningan">Universitas Kuningan</option>
<option value="Universitas La Tansa Mashiro">Universitas La Tansa Mashiro</option>
<option value="Universitas Langlangbuana">Universitas Langlangbuana</option>
<option value="Universitas Linggabuana PGRI Sukabumi">Universitas Linggabuana PGRI Sukabumi</option>
<option value="Universitas Lintas Internasional Indonesia">Universitas Lintas Internasional Indonesia</option>
<option value="Universitas Logistik dan Bisnis Internasional">Universitas Logistik dan Bisnis Internasional</option>
<option value="Universitas Ma'soem">Universitas Ma'soem</option>
<option value="Universitas Majalengka">Universitas Majalengka</option>
<option value="Universitas Mandiri">Universitas Mandiri</option>
<option value="Universitas Mangku Wiyata">Universitas Mangku Wiyata</option>
<option value="Universitas Mathla ul Anwar">Universitas Mathla ul Anwar</option>
<option value="Universitas Medika Suherman">Universitas Medika Suherman</option>
<option value="Universitas Mitra Karya">Universitas Mitra Karya</option>
<option value="Universitas Muhammadiyah A.R. Fachruddin">Universitas Muhammadiyah A.R. Fachruddin</option>
<option value="Universitas Muhammadiyah Bandung">Universitas Muhammadiyah Bandung</option>
<option value="Universitas Muhammadiyah Banten">Universitas Muhammadiyah Banten</option>
<option value="Universitas Muhammadiyah Bogor Raya">Universitas Muhammadiyah Bogor Raya</option>
<option value="Universitas Muhammadiyah Cirebon">Universitas Muhammadiyah Cirebon</option>
<option value="Universitas Muhammadiyah Sukabumi">Universitas Muhammadiyah Sukabumi</option>
<option value="Universitas Muhammadiyah Tangerang">Universitas Muhammadiyah Tangerang</option>
<option value="Universitas Muhammadiyah Tasikmalaya">Universitas Muhammadiyah Tasikmalaya</option>
<option value="Universitas Nahdlatul Ulama Cirebon">Universitas Nahdlatul Ulama Cirebon</option>
<option value="Universitas Nasional Pasim">Universitas Nasional Pasim</option>
<option value="Universitas Nurtanio Bandung">Universitas Nurtanio Bandung</option>
<option value="Universitas Nusa Bangsa">Universitas Nusa Bangsa</option>
<option value="Universitas Nusa Putra">Universitas Nusa Putra</option>
<option value="Universitas Pakuan">Universitas Pakuan</option>
<option value="Universitas Pamulang">Universitas Pamulang</option>
<option value="Universitas Panca Sakti Bekasi">Universitas Panca Sakti Bekasi</option>
<option value="Universitas Pasundan">Universitas Pasundan</option>
<option value="Universitas Pelita Bangsa">Universitas Pelita Bangsa</option>
<option value="Universitas Pembangunan Jaya">Universitas Pembangunan Jaya</option>
<option value="Universitas Perjuangan Tasikmalaya">Universitas Perjuangan Tasikmalaya</option>
<option value="Universitas Persatuan Islam">Universitas Persatuan Islam</option>
<option value="Universitas Pertiwi">Universitas Pertiwi</option>
<option value="Universitas Pramita Indonesia">Universitas Pramita Indonesia</option>
<option value="Universitas Presiden">Universitas Presiden</option>
<option value="Universitas Primagraha">Universitas Primagraha</option>
<option value="Universitas Putra Indonesia">Universitas Putra Indonesia</option>
<option value="Universitas Raharja">Universitas Raharja</option>
<option value="Universitas Sali Al-Aitaam">Universitas Sali Al-Aitaam</option>
<option value="Universitas Sangga Buana">Universitas Sangga Buana</option>
<option value="Universitas Sebelas April">Universitas Sebelas April</option>
<option value="Universitas Serang Raya">Universitas Serang Raya</option>
<option value="Universitas Setia Budhi Rangkasbitung">Universitas Setia Budhi Rangkasbitung</option>
<option value="Universitas Subang">Universitas Subang</option>
<option value="Universitas Surya">Universitas Surya</option>
<option value="Universitas Suryakancana">Universitas Suryakancana</option>
<option value="Universitas Sutomo">Universitas Sutomo</option>
<option value="Universitas Swadaya Gunung Jati">Universitas Swadaya Gunung Jati</option>
<option value="Universitas Swiss German">Universitas Swiss German</option>
<option value="Universitas Tangerang Raya">Universitas Tangerang Raya</option>
<option value="Universitas Teknologi Digital">Universitas Teknologi Digital</option>
<option value="Universitas Teknologi Nusantara Cilegon">Universitas Teknologi Nusantara Cilegon</option>
<option value="Universitas Telkom">Universitas Telkom</option>
<option value="Universitas Utpadaka Swastika">Universitas Utpadaka Swastika</option>
<option value="Universitas Wanita Internasional">Universitas Wanita Internasional</option>
<option value="Universitas Widyatama">Universitas Widyatama</option>
<option value="Universitas Winaya Mukti">Universitas Winaya Mukti</option>
<option value="Universitas Wiralodra">Universitas Wiralodra</option>
<option value="Universitas Yatsi Madani">Universitas Yatsi Madani</option>
<option value="Universitas Yayasan Pendidikan Imam Bonjol Majalengka">Universitas Yayasan Pendidikan Imam Bonjol Majalengka</option>
<option value="Universitas Yuppentek Indonesia">Universitas Yuppentek Indonesia</option>
                            </select>
</div>
                </div>
                <!-- End Grid -->

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="alamat_monev"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Alamat Monev</label>
                        <input type="text" name="alamat_monev" id="alamat_monev"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="alamat_direktori"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Alamat Direktori</label>
                        <input type="text" name="alamat_direktori" id="alamat_direktori"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="alamat_pddikti"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Alamat PDDIKTI</label>
                        <input type="text" name="alamat_pddikti" id="alamat_pddikti"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="tanggal_monev"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Tanggal Monev</label>
                        <input type="date" name="tanggal_monev" id="tanggal_monev"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>

                <div>
                    <label for="permasalahan" class="block text-sm text-gray-700 font-medium dark:text-white">Permasalahan</label>
                    <textarea id="permasalahan" name="permasalahan" rows="4"
                              class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"></textarea>
                </div>

                <div>
                    <label for="hasil_monev"
                           class="block text-sm text-gray-700 font-medium dark:text-white">Hasil Monev</label>
                    <input type="text" name="hasil_monev" id="hasil_monev"
                           class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
            </div>
            <!-- End Grid -->

            <div class="mt-6 grid">
                <button type="submit"
                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                    Tambahkan Data
                </button>
            </div>
            <div class="mt-5">
                <a href="{{route('monevs.index')}}"
                   class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-2.5 h-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                    </svg>
                    Kembali
                </a>
            </div>
        </form>
        <!-- End Form -->
    </div>

</x-app-layout>
