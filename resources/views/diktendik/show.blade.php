<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Informasi Detail Monev
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div
                    class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-gray-800 dark:border-gray-700">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                        Data Monev
                    </p>
                </div>
                <div class="w-full">
                    <div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Kode
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->kode}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Nama Perguruan Tinggi
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->nama_pt}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Tanggal Monev
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->tanggal_monev}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Alamat Monev
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->alamat_monev}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Alamat Direktori
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->alamat_direktori}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Alamat PDDIKTI
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->alamat_pddikti}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Hasil Monev
                            </p>
                            <p class="col-span-3">
                                {{$diktendik->hasil_monev}}
                            </p>
                        </div>
                        <div class="md:grid md:grid-cols-4 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                            <p class="text-gray-600 col-span-1">
                                Permasalahan
                            </p>
                            <p class="col-span-3">
                                {!! nl2br(e($diktendik->permasalahan)) !!}
                            </p>
                        </div>
                    </div>
                    <div class="p-4">
                        <a href="{{route('diktendiks.index')}}"
                           class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-2.5 h-auto">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                            </svg>
                            Kembali
                        </a>
                        <a href="{{route('diktendiks.edit', $diktendik->id)}}"
                           class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            <svg class="w-2.5 h-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                            </svg>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
