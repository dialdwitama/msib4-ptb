<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
    /* Reset default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header {
        text-align: center;
        margin-bottom: 20px;
    }

    nav ul {
        list-style-type: none;
        margin-bottom: 20px;
    }

    nav ul li {
        display: inline-block;
        margin-right: 10px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    section {
        margin-bottom: 20px;
    }

    .dashboard-info {
        margin-bottom: 20px;
    }

    .dashboard-widgets {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .widget-row {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .widget {
        flex-basis: 40%;
        /* Lebar widget diatur menjadi 40% agar ada ruang antara widget */
        /* Ubah sesuai kebutuhan Anda */
        padding: 40px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        position: relative;
    }

    .widget h3 {
        color: white;
    }

    .widget p {
        font-size: 36px;
        font-weight: bold;
        color: white;
    }

    .widget a {
        color: white;
        font-size: 16px;
    }

    .widget .icon {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        font-size: 48px;
        color: #888;
        /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);  Efek bayangan */
    }

    .widget .icon i {
        display: inline-block;
        vertical-align: middle;
    }

    .widget .more-link {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        margin: auto;
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 10px;
    }
    

    .widget.akademik {
        background-color: #B22222;
        margin-right: 20px;
    }

    .widget.kemahasiswaan {
        background-color: #FFA07A;
        margin-left: 20px;
    }

    .widget.kelembagaan {
        background-color: #036BDC;
        margin-right: 20px;
    }

    .widget.diktendik {
        background-color: #1F8546;
        margin-left: 20px;
    }

    .widget.ptb {
        background-color: #FFA500;
    }

    

</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <section>
    <div class="dashboard-widgets">
        <div class="widget-row">
            <div class="widget akademik">
                    @isset($akademikCount)
                        <p> {{ $akademikCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                <h3>AKADEMIK</h3>
               
				<div class="icon">
					<i class="fas fa-database"></i>
				</div>
                <div class="more-link-akademik">
				<a href="akademiks" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
                </div>
            </div>
            <div class="widget kemahasiswaan">
                    @isset($kemahasiswaanCount)
                        <p> {{ $kemahasiswaanCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                <h3>KEMAHASISWAAN</h3>
                
				<div class="icon">
					<i class="fas fa-book"></i>
				</div>
				<a href="" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
        </div>
        <div class="widget-row">
            <div class="widget kelembagaan">
                    @isset($monevKelembagaanCount)
                        <p> {{ $monevKelembagaanCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                    <h3>KELEMBAGAAN</h3>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="/monevs" class="more-link">
                        Selengkapnya
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            <div class="widget diktendik">
                    @isset($diktendikCount)
                        <p> {{ $diktendikCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                <h3>DIKTENDIK</h3>
                
				<div class="icon">
					<i class="fas fa-users-cog"></i>
				</div>
				<a href="" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
        </div>
        <div class="widget ptb">
                    @isset($ptbCount)
                        <p> {{ $ptbCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                <h3>Perguruan Tinggi Bermasalah</h3>
                
				<div class="icon">
					<i class="fas fa-building"></i>
				</div>
				<a href="/ptbs" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
    </div>
</section>
</x-app-layout>
</html>
