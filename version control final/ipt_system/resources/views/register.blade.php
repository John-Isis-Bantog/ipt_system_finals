<x-layout>

    
    <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"style="background-image: url('building.jpg');">
  <div class="">
    <div class="mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ( $errors -> all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif


        @if (session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif

    </div>
  <div class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md xl:p-0 dark:bg-green-800 dark:border-gray-700">
  <!-- Centered image and text -->
  <div class="flex flex-col items-center">
  <div class="">
    <img class="w-36" src="{{ asset('logo.png') }}" alt="Your Photo">
  </div>
  <div class="text-white pt-10 text-center"> 
    <h1 class="text-2xl text-black">
    Eastwoods Professional College of Science & Technology
    </h1>
   
  </div>
</div>

  <!-- Other contents -->
  <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-center text-black ">
      Create an Account
    </h1>
    <form class="space-y-4 md:space-y-6" action="{{route('registration.post')}} " method="post">
    @csrf
    <div>
        <label for="email" class="block mb-2  font-medium  ">Enter Your Name</label>
        <input type="text" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
      </div>
      <div>
        <label for="email" class="block mb-2  font-medium  ">Your email</label>
        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com" required>
      </div>
      <div>
        <label for="password" class="block mb-2  font-medium text-gray-900 ">Password</label>
        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <button type="submit" class="w-full text-white dark:bg-blue-700 dark:hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mt-5 bg-green-800">Sign Up</button>
      </div>
     
    </form>
  </div>
</div>

  </div>
</section>
</x-layout>



