<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    @vite('resources/css/app.css')
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
           {{-- Navbar --}}

           <nav class="relative container mx-auto p-6">
            {{-- flex container --}}

             <div class="flex items-center  justify-between">
                <div class="pt-2">
                    <img src="img/logo.svg" alt="">
                </div>
                {{-- MENU ITEMS --}}
                <div class="hidden md:flex space-x-10 ">
                    <a href="" class="hover:text-orange-600">Pricing</a>
                    <a href="" class="hover:text-orange-600">About US</a>
                    <a href="" class="hover:text-orange-600">Product</a>
                    <a href="" class="hover:text-orange-600">Careers</a>
                    <a href="" class="hover:text-orange-600">Community</a>
                </div>

                {{-- Button --}}
                 <a href="" class="hidden xl:block p-2 px-10 text-white bg-orange-500 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get Started</a>
             </div>
           </nav>

           {{-- hero Section --}}

            <section id="hero">
                {{-- flex container --}}
                <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto space-y-0 md:space-y-0">

                    {{-- left Items --}}
                    <div class="flex flex-col mb-32 space-y-12  md:w-1/2">
                        <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                            Bring everyone together to build better Products
                        </h1>

                        <p class="max-w-sm text-center text-gray md:text-left">
                            Manage makes it simple  for software teams to plan day-to-day tasks while keeping the large goals in view.
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <a href="" class="p-2 px-10 text-white bg-orange-500 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get Started</a>
                        </div>
                    </div>

                    {{-- images --}}
                    <div class="md:w-1/2">
                        <img src="img/illustration-intro.svg" alt="">
                    </div>
                </div>
            </section>



</body>
</html>
