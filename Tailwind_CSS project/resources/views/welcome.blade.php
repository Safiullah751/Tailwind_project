<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
           {{-- Navbar --}}

           <nav class="relative container mx-auto p-6 shadow-xl">
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
                 <a href="" class="p-2 px-10 text-white bg-orange-500 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get Started</a>
             </div>
           </nav>




</body>
</html>
