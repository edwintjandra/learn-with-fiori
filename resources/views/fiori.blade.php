<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiori</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Fiori.svg') }}">
</head>
<body class="bg-gradient-to-r from-[#EEF2F5] to-[#E7F5FF]">
<section class="flex flex-row min-h-screen">

<x-acc-navbar page="fiori" />

    <!-- Content area -->
    <x-with-content page="fiori" />


    <!-- Form section -->
    <div class="w-full flex justify-center fixed bottom-10 right-0 left-28">
            <form action="">
                <div class="flex flex-row gap-3">
                    <input type="text" id="prompt" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-base w-[720px] placeholder:text-custom-blue text-wrap" placeholder="Insert message here"/>
                    <button id="ask" class="px-[16px] py-[8px] flex justify-center font-nunito text-base text-custom-white bg-custom-blue rounded-md hover:bg-custom-hover disabled:opacity-50 disabled:cursor-not-allowed" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);" disabled>
                    Send
                    </button>
                </div> 
            </form>
        </div>
</section>

<script src="{{ asset('js/fiori.js') }}"></script>  

</body>
</html>