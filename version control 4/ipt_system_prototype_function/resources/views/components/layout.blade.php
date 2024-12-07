<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPCST</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('pic-resources.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="h-full">
    
<div class="min-h-full">
  <nav class="bg-green-800">
    <div class=" px-4 sm:px-6 lg:px-8 flex h-20 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <img class="h-14 w-14 mr-3" src="{{ asset('logo.png') }}" alt="Your Photo">
        </div>
        <div>
          <h1 class="text-white text-xl ">Eastwoods Professional College of Science & Technology</h1>
          
        </div>
      </div>
      <div class="flex space-x-4">
        <a href="/" class="{{ request()->is('/') ? 'bg-green-600  ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white "><span class="text-xl">Home</span></a>
        <a href="/about" class="{{ request()->is('about') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">About</span></a>
        <a href="/program" class="{{ request()->is('program') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Program</span></a>
        <a href="/admission" class="{{ request()->is('admission') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Admission</span></a>
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Dashboard</span></a>
        <a href="/resources" class="{{ request()->is('resources') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Resources</span></a>
        <a href="/contact" class="{{ request()->is('contact') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Contact Us</span></a>
        @auth
         
            <a href="{{route('logout')}}" class="{{ request()->is('logout') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl"  >Logout</a>
          
          @else
         
            <a  href="{{route('login')}}" class="{{ request()->is('login') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl">Login</a>
          
        
          
            <a href="{{route('registration')}} "class="{{ request()->is('registratiobn') ? 'bg-green-600 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md px-3 py-2 text-sm font-medium text-white"><span class="text-xl ">Registration</a>
          
        @endauth
        @auth
        <div class="text-white bg-blue-700 hover:bg-blue-800  font-medium 
              rounded-lg text-sm p-3  dark:bg-blue-600 dark:hover:bg-blue-700  
              "><span class="text-lg">
               
                  {{auth()->user()->name}}
               
            </span>
          </div> @endauth
              
            
          
        
      </div>
    </div>
  </nav>
  


  {{$slot}}  


 
</div>
       
  <main>
    
   </main>
 </div>
 

 <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
 <x-footer />
 </body>
 </html>
  