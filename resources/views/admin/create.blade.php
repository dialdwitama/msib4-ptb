<head>
    <title>
        SIM | Tambah Data Pengguna
    </title>
</head>
<x-app-layout title="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Pengguna
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
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
                                    Pengguna
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Tambah pengguna.
                                </p>
                            </div>
                        </div>
                        <!-- End Header -->

                        <form class="px-6 py-4" action="{{route('admin.store')}}" method="POST">
                            @csrf
                            <!-- Grid -->
                            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                                <div class="sm:col-span-3">
                                    <label for="name"
                                           class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                        Nama
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <input id="name" name="name" type="text"
                                           class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    >
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="email"
                                           class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                        Email
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <input id="email" type="email" name="email"
                                           class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                           placeholder="email@example.com">
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-3">
                                    <label for="password"
                                           class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                        Password
                                    </label>
                                </div>
                                <!-- End Col -->

                                <div class="sm:col-span-9">
                                    <div class="space-y-2">
                                        <input id="password" name="password" type="password"
                                               class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                               placeholder="Password">
                                        <input type="password"
                                               id="password_confirmation" name="password_confirmation"
                                               class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                               placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->

                            <div class="mt-5 flex justify-end gap-x-2">
                                <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                    Simpan
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- Table Section -->

    <!-- End Table Section -->
</x-app-layout>


