<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Monev Umum
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Table Section -->
            @if($monevs->count() > 0 || $keyword != '')
            <div class="max-w-[85rem] mx-auto">
                <!-- Card -->
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
                                            Data Monev Umum
                                        </h2>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tambahkan, hapus dan edit data monev.
                                        </p>
                                    </div>

                                    <div>
                                        <div class="inline-flex gap-x-2">
                                            <div>
                                                <div class="relative">
                                                    <form action="{{route('monevs.index')}}" method="GET">
                                                        <input value="{{$keyword}}" type="text" id="keyword" name="keyword" class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Pencarian">
                                                    </form>
                                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="{{route('monevs.create')}}"
                                               class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                                Tambahkan Data Monev
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Header -->

                                <!-- Table -->
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
                                               href="{{route('monevs.index', ['sort' => 'kode'])}}">
                                                <span
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
                                               href="{{route('monevs.index', ['sort' => 'nama_pt'])}}">
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
                                               href="{{route('monevs.index', ['sort' => 'tanggal_monev'])}}">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                  Tanggal Monev
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
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                  Permasalahan
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-right"></th>
                                    </tr>
                                    </thead>

                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($monevs as $monev)
                                        <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                            <td class="h-px w-px whitespace-nowrap">
                                                <a class="block relative z-10"
                                                   href="{{route('monevs.show', $monev->id)}}">
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
                                                   href="{{route('monevs.show', $monev->id)}}">
                                                    <div class="px-6 py-2">
                                                        <p class="text-sm text-gray-500">{{$monev->kode}}</p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="h-px w-px whitespace-nowrap">
                                                <a class="block relative z-10"
                                                   href="{{route('monevs.show', $monev->id)}}">
                                                    <div class="px-6 py-2">
                                                      <span
                                                          class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                        {{$monev->nama_pt}}
                                                      </span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="h-px w-px whitespace-nowrap">
                                                
                                                <a class="block relative z-10"
                                                   href="{{route('monevs.show', $monev->id)}}">
                                                    <div class="px-6 py-2">
                                                        <p class="text-sm text-gray-500">{{\Carbon\Carbon::make($monev->tanggal_monev)->toDateString()}}</p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="h-px w-72 min-w-[18rem]">
                                                <a class="block relative z-10"
                                                   href="{{route('monevs.show', $monev->id)}}">
                                                    <div class="px-6 py-2">
                                                        <p class="text-sm text-gray-500">
                                                            {!! nl2br(e($monev->permasalahan)) !!}
                                                        </p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="h-px w-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <div
                                                        class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                        <button id="hs-table-dropdown-1" type="button"
                                                                class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                                 width="16" height="16" fill="currentColor"
                                                                 viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                            </svg>
                                                        </button>
                                                        <div
                                                            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[10rem] z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                                            aria-labelledby="hs-table-dropdown-1">
                                                            <div class="py-2 first:pt-0 last:pb-0">
                                                          <span
                                                              class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-600">
                                                            Aksi
                                                          </span>
                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                   href="{{route('monevs.show', $monev->id)}}">
                                                                    Lihat
                                                                </a>
                                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                   href="{{route('monevs.edit', $monev->id)}}">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                            <div class="py-2 first:pt-0 last:pb-0">
                                                                <form action="{{route('monevs.destroy', $monev->id)}}"
                                                                      method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                            class="flex w-full items-center gap-x-3 py-2 px-3 rounded-md text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                                    >
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table -->


                                <!-- Footer -->
                                <div
                                    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                    <div>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <span
                                                class="font-semibold text-gray-800 dark:text-gray-200">{{$monevs->count()}}</span>
                                            results
                                        </p>
                                    </div>

                                    <div>
                                        <div class="inline-flex space-x-2">
                                            {{$monevs->links()}}
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
                                            Data Monev
                                        </h2>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tambahkan, hapus, dan edit data monev.
                                        </p>
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
                                            Tidak ada data monev saat ini.
                                        </h2>

                                        <div class="mt-5 grid sm:flex gap-2">
                                            <a href="{{route('monevs.create')}}"
                                               class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                                Tambahkan Data Monev
                                            </a>
                                        </div>
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
</x-app-layout>
