<div class="prompts content flex-grow flex flex-col mt-12 pb-28 h-[600px] items-center overflow-y-auto">
    <div class="ml-48 flex-col w-[820px]">
        <!-- customer questions -->
        <div class="flex gap-0 items-start mb-5">
                    <img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">
            <p class="text-left font-nunito text-base text-wrap">Lorem ipsum dolor sit amet.</p>
        </div>

        <!-- fiori response -->
        <div class="flex gap-2 items-start mb-5">
                    <img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">
            <p class="text-left font-nunito text-base text-wrap">Lorem, ipsum dolor.</p>
        </div>
    
    <!-- customer questions -->
        <div class="flex gap-0 items-start mb-5">
                    <img src="{{ asset('assets/profile.svg') }}" alt="" class="w-12 pr-1.5">
            <p class="text-left font-nunito text-base text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam rem voluptas incidunt laudantium! Error excepturi sed repellendus corporis exercitationem ut ipsam. Nisi facere neque officiis voluptatum commodi. Quia, a fugit! Tenetur minima distinctio ipsum alias sunt, dignissimos commodi excepturi voluptatum neque, nostrum nulla vero iusto suscipit earum? Dicta, nesciunt sapiente.</p>
        </div>
   
        <!-- response from fiori -->
        <div class="flex gap-2 mb-5 items-start">
            <img src="{{ asset('assets/Fiori.svg') }}" alt="" class="w-10">
            <div class="">
                <p class="text-left font-nunito text-base text-wrap mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam rem voluptas incidunt laudantium! Error excepturi sed repellendus corporis exercitationem ut ipsam. Nisi facere neque officiis voluptatum commodi. Quia, a fugit! Tenetur minima distinctio ipsum alias sunt, dignissimos commodi excepturi voluptatum neque, nostrum nulla vero iusto suscipit earum? Dicta, nesciunt sapiente.</p>
                <div class="dropdown">
                    <ul class="flex flex-col gap-4">
                        <li>
                            <details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">
                                <summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">
                                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                    <span class="text-custom-blue font-nunito text-base font-medium">Answer Recommendations</span>
                                </summary>

                                <article class="px-4 pb-4 flex flex-col justify-between text-justify w-full text-sm">
                                <p class="text-green-400 font-bold mb-1">Soft Answer:</p>
                                    <a href="" class="border border-green-400 p-4 rounded-md cursor-pointer hover:bg-[#E3F0F8]">
                                        <ul class=" pl-2 list-disc">
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, molestias.</li>
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, accusantium!</li>
                                        </ul>
                                    </a>
                                    <p class="text-blue-400 font-bold mt-3 mb-1">Neutral Answer:</p>
                                    <a class="border border-blue-400 p-4 rounded-md cursor-pointer hover:bg-[#E3F0F8]">
                                        <ul class="pl-2 list-disc">
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, molestias.</li>
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, accusantium!</li>
                                        </ul>
                                    </a>
                                    <p class="text-red-400 font-bold mt-3 mb-1">Straight Answer:</p>
                                    <a class="border border-red-400 p-4 rounded-md cursor-pointer hover:bg-[#E3F0F8]">
                                        <ul class="pl-2 list-disc">
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, molestias.</li>
                                            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, accusantium!</li>
                                        </ul>
                                    </a>
                                </article>
                            </details>
                        </li>
                        <li>
                            <details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">
                                <summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">
                                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                    <span class="text-custom-blue font-nunito text-base font-medium">Question summarized</span>
                                </summary>

                                <article class="px-4 pb-4 text-sm">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et ipsum sapien. Vestibulum molestie
                                        porttitor augue vitae vulputate. Aliquam nec ex maximus, suscipit diam vel, tristique tellus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa officiis blanditiis placeat repudiandae eum ab modi itaque dignissimos ex perferendis. Officia dolores obcaecati magnam deleniti quod incidunt repellat odio. Itaque illum animi doloribus, nihil temporibus sunt. Ea, a, nesciunt alias quidem, aliquam aspernatur dolorum nulla delectus recusandae explicabo nam minus perspiciatis sed. Delectus excepturi quam magni quo laboriosam minima consequuntur iste a suscipit et ea vitae enim molestias tempora, nostrum eveniet animi, reprehenderit non earum obcaecati. Unde, ab id. Numquam perspiciatis ipsam at obcaecati vero velit est eius praesentium ipsa debitis repellendus eos necessitatibus soluta suscipit, architecto repudiandae iusto optio!
                                    </p>
                                </article>
                            </details>
                        </li>
                        <li>
                            <details class="group rounded-md bg-[#E9F5FC]" style="box-shadow: 2px 4px 12px 0px rgba(181, 184, 185, 0.14);">
                                <summary class="flex items-center gap-3 px-3 py-3 font-medium marker:content-none hover:cursor-pointer">
                                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" class="fill-[#C9CCCE]" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                    <span class="text-custom-blue font-nunito text-base font-medium">Sentiment analysis</span>
                                </summary>

                                <article class="px-4 pb-4 flex justify-between text-sm">
                                    <p class="text-green-400 font-bold w-2/4">Happy 😊 : 70% <br> <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dicta!</span></p> 
                                    <p class="text-blue-400 font-bold w-2/4">Neutral 😊 : 10% <br> <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, natus?</span></p> 
                                    <p class="text-red-400 font-bold w-2/4">Angry 😊 : 20% <br>  <span class="font-normal text-custom-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nam.</span></p> 
                                </article>
                            </details>
                        </li> 

                    </ul>
                </div>
            </div>
         
        
        </div>

        
    </div>
</div>