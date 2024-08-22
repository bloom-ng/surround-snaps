<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
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
                <a href="/faq" class="text-[#1b998b] font-normal font-lato text-base">FAQ</a>
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
                <a href="/" class="pb-2 text-black font-normal font-lato text-base">HOME</a>
                <a href="/#about" class="py-2 text-black font-normal font-lato text-base">ABOUT US</a>
                <a href="/#pricing" class="py-2 font-normal font-lato text-base text-black">PRICING</a>
                <a href="/gallery" class="py-2 font-normal font-lato text-base text-black">GALLERY</a>
                <a href="/faq" class="py-2 text-[#1b998b] font-normal font-lato text-base">FAQ</a>
                <a href="/contact" class="py-2 font-normal font-lato text-base text-black">CONTACT US</a>
        </nav>
         <!-- /mobile header -->

        <div class="flex flex-col relative">
            <img src="/images/decor.jpg" alt="decor">

            <div class="flex flex-col items-center absolute w-full">
                <p class="lg:text-4xl text-3xl font-lato font-extrabold text-white mt-3 lg:mt-7">FAQ</p>
            </div>

            <div class="flex flex-col items-center w-full">

                <div class="flex flex-col bg-[#1b998b] w-full px-10 py-0 lg:px-10 lg:py-5 -mt-[170px] lg:-mt-[650px]">
                    <div class="flex flex-row mt-5 justify-center">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                         <p class="bg-white lg:text-2xl text-[#F4845F] font-extrabold font-lato text-xl flex justify-between items-center rounded-md w-full pl-10">FAQ Question 1
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#ffffff" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#ffffff" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>
                    </div>

                    <div class="flex flex-row mt-5 justify-center">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                        <p class="bg-white text-[#F4845F] font-extrabold lg:text-2xl font-lato text-xl flex justify-between items-center rounded-md w-full pl-10">FAQ Question 2
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#ffffff" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#ffffff" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>   
                    </div>

                    <div class="flex flex-row mt-5 justify-center">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                        <p class="bg-white flex justify-between items-center rounded-md text-[#F4845F] font-extrabold lg:text-2xl font-lato text-xl w-full pl-10">FAQ Question 3
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#Ffffff" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#ffffff" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>
                    </div>

                    <div class="flex flex-row mt-5 justify-center">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                        <p class="bg-white flex justify-between items-center rounded-md text-[#F4845F] font-extrabold lg:text-2xl font-lato text-xl w-full pl-10">FAQ Question 4
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#FffffF" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#FffffF" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>
                    </div>
                    
                    <div class="flex flex-col mt-5 justify-center">
                        <div class="flex flex-row -ml-2">
                            <div>
                                <svg 
                                    width="20" height="200" viewBox="0 0 20 554" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                    class="h-full lg:h-full">
                                    <path d="M0 15C0 6.71574 6.71573 0 15 0H20V554H15C6.71573 554 0 547.284 0 539V15Z" fill="#F4845F"/>
                                </svg>
                            </div>

                            <div class="flex flex-col lg:-ml-[7px] -ml-1"> 
                                <p class="bg-white flex justify-between items-center rounded-md text-[#F4845F] font-extrabold font-lato lg:text-2xl text-xl h-20 w-full pl-10 mr-52 -mb-1">
                                    FAQ Question 5
                                    <button>
                                        <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                            <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                            <line x1="12" y1="20" x2="28" y2="20" stroke="#FFFFFF" stroke-width="3"/>
                                        </svg>
                                    </button>
                                </p>
                                
                                <p class="bg-[#FFF1ED] text-black lg:text-lg font-lato text-base pr-24 pl-10 py-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="flex flex-row justify-center mt-5">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                        <p class="bg-white flex justify-between items-center rounded-md text-[#F4845F] font-extrabold lg:text-2xl font-lato text-xl w-full pl-10">FAQ Question 6
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#ffffff" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#ffffff" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>
                    </div>

                    <div class="flex flex-row mt-5 mb-10 justify-center">
                        <svg width="10" height="70" viewBox="0 0 20 138" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 6.71573 6.71573 0 15 0H20V138H15C6.71573 138 0 131.284 0 123V15Z" fill="#F4845F"/>
                        </svg>
                        <p class="bg-white flex justify-between items-center rounded-md text-[#F4845F] font-extrabold lg:text-2xl font-lato text-xl w-full pl-10">FAQ Question 7 
                            <button>
                                <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" class="mr-5">
                                    <circle cx="20" cy="20" r="20" fill="#F4845F"/>
                                    <line x1="12" y1="20" x2="28" y2="20" stroke="#ffffff" stroke-width="3"/>
                                    <line x1="20" y1="12" x2="20" y2="28" stroke="#ffffff" stroke-width="3"/>
                                </svg>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="flex flex-col lg:mb-0 mb-3">
            <div class="flex lg:flex-row flex-col lg:justify-between w-[100%] lg:items-center">
                <div class="flex w-1/2 items-center">
                    <img src="/images/surround.jpg" alt="logo">
                    <div class="flex flex-row lg:-ml-6 ml-44 font-lato">
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

                <div class="flex lg:flex-row flex-col lg:w-1/2 lg:justify-end lg:mr-14 lg:ml-0 ml-10 lg:mb-0 mb-3">
                    <a href=""><p class="lg:mr-7 font-lato">Privacy Policy</p></a>
                    <a href=""><p class="font-lato">Terms of Service</p></a>
                </div>
            </div>

            <div class="flex lg:flex-row flex-col ml-10 lg:ml-10 lg:items-center mb-5">
                <div class="flex flex-row">
                    <a href=""><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_189)"/>
                        <defs>
                        <pattern id="pattern0_1721_189" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_189" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_189" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE1ElEQVR4nO2cy49URRSHv1nA4Lp14QAmSIyiKI4zSgYlhqWJErc8tiQ+AHfiygkrCRpWDjoRloqS+HZUosQ/wGA0KGIC6hIRMIhxHKaZMpUcksmk7+3XOXWr69aX/JJJZ7rq1C/dp089bkEmk8lkMplMJpPJ1JRhYAuwH/gQOANcAa4DriLNSQw/SUw+tscl1oHjIWAa+KtCQ12X8ua/ATzIALAB+DwC01wfWgA+Ax4gQlYAh4D5CIxySvJjeU3GFgV3Ad9HYIwz0nfA2qpNHgcuRmCGM9ZlYKIqkx8G/o7ABBdIfqxjVaSLPyMYvAusP4A7Q5m8QvKWq6l+AG4JYfShCAbrKtZBa5PvT6yEcz1qXuYMZnwRwSBdJPrEyuRRmTW5hDQHvAiMiPbJa528d8Fquj4dgTFOWd7Ypezr4v2HtU0eHrAFIteh/Kd4KSNdTmSWaxq9JQJTXCCjV3bZxmZNo/dHYIoLlDpe6rKNSU2jP4rAFGegOTG7lx/Dm/pA0+gzFRlxDpgCtknV0wCWiRry2nb5UTpfUYw/ahp9KWDgTeAdYFOXMQ4BjwLHpI1Q8fo1HzW6/Tr1qhPA3QrxrgO+DhTzfyhiHey/wC70eQaYDRC/GpZBXpQNBCseCbCkq4alyfdgzzpjs9WwShfjHfR9B7AH+BI4C/wjOiuv7QZWd9DORsM0ooZFcLva9LkKONphBeH/54jM6sp4tm5Gn2jT39PAtR739ba2aftkXYxutinhXgBu9NG+f+/ekvbvNaizozT67Taf5H5MXmx22Sf7vToYvakkJ/eSLsrSSKvVOc9jqRt9TqbKrTiqPHivtwr68jH8lrLRUyUlnMX6RFO+Ka14M2WjtxW0v8fA5Jt6vqDPHSkbPVrB7vpMQZ9jKRvdKGj/F0Oj/QyyFbelbPTygvY1q42l8m0XbThno9Ez4WodjW4UtJ9Th7LRowVG5x9DZaO3Fxi92zBHP1fQ586UU8fhgvZXG01Y5ksmLNMpG32+ZAp+xMBob2YrfAy/p2y0kyMBrVip/EyMrzZuL+hrs/KYojT6WEk/TyilEL9M+lRJP8frYHRTNkuL2Kuw8O/XTopYr7TmHb3RDviqTX9be0wjPl08WdKuz83fGIwnWqOdHG4pY0TWk5sdVhfTJTnZuoxUwyK4WTnc0o5VstTpH+b/WdYursnfM1InF5Vwi5mQ41u1M9rJoZayfK3FfcYHNdVwxmZvxI6JAKdh1XDGmpXDLZoMSU62ShcmRoc6tntSzl30y3qj6sL82G7Ig+g3gHflSEDRdL0VQzLjO25QJwc7iF7VoxW/ym71Dtnja8gujdet8tpOKe00jw9U9mhFqg8LOQW9r2l0qo+/OQW9rGl0qg90OgX53xI1huVeuKoH5SLTJXkUTxXNI1QuEb2OASleI+H60ILlJYQzEQzQRSJfiZkuzlR5gauLRPMhrtR8NYKBuop1gAD4CuRUBIN1FenbkFcgr5XL9lzNdAFYQ2DGa3Zl5lW5F7sSxmryyb5QpcmL08ipxHPyGiJhWK6RTKn0uw68on0LmOaVmp8O+AxyAfhYaafHnA3yqNvlCIxzXSwQTVnfOWrFMtlempQF8tMyoFB7kK00JzGclpgmJUb1VbhMJpPJZDKZTCaTYRD4Hy2WYZFuOgQHAAAAAElFTkSuQmCC"/>
                        </defs>
                    </svg></a>

                    <a href=""><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_190)"/>
                        <defs>
                        <pattern id="pattern0_1721_190" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_190" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_190" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACNklEQVR4nO2csWpUQRSGv8rIggRtk8pGISBi5xuks/AVLE1SiY9gnVorQXwFO8UimkqtRHtbRQxo5ZELt0i3E3funNm73wen3J1zvvw7O3chAyIiIiIiIiIiMnAZOAJOgTMgZlpnwHvgENhq/affBT51ICEa18dx9mZJ3kTJcU52k2QfdTBsJNdBC9GnHQwayfWuhehfHQwayTU4mJzsIaOTUjSKJjuFJpp8cW4d5Et1j0bR6Yn7DjwHHgC3gR1gMR4VrgLXgOvAHrAPvDTRXFjwI+DKBc9fw2vcOiiT8AW4+Z8HXEVTJvkrsL3CU4SiWS75D3BnBcmKpizNxytKVjTLJf8Fbih6+mPc2wqSTTTLRT9RdJsHk3uFou8Cr8Zzdo11Jyc6q72Cnocnw9+V152c6Kx2Cnp+McG6kxOd1aKg58+KpkmyfiiaJqKn+CRNTvZWEYpWdFWyExwmeg33wXM866233tJaize99TZX0d96622Oohfjz61d9TZH0bd67G2Oou/32NscRT/usbc5in7aY29zFP1600VHpYHXMgTZYkPRiq5KdoLDRCu6KtkJDhOt6KpkJzhMtKKrkp3gMNGKrkp2gsNEK7oq2QkOE63oqmQnOEy0oquSneAw0YquSnaCw0QretbXsZVQe82fbOAFgyWs5QWDhx3IjWTRD2nA1ngR6qaK/gBcohG7Hckuoabkkn8grZ7sg3G/yvyCLGGV9x9mOxm3i2ZJFhERERERERGhY/4BzWMTzORFMuAAAAAASUVORK5CYII="/>
                        </defs>
                    </svg></a>
                </div>

                <p class="lg:mb-3 font-lato"><strong>Stay in the Loop</strong> - Get updates on promotions and new features follow us on socials.</p>

            </div>
        </footer>
    </div>

    <script src=/js/surround.js></script>
    
</body>
</html>