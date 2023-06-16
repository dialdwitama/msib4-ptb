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
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                               readonly>
                    </div>
                </div>
                <!-- End Grid -->

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="tgl"
                               class="block text-sm text-gray-700 font-medium dark:text-white">Tanggal Progress</label>
                        <input type="date" name="tgl" id="tgl"
                               value="{{\Carbon\Carbon::parse($ptb->tgl)->format('Y-m-d')}}"
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

                    <!-- edit.blade.php -->
                    <div>
    <label for="status" class="block text-sm text-gray-700 font-medium dark:text-white">Status</label>
    <select name="status" id="status" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
        <option value="Aman" {{ $ptb->status == 'Aman' ? 'selected' : '' }}>Aman</option>
        <option value="Menunggu Penggabungan" {{ $ptb->status == 'Menunggu Penggabungan' ? 'selected' : '' }}>Menunggu Penggabungan</option>
        <option value="Menunggu Pelaporan" {{ $ptb->status == 'Menunggu Pelaporan' ? 'selected' : '' }}>Menunggu Pelaporan</option>
        <option value="Sudah Kedaluwarsa" {{ $ptb->status == 'Sudah Kedaluwarsa' ? 'selected' : '' }}>Sudah Kedaluwarsa</option>
        <option value="Sedang Ditindaklanjuti" {{ $ptb->status == 'Sedang Ditindaklanjuti' ? 'selected' : '' }}>Sedang Ditindaklanjuti</option>
        <option value="{{ $ptb->status }}" {{ $ptb->status == 'other' ? 'selected' : '' }}>{{ $ptb->status }}</option>
        <option value="other2">Lainnya</option>
    </select>
</div>

<script>
    const statusSelect = document.getElementById('status');
    const otherOption = document.querySelector('option[value="other"]');
    const customStatusValue = "{{ $ptb->status }}";

    statusSelect.addEventListener('change', function() {
        if (statusSelect.value === 'other') {
            const customStatus = prompt('Masukkan status kustom:');
            if (customStatus) {
                otherOption.value = customStatus;
                otherOption.text = customStatus;
                statusSelect.value = customStatus;
            } else {
                statusSelect.value = '';
            }
        }
    });

    if (customStatusValue && customStatusValue !== 'other') {
        statusSelect.value = customStatusValue;
    } else if (customStatusValue === 'other') {
        const customStatus = prompt('Masukkan status kustom:', customStatusValue);
        if (customStatus) {
            otherOption.value = customStatus;
            otherOption.text = customStatus;
            statusSelect.value = customStatus;
        } else {
            statusSelect.value = '';
        }
    }

    // Dropdown "other" kedua
    const statusSelect2 = document.getElementById('status');
    const otherOption2 = document.querySelector('option[value="other2"]');

    statusSelect2.addEventListener('change', function() {
        if (statusSelect2.value === 'other2') {
            const customStatus2 = prompt('Masukkan status kustom lagi:');
            if (customStatus2) {
                otherOption2.value = customStatus2;
                otherOption2.text = customStatus2;
                statusSelect2.value = customStatus2;
            } else {
                statusSelect2.value = '';
            }
        }
    });
</script>

                </div>

                <div>
                    <label for="pic" class="block text-sm text-gray-700 font-medium dark:text-white">PIC</label>
                    <input type="type" name="pic" id="pic"
                               value="{{$ptb->pic}}"
                               class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
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
                <a href="{{ url()->previous() }}"
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