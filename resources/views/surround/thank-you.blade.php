@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
    <div class="step flex flex-col justify-center items-center w-full">
        <div class="flex flex-col justify-center items-center w-full">
            <div class="bg-[#F4845F] lg:mt-0 mt-0 flex flex-col justify-center lg:w-full w-full py-7 lg:py-7 px-8 lg:px-14">
                <div class="flex flex-row justify-between mb-4 lg:mb-6">
                    <div>
                        <p class="text-white font-bold text-3xl lg:text-4xl">Payment</p>
                    </div>
            
                    <div class="flex justify-center items-center">
                        <a href="/">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 5L15 15M15 5L5 15" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>                              
                        </a>
                    </div>
                </div>
            
                <div class="flex flex-col bg-white rounded-2xl mb-5 px-14 py-7 w-full justify-center text-center">
                    <h1 class=" text-[#F4845F] font-lato text-2xl lg:text-3xl font-bold lg:mb-10 mb-5">Thank you for your booking</h1>
                    <p class="font-lato font-bold lg:mb-10 mb-5">You will receive an email shortly with the details of your booking.</p>
                    
                    <p class="font-lato font-bold lg:mb-10 mb-5">We look forward to seeing you at your amazing event.</p>

                    <p class="font-lato font-bold lg:mb-10 mb-5">You will be redirected to the home page shortly.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
