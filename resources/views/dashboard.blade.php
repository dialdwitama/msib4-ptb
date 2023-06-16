<?php
// Mengambil data dari database dan mengisi variabel $ptbs
$ptbs = \App\Models\Ptb::all();
// Mendefinisikan variabel $keyword
$keyword = ''; // Atur nilai default sesuai kebutuhan Anda
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">\
    <title>
        SIM | Dashboard
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        background-image: url('{{Vite::asset('resources/assets/images/blue.png')}}');
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
        padding: 20px;
        font-size: 48px;
        color: white;
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

    .widget.kelembagaan {
        background-color: #036BDC;
        margin-right: 20px;
    }

    .widget.diktendik {
        background-color: #DAA520;
        margin-left: 20px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <section style="background-image: url('{{Vite::asset('resources/assets/images/blue.png')}}'); background-size: cover;">
        <div class="widget-row">
            <div class="widget kelembagaan">
                    @isset($monevKelembagaanCount)
                        <p> {{ $monevKelembagaanCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                    <h3>Monev Umum</h3>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <!--<a href="/monevs" class="more-link">
                        Selengkapnya
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>-->
                </div>
            <div class="widget diktendik">
                    @isset($ptbCount)
                        <p> {{ $ptbCount }} </p>
                    @else
                        <p>Data tidak tersedia</p>
                    @endisset
                <h3>Monev Khusus</h3>
                
				<div class="icon">
					<i class="fas fa-users-cog"></i>
				</div>
				<!--<a href="" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>-->
            </div>
        </div>
        <div class="py-12">
    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
        <!-- Table Section -->
        @if($ptbs->count() > 0 || $keyword != '')
        <div class="max-w-[85rem] mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                        <!-- Header -->
                                        <div
                                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                            <div>
                                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                                    Data Monev
                                                </h2>
                                            </div>
                                            <div>
                                                <div class="inline-flex gap-x-2">
                                                    <div>
                                                        <div class="relative">
                                                            <form action="" method="GET">
                                                                <input value="" type="text" id="keyword" name="keyword" class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Pencarian">
                                                            </form>
                                                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Header -->

                        <!-- Tabel -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-slate-800">
                                    <tr>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                No
                                        </span>
                                    </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <a class="group inline-flex items-center gap-x-2"
                                                href=""
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Kode
                                                </span>
                                                <div
                                                    class="flex justify-center items-center w-5 h-5 border border-gray-200 group-hover:bg-gray-200 text-gray-400 rounded dark:border-gray-700 dark:group-hover:bg-gray-700 dark:text-gray-400">
                                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.55921 0.287451C7.86808 -0.0958171 8.40096 -0.0958167 8.70982 0.287451L12.9295 5.52367C13.3857 6.08979 13.031 7 12.3542 7H3.91488C3.23806 7 2.88336 6.08979 3.33957 5.52367L7.55921 0.287451Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M8.70983 15.7125C8.40096 16.0958 7.86808 16.0958 7.55921 15.7125L3.33957 10.4763C2.88336 9.9102 3.23806 9 3.91488 9H12.3542C13.031 9 13.3857 9.9102 12.9295 10.4763L8.70983 15.7125Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <a class="group inline-flex items-center gap-x-2"
                                                href="">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Nama Perguruan Tinggi
                                                </span>
                                                <div
                                                    class="flex justify-center items-center w-5 h-5 border border-gray-200 group-hover:bg-gray-200 text-gray-400 rounded dark:border-gray-700 dark:group-hover:bg-gray-700 dark:text-gray-400">
                                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.55921 0.287451C7.86808 -0.0958171 8.40096 -0.0958167 8.70982 0.287451L12.9295 5.52367C13.3857 6.08979 13.031 7 12.3542 7H3.91488C3.23806 7 2.88336 6.08979 3.33957 5.52367L7.55921 0.287451Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M8.70983 15.7125C8.40096 16.0958 7.86808 16.0958 7.55921 15.7125L3.33957 10.4763C2.88336 9.9102 3.23806 9 3.91488 9H12.3542C13.031 9 13.3857 9.9102 12.9295 10.4763L8.70983 15.7125Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <a class="group inline-flex items-center gap-x-2"
                                                href="">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Tanggal Progress Terakhir
                                                </span>
                                                <div
                                                    class="flex justify-center items-center w-5 h-5 border border-gray-200 group-hover:bg-gray-200 text-gray-400 rounded dark:border-gray-700 dark:group-hover:bg-gray-700 dark:text-gray-400">
                                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.55921 0.287451C7.86808 -0.0958171 8.40096 -0.0958167 8.70982 0.287451L12.9295 5.52367C13.3857 6.08979 13.031 7 12.3542 7H3.91488C3.23806 7 2.88336 6.08979 3.33957 5.52367L7.55921 0.287451Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M8.70983 15.7125C8.40096 16.0958 7.86808 16.0958 7.55921 15.7125L3.33957 10.4763C2.88336 9.9102 3.23806 9 3.91488 9H12.3542C13.031 9 13.3857 9.9102 12.9295 10.4763L8.70983 15.7125Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </th>

                                        <th scope="col" class="px-9 py-3 text-left">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Deadline
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Status
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Permasalahan
                                            </span>
                                        </th>
                                        <th scope="col" class="px-9 py-3 text-left">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    PIC
                                            </span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($ptbs as $ptb)
                                    <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <div
                                                        class="block text-sm dark:text-blue-500">
                                                        {{$loop->iteration}}
                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <p class="text-sm text-gray-500">{{$ptb->kode}}</p>
                                                </div>
                                            </a>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    {{$ptb->pt}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <p class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{{\Carbon\Carbon::make($ptb->tgl)->toDateString()}}</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    {{$ptb->deadline}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    {{$ptb->status}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="h-px w-72 min-w-[18rem]">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <p class="text-sm text-gray-500">
                                                        {!! nl2br(e($ptb->progressTerakhir)) !!}
                                                    </p>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{route('ptbs.show', $ptb->id)}}">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    {{$ptb->pic}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                            </table>
                        <!-- End Tabel -->
                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{$ptbs->count()}}</span>
                                    results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex space-x-2">
                                
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
        @else
            <!-- Table Section -->
            <div class="max-w-[85rem] mx-auto">
                <!-- Card -->
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                <!-- Header -->
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Data Perguruan Tinggi Bermasalah
                                    </h2>
                                    
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div
                                    class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                    <div
                                        class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-md dark:bg-gray-800">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                            <path
                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </div>

                                    <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                        Tidak ada data PTB saat ini.
                                    </h2>

                                    
                                </div>
                                <!-- End Body -->

                                <!-- Footer -->
                                <div
                                    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <span class="font-semibold text-gray-800 dark:text-gray-200">0</span>
                                            hasil
                                        </p>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">
                                            <div
                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-300 shadow-sm text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.506 1.64001L4.85953 7.28646C4.66427 7.48172 4.66427 7.79831 4.85953 7.99357L10.506 13.64"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round"/>
                                                </svg>
                                                Sebelumnya
                                            </div>

                                            <div
                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-300 shadow-sm text-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                Berikutnya
                                                <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.50598 2L10.1524 7.64645C10.3477 7.84171 10.3477 8.15829 10.1524 8.35355L4.50598 14"
                                                        stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Footer -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Table Section -->
        @endif
    </div>
</div>
</section>


</x-app-layout>

</html>
