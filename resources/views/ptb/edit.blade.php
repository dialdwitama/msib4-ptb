<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambahkan Data PTB
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-10">
        <!-- Form -->
        <form class="bg-white p-5 rounded-md" action="{{route('ptbs.update', $ptb->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid gap-2 lg:gap-5">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="kode"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Kode</label>
                        <input type="text" name="kode" id="kode"
                               value="{{$ptb->kode}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="nama_pt"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Nama PT</label>
                        <input type="text" name="pt" id="pt"
                               value="{{$ptb->pt}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>
                <!-- End Grid -->

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="tgl"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Tanggal Progress</label>
                        <input type="date" name="tgl" id="tgl"
                               value="{{$ptb->tgl}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="progressTerakhir"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Progress Terakhir</label>
                        <input type="text" name="progressTerakhir" id="progressTerakhir"
                               value="{{$ptb->progressTerakhir}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="deadline"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Deadline</label>
                        <input type="date" name="deadline" id="deadline"
                               value="{{$ptb->deadline}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>

                    <div>
                        <label for="status"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Status</label>
                        <input type="type" name="status" id="status"
                               value="{{$ptb->status}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>

                <div>
                    <label for="permintaan" class="block text-sm text-gray-700 font-medium dark:text-white">Permintaan</label>
                    <textarea id="permintaan" name="permintaan" rows="4"
                              class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 whitespace-nowrap">
                        {{ trim($ptb->permintaan) }}
                    </textarea>
                </div>

                <div>
                    <label for="progressReport"
                           class="block text-sm text-gray-700 font-medium dark:text-white">Progress Report</label>
                    <input type="text" name="progressReport" id="progressReport"
                           value="{{$ptb->progressReport}}"
                           class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
            </div>
            <!-- End Grid -->

            <div class="mt-6 grid">
                <button type="submit"
                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                    Update
                </button>
            </div>
            <div class="mt-5">
                <a href="{{route('ptbs.show', $ptb->id)}}"
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
