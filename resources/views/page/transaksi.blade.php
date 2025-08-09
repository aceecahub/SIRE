<x-app-layout>

    {{-- section 2 --}}
    <section class="p-4 sm:ml-64 mt-16">
        <div class="flex justify-between gap-4 flex-wrap">
            <!-- Bagian Tabel Produk (Kiri) -->
            <div class="w-full lg:w-[58%] bg-white dark:bg-gray-800 rounded-md shadow p-4 overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Product</th>
                            <th class="px-6 py-3">Qty</th>
                            <th class="px-6 py-3">Price</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh satu baris -->
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Apple Watch</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <!-- Tombol kurang -->
                                    <button
                                        class="inline-flex items-center justify-center p-1 me-3 h-6 w-6 text-sm text-gray-500 border border-gray-300 rounded-full bg-white dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <!-- Input Jumlah -->
                                    <input type="number"
                                        class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="1" />
                                    <!-- Tombol tambah -->
                                    <button
                                        class="inline-flex items-center justify-center p-1 ms-3 h-6 w-6 text-sm text-gray-500 border border-gray-300 rounded-full bg-white dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">$599</td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Bagian Form Input (Kanan) -->
            <div class="w-full lg:w-[40%] bg-white dark:bg-gray-800 rounded-md shadow p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium">Tanggal Transaksi</label>
                        <input type="date" disabled
                            class="mt-1 block w-full bg-gray-300 text-gray-600 border border-gray-400 rounded-md p-2 cursor-not-allowed" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Kasir</label>
                        <input type="text" disabled
                            class="mt-1 block w-full bg-gray-300 text-gray-600 border border-gray-400 rounded-md p-2 cursor-not-allowed" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Kode / Nama Barang</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Qty</label>
                        <input type="number" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="1 pcs" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Harga Barang</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Diskon</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Jumlah Harga</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Jumlah Diskon</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Section 1 --}}
    {{-- <section class="p-4 sm:ml-64">
        <!-- Container utama -->
        <div class="p-2 dark:border-gray-700 mt-14 space-y-8">

            <!-- Bagian Form Input -->
            <div class="bg-white dark:bg-gray-800 rounded-md shadow p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Baris 1 -->
                    <div>
                        <label class="block text-sm font-medium">Tanggal Transaksi</label>
                        <input type="date" disabled
                            class="mt-1 block w-full bg-gray-300 text-gray-600 border border-gray-400 rounded-md p-2 cursor-not-allowed" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Kasir</label>
                        <input type="text" disabled
                            class="mt-1 block w-full bg-gray-300 text-gray-600 border border-gray-400 rounded-md p-2 cursor-not-allowed" />
                    </div>

                    <!-- Baris 2 -->
                    <div>
                        <label class="block text-sm font-medium">Kode / Nama Barang</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Qty</label>
                        <input type="number" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="1 pcs" />
                    </div>

                    <!-- Baris 3 -->
                    <div>
                        <label class="block text-sm font-medium">Harga Barang</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Diskon</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>

                    <!-- Baris 4 -->
                    <div>
                        <label class="block text-sm font-medium">Jumlah Harga</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Jumlah Diskon</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                            placeholder="Rp. 0" />
                    </div>
                </div>
            </div>

            <!-- Bagian Tabel Produk -->
            <div class="bg-white dark:bg-gray-800 rounded-md shadow p-4 overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Product</th>
                            <th scope="col" class="px-6 py-3">Qty</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row Produk 1 -->
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Apple Watch</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <!-- Tombol Kurang -->
                                    <button
                                        class="inline-flex items-center justify-center p-1 me-3 h-6 w-6 text-sm text-gray-500 border border-gray-300 rounded-full bg-white dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <!-- Input Jumlah -->
                                    <input type="number"
                                        class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="1" />
                                    <!-- Tombol Tambah -->
                                    <button
                                        class="inline-flex items-center justify-center p-1 ms-3 h-6 w-6 text-sm text-gray-500 border border-gray-300 rounded-full bg-white dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="w-3 h-3" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">$599</td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>

                        <!-- Tambahkan baris lainnya dengan struktur serupa -->
                    </tbody>
                </table>
            </div>
        </div>
    </section> --}}

    {{-- Form Input Transaksi --}}
    {{-- <section class="p-2 pr-2">
                <div class="">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex items-center flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 p-5">
                            <div class="flex items-center space-x-4">

                                <div class="relative overflow-x-auto">
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium">Tanggal Transaksi</label>
                                            <input type="date" id="tanggal-transaksi" name="tanggal_transaksi"
                                                disabled
                                                class="mt-1 block w-full text-gray-600 bg-gray-300 border border-gray-400 hover:cursor-not-allowed rounded-md p-2" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Kasir</label>
                                            <input type="text" id="" name="karyawan_id" disabled
                                                class="mt-1 block w-full bg-gray-300 text-gray-600 border border-gray-400 hover:cursor-not-allowed rounded-md p-2"
                                                placeholder="" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Kode / Nama Barang</label>
                                            <input type="input"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Qty</label>
                                            <input type="number"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="1 pcs" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Harga Barang</label>
                                            <input type="text"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Rp.  0" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Diskon</label>
                                            <input type="text"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Rp. 0 " />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Jumlah Harga</label>
                                            <input type="text"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Rp. 0 " />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Jumlah Diskon</label>
                                            <input type="text"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Rp. 0 " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const currentDate = `${yyyy}-${mm}-${dd}`;

        const inputTanggal = document.getElementById('tanggal-transaksi');
        if (inputTanggal) {
            inputTanggal.value = currentDate;
        }
    });
</script>
