<?php
// Mengambil data dari database dan mengisi variabel $ptbs
$ptbs = \App\Models\PTB::all();
// Mendefinisikan variabel $keyword
$keyword = ''; // Atur nilai default sesuai kebutuhan Anda
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>SI PTB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased flex flex-col">
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-blue-600 text-sm py-4">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-white" href="#">
                Sistem Informasi PTB LLDIKTI4
            </a>
            <div class="sm:hidden">
                <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border border-white/[.25] font-medium bg-blue-600 text-white shadow-sm align-middle hover:bg-white/[.15] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-600 focus:ring-white transition-all text-sm"
                        data-hs-collapse="#navbar-primary" aria-controls="navbar-primary"
                        aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-primary"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
                <a class="font-medium text-white" href="#" aria-current="page">Home</a>
                @auth()
                    <a class="font-medium text-gray-300 hover:text-white" href="{{route('dashboard')}}">Dashboard</a>
                @endauth
                @guest()
                    <a class="font-medium text-gray-300 hover:text-white" href="{{route('login')}}">Login</a>
                @endguest
            </div>
        </div>
    </nav>
</header>
<!-- Hero -->
<!-- Hero -->
<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 flex-grow flex justify-center mt-16">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center h-screen">
        <div>
            <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Selamat datang di Website <span class="text-blue-600">SI - PTB</span></h1>
            <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Sistem Informasi Perguruan Tinggi Bermasalah.</p>

            <!-- Buttons -->
            <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="{{route('login')}}">
                    Memulai
                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
            <!-- End Buttons -->
        </div>
        <!-- End Col -->

        <div class="relative ml-4">
            <img class="w-full rounded-md" src="{{Vite::asset('resources/assets/images/hero.jpg')}}" alt="Hero Image">
            <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>

            <!-- SVG-->
            <div class="absolute bottom-0 left-0">
                <svg class="w-2/3 ml-auto h-auto text-white dark:text-slate-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="531" y="352" width="99" height="99" fill="currentColor"/>
                    <rect x="140" y="352" width="106" height="99" fill="currentColor"/>
                    <rect x="482" y="402" width="64" height="49" fill="currentColor"/>
                    <rect x="433" y="402" width="63" height="49" fill="currentColor"/>
                    <rect x="384" y="352" width="49" height="50" fill="currentColor"/>
                    <rect x="531" y="328" width="50" height="50" fill="currentColor"/>
                    <rect x="99" y="303" width="49" height="58" fill="currentColor"/>
                    <rect x="99" y="352" width="49" height="50" fill="currentColor"/>
                    <rect x="99" y="392" width="49" height="59" fill="currentColor"/>
                    <rect x="44" y="402" width="66" height="49" fill="currentColor"/>
                    <rect x="234" y="402" width="62" height="49" fill="currentColor"/>
                    <rect x="334" y="303" width="50" height="49" fill="currentColor"/>
                    <rect x="581" width="49" height="49" fill="currentColor"/>
                    <rect x="581" width="49" height="64" fill="currentColor"/>
                    <rect x="482" y="123" width="49" height="49" fill="currentColor"/>
                    <rect x="507" y="124" width="49" height="24" fill="currentColor"/>
                    <rect x="531" y="49" width="99" height="99" fill="currentColor"/>
                </svg>
            </div>
            <!-- End SVG-->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Hero -->


<div class="col-span-1 flex justify-center text-center">
                        <div>
                            <i class="fas fa-building text-4xl" style="color:#000080;"></i>
                            <h2 class="text-xl font-bold mb-4">Perguruan Tinggi Bermasalah</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-1 flex justify-center text-center">
                        <div>
                            <i class="fas fa-database text-4xl" style="color:#000080;"></i>
                            <h2 class="text-xl font-bold mb-4">Akademik</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center text-center">
                        <div>
                            <i class="fas fa-book text-4xl" style="color:#000080;"></i>
                            <h2 class="text-xl font-bold mb-4">Diktendik</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center text-center">
                        <div>
                            <i class="fas fa-users text-4xl" style="color:#000080;"></i>
                            <h2 class="text-xl font-bold mb-4">Kelembagaan</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-center text-center">
                        <div>
                            <i class="fas fa-users-cog text-4xl" style="color:#000080;"></i>
                            <h2 class="text-xl font-bold mb-4">Kemahasiswaan</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                                    Data Perguruan Tinggi Bermasalah
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
</body>
</html>
