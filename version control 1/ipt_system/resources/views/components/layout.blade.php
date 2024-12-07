<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    
<div class="min-h-full">
  <nav class="bg-green-700">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            
            <img class="h-8 w-8 mr-3" src="{{ asset('logo.jpg') }}" alt="Your Photo">
          </div>
          <div class="hidden md:block">
            <div>
                <h1>Eastwoods Professional College of Science & Technology </h1>
            </div>
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              
               
            </div>
          </div>
        </div>
        <div class="hidden md:block">
                <a href = "/" class="{{ request()->is('/') ? 'bg-green-500 ' : ' hover:bg-green-600 hover:text-white '}} rounded-md  
                    px-3 py-2 text-sm font-medium text-white">home</a>
                <a href = "/about" class="{{ request()->is('about') ? 'bg-green-500 ' : ' hover:bg-green-600 hover:text-white '}}rounded-md  
                    px-3 py-2 text-sm font-medium text-white">About</a>
                <a href = "/program" class="{{ request()->is('program') ? 'bg-green-500 ' : ' hover:bg-green-600 hover:text-white '}}rounded-md  
                    px-3 py-2 text-sm font-medium text-white">Program</a>
                <a href = "/admission" class="{{ request()->is('admission') ? 'bg-green-500 ' : ' hover:bg-green-600 hover:text-white '}}rounded-md  
                    px-3 py-2 text-sm font-medium text-white">Admission</a>
        </div>
       
    </div>
    </nav>

  {{$slot}}  
</div>
       
  <main>
    
   </main>
 </div>
 
 </body>
 </html>
  