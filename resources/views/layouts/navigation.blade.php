 <header
     class="flex fixed top-0 left-0 right-0 w-full h-16 bg-red-700  text-white items-center pr-5 pl-[100px] py-5 shadow">
     <div  class="flex items-center justify-center w-full">
         Superadmin
     </div>
 </header>

 {{-- Navigasi Laptop --}}
 <aside class= "flex justify-between ">
    <aside class="hidden md:block bg-white font-semibold w-[200px] h-screen fixed left-0 top-0 shadow p-5">
        <div class="font-bold pb-5 text-center">
            <img src="{{ asset('img/LOGORE.png') }}" alt="Logo" class="w-30 h-24 mx-auto">
                <h1 class="text-2xl"> RE-CHASIER</h1>
                <p class="text-sm">Superadmin</p>

        </div>
        <div class="border border-gray-400"></div>
        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('dashboard') ? 'bg-red-700 text-white' : 'hover:bg-red-200' }}">
            <a href="/dashboard">
                <p><i class="bi bi-cash"></i>Dashboard</p>
            </a>
        </div>

        {{-- Master Data --}}
        <ul id=" " class =""></ul>
        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('karyawan') ? 'bg-red-700 text-white' : 'hover:bg-red-200    ' }}">
            <a href="/karyawan">
                <p><i class="bi bi-cash"></i>Karyawan</p>
            </a>
        </div>
        
        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('pemasok') ? 'bg-red-700 text-white' : 'hover:bg-red-200    ' }}">
            <a href="/pemasok">
                <p><i class="bi bi-cash"></i>Pemasok</p>
            </a>
        </div>
        
        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('barang') ? 'bg-red-700 text-white' : 'hover:bg-red-200    ' }}">
            <a href="/barang">
                <p><i class="bi bi-cash"></i>Barang</p>
            </a>
        </div>

        


        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('kategori') ? 'bg-red-700 text-white' : 'hover:bg-red-200    ' }}">
            <a href="/kategori">
                <p><i class="bi bi-cash"></i>Kategori</p>
            </a>
        </div>

    </aside>

    {{-- Sidebar Kanan --}}
    <aside class="hidden md:block bg-white  font-semibold w-[200px] h-screen fixed right-0 top-0 shadow p-5">
        <div class="font-bold pb-5 text-center">
                <h1 class="text-2xl">Transaksi</h1>
                <p class="text-sm">Kasir</p>
        </div>
        <div class="border border-gray-400"></div>
        <div class=" rounded-full px-5 py-3 mt-5 my-1 pl-4 transitio-all duration-200 {{ request()->is('transaksi') ? 'bg-red-700 text-white' : 'hover:bg-red-200' }}">
            <a href="/transaksi">
                <p><i class="bi bi-cash"></i>Transaksi</p>
            </a>
        </div>

       

    </aside>

 </aside>


 
