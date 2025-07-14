<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-white md:pl-[310px] p-[20px] pt-[100px]">

        <h3 class="text-red-900 text-3xl font-medium mb-2">Data Karyawan</h3>

        {{-- Tabel Karyawan --}}

        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-red-200 p-5">
                    <div class= "flex items-center">
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

                        <button data-modal-target="modalTambahKaryawan" data-modal-toggle="modalTambahKaryawan"
                            class="block text-white ml-2 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 gap-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                            type="button">
                            Toggle modal
                        </button>

                        {{-- Modal Input  --}}
                        <!-- Main modal -->
                        <div id="modalTambahKaryawan" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-2 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow-sm dark:bg-red-100">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-red-600 border-red-200">
                                        <h3 class="text-xl font-semibold text-red-900 dark:text-red-900">
                                            Tambah Karyawan
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-red-600 dark:hover:text-white"
                                            data-modal-hide="modalTambahKaryawan">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Tutup modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="#">
                                            <div>
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-red-900 dark:text-red-900">
                                                    Nama Karyawan</label>
                                                <input type="email" name="email" id="email"
                                                    class="bg-red-50 border border-red-100 text-red-900 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-2.5 dark:bg-red-200 dark:border-red-100 dark:placeholder-red-800 dark:text-white"
                                                    placeholder="name@company.com" required />
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-red-900 dark:text-red-900">
                                                    Alamat</label>
                                                <input type="textarea" name="password" id="password"
                                                    placeholder="Alamat Karyawan"
                                                    class="bg-red-50 border border-red-100 text-red-900 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-2.5 dark:bg-red-200 dark:border-red-100 dark:placeholder-red-800 dark:text-white"
                                                    required />
                                            </div>

                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="category"
                                                    class="block mb-2 text-sm font-medium text-red-200 dark:text-white">Jenis Kelamin</label>
                                                <select id="category"
                                                    class="bg-red-50 border border-red-300 text-red-300 text-sm rounded-lg focus:ring-white focus:border-white block w-full p-2.5 dark:bg-red-200 dark:border-red-100 dark:placeholder-red-900 dark:text-white dark:focus:ring-white dark:focus:border-white">
                                                    <option selected disabled hidden ="">Jenis Kelamin</option>
                                                    <option value="TV">TV/Monitors</option>
                                                    <option value="PC">PC</option>
                                                    <option value="GA">Gaming/Console</option>
                                                    <option value="PH">Phones</option>
                                                </select>
                                            </div>

                                            

                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Login
                                                to your account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                            placeholder="Cari Karyawan">
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
                                Nama Karyawan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    @forelse ($karyawans as $karyawan)
                    <tr class="bg-white border-b dark:bg-red-200 dark:border-red-500 border-red-200 hover:bg-red-300">
                        <td class="w-4 p-4">
                            <!-- Checkbox atau ikon bisa ditaruh di sini -->
                        </td>
                        <th scope="row" class="flex items-center px-6 py-4 text-red-900 whitespace-nowrap dark:text-red-700">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('img/user-icon.png') }}" alt="">
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $karyawan->nama }}</div>
                                <div class="font-normal text-red-500">{{ $karyawan->email }}</div>
                            </div>
                        </th>
                        <td class="px-6 py-4 text-red-700 dark:text-red-700">
                            {{ $karyawan->kelas}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                <span class="text-red-700">{{ $karyawan->status }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-100 dark:text-red-700 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <tr class="bg-white border-b dark:bg-red-200 dark:border-red-500 border-red-200 hover:bg-red-300">
                        <td colspan="5" class="px-6 py-4 text-center text-red-700 dark:text-red-400">
                            Tidak ada data karyawan yang ditemukan.
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