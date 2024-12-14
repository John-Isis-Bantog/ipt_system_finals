<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EPCST</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
</head>
<body>
<nav class="bg-green-800">
  <div class="mx-auto  px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button id="menu-toggle" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    
      <div class="flex flex-1 items-center lg:justify-between sm:items-stretch sm:justify-between ">
      <div class="flex w-full justify-center items-center">
    <div class="flex items-center">
        <img class="h-14 w-14 mr-3" src="{{ asset('logo.png') }}" alt="Your Photo">
        <h1 class="text-white text-lg">EPCST</h1>
    </div>
</div>

    
    <div class="hidden sm:ml-6 sm:block lg:flex lg:justify-end">
        <div class="flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                <span class="text-xl">Home</span>
            </a>
            <a href="/about" class="{{ request()->is('about') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                <span class="text-xl">About</span>
            </a>
            <a href="/program" class="{{ request()->is('program') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                <span class="text-xl">Program</span>
            </a>
            <a href="/admission" class="{{ request()->is('admission') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                <span class="text-xl">Admission</span>
            </a>
            <a href="/contact" class="{{ request()->is('contact') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                <span class="text-xl">Contact Us</span>
            </a>
            @auth
                <a href="{{ route('logout') }}" class="{{ request()->is('logout') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                    <span class="text-xl">Logout</span>
                </a>
            @else
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                    <span class="text-xl">Login</span>
                </a>
                <a href="{{ route('registration') }}" class="{{ request()->is('registration') ? 'bg-green-600' : 'hover:bg-green-600 hover:text-white' }} rounded-md flex items-center justify-center px-3 py-2 text-md font-medium text-white">
                    <span class="text-xl">Register</span>
                </a>
            @endauth
        </div>
    </div>
</div>

      <div class=" inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      @auth
            <div class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-md p-3 dark:bg-blue-600 dark:hover:bg-blue-700 flex items-center justify-center">
                <span class="text-lg">{{ auth()->user()->name }}</span>
            </div>
        @endauth
       
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/" class="block {{ request()->is('/') ? 'bg-green-600  ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white "><span class="text-xl">Home</span></a>
            <a href="/about" class="block {{ request()->is('about') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl">About</span></a>
            <a href="/program" class="block {{ request()->is('program') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl">Program</span></a>
            <a href="/admission" class="block {{ request()->is('admission') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl">Admission</span></a>
            <a href="/contact" class="block {{ request()->is('contact') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl">Contact Us</span></a>
        @auth
         
            <a href="{{route('logout')}}" class=" block {{ request()->is('logout') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl"  >Logout</a>
          
          @else
         
            <a  href="{{route('login')}}" class="block {{ request()->is('login') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-md font-medium text-white"><span class="text-xl">Login</a>
          
        
          
            <a  href="{{route('registration')}}" class=" block {{ request()->is('registration') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 font-medium text-white"><span class="text-xl">Register</a>
          
        @endauth
       
    </div>
  </div>
</nav>
{{$slot}}  


<x-footer />
<script src="{{ asset('script/script.js') }}"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
 <script>
  
  document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            var expanded = this.getAttribute('aria-expanded') === 'true';
            
            this.setAttribute('aria-expanded', !expanded);
            menu.classList.toggle('hidden');
            
            // Toggle the icon visibility
            var icons = this.querySelectorAll('svg');
            icons.forEach(function(icon) {
              icon.classList.toggle('hidden');
            });
          });
 </script>
</body>
</html>
