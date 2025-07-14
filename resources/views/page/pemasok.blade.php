<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-white md:pl-[310px] p-[20px] pt-[100px]">

        <h3 class="text-red-900 text-3xl font-medium mb-2">Data Pemasok</h3>

        {{-- Tabel Karyawan --}}

        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-red-200 p-5">
                    <div>
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                            class="inline-flex items-center text-white bg-white border border-red-300 focus:outline-none hover:bg-red-100 focus:ring-2
                             focus:ring-red-100 font-medium rounded-lg text-sm px-3 py-1.5
                             dark:bg-red-700 dark:text-white dark:border-red-600 dark:hover:bg-red-400 dark:hover:border-red-600 dark:focus:ring-red-700"
                            type="button">
                            <span class="sr-only">Tombol Aksi</span>
                            Aksi
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownAction"
                            class="z-10 hidden bg-white divide-y divide-red-100 rounded-lg shadow-sm w-44 dark:bg-red-700 dark:divide-red-600">
                            <ul class="py-1 text-sm text-white dark:text-red-200"
                                aria-labelledby="dropdownActionButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">Reward</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">Promote</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">Activate
                                        account</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:hover:bg-red-600 dark:text-red-200 dark:hover:text-white">Hapus
                                    Karyawan</a>
                            </div>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-white dark:text-red-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users"
                            class="block p-2 ps-10 text-sm text-red-100 border border-red-300 rounded-lg w-80 bg-red-50 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-100 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                            placeholder="Search for users">
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-white dark:text-white">
                    <thead class="text-xs text-white uppercase bg-red-50 dark:bg-red-700 dark:text-red-100">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-red-200 bg-red-100 border-red-300 rounded-sm focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-red-800 dark:focus:ring-offset-red-800 focus:ring-2 dark:bg-red-200 dark:border-red-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pemasok
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Hp
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($pemasoks as $pemasok)

                        <tr
                            class="bg-white border-b dark:bg-red-200 dark:border-red-500 border-red-200">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                   
                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-red-900 whitespace-nowrap dark:text-red-700">
                            
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $pemasok->nama_pemasok }}</div>
                                    <div class="font-normal text-red-500">{{ $pemasok->email}}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-red-700 dark:text-red-700">
                                {{ $pemasok->alamat }}
                            </td>
                            <td class="px-6 py-4 text-red-700 dark:text-red-700">
                                {{ $pemasok->no_telp }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> <span
                                        class ="text-red-700">{{ $pemasok->status }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-red-100 dark:text-red-700 hover:underline">Edit</a>
                            </td>
                        </tr>
                         @empty
                        <tr class="bg-white border-b dark:bg-red-200 dark:border-red-500 border-red-200">
                            <td colspan="6" class="px-6 py-4 text-center text-red-700 dark:text-red-400">
                                Tidak ada data Pemasok yang ditemukan.
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>

        {{-- Pagination --}}
        <div class="flex items-center justify-between mt-4">
            <span class="text-sm text-red-700 dark:text-red-400">
                Showing <span class="font-semibold">1-10</span> of <span class="font-semib  old">100</span> results
            </span>
            <nav class="flex items-center space-x-2">
                <a href="#"
                     class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100 dark:bg-red-400 dark:text-red-700 dark:border-red-200 dark:hover:bg-red-300">Previous</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-white bg-white border border-red-600 rounded-lg hover:bg-red-50 dark:bg-red-800 dark:text-red-200 dark:border-red-600 dark:hover:bg-red-700">1</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100 dark:bg-red-400 dark:text-red-700 dark:border-red-200 dark:hover:bg-red-300">2</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100 dark:bg-red-400 dark:text-red-700 dark:border-red-200 dark:hover:bg-red-300">3</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100 dark:bg-red-400 dark:text-red-700 dark:border-red-200 dark:hover:bg-red-300">Next</a>
            </nav>

        </div>




    </section>
</x-app-layout>
