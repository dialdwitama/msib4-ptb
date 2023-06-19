<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>
        SIM | Sistem Informasi Monev
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="antialiased flex flex-col" style="background-image: url('{{Vite::asset('resources/assets/images/blue.png')}}');  background-size: cover;" >
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-blue-600 text-sm py-4">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-white" href="#">

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
                <a class="font-medium text-white text-l" href="#" aria-current="page">Home</a>
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

<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 flex-grow flex justify-center mt-16" >
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div>
            <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">Selamat datang di <br><span class="text-blue-600">Sistem Informasi Monev</span></h1>

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
            <img class="w-full rounded-md" src="{{Vite::asset('resources/assets/images/LOGO-SIM.png')}}" alt="Hero Image">
            <!-- SVG
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
            End SVG -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Hero -->



<!--<div class="col-span-1 flex justify-center text-center">
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
</div>-->








</body>

</html>
