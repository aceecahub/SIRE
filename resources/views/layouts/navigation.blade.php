 <header
     class="flex fixed top-0 left-0 right-0 w-full h-16 bg-blue-500 text-white justify-end items-center pr-5 pl-[300px] py-5 shadow">
     <div>
         Echa Muhammad Roffy Yandi
     </div>
 </header>

 {{-- Navigasi Laptop --}}
 <aside class="hidden md:block bg-white font-semibold w-[280px] h-screen absolute left-0 top-0 shadow p-5">
     <div class="font-bold pb-5 text-center">
         RE Mart
     </div>
     <div class="border border-gray-400"></div>
     <div class=" rounded-full px-5 py-3 mt-5 {{ request()->is('dashboard') ? 'bg-blue-500 text-white' : 'hover:bg-gray-100' }}">
         <a href="/dashboard">
             <p><i class="bi bi-cash"></i>Dashboard</p>
         </a>
     </div>

     
     <div class=" rounded-full px-5 py-3 mt-5 {{ request()->is('karyawan') ? 'bg-blue-500 text-white' : 'hover:bg-gray-100' }}">
         <a href="/karyawan">
             <p><i class="bi bi-cash"></i>Karyawan</p>
         </a>
     </div>


     <div class=" rounded-full px-5 py-3 mt-5 {{ request()->is('kategori') ? 'bg-blue-500 text-white' : 'hover:bg-gray-100' }}">
         <a href="/">
             <p><i class="bi bi-cash"></i>Kategori</p>
         </a>
     </div>

 </aside>

 {{-- Navigasi HP --}}
 <aside
     class=" md:hidden fixed bottom-0 left-0 right-0 h-16 z-20 flex shadow bg-white justify-around items-center">
     <div>
         <a href="/dashboard" class="flex flex-col items-center">
             <i class="bi bi-cash text-2xl"></i>
             <p class="text-sm -mt-1">Keuangan</p>
         </a>
     </div>
     <div>
         <a href="/kategori" class="flex flex-col items-center">
             <i class="bi bi-grid-fill text-2xl"></i>
             <p class="text-sm -mt-1">Kategori</p>
         </a>
     </div>
     <div>
         <a href="/profile" class="flex flex-col items-center">
             <i class="bi bi-person-fill text-2xl"></i>
             <p class="text-sm -mt-1">Profile</p>
         </a>
     </div>
     <div>
         <a href="" class="flex flex-col items-center">
             <i class="bi bi-box-arrow-left text-2xl"></i>
             <p class="text-sm -mt-1">Logout</p>
         </a>
     </div>
 </aside>