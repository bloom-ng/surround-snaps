<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surround Snaps | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/lato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  
    
    @yield('additional_head')
</head>
<body>
    <div class="flex flex-col bg-white">
        <!-- desktop header -->
        <div class="hidden md:flex flex-row w-[100%] justify-between">
            <div class="lg:w-[30%] md:w-[20%]">
                <img src="/images/surround.jpg" alt="logo">
            </div>
            <div class="flex flex-row justify-between items-center lg:w-[50%] md:w-[60%]">
                <a href="/" class="font-normal font-lato lg:text-base @if(request()->is('/')) text-[#1b998b] @endif">HOME</a>
                <a href="/#about" id="aboutLink" class="font-normal font-lato lg:text-base">ABOUT US</a>
                <a href="/#pricing" id="pricingLink" class="font-normal font-lato lg:text-base">PRICING</a>
                <a href="/gallery" class="font-normal font-lato lg:text-base @if(request()->is('gallery')) text-[#1b998b] @endif">GALLERY</a>
                <a href="/contact" class="font-normal font-lato lg:text-base @if(request()->is('contact')) text-[#1b998b] @endif">CONTACT US</a>
            </div>
            <div class="flex flex-row md:w-[20%] lg:w-[30%] justify-center items-center font-montserrat font-extrabold md:text-base lg:text-lg">
                <a href="/booking"><div class="bg-[#F4845F] text-white lg:px-8 lg:py-1 md:px-4 md:py-1 lg:ml-44 rounded-2xl">BOOK NOW</div></a>
            </div>
        </div>

        <!-- mobile header -->
        <header class="flex items-center justify-between p-4 bg-white md:hidden lg:hidden">
            <a href=""><img src="/images/surround.jpg" alt="Logo" class="h-16"></a>
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </button>
        </header>

        <nav id="menu" class="hidden flex flex-col items-start p-4 bg-white font-semibold ml-4">
            <a href="/" class="pb-2 font-normal font-lato text-base @if(request()->is('/')) text-[#1b998b] @else text-black @endif">HOME</a>
            <a href="/#about" class="py-2 font-normal font-lato text-base text-black">ABOUT US</a>
            <a href="/#pricing" class="py-2 font-normal font-lato text-base text-black">PRICING</a>
            <a href="/gallery" class="py-2 font-normal font-lato text-base @if(request()->is('gallery')) text-[#1b998b] @else text-black @endif">GALLERY</a>
            <a href="/contact" class="py-2 font-normal font-lato text-base @if(request()->is('contact')) text-[#1b998b] @else text-black @endif">CONTACT US</a>
        </nav>
        <!-- /mobile header -->

        @yield('content')

      

        <footer class="flex flex-col">
            <div class="flex lg:flex-row md:flex-row flex-col lg:justify-between md:justify-between w-[100%] lg:items-center">
                <div class="flex lg:w-1/2 md:w-1/2 items-center lg:justify-start md:justify-start  justify-between">
                    <img src="/images/surround.jpg" alt="logo">
                    <div class="flex flex-row font-lato lg:items-start md:items-start md:mr-0 lg:mr-0 mr-5 justify-end">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="lg:pl-2">
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

                <div class="flex lg:flex-row md:items-center lg:items-center md:flex-row flex-col lg:w-1/2 md:w-1/2 md:justify-end lg:justify-end lg:mr-14 lg:ml-0 md:mr-12 md:ml-0 ml-10 lg:mb-0 mb-3">
                    <a href=""><p class="lg:mr-7 md:mr-5 font-lato">Privacy Policy</p></a>
                    <a href=""><p class="font-lato">Terms of Service</p></a>
                </div>
            </div>

            <div class="flex md:flex-row md:items-center lg:flex-row flex-col ml-10 lg:ml-10 lg:items-center mb-5">
                <div class="flex flex-row">
                    <a href="https://www.instagram.com/surroundsnaps360?igsh=MWR1M2diNzljenQ3aA=="><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                    <a href="https://m.yelp.com/biz/surround-snaps-douglasville">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46" height="34" version="1.1" id="Layer_1" viewBox="0 0 511.852 511.852" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M204.444,329.318c11.716-3.046,19.746-13.628,20.48-27c0.742-13.619-6.69-25.737-18.27-30.063l-23.142-9.429     c-84.036-34.662-84.386-34.662-89.899-34.731c-9.079-0.469-17.493,4.284-22.869,12.723c-0.008,0.017-0.017,0.034-0.026,0.051     c-10.325,16.469-12.39,60.911-9.865,85.402c1.178,10.709,3.098,18.458,5.828,23.612c4.582,8.764,12.783,14.174,21.768,14.473     c0.589,0.034,1.118,0.068,1.673,0.068c4.864,0,12.117-2.295,81.655-24.653C195.287,332.27,202.199,330.06,204.444,329.318z"/>
                                        <path d="M244.952,346.151c-12.638-4.881-26.436-1.621-34.202,7.996c-0.009,0-14.524,17.271-16,18.97     c-0.068,0.077-0.137,0.154-0.205,0.239c-58.803,69.009-58.957,69.461-60.8,74.778c-1.34,3.601-1.809,7.441-1.391,10.889     c0.495,5.188,2.654,10.129,6.46,14.737c13.645,16.299,70.639,38.093,96.998,38.093c2.065,0,3.942-0.137,5.598-0.418     c9.822-1.818,17.271-7.774,20.429-16.341c0.009-0.051,0.026-0.094,0.043-0.137c1.809-5.163,1.911-5.478,2.125-86.69     c0,0,0.179-32.41,0.222-34.159C264.972,361.93,257.402,350.947,244.952,346.151z"/>
                                        <path d="M442.378,359.735c-4.403-3.294-4.574-3.413-81.792-28.757c0,0-29.517-9.754-32.333-10.761     c-0.026-0.009-0.043-0.017-0.068-0.026c-11.358-4.412-24.124-0.546-32.495,9.779c-8.61,10.505-9.711,24.704-2.876,35.123     l13.03,21.222c47.488,77.133,48.043,77.577,52.378,80.956c4.42,3.456,9.668,5.214,15.181,5.214c3.533,0,7.168-0.717,10.778-2.185     c21.367-8.525,64.222-63.019,67.473-85.811C453.07,374.6,449.768,365.631,442.378,359.735z"/>
                                        <path d="M316.123,294.06c0.572,0.128,1.161,0.179,1.749,0.179c1.015,0,2.039-0.179,3.029-0.555     c3.738-1.417,11.546-3.32,23.962-6.263c0.009,0,0.017,0,0.034-0.009c87.834-21.274,88.431-21.658,93.235-24.772     c7.467-5.035,11.443-13.534,10.957-23.322c0.008-0.503-0.017-1.135-0.051-1.502c-2.483-23.629-40.542-79.778-60.851-89.711     c-9.028-4.309-18.611-3.84-26.163,1.237c-4.642,3.012-4.642,3.012-52.779,68.847c0,0-19.379,26.359-20.301,27.588     c-7.723,9.421-8.021,22.716-0.759,33.877C294.721,289.648,305.516,295.118,316.123,294.06z"/>
                                        <path d="M254.223,19.393c-2.526-9.207-9.702-15.932-19.712-18.458c-24.269-5.973-109.457,17.929-126.686,35.669     c-6.835,7.142-9.549,16.495-7.27,24.994c0.137,0.512,0.324,0.998,0.546,1.476c2.398,4.984,80.461,127.863,104.269,165.291     c9.984,16.213,20.941,24.354,32.572,24.354c2.765,0,5.555-0.461,8.38-1.374c14.942-4.506,21.948-18.603,20.813-41.899     C265.862,180.101,255.836,28.404,254.223,19.393z"/>
                                    </g>
                                </g>
                            </g>
                            </svg>
                    </a>
                </div>

                <p class="lg:mb-3 font-lato"><strong>Stay in the Loop</strong> - Get updates on promotions and new features follow us on socials.</p>

            </div>
        </footer>
    </div>
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
    <script src="/js/surround.js"></script>
    <script src="/js/pricing.js"></script>

    @yield('additional_scripts')
</body>
</html>