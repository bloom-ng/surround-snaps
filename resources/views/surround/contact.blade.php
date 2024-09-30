@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

        <div class="flex lg:flex-row flex-col bg-[#1b998b] justify-center lg:justify-between w-full">
            <div class="flex flex-col lg:w-[50%] mt-10 ml-10 mr-10 lg:mr-0 lg:ml-20 lg:mb-10 mb-10">
                <h1 class="text-4xl lg:text-5xl font-extrabold font-lato text-white">Contact Us</h1>
                <h1 class="mt-5 lg:mt-5 text-3xl lg:text-4xl font-lato font-bold text-white lg:w-[70%]">Let's Make Your Event Unforgettable</h1>
                <p class="mt-3 lg:mt-5 text-lg lg:text-2xl font-lato font-normal text-white lg:w-[70%]"><a href="/booking" class="underline">Fill out our booking form</a> or reach out directly via email or phone. 
                    Follow us on social media for our latest updates and to see our booth in action.
                </p>
                <p class="flex flex-row items-center font-lato text-lg lg:text-xl text-white mt-5 lg:mt-5">
                    <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="lg:mr-5 mr-3">
                        <rect width="70" height="70" fill="url(#pattern0_1963_149)"/>
                        <defs>
                        <pattern id="pattern0_1963_149" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1963_149" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1963_149" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEzUlEQVR4nO2cXaxdQxSAp8pVrlCalB7SIn1oSCSNVBse/CbiQRDxQD2ooLz4Ce0RD1xBVIigLtWHSmgjghAvDWniL1XRoIQI8dfobWnjXpVQ108/mdx1k5PjnN4ze6/Ze+195ktu7nmYzKy19uw1a62Z2c4lEolEIpFIJBKJREIP4CDgZOAi4GZgFfA88DbwJfADMAr8DYzL7x3At8BHwIvA3cDlvh9F0aoLcCRwLnAH8AKwDdiHLl8D9wMnun4AmAacAtwIrAe+AvZTHH8BjwBHuboBLABuBV4D9mCDn4FzXJUBDgMuBp4Cvscu3j1d5qoEcKgY9zlgL9XBL6aLnXWAU4HVwBjVxS+Ug85o6OXDpnepD7c7KwDTgauAz6kfPwKHWDDyWcAnJfjP7cB7wEvyP2YoeEHZycSzkRX8E/hYFtIVwIXAXP8GdZDnPOCPSHI8WpaRFwHfRFDoH2ALcJ+PZYGBQLnuIg7vx7Nmd2UuVU6DfwM2yCKaKysDjgB2o88ePQv2psiVMuvysl+ywUuAGcoyrkSffZoyTqXA2eIzNbgtopyDEWb1WCx524WfCexUEnq7j7cjy+sXTk22xpS3VfBhRaE3FiDvoHIt5V5XgNDHKS9+r0QXekLu+cAbUvzPw2f+jS5CYF/G1GRDdKH/r8PhwNHAPHkApwNn+kREFuQrgOuBm4AmcA/wAHCNrzgWJeRGZUOvK0TwqiG5vibDZetkEgUfZyOdtY7spWlyS9k6mUS26TX342aXrZNJgDeVjPyW34x1FcIXtYCHJFkbkTMkA7EGeyKngTcD57sKIoZtZ1WswfzGaha2+tNELtuYQSl6rJReZnE7Iy7SYDPEt/bKNkkCpmU8jvAk8Kv8rT5QwhDaPrahc7sayZam4gvJsIINPAnwWEg4GNpeyXU8GM3VyJPyW0rdtuSv1nh9gZ869L9Lq30GeQbEeCO9zFAVVwOcAHzY0sF3wLXAwRpKebo8SJxS+9io+fSWg4inxViAqL6hg1xNaVB9Qwe5miIFWwg8DnyqfC5vr/Tp+17o+hVgNvAyxeHHOtb1E0wU3LX2H0PYXflzz70C3BCh7BqCH3u5+bpHVpgQ8hnssNaf2zZb98gC0PBHqrCHv6E1N0CPnTGTo6r6Y3W/3SUZ2RHfilMLtrxkf6zqt80lI3JnxfvAqrH2QH7bVDIiJ4Q25ZxdK8WvN6RqOK7Yfio25bmzUkhkIjM5792VZmCJNrR9L7wTGpEUGpn4OjD5mdPlSJpW+155OKMN4kYmEl38q6Bgo0PfDcX2veJ1WWJu6wt4HR2aHfq+U7F9CK9msEO8yAQ4SWk2IwtZM3AxDGkfgtdpXqAt4kUmwHXUl2XOCnIFrq6sc1Zo20esGx84K8indOrKqLMAMIv6c4wFQy+h/pxhwdD+4Iwm4yXXOjqx1IKhh5SVahqodbQz5MpG7nBrMsdIraOV9a6GoV2jwxjHK7avZogXIbRrGqp1TPKLq2FoN26o1tHKrDIN3Q+h3SSL6xTaWWZpnUI7ywyVcXl9WO6L9Btjcl8m/iV8YE3Z2hpgTRFfaYz1ubMq8XvUL+gkQxdkaDF2ch3wdFQjt1ygrPoXdLMyKte1i/kiTSKRSCQSiUQikUgkEomEs8l/52CTMnvpxLsAAAAASUVORK5CYII="/>
                        </defs>
                    </svg>
                    (770) 560 5720   
                </p>

                <p class="flex flex-row items-center font-lato text-lg lg:text-xl text-white mt-3 lg:mt-2">
                    <svg width="50" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="lg:mr-5 mr-3">
                        <rect width="70" height="70" fill="url(#pattern0_1963_150)"/>
                        <defs>
                        <pattern id="pattern0_1963_150" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1963_150" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1963_150" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACy0lEQVR4nO3avWsUQRzG8VODCCJoFAxYxMLGRhBFsNJGq1jZ+dJYamfjHxCLFBYWFgqCglpZaaWNVoJoY2OjYgIWgkJACRolyVcGNiAhuZndnZn9zd7zgcDB3e5kH/Z2Z57bwUBEREREREREREREREQiAnYCrxCft8CetmFvB557hxpdL4Edsc7srcDjro/IoKfAtiaBbhry3hbgXtdHZsh9YKxJlu7NB76NgRtdH6EBt4DNnpPy7rCgg74OwDVG10zoZdYXdNAFHrgMLDM6VoCrdSYOIUEHTVmAc8Bf+m8JuOTJYtfaqXBo0M57YJ9ngCngF/21CJz1ZDABvFu7YZ2gnVnggGegE8AP+mcBOOU59v3Ax/U2rhu08xU45BnwCPCd/pgHjnuO+SDwZaMdNAk6ysAFCTmxjvpOrKZBr36VTgd8lT5QrtmAS+XJkEtlm6CdPwE3h73r3RwKEHLzPwP8DtlZ26BDpzulNX9vAqaz5+tMZ2MEXWcC/wz7QhZoV+ou0GIFXXtJalSyyiF20MElC/YkLdFSBJ38n04g+cmRKuiSmr+ZHJe7lEFbb/5W6jZwloO22vwtNWngrAdtrflbbNrAlRC0leZvoU0DV0rQXTd/810WYbmD7uqAozRwpQUd2vxNRmr+Psdq4EoMOlfzF7WBKzXo1M1f9Aau5KBTNX8vUjRwpQcdeyn8xOLS31LQzs2AZ/7usLHb7jOeMsuNwagH7X1g8L8bmOsgvlV/7vWUZ5uxat+dsBh080dgDf/gYDXoaA91W3l43nLQzmtgvEXI49U+Omc9aGcOONYg5MPAJ4woIWiqldt0yNkN7Aau51jt9THoVT+Bh8AFVxJVvfFE9foi8Kj6jDmlBV0sBZ2Jgs5EQWeioDNR0Jko6EwUdCYKOhMFnYmCzkRBZ6KgM1HQmSjoTHw9uoiIiIiIiIiIiIiIiAyG+Ae+eiaBOoDMBQAAAABJRU5ErkJggg=="/>
                        </defs>
                    </svg>
                    surroundsnaps@gmail.com
                </p>
            </div>
            
            <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col md:flex-col w-[90%] md:w-[96%] lg:w-[50%] bg-white rounded-2xl lg:mr-20 ml-5 lg:p-10 p-5 lg:mt-10 lg:mb-10 mb-10">
                @csrf
                <div class="flex flex-row w-full">
                    <div class="flex w-full">
                        <input type="text"
                        name="name"
                        placeholder="Your Name" 
                        class="rounded-full border border-orange-300 py-[5px] text-sm px-3 w-[100%] @error('name') border-red-500 @enderror"
                        required
                        value="{{ old('name') }}">
                    </div>

                    <div class="flex w-full">
                        <input type="email"
                        name="email"
                        placeholder="Email Address"
                        class="rounded-full border border-orange-300 py-[5px] text-sm px-3 w-[100%] @error('email') border-red-500 @enderror"
                        required
                        value="{{ old('email') }}">
                    </div>
                </div>

                <div class="flex flex-col lg:mt-4 mt-3">
                    <input type="text"
                    name="phone"
                    placeholder="Phone Number"
                    class="rounded-full border border-orange-300 px-3 text-sm py-[5px] @error('phone') border-red-500 @enderror"
                    required
                    value="{{ old('phone') }}">
                </div>

                <div class="flex flex-col lg:mt-4 mt-3 text-sm">
                    <textarea name="message" rows="15" class="rounded-2xl border border-orange-300 text-black py-2 px-3 @error('message') border-red-500 @enderror" placeholder="Your Message" required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="mt-4 bg-[#F4845F] text-white font-bold py-2 px-4 rounded-full">
                    Send Message
                </button>
            </form>
        </div>

@endsection