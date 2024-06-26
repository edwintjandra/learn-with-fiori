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
    <form class="flex flex-col gap-2 justify-center items-center h-screen w-screen" method="POST" action="{{ route('signup') }}">
        @csrf
        <img src="{{ asset('assets/Fiori.svg') }}" alt="">
        <h1 class="font-nunito text-3xl font-medium text-custom-black">Sign up</h1>
        <div class="flex flex-col gap-1">
            <label for="name" class="block font-nunito text-base text-custom-black">Name</label>
            <input type="text" id="name" name="name" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm w-[360px] placeholder:text-custom-blue" placeholder="Enter your name"/>
            <p class="text-custom-red font-nunito text-sm hidden" id="nameError">Name Invalid!</p>
        </div> 
        <div class="flex flex-col gap-1">
            <label for="email" class="block font-nunito text-base text-custom-black">Email</label>
            <input type="email" id="email" name="email" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm w-[360px] placeholder:text-custom-blue" placeholder="Enter your email"/>
            <p class="text-custom-red font-nunito text-sm hidden" id="emailError">Email Invalid!</p>
        </div> 
        <div class="flex flex-col gap-1">
            <label for="phone" class="block font-nunito text-base text-custom-black">Phone Number</label>
            <input type="tel" id="phone" name="phonenumber" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm w-[360px] placeholder:text-custom-blue" placeholder="Enter your phone number"/>
            <p class="text-custom-red font-nunito text-sm hidden" id="phoneError">Phone Number Invalid!</p>
        </div> 
        <div class="flex flex-col gap-1">
            <label for="password" class="block font-nunito text-base text-custom-black">Password</label>
            <div class="relative">
               <input type="password" id="password" name="password" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm w-[360px] placeholder:text-custom-blue" placeholder="Enter your password">
               <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 focus:outline-none">
                   <img id="passwordIcon" src="/assets/eye-close.svg" class="h-5 w-5 text-gray-500">
               </button>
            </div>
            <p class="text-custom-red font-nunito text-sm hidden" id="passwordError">Password Invalid!</p>
        </div> 
        <div class="flex flex-col gap-1">
            <label for="cpassword" class="block font-nunito text-base text-custom-black">Confirm Password</label>
            <div class="relative">
               <input type="password" id="cpassword" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm w-[360px] placeholder:text-custom-blue" placeholder="Enter your password">
               <button type="button" id="ctogglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 focus:outline-none">
                   <img id="cpasswordIcon" src="/assets/eye-close.svg" class="h-5 w-5 text-gray-500">
               </button>
            </div>
            <p class="text-custom-red font-nunito text-sm hidden" id="cpasswordError">Password Not Match!</p>
        </div> 
        <button id="continueButton" class="mt-2 w-[360px] py-[8px] flex justify-center font-nunito text-base text-custom-white bg-custom-blue rounded-md hover:bg-custom-hover disabled:opacity-50 disabled:cursor-not-allowed" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);" disabled>
            Continue
        </button>
        <p class="font-nunito text-base text-custom-black font-normal">Already have an account? <span class="font-bold hover:text-custom-hover"><a href="{{ route('signinPage') }}"> Sign in</a></span></p>
    </form>

</section>

<script src="{{ asset('js/signup.js') }}"></script>    
</body>
</html>