<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/lato.css">
</head>
<body>
    <div class="flex flex-col bg-white">
        <!-- desktop header -->
        <div class="hidden md:flex flex-row w-[100%]">
            <div class="w-[30%] pl-10">
                <a href=""><img src="/images/surround.jpg" alt="logo"></a>
            </div>
            <div class="flex flex-row justify-between items-center w-[50%] font-semibold">
                <a href="/" class="font-normal font-lato text-base">HOME</a>
                <a href="/#about" class="font-normal font-lato text-base">ABOUT US</a>
                <a href="/#pricing" class="font-normal font-lato text-base">PRICING</a>
                <a href="/gallery" class="font-normal font-lato text-base">GALLERY</a>
                <a href="/faq" class="font-normal font-lato text-base">FAQ</a>
                <a href="/contact" class="font-normal font-lato text-base">CONTACT US</a>
            </div>
            <div class="flex flex-row w-[30%] justify-center items-center pl-24">
                <a href="/booking"><div class="bg-[#F4845F] font-montserrat font-extrabold text-white px-8 py-1 rounded-2xl">BOOK NOW</div></a>
            </div>
        </div>

        <!-- mobile header -->
        <header  class="flex items-center justify-between p-4 bg-white md:hidden lg:hidden">
            <a href=""><img src="/images/surround.jpg" alt="Logo" class="h-16"></a>
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </button>
        </header>

        <nav id="menu" class="hidden flex flex-col items-start p-4 bg-white font-semibold ml-4">
                <a href="/" class="pb-2 text-black font-normal font-lato text-base ">HOME</a>
                <a href="/#about" class="py-2 text-black font-normal font-lato text-base">ABOUT US</a>
                <a href="/#pricing" class="py-2 text-black font-normal font-lato text-base">PRICING</a>
                <a href="/gallery" class="py-2 text-black font-normal font-lato text-base">GALLERY</a>
                <a href="/faq" class="py-2 text-black font-normal font-lato text-base">FAQ</a>
                <a href="/contact" class="py-2 text-black font-normal font-lato text-base">CONTACT US</a>
        </nav>

        <!-- /mobile header -->

        <form id="multiStepForm" class="w-full">
            <!-- Step 1 -->
            <div id="step1" class="flex step flex-col justify-center items-center w-full">
                <div class="bg-[#F4845F] lg:mt-0 mt-0 flex flex-col justify-center lg:w-[100%] w-[100%] py-7 lg:py-7 px-8 lg:px-16">
                    <div class="flex flex-row justify-between lg:mb-6">
                        <div>
                            <p class="text-white font-lato font-extrabold text-3xl lg:text-4xl mb-5">Booking</p>
                        </div>
                
                        <div class="flex justify-center items-center">
                            <a href="/">
                                <svg width="20" height="20" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="50" height="50" fill="url(#pattern0_1963_324)" />
                                    <defs>
                                        <pattern id="pattern0_1963_324" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_1963_324" transform="scale(0.0111111)" />
                                        </pattern>
                                        <image id="image0_1963_324" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB40lEQVR4nO2cS2rDQBBEtYpz8ijnyWLQhfK5RRmBDAaHENszPVXd9UDglal+SK0RGvWyGGOMMcYYY4wxxpgbAJwAvAP4Po7990lFFRTyA3gB8IFbNgCvCzkS+f8IyRdWNf8/QvKEVc1/R0hK2RL5HwhJJVsi/3F3bnicNvNuLpP/WPY8S5shu4PkC2tE2H2N2YMtso080S5+40dJdJjszpJ3PpeA0Cv60ka2kY7t4pq3UXlHB28jZCtljboUu7cRhYzyhYA4W5qCQJipC0yFgSjLEBgKBEGGEGYWiiqSZxaMapJnFI6qkiMFoLrkCBGw5LBH4DbgP7neeN/LoLOvdrsQlL2lkUwse0snmVB2XslEsvNLJpBdR/JE2fUkT5BdV3KgbEsOkG3J11h0AHDrSCH5Qt0WAi/vUkqud2bDj+AlJOc/s8EjOa9s8EnOJ5tYch7ZfjkbgLcbBOANNAF4S1gA3uQYgLftBsCwFw4EGYbCVCCIsnSFsTAQZnoK5oJAnC1dIRDImOazXwhlHTWvQ/2je6l5HcpjJKTmdWzCg1Fk5nU08VE/EvM6modXZRpnliW/xIC+LPklRk5myS8xRDVLfomxwFnyH6uRfen3dRyr0me/EM9vjDHGGGOMMcYYswRyBpias+umnbidAAAAAElFTkSuQmCC" />
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                
                    <div class="flex flex-col bg-white rounded-2xl mb-5 px-14 py-7 w-full">
                        <h1 class="mb-3 text-[#F4845F] text-2xl lg:text-3xl font-lato font-extrabold">Basic Information & Booking Details</h1>
                
                        <div class="flex flex-col">
                            <label for="name" class="mb-1 ml-5 font-lato font-normal text-sm">Full Name</label>
                            <input type="text"
                                class="rounded-full px-5 py-[8px] lg:py-[5px] border border-orange-300 placeholder:italic mb-3 lg:mb-5 lg:text-sm text-[9px]"
                                placeholder="Required for personalization and contact."
                                required>
                        </div>
                
                        <div class="flex flex-col">
                            <label for="number" class="mb-1 ml-5 font-lato font-normal text-sm">Contact Number</label>
                            <input type="text"
                                class="rounded-full border px-5 py-[8px] lg:py-[5px] border-orange-300 placeholder:italic mb-3 lg:mb-5 lg:text-sm text-[9px]"
                                placeholder="Needed for further communication or last-minute notification."
                                required>
                        </div>
                
                        <div class="flex flex-col">
                            <label for="email" class="mb-1 ml-5 font-lato font-normal text-sm">Email Address</label>
                            <input type="text"
                                class="rounded-full border px-5 py-[8px] lg:py-[5px] border-orange-300 placeholder:italic lg:text-sm text-[9px]"
                                placeholder="For sending booking confirmations and promotional offers."
                                required>
                        </div>

                        <div class="flex flex-col mt-3">
                            <label for="eventype" class="mb-1 ml-5 font-lato font-normal text-sm">Event Type (e.g., Wedding, Corporate Event, Birthday Party, etc)</label>
                            <input type="text"
                                class="rounded-full px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border border-orange-300 placeholder:italic mb-3 lg:mb-5"
                                placeholder="Allows us to prepare the appropriate setup and offers tailored to specific events."
                                required>
                        </div>

                        <div class="flex flex-col text-sm">
                            <label for="date" class="mb-1 ml-5 font-lato font-normal">Date of event</label>
                            <div class="flex flex-row w-full">
                                <input type="text"
                                    class="rounded-full border py-[8px] text-[10px] lg:text-sm px-5 lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                    placeholder="To check availability."
                                    required>
                            
                                <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-2 lg:ml-[1100px] ml-[240px] absolute">
                                    <rect width="26" height="26" fill="url(#pattern0_1963_359)"/>
                                    <defs>
                                    <pattern id="pattern0_1963_359" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1963_359" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_1963_359" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB2klEQVR4nO2cPW4CMRBGvyrkCGHDERPosjlhCBXJUSJotnKE5CIFKVx4ftbvSV+DRov8GM2KKSwBAAAAAAAAAMCNR0kHSSdJV0llpblK+pS0l7Sx/ul3kr4DSCjG+apnN+vkESWXP7JNOvsQ4LDFOa8Wok8BDlqcc7QQfQlw0OKcm4Pu/Pfla6V4nRfRQnQP6GgjEG0Eoo1AtBGINgLRRiDaCEQbgehRRY+W7ngfsAQJooVoeXchHS1/cYwO+UtlRgvR7h1X6Gi5SxpqdCyS3iRNNXP9LEt9GtHznWfPierTiN7eefZTovo0oqc7z35OVJ96dLwnqk8jeqmHa3lZRapPI7okD6KFaHl3IR0tf3GMDvlLZUZrQNHRdhHLWncd0XYRc+f67mTZRWw713cnyy5i6lzfnbXuLubG+u5k2UUs7Dq0irh19GjpjvcBS5AgWoiWdxfS0fIXl2Z0RNtFLI31aURH20XMjfVpREfbRWwb69OIjraLmBrr04iOtouYG+vTiI62i1ga69OIHi3d8T5gCRJEayWiuY5N+rEQzQWDsrlgcB9gPhbnvFiI3tSLUMugOUt6kBG7QWWf679LUzb11tnjyl+QF0kfdVyYdTIAAAAAAAAAgALzCyME6hDPk/p6AAAAAElFTkSuQmCC"/>
                                    </defs>
                                </svg>
                            </div>          
                        </div>
                    
                        <div class="flex flex-col text-sm">
                            <label for="date" class="mb-1 ml-5 font-lato font-normal">Event Start Time</label>
                            <div class="flex flex-row w-full">
                                <input type="text"
                                    class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                    placeholder="For scheduling purposes."
                                    required>
                            
                                <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mt-2 lg:ml-[1100px] ml-[240px] absolute">
                                    <rect width="26" height="26" fill="url(#pattern0_1963_360)"/>
                                    <defs>
                                    <pattern id="pattern0_1963_360" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1963_360" transform="scale(0.0111111)"/>
                                    </pattern>
                                    <image id="image0_1963_360" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>
                            </div>   
                        </div>
                
                        <div class="flex lg:flex-row flex-col justify-between mt-3 lg:mt-10">
                            <div class="flex flex-col font-lato font-normal">
                                <p>1 of 4</p>
                                <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="400" height="5" fill="#D9D9D9"/>
                                    <rect width="100" height="5" fill="#F4845F"/>
                                </svg>

                            </div>
                
                            <button type="button" onclick="nextStep()" class="rounded-full w-20 ml-[220px] lg:ml-0 px-7 py-1 lg:mt-0 mt-3 bg-[#F4845F] flex justify-center text-center text-white font-montserrat font-extrabold text-[12px]">NEXT</button>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Step 2 -->
            <div id="step2" class="step hidden flex flex-col justify-center items-center w-full">
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="bg-[#F4845F] lg:mt-0 mt-0 flex flex-col justify-center lg:w-full w-full py-7 lg:py-7 px-8 lg:px-14">
                        <div class="flex flex-row justify-between lg:mb-6">
                            <div>
                                <p class="text-white font-lato font-extrabold text-3xl lg:text-4xl mb-5">Booking</p>
                            </div>
                    
                            <div class="flex justify-center items-center">
                                <a href="/">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L15 15M15 5L5 15" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>                              
                                </a>
                            </div>
                        </div>
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 px-14 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-2xl lg:text-3xl font-lato font-extrabold">Location and Logistics</h1>                    
                            <div class="flex flex-col">
                                <label for="eventype" class="mb-1 ml-5 font-lato font-normal text-sm">Venue Address</label>
                                <input type="text"
                                    class="rounded-full px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border border-orange-300 placeholder:italic mb-5"
                                    placeholder="For planning logistics and assessing travel requirements."
                                    required>
                            </div>
                    
                            <div class="flex flex-col text-sm">
                                <label for="date" class="mb-1 ml-5 font-lato font-normal">Venue Type (Indoor, Outdoor, Garden, etc)</label>
                                <div class="flex flex-row w-full">
                                    <input type="text"
                                        class="rounded-full border py-[8px] text-[10px] lg:text-sm px-5 lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Helps in preparing necessary equipment and contingency plans."
                                        required>
                                    </div>          
                            </div>
                    
                            <div class="flex flex-col text-sm">
                                <label for="date" class="mb-1 ml-5 font-lato font-normal">Contact Person</label>
                                <div class="flex flex-row w-full">
                                    <input type="text"
                                        class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Point of contact on the day of the event"
                                        required>
                                </div>   
                            </div>
            
                            <div class="flex flex-col text-sm">
                                <label for="date" class="mb-1 ml-5 font-lato font-normal text-sm">Contact Person Phone Number</label>
                                <div class="flex flex-row w-full">
                                    <input type="text"
                                        class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Point of contact on the day of the event"
                                        required>       
                                </div>   
                            </div>

                            <div class="flex flex-col lg:mt-4 mt-0">
                                <label for="requests" class="mb-1 ml-5 font-lato font-normal text-sm">Special Instructions or Requests</label>
                                <textarea rows="10" class="rounded-2xl border border-orange-300 text-black py-2 px-5 text-[10px] placeholder:italic" 
                                placeholder="Field for anything specific the client needs, like theme-based props or accessibility considerations."></textarea>
                            </div>
                    
                            <div class="flex flex-col justify-center font-lato font-normal lg:flex-row w-full mt-10">
                                <div class="flex flex-col w-3/4">
                                    <p>2 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="400" height="5" fill="#D9D9D9"/>
                                        <rect width="200" height="5" fill="#F4845F"/>
                                    </svg>
                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-7 py-1 border border-[#f4845f] text-[#F4845F] bg-white font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button type="button" onclick="nextStep()" class="rounded-full lg:ml-5 ml-[120px] px-7 lg:w-[70%] py-1 bg-[#F4845F] text-white font-montserrat font-extrabold text-[12px]">NEXT</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Step 3 -->
            <div id="step3" class="step hidden flex flex-col justify-center items-center w-full">
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="bg-[#F4845F] lg:mt-0 mt-0 flex flex-col justify-center lg:w-full w-full py-7 lg:py-7 px-8 lg:px-14">
                        <div class="flex flex-row justify-between lg:mb-6">
                            <div>
                                <p class="text-white font-lato font-extrabold text-3xl lg:text-4xl mb-5">Booking</p>
                            </div>
                    
                            <div class="flex justify-center items-center">
                                <a href="/">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L15 15M15 5L5 15" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>                              
                                </a>
                            </div>
                        </div>
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 px-14 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-3xl font-lato font-extrabold">Service Selection</h1>
                    
                           <div id="box1" class="flex lg:flex-row flex-col bg items-center justify-between">
                                <div class="flex flex-col border-2 border-[#000000] justify-center items-center w-80 lg:w-[374px] py-5 package-box cursor-pointer lg:mb-0 mb-10">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="text-[28px] text-[#A3A3A3] font-lato text-center font-extrabold w-3/4 pl-20">Silver <br>Package</p>
                                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-1/4">
                                            <rect width="30" height="30" fill="url(#pattern0_1969_570)"/>
                                            <defs>
                                            <pattern id="pattern0_1969_570" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_1969_570" transform="scale(0.0111111)"/>
                                            </pattern>
                                            <image id="image0_1969_570" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD5klEQVR4nO2dy2oUQRSGP4iaiLetN1BRX8DLyohBohAVjAsVogHvmwiJiq7dqUGjBHwNb1kYzANERYlRF24UF941F1cmEFNScoQ4TIfR6a463XM++DdhZnLOT1NdVX3qNBiGYRiGYRiGYRgVUwdsBo4D3cAd4DnwGhgFJkWj8rfn8pkr8p1N8htGGVYCXUAf8B1wVWocuAd0AiuoceYD7cAA8DMFc5M0BTwADgMN1BAL5Up7n6G5SfoCXASWUGDmAueBkQgGl8rHcE5iKhRbgRcKDC7VK6CZAuDHxJvAtAJTk+Rj6wXqySmrgYcKjHQV6imwjpzRnNI0zQWWnxZuJyfsA34oMM39p/xi6CDKOZXxnNgFks/hJEpplcVBbJNcimYfQBl+XJtQYI7LYBjZiRLW5/TG5/7hBrk2tsn1Mi1yBdeT2PPsmwpMcIHkFzVR2BZhxTcI9IgGA/9vn2tjaJP9ZszLgEmOAS1l4tglY2ioOPxDhjkhjT4f+GpqmSWW3YFjORPK5EWBtzoHK4jpUcB4vsqeeuZcCHwFXa0gpmuBY/J72Zk/fvqk0OiewDF9yPqxWHvghJzCoeOPDmVp9ECEhJzMLpLYEymm/ixLAmLtzI3L7KKcySGndzPlN9CWZWF0V6SE3Aw9kvH4OvBYQTynszC6T0FiTplupW1ynazOYifmlGks7fKzzQqSckq1MU2jTyhIyCnV0TSN7laQkFOqS2kafVdBQq4WbojDChJySjWUptFvFSSUROy43pAiGipAk4gdl982TY1JBQklETsuX2aRGmY0YYy2oYMwQ4fdDAlzM9QwvUuiUNM7DQuWJAq1YNGwBE+iUEvw4woSSiJ2XEco2DZpErHj2kDBNv6TKNTGP3K22owm20dZyLFiM5q/POjIwujlkc+oJBErHu/FUjLCdwkwo/ntwX0KVhLmlF7RbVka3RCp/YNTZvRHKfgsVBG6U2j0WQKwQLYGa9Xob6EK0ZFC7Fo1upOA+AMzzyIk6SLrRYyuNY3KG564lDUtR/6i0KvAABdIN4hIvRzfdQXXY2AekVkbsereBdqhW4MSmnLedcYlyJdZ7EAZewvYGGU/SjlZkFY/U1ITrprWnA8jExpb/MzW+mc8pze+JnLGqgg9NVwVeqKhpU818+xe5SvIaVmMRJ8np7VcH1Zgaql8TFsoGHOkqUiMLdZSfZVduKDdZEKzQJJ8F8Hgz9KoezE1RIO0YujPeKEzJQ9S22qt9Xw5lskB9tvyNopqzR2V3+rIsiQg79RJPdsx4LJUAw3Jq0BGZrweZET+NiSfuSynWP137fUghmEYhmEYhmEYVMgvbkcWtzNuJV4AAAAASUVORK5CYII="/>
                                            </defs>
                                        </svg>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#A3A3A3] font-extrabold font-lato text-[28px] mt-3">$500</p>
                                </div>


                                <div id="box2" class="flex flex-col border-2 border-[#000000] justify-center items-center w-80 lg:w-[374px] py-5 package-box cursor-pointer lg:mb-0 mb-10">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="text-[#FFD700] font-extrabold font-lato text-[28px] text-center w-3/4 pl-20">Gold <br>Package</p>
                                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-1/4">
                                            <rect width="30" height="30" fill="url(#pattern0_1969_570)"/>
                                            <defs>
                                            <pattern id="pattern0_1969_570" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_1969_570" transform="scale(0.0111111)"/>
                                            </pattern>
                                            <image id="image0_1969_570" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD5klEQVR4nO2dy2oUQRSGP4iaiLetN1BRX8DLyohBohAVjAsVogHvmwiJiq7dqUGjBHwNb1kYzANERYlRF24UF941F1cmEFNScoQ4TIfR6a463XM++DdhZnLOT1NdVX3qNBiGYRiGYRiGYRgVUwdsBo4D3cAd4DnwGhgFJkWj8rfn8pkr8p1N8htGGVYCXUAf8B1wVWocuAd0AiuoceYD7cAA8DMFc5M0BTwADgMN1BAL5Up7n6G5SfoCXASWUGDmAueBkQgGl8rHcE5iKhRbgRcKDC7VK6CZAuDHxJvAtAJTk+Rj6wXqySmrgYcKjHQV6imwjpzRnNI0zQWWnxZuJyfsA34oMM39p/xi6CDKOZXxnNgFks/hJEpplcVBbJNcimYfQBl+XJtQYI7LYBjZiRLW5/TG5/7hBrk2tsn1Mi1yBdeT2PPsmwpMcIHkFzVR2BZhxTcI9IgGA/9vn2tjaJP9ZszLgEmOAS1l4tglY2ioOPxDhjkhjT4f+GpqmSWW3YFjORPK5EWBtzoHK4jpUcB4vsqeeuZcCHwFXa0gpmuBY/J72Zk/fvqk0OiewDF9yPqxWHvghJzCoeOPDmVp9ECEhJzMLpLYEymm/ixLAmLtzI3L7KKcySGndzPlN9CWZWF0V6SE3Aw9kvH4OvBYQTynszC6T0FiTplupW1ynazOYifmlGks7fKzzQqSckq1MU2jTyhIyCnV0TSN7laQkFOqS2kafVdBQq4WbojDChJySjWUptFvFSSUROy43pAiGipAk4gdl982TY1JBQklETsuX2aRGmY0YYy2oYMwQ4fdDAlzM9QwvUuiUNM7DQuWJAq1YNGwBE+iUEvw4woSSiJ2XEco2DZpErHj2kDBNv6TKNTGP3K22owm20dZyLFiM5q/POjIwujlkc+oJBErHu/FUjLCdwkwo/ntwX0KVhLmlF7RbVka3RCp/YNTZvRHKfgsVBG6U2j0WQKwQLYGa9Xob6EK0ZFC7Fo1upOA+AMzzyIk6SLrRYyuNY3KG564lDUtR/6i0KvAABdIN4hIvRzfdQXXY2AekVkbsereBdqhW4MSmnLedcYlyJdZ7EAZewvYGGU/SjlZkFY/U1ITrprWnA8jExpb/MzW+mc8pze+JnLGqgg9NVwVeqKhpU818+xe5SvIaVmMRJ8np7VcH1Zgaql8TFsoGHOkqUiMLdZSfZVduKDdZEKzQJJ8F8Hgz9KoezE1RIO0YujPeKEzJQ9S22qt9Xw5lskB9tvyNopqzR2V3+rIsiQg79RJPdsx4LJUAw3Jq0BGZrweZET+NiSfuSynWP137fUghmEYhmEYhmEYVMgvbkcWtzNuJV4AAAAASUVORK5CYII="/>
                                            </defs>
                                        </svg>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#FFD700] font-extrabold font-lato text-[28px] mt-3">$600</p>
                                </div>


                                <div id="box3" class="flex flex-col border-2 border-[#000000] justify-center items-center w-80 lg:w-[374px] py-5 package-box cursor-pointer">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="font-extrabold font-lato text-[28px] text-[#1B998B] text-center w-3/4 pl-20">Platinum <br>Package</p>
                                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-1/4">
                                            <rect width="30" height="30" fill="url(#pattern0_1969_570)"/>
                                            <defs>
                                            <pattern id="pattern0_1969_570" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_1969_570" transform="scale(0.0111111)"/>
                                            </pattern>
                                            <image id="image0_1969_570" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD5klEQVR4nO2dy2oUQRSGP4iaiLetN1BRX8DLyohBohAVjAsVogHvmwiJiq7dqUGjBHwNb1kYzANERYlRF24UF941F1cmEFNScoQ4TIfR6a463XM++DdhZnLOT1NdVX3qNBiGYRiGYRiGYRgVUwdsBo4D3cAd4DnwGhgFJkWj8rfn8pkr8p1N8htGGVYCXUAf8B1wVWocuAd0AiuoceYD7cAA8DMFc5M0BTwADgMN1BAL5Up7n6G5SfoCXASWUGDmAueBkQgGl8rHcE5iKhRbgRcKDC7VK6CZAuDHxJvAtAJTk+Rj6wXqySmrgYcKjHQV6imwjpzRnNI0zQWWnxZuJyfsA34oMM39p/xi6CDKOZXxnNgFks/hJEpplcVBbJNcimYfQBl+XJtQYI7LYBjZiRLW5/TG5/7hBrk2tsn1Mi1yBdeT2PPsmwpMcIHkFzVR2BZhxTcI9IgGA/9vn2tjaJP9ZszLgEmOAS1l4tglY2ioOPxDhjkhjT4f+GpqmSWW3YFjORPK5EWBtzoHK4jpUcB4vsqeeuZcCHwFXa0gpmuBY/J72Zk/fvqk0OiewDF9yPqxWHvghJzCoeOPDmVp9ECEhJzMLpLYEymm/ixLAmLtzI3L7KKcySGndzPlN9CWZWF0V6SE3Aw9kvH4OvBYQTynszC6T0FiTplupW1ynazOYifmlGks7fKzzQqSckq1MU2jTyhIyCnV0TSN7laQkFOqS2kafVdBQq4WbojDChJySjWUptFvFSSUROy43pAiGipAk4gdl982TY1JBQklETsuX2aRGmY0YYy2oYMwQ4fdDAlzM9QwvUuiUNM7DQuWJAq1YNGwBE+iUEvw4woSSiJ2XEco2DZpErHj2kDBNv6TKNTGP3K22owm20dZyLFiM5q/POjIwujlkc+oJBErHu/FUjLCdwkwo/ntwX0KVhLmlF7RbVka3RCp/YNTZvRHKfgsVBG6U2j0WQKwQLYGa9Xob6EK0ZFC7Fo1upOA+AMzzyIk6SLrRYyuNY3KG564lDUtR/6i0KvAABdIN4hIvRzfdQXXY2AekVkbsereBdqhW4MSmnLedcYlyJdZ7EAZewvYGGU/SjlZkFY/U1ITrprWnA8jExpb/MzW+mc8pze+JnLGqgg9NVwVeqKhpU818+xe5SvIaVmMRJ8np7VcH1Zgaql8TFsoGHOkqUiMLdZSfZVduKDdZEKzQJJ8F8Hgz9KoezE1RIO0YujPeKEzJQ9S22qt9Xw5lskB9tvyNopqzR2V3+rIsiQg79RJPdsx4LJUAw3Jq0BGZrweZET+NiSfuSynWP137fUghmEYhmEYhmEYVMgvbkcWtzNuJV4AAAAASUVORK5CYII="/>
                                            </defs>
                                        </svg>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#1B998B] font-extrabold font-lato text-[28px] mt-3">$700</p>
                                </div>
                           </div>

                           <h1 class="mt-5 text-xl font-normal font-lato ml-10">Additional services</h1>

                           <div class="flex flex-col mt-5 px-5 lg:px-10 py-10 lg:py-14 bg-[#FFF5F1] w-full lg:w-[80%]">
                                <div class="flex justify-between flex-row font-normal font-lato">
                                    <p class="text-lg">Custom Backdrop</p>
                                    <p class="text-lg">$2</p>
                                    <div class="inner-circle w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer tap-box transition-bg mt-1" >
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">Props</p>
                                    <p class="text-lg ml-[98px]">$2</p>
                                    <div class="inner-circle w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer tap-box transition-bg mt-1">
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">1 Additional hour</p>
                                    <p class="text-lg">$2</p>
                                    <div class="inner-circle w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer tap-box transition-bg mt-1">
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">2 Additional hours</p>
                                    <p class="text-lg mr-1">$2</p>
                                    <div class="inner-circle w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer tap-box transition-bg mt-1">
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">Red Carpet</p>
                                    <p class="text-lg ml-14">$2</p>
                                    <div class="inner-circle w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer tap-box transition-bg mt-1">
                                    </div>
                                </div>
                           </div>
                    
                           <div class="flex flex-col justify-center lg:flex-row w-full mt-10">
                                <div class="flex flex-col w-3/4">
                                    <p>3 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="400" height="5" fill="#D9D9D9"/>
                                        <rect width="300" height="5" fill="#F4845F"/>
                                    </svg>

                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-7 py-1 border border-[#f4845f] text-[#F4845F] bg-white font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button type="button" onclick="nextStep()" class="rounded-full lg:ml-5 ml-[120px] px-7 lg:w-[70%] py-1 bg-[#F4845F] text-white font-montserrat font-extrabold text-[12px]">NEXT</button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div id="step4" class="step hidden flex flex-col justify-center items-center w-full">
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="bg-[#F4845F] lg:mt-0 mt-0 flex flex-col justify-center lg:w-full w-full py-7 lg:py-7 px-8 lg:px-14">
                        <div class="flex flex-row justify-between lg:mb-6">
                            <div>
                                <p class="text-white font-lato font-extrabold text-3xl lg:text-4xl mb-5">Booking</p>
                            </div>
                    
                            <div class="flex justify-center items-center">
                                <a href="/">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5L15 15M15 5L5 15" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>                              
                                </a>
                            </div>
                        </div>
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 px-14 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-3xl font-lato font-extrabold">Please Confirm Every Detail</h1>

                            <div class="flex flex-row w-full">
                                <div class="flex flex-col lg:mr-0 mr-5 w-1/2">
                                    <label for="name" class="mb-1 font-lato font-normal">Full Name</label>
                                    <p class="text-lg font-lato font-bold mb-3 ">John Doe</p>
                                    
                                   <label for="feedback" class="mb-1 font-lato font-normal">Contact Number</label>
                                    <p class="text-lg font-lato font-bold mb-3">+1 234 452 5467</p>
                                    
                                    <label for="rating" class="mb-1 font-lato font-normal">Email Address</label>
                                    <p class="text-lg font-lato font-bold mb-3">johndoe@gmail.com</p>
                                    
                                    <label for="package" class="mb-1 font-normal font-lato">Event Type</label>
                                    <p class="text-lg mb-3 font-lato font-bold">Wedding</p>

                                    <label for="package" class="mb-1 font-lato font-normal">Event Date</label>
                                    <p class="text-lg font-lato font-bold mb-3">24/07/2025</p>
                                    
                                    <label for="package" class="mb-1 font-lato font-normal">Event Start Time</label>
                                    <p class="text-lg font-lato font-bold mb-3">10:30</p>

                                    <label for="Address" class="mb-1 font-lato font-normal">Venue Address</label>
                                    <p class="text-lg font-lato font-bold mb-3">No. 1, Somewhere Street, Alright Town</p>
                                </div>
                                    
                                <div class="flex flex-col lg:ml-0 ml-5 w-1/2">
                                    <label for="Venue" class="mb-1 font-lato font-normal">Venue Type</label>
                                    <p class="text-lg font-lato font-bold mb-3">Closed Garden</p>

                                    <label for="contact" class="mb-1 font-lato font-normal">Contact Person</label>
                                    <p class="text-lg font-lato font-bold mb-3">Johanna Doe</p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Contact Person</label>
                                    <p class="text-lg font-lato font-bold mb-3">+1 244 553 5667</p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Special Request</label>
                                    <p class="text-lg font-lato font-bold mb-3">None</p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Package</label>
                                    <p class="text-lg font-lato font-bold mb-3">Gold Package</p>

                                    <label for="service" class="mb-1 font-lato font-normal">Additional Services</label>
                                    <p class="text-lg font-lato font-bold mb-3">Custom Backdrop Red Carpet</p>

                                    <label for="cost" class="mb-1 font-lato font-normal">Total Cost</label>
                                    <p class="text-lg font-lato font-bold mb-3">$654</p>
                                </div>
                            </div>
                    
                        <div class="flex flex-col justify-center lg:flex-row w-full mt-10">
                                <div class="flex flex-col w-3/4 font-lato font-normal">
                                    <p>4 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 300 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="300" height="5" fill="#D9D9D9"/>
                                        <rect width="300" height="5" fill="#F4845F"/>
                                    </svg>                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-10 border border-[#f4845f] text-[#F4845F] bg-white lg:py-1  font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button id="confirmBookingButton" type="button" onclick="payment()" class="rounded-full lg:ml-5 ml-16 w-[100%] bg-[#F4845F] px-5 lg:py-1 lg:px-3 text-white font-montserrat font-extrabold text-[12px]">CONFIRM BOOKING</button>
                                    </div>
                                    <div class="flex flex-row justify-center items-center mt-3">
                                        <input class="w-4 h-4 items-center mr-7" type="checkbox" name="Check" id="Check"/>
                                        <p class="text-[12px] font-semibold font-lato">By clicking “Confirm Booking”, you agree to our terms of service and privacy policy.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <footer class="flex flex-col lg:w-[100%] w-[90%]">
            <div class="flex lg:flex-row flex-col lg:justify-between w-[100%] lg:items-center">
                <div class="flex w-1/2 items-center">
                    <img src="/images/surround.jpg" alt="logo" class=" ml-0 lg:ml-3">
                    <div class="flex flex-row lg:ml-0 ml-44">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="pl-2">
                            <rect width="28" height="28" fill="url(#pattern0_1721_192)"/>
                            <defs>
                            <pattern id="pattern0_1721_192" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1721_192" transform="scale(0.0111111)"/>
                            </pattern>
                            <image id="image0_1721_192" width="80" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFXElEQVR4nO2dbYiVRRSAn9qtXbGyIqklocKiD/rAyh/ShxJWEEVmVGBKlCmF0Vpm2bcQkUlEbAiB1I+C+hGl6Y9MQSmiQoxtNUEIrUQzXXbdPnejzTcOHGFZ9nrnvffMvPPeOw+cP5d755w5970zc86cmQuJRCKRSCQSiUQikXCmBZgKzAdWAmuB7cBuoB/4R6VfX9uu73lVP3O1tpEYg0nAYmA98BuQ1SkDwDqgEzibJmccMA/YBPxn4NxKMgxsBOYC7TQRJ+mTtt+jcyvJIWA5MIEG5gRgKdBXgINHi9iwRG1qKK4DdkTg4NGyC5hJAyBj4irgSAROrSRiWxfQRkk5F/gmAkdmjvItcD4lY6bRMi0LLLIsvIGScAcwGIHTshpFgqF7iJyFntfEWSCRPiwgUmZpcFC0kzJDZ99NZMi4NhSBczIPw8hNRMIFJZ34shwT5OSindymy6KswWVb0evsVRE4IQskEtQUFlbHHPFlxiJ9nR7ayZKM+T5QB/cA7wHPAPcCt2hANBt4GHheE/8DAWyRTYbWkI5eGiCd+RJwcQ6bZFdlGvCOrhZ82fYYgTjZY6rzT2CZbgrUu2PjK5nVqzl17zzpycndHpZRNwMHPNgquWyvyJP2qwfDNxg8xZU4E9hpbO8vvrfF5nlw8hcB9vJkg/ZHY7tlYvbGJmNj9wETCcNFxllF+RV6YZKHzNxtNQ4FV+jGQt76jRcMbZcEWgceWGzs5M9y6D4FeBnYO6oNWTu/C1zi2E6bFt1Y9eERPLDe2NHTHPVe7jC+Dmku3IWnDfuwBmNajSOvnhzDlWv9h6yZ5zi0eY7h+rrfuvxsqvHT/JSj3o9ytiuB1OkO7W417MtVGDLf2NGXefxyXULktwz7cj+GrDQ07DBwnIPONz1Ospbj9CsY8omhYVscdf5cY/t/63r/WLIr1gmxx9Cw1Q76zjDU51skR2OGZfj6ooO+6RE4ME++3AzLtOijDvpmR+DAPGlTMywT6Qsd9N0XgQNdRYKl5GhK5mjLoaPTsX4va8ahw3IyXO64w54142Roubx720HfaRE4sJDl3VpDwz531Lmnjjzx7ipyyLA/H8cagv8BHO+g8/Ua25eEUTWWxRqCWyeVpjjonFJjOlPqQaqxOtakknWa9FlHvR/kbPcvzWFXY4thX67EkBbjxP9OR70dOZNLUiJWjVMNa7nNE//o2WrLp/p6R71SFvZDlbb+BZ4oYBg0nQiP0mns6M05dI/X9fdPo9r4XYcX2RV3QfLgXxn2YRGeilCsz6jcWYMdE9Wx59VQ2WlZACS/orPwxEZjRx/wVRsxBrKXeNDQ9k99GjvX2NGZ/pR91d2NHHq+NLbbZce9ZsZ5qs7c7LEUtl33ES3t3R/i7g9fReg7gAuNbb3UOE9zVB6n5IXog7rVVe/TPUGDokFPaVEZioKwxJOjM5U+zSG41H+MXLrJ+1/zfO7RJZ9uelgo1EUne4H3ged0Mr5VDwvJ5sBD+vqHxhm5SvJd6MNCwrXp+Fs4ugI91VkE8gYF0qbHd7MGl63AiRTM5ECHKbOC5LCG+1Ewo+S3zmQVROpZbiQybm/Ai1HuIlIWNMhVP8PAg0TOrJIPI0MxXvFzrKt/Bko68c2gZMihnK8jcF7mKNtiuNKnnnV2V+QR5BENRgpfJ1uF6z0ROHW0iE3X0GC06omp3ggc3KtZuOAJopCM107uK8DBB3U3XY48Nw3tehXDBs+BzrBupM5ptqvnx6JDD7Cv0eqfep3br20t8lkSUHZatJ7tAWCFVgN1a7lt34i/B+nT17r1PSu04FA+m/4eJJFIJBKJRCKRSCRw5H/vfUOBowzH5AAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>
                        2024
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col lg:w-1/2 lg:justify-end lg:mr-10 lg:ml-0 ml-10 lg:mb-0 mb-3 text-sm">
                    <a href=""><p class="lg:mr-3">Privacy Policy</p></a>
                    <a href=""><p>Terms of Service</p></a>
                </div>
            </div>

            <div class="flex lg:flex-row flex-col ml-10 lg:ml-[52px] lg:items-center mb-2">
                <div class="flex flex-row">
                    <a href=""><svg width="36" height="36" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_189)"/>
                        <defs>
                        <pattern id="pattern0_1721_189" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_189" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_189" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE1ElEQVR4nO2cy49URRSHv1nA4Lp14QAmSIyiKI4zSgYlhqWJErc8tiQ+AHfiygkrCRpWDjoRloqS+HZUosQ/wGA0KGIC6hIRMIhxHKaZMpUcksmk7+3XOXWr69aX/JJJZ7rq1C/dp089bkEmk8lkMplMJpPJ1JRhYAuwH/gQOANcAa4DriLNSQw/SUw+tscl1oHjIWAa+KtCQ12X8ua/ATzIALAB+DwC01wfWgA+Ax4gQlYAh4D5CIxySvJjeU3GFgV3Ad9HYIwz0nfA2qpNHgcuRmCGM9ZlYKIqkx8G/o7ABBdIfqxjVaSLPyMYvAusP4A7Q5m8QvKWq6l+AG4JYfShCAbrKtZBa5PvT6yEcz1qXuYMZnwRwSBdJPrEyuRRmTW5hDQHvAiMiPbJa528d8Fquj4dgTFOWd7Ypezr4v2HtU0eHrAFIteh/Kd4KSNdTmSWaxq9JQJTXCCjV3bZxmZNo/dHYIoLlDpe6rKNSU2jP4rAFGegOTG7lx/Dm/pA0+gzFRlxDpgCtknV0wCWiRry2nb5UTpfUYw/ahp9KWDgTeAdYFOXMQ4BjwLHpI1Q8fo1HzW6/Tr1qhPA3QrxrgO+DhTzfyhiHey/wC70eQaYDRC/GpZBXpQNBCseCbCkq4alyfdgzzpjs9WwShfjHfR9B7AH+BI4C/wjOiuv7QZWd9DORsM0ooZFcLva9LkKONphBeH/54jM6sp4tm5Gn2jT39PAtR739ba2aftkXYxutinhXgBu9NG+f+/ekvbvNaizozT67Taf5H5MXmx22Sf7vToYvakkJ/eSLsrSSKvVOc9jqRt9TqbKrTiqPHivtwr68jH8lrLRUyUlnMX6RFO+Ka14M2WjtxW0v8fA5Jt6vqDPHSkbPVrB7vpMQZ9jKRvdKGj/F0Oj/QyyFbelbPTygvY1q42l8m0XbThno9Ez4WodjW4UtJ9Th7LRowVG5x9DZaO3Fxi92zBHP1fQ586UU8fhgvZXG01Y5ksmLNMpG32+ZAp+xMBob2YrfAy/p2y0kyMBrVip/EyMrzZuL+hrs/KYojT6WEk/TyilEL9M+lRJP8frYHRTNkuL2Kuw8O/XTopYr7TmHb3RDviqTX9be0wjPl08WdKuz83fGIwnWqOdHG4pY0TWk5sdVhfTJTnZuoxUwyK4WTnc0o5VstTpH+b/WdYursnfM1InF5Vwi5mQ41u1M9rJoZayfK3FfcYHNdVwxmZvxI6JAKdh1XDGmpXDLZoMSU62ShcmRoc6tntSzl30y3qj6sL82G7Ig+g3gHflSEDRdL0VQzLjO25QJwc7iF7VoxW/ym71Dtnja8gujdet8tpOKe00jw9U9mhFqg8LOQW9r2l0qo+/OQW9rGl0qg90OgX53xI1huVeuKoH5SLTJXkUTxXNI1QuEb2OASleI+H60ILlJYQzEQzQRSJfiZkuzlR5gauLRPMhrtR8NYKBuop1gAD4CuRUBIN1FenbkFcgr5XL9lzNdAFYQ2DGa3Zl5lW5F7sSxmryyb5QpcmL08ipxHPyGiJhWK6RTKn0uw68on0LmOaVmp8O+AxyAfhYaafHnA3yqNvlCIxzXSwQTVnfOWrFMtlempQF8tMyoFB7kK00JzGclpgmJUb1VbhMJpPJZDKZTCaTYRD4Hy2WYZFuOgQHAAAAAElFTkSuQmCC"/>
                        </defs>
                    </svg></a>

                    <a href=""><svg width="36" height="36" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_190)"/>
                        <defs>
                        <pattern id="pattern0_1721_190" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_190" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_190" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACNklEQVR4nO2csWpUQRSGv8rIggRtk8pGISBi5xuks/AVLE1SiY9gnVorQXwFO8UimkqtRHtbRQxo5ZELt0i3E3funNm73wen3J1zvvw7O3chAyIiIiIiIiIiMnAZOAJOgTMgZlpnwHvgENhq/affBT51ICEa18dx9mZJ3kTJcU52k2QfdTBsJNdBC9GnHQwayfWuhehfHQwayTU4mJzsIaOTUjSKJjuFJpp8cW4d5Et1j0bR6Yn7DjwHHgC3gR1gMR4VrgLXgOvAHrAPvDTRXFjwI+DKBc9fw2vcOiiT8AW4+Z8HXEVTJvkrsL3CU4SiWS75D3BnBcmKpizNxytKVjTLJf8Fbih6+mPc2wqSTTTLRT9RdJsHk3uFou8Cr8Zzdo11Jyc6q72Cnocnw9+V152c6Kx2Cnp+McG6kxOd1aKg58+KpkmyfiiaJqKn+CRNTvZWEYpWdFWyExwmeg33wXM866233tJaize99TZX0d96622Oohfjz61d9TZH0bd67G2Oou/32NscRT/usbc5in7aY29zFP1600VHpYHXMgTZYkPRiq5KdoLDRCu6KtkJDhOt6KpkJzhMtKKrkp3gMNGKrkp2gsNEK7oq2QkOE63oqmQnOEy0oquSneAw0YquSnaCw0QretbXsZVQe82fbOAFgyWs5QWDhx3IjWTRD2nA1ngR6qaK/gBcohG7Hckuoabkkn8grZ7sg3G/yvyCLGGV9x9mOxm3i2ZJFhERERERERGhY/4BzWMTzORFMuAAAAAASUVORK5CYII="/>
                        </defs>
                    </svg></a>
                </div>

                <p class="lg:mb-1 text-sm"><strong>Stay in the Loop</strong> - Get updates on promotions and new features follow us on socials.</p>

            </div>
        </footer>
    </div>
        
    <script src=/js/surround.js></script>

    <script src=/js/step.js></script>

    <script src=/js/checkbox.js></script>

    <script src=/js/booking.js></script>
</body>
</html>