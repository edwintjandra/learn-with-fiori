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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
</head>

<body class="bg-gradient-to-r from-[#EEF2F5] to-[#E7F5FF]">
    <section class="flex flex-row min-h-screen">

        <x-acc-navbar page="fiori" />
        
        <a href="" class="download fixed right-6 top-10 flex gap-5 font-nunito text-base text-custom-blue font-extrabold px-3 py-2 bg-[#333333] hover:bg-[#4B4D4E] rounded-md">
            <img src="{{ asset('assets/download.svg') }}" alt="">
            Download chat
        </a>

        <div class="prompts content flex-grow flex flex-col mt-12 pb-28 items-center overflow-y-auto h-[650px]">
            <div class="ml-48 flex-col w-[720px]">
                <!-- customer questions -->
                <div class="prompt flex gap-0 items-start mb-5">
                    <img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">
                    <div class="flex flex-col">
                        <p class="text text-left font-nunito text-base text-wrap">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique vel nulla esse laudantium debitis, quisquam dicta. Impedit natus eos cupiditate voluptatibus quia nihil tempore modi corporis adipisci doloremque sint aliquid laboriosam numquam fuga laborum hic amet, quam minima obcaecati consequuntur veritatis commodi? Repellendus maxime assumenda fugit, deserunt illum eligendi!</p>
                        <button class="copy-button text-custom-grey focus:outline-none mt-1 flex text-sm gap-2">
                        Recieved 16:50 - 15/06/2024
                            <svg width="18" height="18" viewBox="0 0 24 24" class="fill-none hover:fill-custom-hover" xmlns="http://www.w3.org/2000/svg"><path opacity="0.16" d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="fill-[#66C2FF] hover:fill-custom-hover"/><path d="M16 3H4V16" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- response from fiori -->
                <div class="response flex gap-2 mb-5 items-start">
                    <img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">
                    <div class="">
                    <p class="text-custom-blue font-nunito text-base font-medium">Sentiment analysis</p>
                    <p class="text text-left font-nunito text-custom-black text-base text-wrap mb-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo similique vel nulla esse laudantium debitis, quisquam dicta. Impedit natus eos cupiditate voluptatibus quia nihil tempore modi corporis adipisci doloremque sint aliquid laboriosam numquam fuga laborum hic amet, quam minima obcaecati consequuntur veritatis commodi? Repellendus maxime assumenda fugit, deserunt illum eligendi!</p>
                    <p></p>
                        <form  class="flex flex-col gap-3 mb-4">
                        <p class="text-custom-blue font-nunito text-base font-medium -mb-3">Answer based on sentiment analysis</p>
                            @csrf
                            <textarea class="text-left w-[672px] bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-sm resize-none placeholder:text-custom-blue placeholder:opacity-70 text-wrap min-h-40" placeholder="Insert message"></textarea>
                            <button 
                                class="px-[16px] py-[8px] flex justify-center font-nunito text-base text-custom-white bg-custom-blue hover:bg-custom-hover rounded-md cursor-pointer" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);">
                                Send message
                            </button>
                        </form>
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
                                            <span class="text-custom-blue font-nunito text-base font-medium">
                                                Summary</span>
                                        </summary>

                                        <article class="px-4 pb-4 text-sm">
                                            <p>
                                                <ul class="list-disc">
                                                    Prompt Summary
                                                    <li>Numquam perspiciatis ipsam at obcaecati vero velit est eius praesentium ipsa debitis repellendus eos necessitatibus soluta suscipit, architecto repudiandae iusto optio!</li>
                                                    <li>Ipsa officiis blanditiis placeat repudiandae eum ab modi itaque dignissimos ex perferendis.
                                                    </li>
                                                    <li>Delectus excepturi quam magni quo laboriosam minima consequuntur iste a suscipit et ea vitae enim molestias tempora, nostrum eveniet animi, reprehenderit non earum obcaecati.
                                                    </li>

                                                    <br>

                                                    Response Summary
                                                    <li>Numquam perspiciatis ipsam at obcaecati vero velit est eius praesentium ipsa debitis repellendus eos necessitatibus soluta suscipit, architecto repudiandae iusto optio!</li>
                                                    <li>Ipsa officiis blanditiis placeat repudiandae eum ab modi itaque dignissimos ex perferendis.
                                                    </li>
                                                    <li>Delectus excepturi quam magni quo laboriosam minima consequuntur iste a suscipit et ea vitae enim molestias tempora, nostrum eveniet animi, reprehenderit non earum obcaecati.
                                                    </li>
                                                </ul>
                                               
                                            </p>
                                        </article>
                                    </details>
                                </li>
                                <!-- <li>
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
                                </li> -->
                                <li class="flex gap-4">
                                    <select name="translate" class="prompt-translate text-[#C9CCCE] hover:bg-[#4B4D4E] rounded-md font-nunito text-sm font-medium w-5/6 block px-3 py-3 bg-[#333333]">
                                        <option value="" selected disabled>Select languange</option>
                                        <option value="">Indonesia</option>
                                        <option value="">English</option>
                                        <option value="">Espanyol</option>
                                    </select>
                                    <button type="submit" id="ask"
                                        class="prompt-translate-submit px-[16px] py-[8px] flex justify-center items-center font-nunito  text-custom-blue text-base bg-[#333333] hover:bg-[#4B4D4E] rounded-md cursor-pointer w-1/6" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);">
                                        <img src="{{ asset('assets/translate.svg') }}" alt="" class="mr-2">Translate
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-center fixed bottom-10 right-0 left-24">
                    <form id="form-prompt" action="/fiori" method="POST">
                        <div class="flex flex-row gap-3 items-end">
                            @csrf
                            <input id="prompt" name="prompt"  type="text" class="bg-custom-bg-input border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-custom-black text-base w-[640px] placeholder:text-custom-blue text-wrap resize-none" placeholder="Insert message here"></input>
                            <button type="submit" id="prompt"  class="px-[16px] py-[8px] h-max flex justify-center font-nunito text-base text-custom-white bg-custom-blue rounded-md hover:bg-custom-hover disabled:opacity-50 disabled:cursor-not-allowed" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);" >
                            Send
                            </button>
                        </div> 
                    </form>
                </div>


            </div>
        </div>
    </section>

    <script src="{{ asset('js/fioriopenai.js') }}"></script>
    <script src="{{ asset('js/js-summarize/lib/lodash/lodash.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/js-summarize/lib/tokenizer/tokenizer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/js-summarize/js-summarize.js') }}" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
         
        
        
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const textToCopy = button.previousElementSibling.textContent.trim();
                console.log("cloick")
                navigator.clipboard.writeText(textToCopy)
            });
        });

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
                
                //sentiment analysis
                $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                data: {
                    "prompt": "provide sentiment analysis based on the question, choose one emotion and why you chose so, answer based on the question's language "+ promptValue
                }
                }).done(function(res2) {
                    
                

                //javascript summarizer class
                var summarizer = new JsSummarize({
                    returnCount: 5 // Request a summary of 3 sentences
                });

                //prompt summary
                var promptSummaryArray = summarizer.summarize("prompt summarize",promptValue);
                var ulPromptSummary = '<ul class="list-disc">';
                ulPromptSummary+='Prompt Summary';
                // Summarize the response
                promptSummaryArray.forEach(function(summary) {
                    ulPromptSummary += '<li>' + summary + '</li>';
                });

                ulPromptSummary+='</ul> </br>'; 

                //response summary
                var responseSummaryArray = summarizer.summarize("response summarizer",res);
                // Summarize the response
                var ulResponseSummary = '<ul class="list-disc">';
                ulResponseSummary+='Response Summary';

                responseSummaryArray.forEach(function(summary) {
                    ulResponseSummary += '<li>' + summary + '</li>';
                });

                ulResponseSummary += '</ul>'
                                    
                //populate sending prompt
                var newPrompt =
                    '<div class="prompt flex gap-0 items-start mb-5">'+
                        '<img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">'+
                        '<div class="flex flex-col">'+
                            '<p class="text text-left font-nunito text-base text-wrap">'+
                            promptValue +
                            '</p>'+
                            '<button class="copy-button text-custom-grey focus:outline-none mt-1 flex text-sm gap-2">'+
                            'Recieved 16:50 - 15/06/2024'+
                                '<svg width="18" height="18" viewBox="0 0 24 24" class="fill-none hover:fill-custom-hover" xmlns="http://www.w3.org/2000/svg"><path opacity="0.16" d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="fill-[#66C2FF] hover:fill-custom-hover"/><path d="M16 3H4V16" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'+
                                '</svg>'+
                            '</button>'+
                        '</div>'+
                    '</div>';
                $('.response:last').after(newPrompt);


                //populate response
                var newResponse =
                    '<div class="response flex gap-2 mb-5 items-start">' +
                        '<img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">' +
                        '<div class="">' +
                        '<p class="text-custom-blue font-nunito text-base font-medium">Sentiment analysis</p>'+
                        '<p class="text text-left font-nunito text-custom-black text-base text-wrap mb-2">'+
                        res2+
                        '</p>'+
                            '<div class="flex flex-col mb-3">' +
                                '<p class="response-text text-left w-[672px] bg-[#E8EAEC] border border-custom-grey pl-2 pr-[16px] py-[8px] rounded-md text-[#919394] text-sm resize-none text-wrap min-h-40">'+
                                res+
                                '</p>' +
                                '<button class="copy-button text-custom-grey focus:outline-none mt-1 flex text-sm gap-2">' +
                                    'Sent 16:50 - 15/06/2024' +
                                    '<svg width="18" height="18" viewBox="0 0 24 24" class="fill-none hover:fill-custom-hover" xmlns="http://www.w3.org/2000/svg">' +
                                        '<path opacity="0.16" d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="fill-[#66C2FF] hover:fill-custom-hover"/>' +
                                        '<path d="M16 3H4V16" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>' +
                                        '<path d="M8 7H20V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H10C9.46957 21 8.96086 20.7893 8.58579 20.4142C8.21071 20.0391 8 19.5304 8 19V7Z" class="stroke-[#919394] hover:stroke-[#66C2FF]" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>' +
                                    '</svg>' +
                                '</button>' +
                            '</div>' +
                            '<div class="dropdown">' +
                                '<ul class="flex flex-col gap-4">' +
                                    '<li>' +
                                        '<details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">' +
                                            '<summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">' +
                                                '<svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">' +
                                                    '<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>' +
                                                '</svg>' +
                                                '<span class="text-custom-blue font-nunito text-base font-medium">Summarized</span>' +
                                            '</summary>' +
                                            '<article class="px-4 pb-4 text-sm">' +
                                                '<p>' +
                                                ulPromptSummary+
                                                ulResponseSummary+
                                                '</p>' +
                                            '</article>' +
                                        '</details>' +
                                    '</li>' +
                                    '<li class="flex gap-4">' +
                                        '<select name="translate" class="prompt-translate text-[#C9CCCE] hover:bg-[#4B4D4E] rounded-md font-nunito text-sm font-medium w-5/6 block px-3 py-3 bg-[#333333]">' +
                                            '<option value="" selected disabled>Select language</option>' +
                                            '<option value="">Indonesia</option>' +
                                            '<option value="">English</option>' +
                                            '<option value="">Espanyol</option>' +
                                        '</select>' +
                                        '<button type="submit" id="ask" class="prompt-translate-submit px-[16px] py-[8px] flex justify-center items-center font-nunito text-custom-blue text-base bg-[#333333] hover:bg-[#4B4D4E] rounded-md cursor-pointer w-1/6" style="box-shadow: 2px 4px 12px 0px rgba(102, 194, 255, 0.24);">' +
                                            '<img src="{{ asset('assets/translate.svg') }}" alt="" class="mr-2">Translate' +
                                        '</button>' +
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
                })

            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log("error, request failed");
                // Re-enable the form elements
                $("#prompt").prop('disabled', false);
                $("#ask").prop('disabled', false);
            });
        });

        $('.download').click(function (e) {
            e.preventDefault();

            const promptSummary = $('.dropdown article').html().trim(); 
            const content = `
                <div style="padding: 10px;">
                    <p><strong>Customer Question:</strong></p>
                    <p>${$('.prompt .text').text().trim()}</p>
                    <p><strong>Response from Fiori:</strong></p>
                    <p>${$('.response .text').text().trim()}</p>
                    <p><strong>Prompt Summary:</strong></p>
                    <ul style="list-style-type: none; padding-left: 20px; margin-top: 5px;">${promptSummary}</ul>
                </div>
            `;

            html2pdf().from(content).save('chat.pdf');
        });



        });
    </script>
</body>

</html>