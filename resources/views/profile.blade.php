<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Fiori.svg') }}">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<section class="bg-gradient-to-r from-[#EEF2F5] to-[#E7F5FF]">
    <form class="flex flex-col justify-center items-center h-screen w-screen" method="POST" action="{{ route('signup') }}">
      @csrf
      <div class="flex flex-col gap-2">
        <div class="flex flex-col items-center w-full">
          <img src="{{ asset('assets/Fiori.svg') }}" alt="">
        </div>
        <h1 class="font-nunito text-3xl font-medium text-custom-black">Profile</h1>
        <div class="flex flex-col items-start w-full">
            <label for="name" class="block font-nunito text-base text-custom-black">Name</label>
            <span class="text-custom-blue font-nunito text-base font-medium">Jenenge Wong</span>
        </div> 
        <div class="flex flex-col items-start w-full">
            <label for="phone" class="block font-nunito text-base text-custom-black">Phone number</label>
            <span class="text-custom-blue font-nunito text-base font-medium">+62 084714153957</span>
        </div> 
        <div class="flex flex-col items-start w-full">
            <label for="email" class="block font-nunito text-base text-custom-black">Email</label>
            <span class="text-custom-blue font-nunito text-base font-medium">perisaitimun7@gmail.com</span>
        </div> 
        <button id="continueButton" class="mt-2 w-full py-[8px] flex justify-center font-nunito text-base text-custom-white bg-custom-red rounded-md hover:bg-[#DF5151] disabled:opacity-50 disabled:cursor-not-allowed" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);">
            Sign out
        </button>
      </div>
    </form>

</section>

<script src="{{ asset('js/signup.js') }}"></script>    
</body>
</html>