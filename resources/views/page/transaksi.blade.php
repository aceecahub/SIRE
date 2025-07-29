<x-app-layout>
    {{-- Section 1 --}}
    <section class=" w-full h-screen bg-white md:pl-[220px] pr-[200px] p-[10px] pt-[80px]">

        <h3 class="text-red-900 text-3xl font-medium mb-2">Data Transaksi</h3>

        {{-- Tabel Barang --}}

        <section class="flex justify-between ">
            
            <section class="">
                <div
                    class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 p-2">
                    <div class="flex items-center space-x-3">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                    <tr class="gap-2">
                                        <th scope="col" class=" pl-5 py-3 rounded-s-lg">
                                            Nama Produk
                                        </th>
                                        <th scope="col" class="py-3">
                                            Qty
                                        </th>
                                        <th scope="col" class=" py-3">
                                            Diskon
                                        </th>
                                        <th scope="col" class=" py-3 rounded-e-lg">
                                            Harga
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white">
                                        <th scope="row"
                                            class="pl-2 break-words py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Nabati LAkdajsjklaied
                                        </th>
                                        <td class="px-3 py-4">
                                            1
                                        </td>
                                        <td class="py-4">
                                            Rp. 1000
                                        </td>

                                        <td class=" py-4">
                                            Rp. 2999
                                        </td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr class="font-semibold text-gray-900 dark:text-white">
                                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                                        <td class="px-3 py-3">3</td>
                                        <td class="px-3 py-3">Rp. 21,000</td>
                                        <td class="px-3 py-3">Rp .33,000</td>
                                    </tr>
                                    <tr class="font-semibold text-gray-900 dark:text-white">
                                        <th scope="row" class="px-6 py-3 text-base">Kembalian</th>

                                        <td class="px-6 py-3">33,000</td>
                                    </tr>
                                    
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Form Input Transaksi --}}
            <section class="p-2 pr-6">
                <div class="">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex items-center flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 p-5">
                            <div class="flex items-center space-x-4">

                                <div class="relative overflow-x-auto">
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label class="block text-sm font-medium">Tanggal Transaksi</label>
                                            <input type="date"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium">Kasir</label>
                                            <input type="text"
                                                class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                                placeholder="Kasir 1" />
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
                                                placeholder="Rp.  0"/>
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
                                                placeholder="Rp. 0 "/>
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
            </section>

        </section>
         {{-- <div class="flex mb-4">
            <div class="px-4 py-2">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h1 class="text-2xl font-bold mb-4">Record Transaksi</h1>

                    <div class="">
                        <table class="min-w-full border border-gray-300">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border border-gray-300 p-2">#</th>
                                    <th class="border border-gray-300 p-2">Kode</th>
                                    <th class="border border-gray-300 p-2">Nama Produk</th>
                                    <th class="border border-gray-300 p-2">Harga</th>
                                    <th class="border border-gray-300 p-2">Qty</th>
                                    <th class="border border-gray-300 p-2">Diskon</th>
                                    <th class="border border-gray-300 p-2">Total</th>
                                    <th class="border border-gray-300 p-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 p-2" colspan="8" class="text-center">Tidak ada
                                        item</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div> --}}


                <!-- Main Content -->
                {{-- <div class="min-w-0 flex-1 ml-2 ">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h1 class="text-2xl font-bold mb-4">Hitung </h1>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium">Tanggal Transaksi</label>
                            <input type="date" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Kasir</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="kasir 1" />
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium"> Kode Transaksi</label>
                            <div class="flex">
                                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                                <button class="ml-2 bg-blue-500 text-white rounded-md p-2">🔍</button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Qty</label>
                            <input type="number" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                value="1" />
                        </div>
                        <div class="flex items-end">
                            <button class="bg-green-500 text-white rounded-md p-2">+ Add</button>
                        </div>
                    </div>


                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium">Sub Total</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                value="0" readonly />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium">Discount</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                value="0" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Grand Total</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2"
                                readonly />
                        </div>
                    </div>

                    <div class="flex justify-between mt-4">
                        <button class="bg-red-500 text-white rounded-md p-2">Cancel</button>
                        <button class="bg-orange-500 text-white rounded-md p-2">Process Payment</button>
                    </div>
                </div>
            </div>
        </div> --}}


        </section>
</x-app-layout>
