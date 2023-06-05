<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight bg-white">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-[88rem] mx-auto">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                    <div>
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                            Detail Perguruan Tinggi Bermasalah
                                        </h2>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Tambahkan, hapus, dan edit data PTB.
                                        </p>
                                    </div>
                                    <div class="mt-5 grid sm:flex gap-2">
                                            <a href="{{route('ptbs.create')}}"
                                               class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                                Tambahkan Detail PTB
                                            </a>
                                        </div>
                                </div>
                                <div class="flex flex-col md:flex-row">
                                    <div class="w-full md:w-1/2">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-slate-800">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            PTB NAME
                                                        </span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <a class="block-relative z-10">
                                                            <div class="px-4 py-6xx">
                                                                <span class="inline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{{ $ptb->pt }}</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="w-full md:w-2/2">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-slate-800">
                                                <tr>
                                                <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Tanggal
                                                        </span>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Permintaan
                                                        </span>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Kegiatan
                                                        </span>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Hasil Keg
                                                        </span>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Lampiran
                                                        </span>
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left bg-gray-200 dark:bg-gray-700">
                                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                            Keterangan
                                                        </span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @foreach ($ptb->details as $detail)
                                                    <tr>
                                                    <td class="h-px w-72 min-w-[8rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{{ $detail->tgl }}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    <td class="h-px w-72 min-w-[12rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{!! nl2br(e($detail->permintaan)) !!}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="h-px w-72 min-w-[14rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{!! nl2br(e($detail->kegiatan)) !!}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="h-px w-72 min-w-[10rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{!! nl2br(e($detail->hasil_keg)) !!}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="h-px w-72 min-w-[18rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{!! nl2br(e($detail->lampiran)) !!}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="h-px w-72 min-w-[16rem]">
                                                            <a class="block-relative z-10">
                                                                <div class="px-4 py-2">
                                                                    <p class="textinline-flex items-center gap-1.5 py-1 px-2 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-200">{!! nl2br(e($detail->ket)) !!}</p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>