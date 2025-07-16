<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-white md:pl-[310px] p-[20px] pt-[100px]">

        <h3 class="text-red-900 text-3xl font-medium mb-2">Data Barang</h3>

        {{-- Tabel Barang --}}

        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div
                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-red-200 p-5">
                    <div class="flex items-center">
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                            class="inline-flex items-center text-white bg-red-700 border border-red-600 focus:outline-none hover:bg-red-600 focus:ring-2 focus:ring-red-500 font-medium rounded-lg text-sm px-3 py-1.5"
                            type="button">
                            <span class="sr-only">Tombol Aksi</span>
                            Aksi
                            <svg class="w-2.5 h-2.5 ms-2.5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <button data-modal-target="modalTambahBarang" data-modal-toggle="modalTambahBarang"
                            class="block text-white ml-2 bg-red-800 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2 gap-2 text-center"
                            type="button">
                            Toggle modal
                        </button>

                        {{-- Modal Input  --}}
                        <div id="modalTambahBarang" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-2 w-full max-w-md max-h-full">
                                <div class="relative bg-red-100 rounded-lg shadow-sm">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b border-red-300">
                                        <h3 class="text-xl font-semibold text-red-900">
                                            Tambah Pemasok
                                        </h3>
                                        <button type="button"
                                            class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="modalTambahBarang">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Tutup modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4 grid gap-2 mb-2 grid-cols-2"
                                            action="{{ route('barang.store') }}" method="POST">
                                            @csrf
                                            <div class="col-span-2">
                                                <label for="nama_barang"
                                                    class="block mb-1 text-sm font-medium text-red-900">
                                                    Nama Barang</label>
                                                <input type="text" name="nama_barang" id="nama_barang"
                                                    value="{{ old('nama_barang') }}"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="Nama Barang" required />
                                            </div>

                                            <div class="col-span-2">
                                                <label for="harga_jual"
                                                    class="block mb-1 text-sm font-medium text-red-900">
                                                    Harga Jual</label>
                                                <input type="number" name="harga_jual" id="harga_jual"
                                                    value="{{ old('harga_jual') }}"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="Rp. 0" required />
                                            </div>

                                            <div>
                                                <label for="harga_beli"
                                                    class="block mb-1 text-sm font-medium text-red-900">
                                                    Harga Beli</label>
                                                <input type="number" name="harga_beli" id="harga_beli"
                                                    value="{{ old('harga_beli') }}"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="Rp. 0" required />
                                            </div>

                                            <div>
                                                <label for="stok"
                                                    class="block mb-1 text-sm font-medium text-red-900">
                                                    Stok</label>
                                                <input type="number" name="stok" id="stok"
                                                    value="{{ old('stok') }}" placeholder="08123456789"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder=" pcs" required />
                                            </div>
                                            <div>
                                                <label for="kadaluarsa"
                                                    class="block mb-1 text-sm font-medium text-red-900">
                                                    Kadaluarsa</label>
                                                <input type="date" name="kadaluarsa" id="kadaluarsa"
                                                    value="{{ old('kadaluarsa') }}"
                                                    class="bg-red-50 border border-red-900 text-red-900 text-sm rounded-lg focus:ring-red-900 focus:border-red-900 block w-full p-2.5"
                                                    placeholder="" required />
                                            </div>

                                            <div class="col-span-2">
                                                <button type="submit"
                                                    class="col-span-2 w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                    Simpan
                                                </button>
                                            </div>

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
                                <li><a href="#" class="block px-4 py-2 hover:bg-red-600">Activate account</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-red-600">Hapus
                                    Pemasok</a>
                            </div>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Cari </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search-users"
                            class="block p-2 ps-10 text-sm text-red-900 border border-red-300 rounded-lg w-80 bg-red-50 focus:ring-red-500 focus:border-red-500"
                            placeholder="Cari Pemasok">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-red-900">
                    <thead class="text-xs uppercase bg-red-200 text-red-800">
                        <tr>
                            <th class="p-4">
                                <input type="checkbox"
                                    class="w-4 h-4 text-red-800 bg-red-100 border-red-300 rounded-sm">
                            </th>
                            <th class="px-6 py-3">Nama Pemasok</th>
                            <th class="px-6 py-3">Tanggal Terdaftar</th>
                            <th class="px-6 py-3">Alamat</th>
                            <th class="px-6 py-3">Nomor HP</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($barangs as $barang)
                            <tr class="bg-red-100 border-b border-red-300">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">{{ $loop->iteration }}</div>
                                </td>
                                <th scope="row"
                                    class="flex items-center px-6 py-4 text-red-900 whitespace-nowrap dark:text-red-700">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $barang->nama_barang }}</div>
                                        <div class="font-normal text-red-500">{{ $barang->stok }}</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4 text-red-700 dark:text-red-700">
                                    {{ $barang->kadaluarsa->format('d-m-Y') }}
                                </td>
                                <td class="px-6 py-4 text-red-700 dark:text-red-700">
                                    {{ $barang->harga_jual }}
                                </td>
                                <td class="px-6 py-4 text-red-700 dark:text-red-700">
                                    {{ $barang->harga_beli }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> <span
                                            class ="text-red-700">{{ $barang-> }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-red-100 dark:text-red-700 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-red-200 dark:border-red-500 border-red-200">
                                <td colspan="7" class="px-6 py-4 text-center text-red-700 dark:text-red-400">
                                    Tidak ada data barang yang ditemukan.
                                </td>
                            </tr>
                        @endforelse
                        
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
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">Previous</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-white bg-red-800 border border-red-600 rounded-lg hover:bg-red-700">1</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">2</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">3</a>
                <a href="#"
                    class="px-3 py-1 text-sm font-medium text-red-600 bg-white border border-red-400 rounded-lg hover:bg-red-100">Next</a>
            </nav>
        </div>
    </section>
</x-app-layout>
