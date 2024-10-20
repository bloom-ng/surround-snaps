@extends('layouts.app')

@section('title', 'Booking')

@section('additional_head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   

@endsection



@section('content')
        <!-- /mobile header -->

        <form id="multiStepForm" method="POST" class="w-full">
            @csrf
            <input type="hidden" id="package" name="package" value="platinum">
            <input type="hidden" id="additional_hours" name="additional_hours" value="0">
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
                
                    <div class="flex flex-col bg-white rounded-2xl mb-5 lg:px-14 px-5 py-7 w-full">
                        <h1 class="mb-3 text-[#F4845F] text-2xl lg:text-3xl font-lato font-extrabold">Basic Information & Booking Details</h1>
                
                        <div class="flex flex-col">
                            <label for="full_name" class="mb-1 ml-5 font-lato font-normal text-sm">Full Name</label>
                            <input type="text" name="full_name" id="full_name"
                            class="rounded-full px-5 py-[8px] lg:py-[5px] border border-orange-300 placeholder:italic mb-3 lg:mb-5 lg:text-sm text-[9px]"
                            placeholder="Required for personalization and contact."
                            value="{{ old('full_name') }}">
                        </div>
                
                        <div class="flex flex-col">
                            <label for="contact_number" class="mb-1 ml-5 font-lato font-normal text-sm">Contact Number</label>
                            <input type="text" name="contact_number" id="contact_number"
                            class="rounded-full border px-5 py-[8px] lg:py-[5px] border-orange-300 placeholder:italic mb-3 lg:mb-5 lg:text-sm text-[9px]"
                            placeholder="Needed for further communication or last-minute notification."
                            value="{{ old('contact_number') }}">
                        </div>
                
                        <div class="flex flex-col">
                            <label for="email" class="mb-1 ml-5 font-lato font-normal text-sm">Email Address</label>
                            <input type="email" name="email" id="email"
                            class="rounded-full border px-5 py-[8px] lg:py-[5px] border-orange-300 placeholder:italic lg:text-sm text-[9px]"
                            placeholder="For sending booking confirmations and promotional offers."
                            value="{{ old('email') }}">
                        </div>

                        <div class="flex flex-col mt-3">
                            <label for="event_type" class="mb-1 ml-5 font-lato font-normal text-sm">Event Type (e.g., Wedding, Corporate Event, Birthday Party, etc)</label>
                            <input type="text" name="event_type" id="event_type"
                            class="rounded-full px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border border-orange-300 placeholder:italic mb-3 lg:mb-5"
                            placeholder="Allows us to prepare the appropriate setup and offers tailored to specific events."
                            value="{{ old('event_type') }}"> 
                        </div>

                        <div class="flex flex-col text-sm">
                            <label for="event_date" class="mb-1 ml-5 font-lato font-normal">Date of event</label>
                            <div class="flex flex-row w-full">
                                <input type="date"
                                    id="event_date"
                                    name="event_date"
                                    class="rounded-full border py-[8px] text-[10px] lg:text-sm px-5 lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                    placeholder="To check availability."
                                    min="{{ date('Y-m-d', strtotime('+8 days')) }}"
                                    value="{{ old('event_date') }}"
                                    >
                            
                                <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class=" hidden mt-2 lg:ml-[1100px] ml-[240px] absolute">
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
                            <label for="event_start_time" class="mb-1 ml-5 font-lato font-normal">Event Start Time</label>
                            <div class="flex flex-row w-full">
                                <input type="time" name="event_start_time" id="event_start_time"
                                    class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                    placeholder="For scheduling purposes."
                                    value="{{ old('event_start_time') }}"
                                    >
                            
                                <svg width="16" height="16" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="hidden mt-2 lg:ml-[1100px] ml-[240px] absolute">
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
                
                        <div class="flex lg:flex-row md:flex-row flex-col justify-between mt-3 lg:mt-10">
                            <div class="flex flex-col font-lato font-normal">
                                <p>1 of 4</p>
                                <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                    <rect width="400" height="5" fill="#D9D9D9"/>
                                    <rect width="100" height="5" fill="#F4845F"/>
                                </svg>
                            </div>
                            <div class="flex justify-end items-end">
                                <button type="button" id="nextButton" onclick="nextStep()" class="disabled:opacity-50 rounded-full w-20 px-7 py-1 text-center lg:mt-0 mt-3 bg-[#F4845F] text-white font-montserrat font-extrabold text-[12px]" disabled>NEXT</button>
                            </div>
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
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 lg:px-14 px-5 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-2xl lg:text-3xl font-lato font-extrabold">Location and Logistics</h1>                    
                            <div class="flex flex-col">
                                <label for="venue_address" class="mb-1 ml-5 font-lato font-normal text-sm">Venue Address</label>
                                <input type="text" name="venue_address" id="venue_address"
                                    class="rounded-full px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border border-orange-300 placeholder:italic mb-5"
                                    placeholder="For planning logistics and assessing travel requirements."
                                    value="{{ old('venue_address') }}"
                                    >
                            </div>
                    
                            <div class="flex flex-col text-sm">
                                <label for="venue_type" class="mb-1 ml-5 font-lato font-normal">Venue Type (Indoor, Outdoor, Garden, etc)</label>
                                <div class="flex flex-row w-full">
                                    <input type="text" name="venue_type" id="venue_type"
                                        class="rounded-full border py-[8px] text-[10px] lg:text-sm px-5 lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Helps in preparing necessary equipment and contingency plans."
                                        value="{{ old('venue_type') }}"
                                        >
                                    </div>          
                            </div>
                    
                            <div class="flex flex-col text-sm">
                                <label for="contact_person" class="mb-1 ml-5 font-lato font-normal">Contact Person</label>
                                <div class="flex flex-row w-full">
                                    <input type="text" name="contact_person" id="contact_person"
                                        class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Point of contact on the day of the event"
                                        value="{{ old('contact_person') }}"
                                        >
                                </div>   
                            </div>
            
                            <div class="flex flex-col text-sm">
                                <label for="contact_person_phone" class="mb-1 ml-5 font-lato font-normal text-sm">Contact Person Phone Number</label>
                                <div class="flex flex-row w-full">
                                    <input type="text" name="contact_person_phone" id="contact_person_phone"
                                        class="rounded-full border px-5 py-[8px] text-[10px] lg:text-sm lg:py-[5px] border-orange-300 placeholder:italic mb-5 w-full relative"
                                        placeholder="Point of contact on the day of the event"
                                        value="{{ old('contact_person_phone') }}"
                                        >       
                                </div>   
                            </div>

                            <div class="flex flex-col lg:mt-4 mt-0">
                                <label for="event_theme" class="mb-1 ml-5 font-lato font-normal text-sm">Does your event require a specific theme</label>
                                <textarea rows="10" name="event_theme" id="event_theme" class="rounded-2xl border border-orange-300 text-black py-2 px-5 text-[10px] lg:text-sm placeholder:italic" 
                                placeholder="Any information about the theme of the event."
                                >{{ old('event_theme') }}</textarea>
                            </div>
                            <div class="flex flex-col lg:mt-4 mt-0">
                                <label for="special_instructions" class="mb-1 ml-5 font-lato font-normal text-sm">Special Instructions or Requests</label>
                                <textarea rows="10" name="special_instructions" id="special_instructions" class="rounded-2xl border border-orange-300 text-black py-2 px-5 text-[10px] lg:text-sm placeholder:italic" 
                                placeholder="Field for anything specific the client needs, like theme-based props or accessibility considerations."
                                >{{ old('special_instructions') }}</textarea>
                            </div>
                    
                            <div class="flex flex-col justify-between font-lato font-normal lg:flex-row md:flex-row w-full mt-10">
                                <div class="flex flex-col">
                                    <p>2 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                        <rect width="400" height="5" fill="#D9D9D9"/>
                                        <rect width="200" height="5" fill="#F4845F"/>
                                    </svg>
                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row justify-between lg:justify-end">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-7 py-1 border border-[#f4845f] text-[#F4845F] bg-white font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button type="button" id="nextButton2" onclick="nextStep()" class="disabled:opacity-50 rounded-full lg:ml-5 px-7 lg:w-[70%] py-1 bg-[#F4845F] text-white font-montserrat font-extrabold text-[12px]" disabled>NEXT</button>
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
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 lg:px-14 px-5 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-3xl font-lato font-extrabold">Service Selection</h1>
                         
                           <div  class=" flex lg:flex-row flex-col bg items-center justify-between">
                                <div id="box1" data-package="platinum" data-cost="{{ $packageCost['platinum'] }}" class="flex flex-col border-2 border-[#000000] border-[#F4845F] justify-center items-center w-80 lg:w-[374px] lg:mb-0 mb-10 py-5 package-box cursor-pointer">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="font-extrabold font-lato text-[28px] text-[#A3A3A3] text-center w-3/4 pl-20">Platinum <br>Package</p>
                                        <input class="w-4 h -4 items-start mr-7 mb-5" type="checkbox" name="select_package" checked/>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#A3A3A3] font-extrabold font-lato text-[28px] mt-3">$700</p>
                                </div>


                                <div id="box2" data-package="gold" data-cost="{{ $packageCost['gold'] }}" class="flex flex-col border-2 border-[#000000] justify-center items-center w-80 lg:w-[374px] py-5 package-box cursor-pointer lg:mb-0 mb-10">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="text-[#FFD700] font-extrabold font-lato text-[28px] text-center w-3/4 pl-20">Gold <br>Package</p>
                                        <input class="w-4 h -4 items-start mr-7 mb-5" type="checkbox" name="select_package"/>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#FFD700] font-extrabold font-lato text-[28px] mt-3">$600</p>
                                </div>


                                <div id="box3" data-package="silver" data-cost="{{ $packageCost['silver'] }}"  class="package-box border-[#000000] flex flex-col border-2  justify-center items-center w-80 lg:w-[374px] py-5 cursor-pointer lg:mb-0 mb-10">
                                    <div class="flex flex-row justify-between w-full">
                                        <p class="text-[28px] text-[#1B998B] font-lato text-center font-extrabold w-3/4 pl-20">Silver <br>Package</p>
                                        <input class="w-4 h -4 items-start mr-7 mb-5" type="checkbox" name="select_package"/>
                                    </div>
                                    <svg width="150" height="2" viewBox="0 0 200 2" fill="none" xmlns="http://www.w3.org/2000/svg" class=" mt-3">
                                        <line y1="1" x2="200" y2="1" stroke="#1B998B" stroke-width="2"/>
                                    </svg>
                                    <p class="text-[#1B998B] font-extrabold font-lato text-[28px] mt-3">$500</p>
                                </div>  
                           </div>

                           <h1 class="mt-5 text-xl font-normal font-lato ml-10">Additional services</h1>

                           <div class="flex flex-col mt-5 px-5 lg:px-10 py-10 lg:py-14 bg-[#FFF5F1] w-full lg:w-[80%]">
                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">1 Additional hour</p>
                                    <p class="text-lg">$200</p>
                                    <div data-item="additional_hours" data-value="1" class="inner-circle tap-box w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer  transition-bg mt-1">
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">2 Additional hours</p>
                                    <p class="text-lg mr-1">$400</p>
                                    <div data-item="additional_hours" data-value="2" class="inner-circle tap-box w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer transition-bg mt-1">
                                    </div>
                                </div>

                                <div class="flex justify-between flex-row mt-3 font-normal font-lato">
                                    <p class="text-lg">3 Additional hours</p>
                                    <p class="text-lg mr-1">$600</p>
                                    <div data-item="additional_hours" data-value="3" class="inner-circle tap-box w-[20px] h-[20px] rounded-full border border-[#F4845F] flex items-center justify-center cursor-pointer transition-bg mt-1">
                                    </div>
                                </div>
                           </div>
                    
                           <div class="flex flex-col justify-between lg:flex-row md:flex-row w-full mt-10">
                                <div class="flex flex-col">
                                    <p>3 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 400 5" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                        <rect width="400" height="5" fill="#D9D9D9"/>
                                        <rect width="300" height="5" fill="#F4845F"/>
                                    </svg>

                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row justify-between lg:justify-end">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-7 py-1 border border-[#f4845f] text-[#F4845F] bg-white font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button type="button" id="nextButton3" onclick="nextStep()" class="rounded-full lg:ml-5 px-7 lg:w-[70%] py-1 bg-[#F4845F] text-white font-montserrat font-extrabold text-[12px]">NEXT</button>
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
                    
                        <div class="flex flex-col bg-white rounded-2xl mb-5 lg:px-14 px-5 py-7 w-full">
                            <h1 class="mb-3 text-[#F4845F] text-3xl font-lato font-extrabold">Please Confirm Every Detail</h1>

                            <div class="flex flex-row w-full">
                                <div class="flex flex-col lg:mr-0 mr-5 w-1/2">
                                    <label for="name" class="mb-1 font-lato font-normal">Full Name</label>
                                    <p id="confirmFull_name" class="text-lg font-lato font-bold mb-3 "></p>
                                    
                                   <label for="feedback" class="mb-1 font-lato font-normal">Contact Number</label>
                                    <p id="confirmContact_number" class="text-lg font-lato font-bold mb-3"></p>
                                    
                                    <label for="rating" class="mb-1 font-lato font-normal">Email Address</label>
                                    <p id="confirmEmail" class="text-lg font-lato font-bold mb-3"></p>
                                    
                                    <label for="package" class="mb-1 font-normal font-lato">Event Type</label>
                                    <p id="confirmEvent_type" class="text-lg mb-3 font-lato font-bold"></p>

                                    <label for="package" class="mb-1 font-lato font-normal">Event Date</label>
                                    <p id="confirmEvent_date" class="text-lg font-lato font-bold mb-3"></p>
                                    
                                    <label for="package" class="mb-1 font-lato font-normal">Event Start Time</label>
                                    <p id="confirmEvent_start_time" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="Address" class="mb-1 font-lato font-normal">Venue Address</label>
                                    <p id="confirmVenue_address" class="text-lg font-lato font-bold mb-3"></p>
                                </div>
                                    
                                <div class="flex flex-col lg:ml-0 ml-5 w-1/2">
                                    <label for="Venue" class="mb-1 font-lato font-normal">Venue Type</label>
                                    <p id="confirmVenue_type" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="contact" class="mb-1 font-lato font-normal">Contact Person</label>
                                    <p id="confirmContact_person" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Contact Person Phone</label>
                                    <p id="confirmContact_person_phone" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Event Theme</label>
                                    <p id="confirmEvent_theme" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Special Request</label>
                                    <p id="confirmSpecial_instructions" class="text-lg font-lato font-bold mb-3"></p>

                                    <label for="package" class=" mb-1 font-lato font-normal">Package</label>
                                    <p id="confirmPackage" class="text-lg font-lato font-bold mb-3">Silver Package</p>

                                    <label for="service" class="mb-1 font-lato font-normal">Additional Hours</label>
                                    <p id="confirmAdditional_hours" class="text-lg font-lato font-bold mb-3">0</p>

                                    <label for="cost" class="mb-1 font-lato font-normal">Total Cost</label>
                                    <p id="confirmTotalCost" class="text-lg font-lato font-bold mb-3">${{ \App\Models\Booking::getPackageCost()['silver'] }}</p>
                                </div>
                            </div>
                    
                        <div class="flex flex-col justify-center lg:flex-row w-full mt-10">
                                <div class="flex flex-col font-lato font-normal">
                                    <p>4 of 4</p>
                                    <svg width="300" height="5" viewBox="0 0 300 5" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                                        <rect width="300" height="5" fill="#D9D9D9"/>
                                        <rect width="300" height="5" fill="#F4845F"/>
                                    </svg>                                     
                                </div>
            
                                <div class="flex flex-col lg:items-end lg:w-1/4 mt-3">
                                    <div class="flex lg:flex-row justify-between lg:justify-end">
                                        <button type="button" onclick="prevStep()" class="rounded-full px-7 py-1 border border-[#f4845f] text-[#F4845F] bg-white font-montserrat font-extrabold text-[12px]">BACK</button>
                            
                                        <button id="confirmBookingButton" disabled type="submit" class="disabled:opacity-50 rounded-full lg:ml-5 bg-[#F4845F] px-5 lg:py-1 lg:px-3 text-white font-montserrat font-extrabold text-[12px]">CONFIRM BOOKING</button>
                                    </div>
                                    <div class="flex flex-row justify-center items-center mt-3">
                                        <input class="w-4 h -4 items-center mr-7" type="checkbox" name="check_confirm" id="check_confirm"/>
                                        <p class="text-[12px] font-semibold font-lato">By clicking "Confirm Booking", you agree to our terms of service and privacy policy.</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const packages = {
                    "silver": '{{ \App\Models\Booking::getPackageName()["silver"] }}',
                    "gold": '{{ \App\Models\Booking::getPackageName()["gold"] }}',
                    "platinum": '{{ \App\Models\Booking::getPackageName()["platinum"] }}',
                }

                const packageCost = {
                    "silver": '{{ \App\Models\Booking::getPackageCost()["silver"] }}',
                    "gold": '{{ \App\Models\Booking::getPackageCost()["gold"] }}',
                    "platinum": '{{ \App\Models\Booking::getPackageCost()["platinum"] }}',
                }
                const costPerHour = {{ \App\Models\Booking::getCostPerHour() }}

                function updateTotalCost() {
                    const package = document.getElementById('package').value
                    const additionalHours = parseInt(document.getElementById('additional_hours').value)
                    document.getElementById('confirmTotalCost').textContent = `$${parseInt(packageCost[package]) + (parseInt(costPerHour) * additionalHours)}`
                }

                document.addEventListener('DOMContentLoaded', () => {
                    const formInputs = document.querySelectorAll('input, select, textarea');
                    setTimeout(() => {
                        formInputs.forEach(input => {
                            const event = new Event('change', { bubbles: true });
                            input.value = input.value; // Ensure the value is set
                            input.dispatchEvent(event);
                        });
                    }, 1000);
                    
                    formInputs.forEach(input => {
                        input.addEventListener('change', function() {
                            const confirmId = 'confirm' + this.name.charAt(0).toUpperCase() + this.name.slice(1)
                            const confirmElement = document.getElementById(confirmId);
                            if (confirmId == "confirmPackage") {
                                confirmElement.textContent = packages[this.value]
                                updateTotalCost()
                                return
                            }
                            if (confirmId == "confirmAdditional_hours") {
                                confirmElement.textContent = this.value
                                updateTotalCost()
                                return
                            }
                            if (confirmElement) {
                                confirmElement.textContent = this.value;
                                updateTotalCost()
                            }
                        });
                    });
                });

              
            </script>
        </form>
        @endsection

        @section('additional_scripts')
            <script>
                Swal.fire({
                    // title: "Notice!",
                    html: "{!!$popupMessage!!}",
                    icon: "info",
                    confirmButtonColor: "#F4845F",
                    confirmButtonText: "Proceed",
                });
            </script>
            <script src="/js/step.js"></script>
            <script src="/js/checkbox.js"></script>
            <script src="/js/booking.js"></script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const eventDateInput = document.getElementById('event_date');
                    const eventStartTimeInput = document.getElementById('event_start_time');

                    function checkAvailability() {
                        const eventDate = eventDateInput.value;
                        const eventStartTime = eventStartTimeInput.value;

                        if (eventDate && eventStartTime) {
                            fetch('{{ route('booking.checkAvailability') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    event_date: eventDate,
                                    event_start_time: eventStartTime
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (!data.available) {
                                    toastr.error("Sorry, this time slot is not available. Please choose another time.", "", {
                                        timeOut: 3000,
                                        closeButton: true,
                                        positionClass: "toast-top-center",
                                        backgroundColor: "#F4845F"
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                toastr.error("An error occurred while checking availability. Please try again.", "", {
                                    timeOut: 3000,
                                    closeButton: true,
                                    positionClass: "toast-top-center",
                                    backgroundColor: "#F4845F"
                                });
                            });
                        }
                    }

                    eventDateInput.addEventListener('change', checkAvailability);
                    eventStartTimeInput.addEventListener('change', checkAvailability);
                });
            </script>

            <script>
                // step1
                document.addEventListener('DOMContentLoaded', () => {
                const step1Inputs = document.querySelectorAll('#step1 input'); // Select all input fields in Step 1
                const nextButton1 = document.getElementById('nextButton'); // Select the NEXT button for Step 1
                const dateInput = document.getElementById('event_date'); // Select the date input field

                // Function to validate email format
                function validateEmail(email) {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for validating email
                    return emailPattern.test(email);
                }

                // Function to check validity of inputs in Step 1
                function checkStep1Validity(e) {
                    const emailInput = document.getElementById('email');
                    const phoneInput = document.getElementById('contact_number');

                    const isEmailValid = validateEmail(emailInput.value.trim());
                    const isPhoneValid = validatePhoneNumber(phoneInput.value.trim());
                    const isDateValid = validateDate(dateInput.value); // Validate the date

                    // Show warnings if invalid
                    if (!isEmailValid && e.target.id == "email") {
                        console.log('Email is Invalid');
                        toastr["error"]("Please enter a valid Email")
                    }
                        

                    if (!isPhoneValid && e.target.id == "contact_number") {
                        toastr["error"]("Please enter a valid phone number.");
                    } 

                    if (!isDateValid && e.target.id == "event_date") {
                        toastr["error"]("Event Date must be atleast 7 days from today");
                    }

                    

                    // Enable the NEXT button only if all inputs are filled and valid
                    nextButton1.disabled = !Array.from(step1Inputs).every(input => input.value.trim() !== '') || !isEmailValid || !isPhoneValid || !isDateValid;
                }

                // Add event listeners to each input in Step 1
                step1Inputs.forEach(input => {
                    input.addEventListener('blur', checkStep1Validity); // Check validity on input change
                });

                // Add event listener for the date input
                dateInput.addEventListener('input', checkStep1Validity); // Check validity on date change

                // Initial check to disable the button if fields are empty on page load
                
                } );

                // Function to validate phone number format (flexible for international use)
                function validatePhoneNumber(phone) {
                    const phonePattern = /^[+\d]?(?:[\d-.\s()]*)$/; // Allows for various international formats
                    return phonePattern.test(phone);
                }

                // Function to validate that the selected date is at least one week from today
                function validateDate(selectedDate) {
                    const today = new Date();
                    const oneWeekFromToday = new Date();
                    oneWeekFromToday.setDate(today.getDate() + 7); // Set to one week from today

                    // Convert the selected date to a Date object
                    const eventDate = new Date(selectedDate);

                    // Check if the selected date is valid and at least one week from today
                    return eventDate >= oneWeekFromToday;
                }


                // step2
                document.addEventListener('DOMContentLoaded', () => {
                const step2Inputs = document.querySelectorAll('#step2 input, #step2 textarea'); // Select all input and textarea fields in Step 2
                const nextButton2 = document.getElementById('nextButton2'); // Select the NEXT button for Step 2

                // Function to check validity of inputs in Step 2
                function checkStep2Validity() {
                    // Enable the NEXT button only if all inputs are filled and valid
                    nextButton2.disabled = !Array.from(step2Inputs).every(input => input.value.trim() !== '' && input.checkValidity());
                }

                // Add event listeners to each input and textarea in Step 2
                step2Inputs.forEach(input => {
                    input.addEventListener('input', checkStep2Validity); // Check validity on input change
                });

                // Initial check to disable the button if fields are empty on page load
                checkStep2Validity();
                });
            </script>   

            <script>
                // Get the date input element
                const dateInput = document.getElementById('event_date');

                // Add event listener to date input
                dateInput.addEventListener('change', function() {
                    const selectedDate = new Date(dateInput.value);
                    const today = new Date();
                    const sevenDaysFromNow = new Date(today.setDate(today.getDate() + 6));

                    // Check if selected date is at least 7 days from now
                    if (selectedDate >= sevenDaysFromNow) {
                        console.log ('Date is valid');
                        // Enable submit button or perform desired action
                    } else {
                        console.log('Date must be at least 7 days from now');
                        toastr["error"]("Event Date must be atleast 7 days from today")
                        // Disable submit button or display error message
                    }
                });
            </script>

            <script>
                //checkboxes
                document.addEventListener('DOMContentLoaded', () => {
                // Select all package boxes
                const packageBoxes = document.querySelectorAll('.package-box');

                packageBoxes.forEach(box => {
                    // Add click event listener to each package box
                    box.addEventListener('click', () => {
                        // Find the checkbox within the clicked box
                        const checkbox = box.querySelector('input[type="checkbox"]');

                        // Uncheck all checkboxes first
                        packageBoxes.forEach(otherBox => {
                            const otherCheckbox = otherBox.querySelector('input[type="checkbox"]');
                            otherCheckbox.checked = false; // Uncheck all other checkboxes
                        });

                        // Check the clicked checkbox
                        checkbox.checked = true; // Check the current checkbox

                        // Update the hidden input value based on the selected package
                        const packageValue = box.getAttribute('data-package');
                        document.getElementById('package').value = packageValue; // Update hidden input value
                    });
                });
                });
            </script>
        @endsection