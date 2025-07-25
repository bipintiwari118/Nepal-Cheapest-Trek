 <header class="sticky top-0 z-50 bg-white shadow">
     <div class="container mx-auto  py-[25px] flex items-center justify-evenly">
         <!-- Logo -->
         <a href="#" class="text-2xl font-bold text-indigo-600">MyLogo</a>

         <!-- Desktop & Tablet Menu -->
         <nav class="hidden md:flex gap-10 items-center pl-[200px] text-[20px] font-[500]">
             <a href="#" class="text-gray-600 hover:text-indigo-600">Home</a>

             <!-- Destination Dropdown -->
             <div class="relative">
                 <button class="flex items-center text-gray-600 dropdown-toggle hover:text-indigo-600">
                     Destination
                     <svg class="ml-1 w-4 h-4 arrow transition-transform duration-300" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div
                     class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-md hidden dropdown-menu z-50 font-[400]">
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">Nepal</a>
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">India</a>
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">Bhutan</a>
                 </div>
             </div>

             <!-- Activity Dropdown -->
             <div class="relative">
                 <button class="flex items-center text-gray-600 dropdown-toggle hover:text-indigo-600">
                     Activity
                     <svg class="ml-1 w-4 h-4 arrow transition-transform duration-300" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div
                     class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-md hidden dropdown-menu z-50 font-[400]">
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">Trekking</a>
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">Hiking</a>
                     <a href="#" class="block px-4 py-2 hover:bg-gray-100">Climbing</a>
                 </div>
             </div>

             <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-600 hover:text-indigo-600">Contact</a>
         </nav>

         <!-- Hamburger -->
         <button id="menuBtn" class="md:hidden text-gray-700">
             <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
             </svg>
         </button>
     </div>

     <!-- Mobile Menu -->
     <div id="mobileMenu" class="md:hidden hidden bg-white border-t">
         <nav class="flex flex-col px-4 py-2 space-y-2">
             <a href="#" class="text-gray-700 hover:text-indigo-600">Home</a>

             <!-- Mobile Dropdown: Destination -->
             <div>
                 <button
                     class="w-full flex justify-between items-center text-gray-700 dropdown-toggle hover:text-indigo-600">
                     Destination
                     <svg class="w-4 h-4 arrow transition-transform duration-300" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div class="dropdown-menu hidden pl-4 mt-2 space-y-1">
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">Nepal</a>
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">India</a>
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">Bhutan</a>
                 </div>
             </div>

             <!-- Mobile Dropdown: Activity -->
             <div>
                 <button class="w-full flex justify-between items-center text-gray-700 dropdown-toggle">
                     Activity
                     <svg class="w-4 h-4 arrow transition-transform duration-300" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                     </svg>
                 </button>
                 <div class="dropdown-menu hidden pl-4 mt-2 space-y-1">
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">Trekking</a>
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">Hiking</a>
                     <a href="#" class="block text-gray-600 hover:text-indigo-600">Climbing</a>
                 </div>
             </div>

             <a href="#" class="text-gray-700 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-700 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-700 hover:text-indigo-600">Contact</a>
             <a href="#" class="text-gray-700 hover:text-indigo-600">Contact</a>

         </nav>
     </div>
 </header>
