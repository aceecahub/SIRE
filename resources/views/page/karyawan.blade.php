<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-white md:pl-[310px] p-[20px] pt-[100px]">

        <h3 class="text-red-900 text-3xl font-medium mb-2">Data Karyawan</h3>

        {{-- Tabel Karyawan --}}

        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-red-200 p-5">
                    <div class="flex items-center">
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                            class="inline-flex items-center text-white bg-red-700 border border-red-600 focus:outline-none hover:bg-red-600 focus:ring-2 focus:ring-red-500 font-medium rounded-lg text-sm px-3 py-1.5"
                            type="button">
                            <span class="sr-only">Tombol Aksi</span>
                            Aksi
                            <svg class="w-2.5 h-2.5 ms-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <button data-modal-target="modalTambahKaryawan" data-modal-toggle="modalTambahKaryawan"
                            class="block text-white ml-2 bg-red-800 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2 gap-2 text-center"
                            type="button">
                            Toggle modal
                        </button>

                        {{-- Modal Input  --}}
                        <div id="modalTambahKaryawan" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-2 w-full max-w-md max-h-full">
                                <div class="relative bg-red-100 rounded-lg shadow-sm">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b border-red-300">
                                        <h3 class="text-xl font-semibold text-red-900">
                                            Tambah Karyawan
                                        </h3>
                                        <button type="button"
                                            class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="modalTambahKaryawan">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Tutup modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4 grid gap-2 mb-2 grid-cols-2" action="#">
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-1 text-sm font-medium text-red-900">
                                                    Nama Karyawan</label>
                                                <input type="text" name="nama" id="nama"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="Nama Karyawan" required />
                                            </div>
                                            <div>
                                                <label for="email" class="block mb-1 text-sm font-medium text-red-900">
                                                    Email</label>
                                                <input type="email" name="email" id="email"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="nama@gmail.com" required />
                                            </div>
                                            <div>
                                                <label for="kelas" class="block mb-1 text-sm font-medium text-red-900">
                                                    Kelas</label>
                                                <input type="text" name="kelas" id="kelas"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="Kelas" required />
                                            </div>
                                            <div class="col-span-2">
                                                <label for="alamat" class="block mb-2 text-sm font-medium text-red-900">
                                                    Alamat</label>
                                                <textarea name="alamat" id="alamat" placeholder="Alamat Karyawan"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    required></textarea>
                                            </div>
                                            <div>
                                                <label for="noHP" class="block mb-1 text-sm font-medium text-red-900">
                                                    No Hp</label>
                                                <input type="number" name="noHP" id="noHP" placeholder="08123456789"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    required />
                                            </div>
                                            <div>
                                                <label for="jk" class="block mb-1 text-sm font-medium text-red-900">Jenis Kelamin</label>
                                                <select id="jk"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5">
                                                    <option selected disabled hidden>Jenis Kelamin</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                </select>
                                            </div>
                                            <button type="submit"
                                                class="col-span-2 w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dropdown menu -->
                        <div id="dropdownAction"
                            class="z-10 hidden bg-red-700 divide-y divide-red-600 rounded-lg shadow-sm w-44">
                            <ul class="py-1 text-sm text-white" aria-labelledby="dropdownActionButton">
                                <li><a href="#" class="block px-4 py-2 hover:bg-red-600">Reward</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-red-600">Promote</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-red-600">Activate account</a></li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-red-600">Hapus Karyawan</a>
                            </div>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Cari </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users"
                            class="block p-2 ps-10 text-sm text-red-900 border border-red-300 rounded-lg w-80 bg-red-50 focus:ring-red-500 focus:border-red-500"
                            placeholder="Cari Karyawan">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-red-900">
                    <thead class="text-xs uppercase bg-red-200 text-red-800">
                        <tr>
                            <th class="p-4">
                                <input type="checkbox" class="w-4 h-4 text-red-800 bg-red-100 border-red-300 rounded-sm">
                            </th>
                            <th class="px-6 py-3">Nama Karyawan</th>
                            <th class="px-6 py-3">Kelas</th>
                            <th class="px-6 py-3">Jenis Kelamin</th>
                            <th class="px-6 py-3">Alamat</th>
                            <th class="px-6 py-3">Nomor HP</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-red-100 border-b border-red-300">
                            <td class="w-4 p-4">
                                <input type="checkbox" class="w-4 h-4 text-red-900 bg-red-100 border-red-300 rounded-sm">
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 whitespace-nowrap">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('img/user-icon.png') }}" alt="">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">Asisyah Sarah</div>
                                    <div class="font-normal text-red-500">asisyah@gmail.com</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">Manajemen Informatika</td>
                            <td class="px-6 py-4">Jenis Kelamin</td>
                            <td class="px-6 py-4">Alamat</td>
                            <td class="px-6 py-4">0293808900</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                    <span>Online</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-700 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="flex items-center justify-between mt-4">
            <span class="text-sm text-red-700">
                Showing <span class="font-semibold">1-10</span> of <span class="font-semibold">100</span> results
            </span>
            <nav class="flex items-center space-x-2">
                <a href="#" class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">Previous</a>
                <a href="#" class="px-3 py-1 text-sm font-medium text-white bg-red-800 border border-red-600 rounded-lg hover:bg-red-700">1</a>
                <a href="#" class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">2</a>
                <a href="#" class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">3</a>
                <a href="#" class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">Next</a>
            </nav>
        </div>
    </section>
</x-app-layout>