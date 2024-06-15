<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiori</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/Fiori.svg') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="bg-gradient-to-r from-[#EEF2F5] to-[#E7F5FF]">
    <section class="flex flex-row min-h-screen">

        <x-acc-navbar page="fiori" />

        <!-- Content area -->
        {{-- <x-with-content page="fiori" /> --}}
        <div class="prompts content flex-grow flex flex-col mt-12 pb-28 h-[600px] items-center overflow-y-auto">
            <div class="ml-48 flex-col w-[820px]">
                <!-- customer questions -->
                <div class="prompt flex gap-0 items-start mb-5">
                    <img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">
                    <p class="text-left font-nunito text-base text-wrap">Lorem ipsum dolor sit amet.</p>
                </div>

                <!-- fiori response -->
                <div class="response flex gap-2 items-start mb-5">
                    <img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">
                    <p class="text-left font-nunito text-base text-wrap">Lorem, ipsum dolor.</p>
                </div>

                <!-- customer questions -->
                <div class="prompt flex gap-0 items-start mb-5">
                    <img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">
                    <p class="text-left font-nunito text-base text-wrap">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Magnam rem voluptas incidunt laudantium! Error excepturi sed repellendus
                        corporis exercitationem ut ipsam. Nisi facere neque officiis voluptatum commodi. Quia, a fugit!
                        Tenetur minima distinctio ipsum alias sunt, dignissimos commodi excepturi voluptatum neque,
                        nostrum nulla vero iusto suscipit earum? Dicta, nesciunt sapiente.</p>
                </div>

                <!-- response from fiori -->
                <div class="response flex gap-2 mb-5 items-start">
                    <img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">
                    <div class="">
                        <p class="text-left font-nunito text-base text-wrap mb-2">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Magnam rem voluptas incidunt laudantium! Error excepturi sed
                            repellendus corporis exercitationem ut ipsam. Nisi facere neque officiis voluptatum commodi.
                            Quia, a fugit! Tenetur minima distinctio ipsum alias sunt, dignissimos commodi excepturi
                            voluptatum neque, nostrum nulla vero iusto suscipit earum? Dicta, nesciunt sapiente.</p>
                        <div class="dropdown">
                            <ul class="flex flex-col gap-4">
                                <li>
                                    <details class="group rounded-md bg-[#E9F5FC]"
                                        style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">
                                        <summary
                                            class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">
                                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                class="fill-[#C9CCCE]" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                            <span class="text-custom-blue font-nunito text-base font-medium">Question summarized</span>
                                        </summary>

                                        <article class="px-4 pb-4 text-sm">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum
                                                sapien. Vestibulum molestie
                                                porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam
                                                vel, tristique tellus. Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Ipsa officiis blanditiis placeat repudiandae eum ab
                                                modi itaque dignissimos ex perferendis. Officia dolores obcaecati magnam
                                                deleniti quod incidunt repellat odio. Itaque illum animi doloribus,
                                                nihil temporibus sunt. Ea, a, nesciunt alias quidem, aliquam aspernatur
                                                dolorum nulla delectus recusandae explicabo nam minus perspiciatis sed.
                                                Delectus excepturi quam magni quo laboriosam minima consequuntur iste a
                                                suscipit et ea vitae enim molestias tempora, nostrum eveniet animi,
                                                reprehenderit non earum obcaecati. Unde, ab id. Numquam perspiciatis
                                                ipsam at obcaecati vero velit est eius praesentium ipsa debitis
                                                repellendus eos necessitatibus soluta suscipit, architecto repudiandae
                                                iusto optio!
                                            </p>
                                        </article>
                                    </details>
                                </li>
                                <li>
                                    <details class="group rounded-md bg-[#E9F5FC]"
                                        style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">
                                        <summary
                                            class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">
                                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                class="fill-[#C9CCCE]" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                            <span class="text-custom-blue font-nunito text-base font-medium">Sentiment
                                                analysis</span>
                                        </summary>

                                        <article class="px-4 pb-4 flex justify-between text-sm">
                                            <p class="text-green-400 font-bold w-2/4">Happy 😊 : 70% <br> <span
                                                    class="font-normal text-custom-black">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Amet, dicta!</span></p>
                                            <p class="text-blue-400 font-bold w-2/4">Neutral 😊 : 10% <br> <span
                                                    class="font-normal text-custom-black">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Labore, natus?</span></p>
                                            <p class="text-red-400 font-bold w-2/4">Angry 😊 : 20% <br> <span
                                                    class="font-normal text-custom-black">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Saepe, nam.</span></p>
                                        </article>
                                    </details>
                                </li>

                            </ul>
                        </div>
                    </div>


                </div>


            </div>
        </div>



        <!-- Form section -->
        <div class="w-full flex justify-center fixed bottom-10 right-0 left-28">
            <form id="form-prompt" action="/fiori" method="POST">
                @csrf
                <div class="flex flex-row gap-3">
                    <input type="text" id="prompt" name="prompt"
                        class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-base w-[720px] placeholder:text-custom-blue text-wrap"
                        placeholder="Insert message here" />
                    <button type="submit" id="ask"
                        class="px-[16px] py-[8px] flex justify-center font-nunito text-base text-custom-white bg-custom-blue rounded-md"
                        style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script src="{{ asset('js/fioriopenai.js') }}"></script>


    <script>
        $(document).ready(function() {
            $("#form-prompt").submit(function(event) {
                event.preventDefault();

                var promptValue= $("#prompt").val();
                $("#prompt").prop('disabled', true);
                $("#ask").prop('disabled', true);

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    data: {
                        "prompt": $("#prompt").val()
                    }
                }).done(function(res) {
                    
                    //populate sending prompt
                    var newPrompt =
                        '<div class="prompt flex gap-0 items-start mb-5">' +
                        '<img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">' +
                        '<p class="text-left font-nunito text-base text-wrap">' +
                        promptValue +
                        '</p>' +
                        '</div>';
                    $('.response:last').after(newPrompt);


                    //populate response
                    var newResponse =
                        '<div class="response flex gap-2 mb-5 items-start">' +
                        '<img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">' +
                        '<div class="">' +
                        '<p class="text-left font-nunito text-base text-wrap mb-2">' +
                        res+
                        '</p>' +
                        '<div class="dropdown">' +
                        '<ul class="flex flex-col gap-4">' +
                        '<li>' +
                        '<details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">' +
                        '<summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">' +
                        '<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">' +
                        '<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>' +
                        '</svg>' +
                        '<span class="text-custom-blue font-nunito text-base font-medium">Question summarized</span>' +
                        '</summary>' +
                        '<article class="px-4 pb-4 text-sm">' +
                        '<p>' +
                        'testadsadsa'+
                        '</p>' +
                        '</article>' +
                        '</details>' +
                        '</li>' +
                        '<li>' +
                        '<details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">' +
                        '<summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">' +
                        '<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">' +
                        '<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>' +
                        '</svg>' +
                        '<span class="text-custom-blue font-nunito text-base font-medium">Sentiment analysis</span>' +
                        '</summary>' +
                        '<article class="px-4 pb-4 flex justify-between text-sm">' +
                        '<p class="text-green-400 font-bold w-2/4">Happy 😊 : 70% <br> <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dicta!</span></p>' +
                        '<p class="text-blue-400 font-bold w-2/4">Neutral 😊 : 10% <br> <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, natus?</span></p>' +
                        '<p class="text-red-400 font-bold w-2/4">Angry 😊 : 20% <br> <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nam.</span></p>' +
                        '</article>' +
                        '</details>' +
                        '</li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>' +
                        '</div>';


                    $('.prompt:last').after(newResponse);
                
                    //empty the prompt
                    $("#prompt").val('');


                    // Re-enable the form elements
                    $("#prompt").prop('disabled', false);
                    $("#ask").prop('disabled', false);
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("error, request failed");
                    // Re-enable the form elements
                    $("#prompt").prop('disabled', false);
                    $("#ask").prop('disabled', false);
                });
            });
        });
    </script>
</body>

</html>
