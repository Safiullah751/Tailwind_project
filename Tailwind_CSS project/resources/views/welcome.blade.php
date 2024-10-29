<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url('../img/bg-tablet-pattern.svg');
            background-repeat: no-repeat;
            background-size: 800px;
            background-position: 90% -25%;
        }

        #cta {
            background-image: url('../img/bg-simplify-section-desktop.svg');
            background-repeat: no-repeat;
        }

        @media (max-width: 576px) {
            body {
                background-position: 50px -50px;
                background-size: 500px;
            }

            #cta {
                background-image: url('../img/bg-simplify-section-mobile.svg');
            }
        }

        /* Hamburger Menu */

        .hamburger {
            cursor: pointer;
            width: 24px;
            height: 24px;
            transition: all 0.25s;
            position: relative;
        }

        .hamburger-top,
        .hamburger-middle,
        .hamburger-bottom {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 2px;
            background: #000;
            transform: rotate(0);
            transition: all 0.5s;
        }

        .hamburger-middle {
            transform: translateY(7px);
        }

        .hamburger-bottom {
            transform: translateY(14px);
        }

        .open {
            transform: rotate(90deg);
            transform: translateY(0px);
        }

        .open .hamburger-top {
            transform: rotate(45deg) translateY(6px) translate(6px);
        }

        .open .hamburger-middle {
            display: none;
        }

        .open .hamburger-bottom {
            transform: rotate(-45deg) translateY(6px) translate(-6px);
        }

        .hover\:bg-brightRedLight:hover {
            --tw-bg-opacity: 1;
            background-color: hsl(12 88% 69% / var(--tw-bg-opacity));
        }

        .hover\:bg-gray-900:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
        }

        .hover\:text-darkGrayishBlue:hover {
            --tw-text-opacity: 1;
            color: hsl(227 12% 61% / var(--tw-text-opacity));
        }

        .hover\:text-brightRed:hover {
            --tw-text-opacity: 1;
            color: hsl(12 88% 59% / var(--tw-text-opacity));
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        @media (min-width: 480px) {
            .sm\:w-auto {
                width: auto;
            }

            .sm\:self-center {
                align-self: center;
            }
        }

        @media (min-width: 768px) {
            .md\:mb-4 {
                margin-bottom: 1rem;
            }

            .md\:block {
                display: block;
            }

            .md\:flex {
                display: flex;
            }

            .md\:hidden {
                display: none;
            }

            .md\:w-1\/2 {
                width: 50%;
            }

            .md\:w-1\/3 {
                width: 33.333333%;
            }

            .md\:max-w-xl {
                max-width: 36rem;
            }

            .md\:flex-row {
                flex-direction: row;
            }

            .md\:flex-col {
                flex-direction: column;
            }

            .md\:items-start {
                align-items: flex-start;
            }

            .md\:justify-start {
                justify-content: flex-start;
            }

            .md\:space-y-0> :not([hidden])~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px * var(--tw-space-y-reverse));
            }

            .md\:space-x-6> :not([hidden])~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(1.5rem * var(--tw-space-x-reverse));
                margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
            }

            .md\:bg-transparent {
                background-color: transparent;
            }

            .md\:py-1 {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
            }

            .md\:py-12 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }

            .md\:text-left {
                text-align: left;
            }

            .md\:text-5xl {
                font-size: 3rem;
                line-height: 1;
            }

            .md\:text-4xl {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }
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
        <div class="hidden md:flex space-x-6 ">
            <a href="" class="hover:text-orange-600">Pricing</a>
            <a href="" class="hover:text-orange-600">About US</a>
            <a href="" class="hover:text-orange-600">Product</a>
            <a href="" class="hover:text-orange-600">Careers</a>
            <a href="" class="hover:text-orange-600">Community</a>
        </div>

        {{-- Button --}}
        <a href=""
            class="hidden xl:block p-2 px-8 text-white bg-red-400 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get
            Started</a>
    </div>

    <!-- Hamburger Icon -->
    <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
    </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
        <div id="menu"
            class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
            <a href="#">Pricing</a>
            <a href="#">Product</a>
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">Community</a>
        </div>
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

            <p class="max-w-sm text-center text-gray-500 md:text-left">
                Manage makes it simple for software teams to plan day-to-day tasks while keeping the large goals in
                view.
            </p>
            <div class="flex justify-center md:justify-start">
                <a href=""
                    class="p-2 px-10 text-white bg-red-400 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get
                    Started</a>
            </div>
        </div>

        {{-- images --}}
        <div class="md:w-1/2">
            <img src="img/illustration-intro.svg" alt="">
        </div>
    </div>
</section>

{{-- features Section --}}

<section id="features">
    <div class="container flex flex-col space-y-12 px-4 mx-auto mt-10 md:space-y-0 md:flex-row">

        {{-- what's Diffrent? --}}
        <div class="flex flex-col mb-12 md:w-1/2 space-y-12">
            <h2 class=" max-w-lg text-4xl font-bold text-center md:text-5xl md:text-left">
                What's diffrent about Manage?
            </h2>

            <p class="max-w-sm text-center text-gray-500 md:text-left">
                mange provides all the functionality your team needs.whitout the complexity.
                Our software is tailor- made for modern digital product teams.
            </p>
        </div>

        {{-- Number list --}}

        <div class="flex flex-col space-y-8 md:w-1/2">

            <!-- List Item 1 -->
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                <!-- Heading -->
                <div class="rounded-l-full bg-red-300 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-400">
                            01
                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Track company-wide progress
                        </h3>
                    </div>
                </div>

                <div>
                    <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Track company-wide progress
                    </h3>
                    <p class="text-darkGrayishBlue">
                        See how your day-to-day tasks fit into the wider vision. Go from
                        tracking progress at the milestone level all the way down to the
                        smallest of details. Never lose sight of the bigger picture
                        again.
                    </p>
                </div>
            </div>

            <!-- List Item 2 -->
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                <!-- Heading -->
                <div class="rounded-l-full bg-red-300 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-400">
                            02
                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Advanced built-in reports
                        </h3>
                    </div>
                </div>

                <div>
                    <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Advanced built-in reports
                    </h3>
                    <p class="text-darkGrayishBlue">
                        Set internal delivery estimates and track progress toward
                        company goals. Our customisable dashboard helps you build out
                        the reports you need to keep key stakeholders informed.
                    </p>
                </div>
            </div>

            <!-- List Item 3 -->
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                <!-- Heading -->
                <div class="rounded-l-full bg-red-300 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 text-white rounded-full md:py-1 bg-red-400">
                            03
                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            Everything you need in one place
                        </h3>
                    </div>
                </div>

                <div>
                    <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Everything you need in one place
                    </h3>
                    <p class="text-darkGrayishBlue ">
                        Stop jumping from one service to another to communicate, store
                        files, track tasks and share documents. Manage offers an
                        all-in-one team productivity solution.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TestTimonails --}}
<section id="testimonials">
    <!-- Container to heading and testm blocks -->
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-center">
            What's Different About Manage?
        </h2>
        <!-- Testimonials Container -->
        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
            <!-- Testimonial 1 -->
            <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:w-1/3">
                <img src="img/avatar-anisha.png" class="w-16 -mt-14" alt="" />
                <h5 class="text-lg font-bold">Anisha Li</h5>
                <p class="text-sm text-darkGrayishBlue">
                    “Manage has supercharged our team’s workflow. The ability to
                    maintain visibility on larger milestones at all times keeps
                    everyone motivated.”
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:flex md:w-1/3">
                <img src="img/avatar-ali.png" class="w-16 -mt-14" alt="" />
                <h5 class="text-lg font-bold">Ali Bravo</h5>
                <p class="text-sm text-darkGrayishBlue">
                    “We have been able to cancel so many other subscriptions since
                    using Manage. There is no more cross-channel confusion and
                    everyone is much more focused.”
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:flex md:w-1/3">
                <img src="img/avatar-richard.png" class="w-16 -mt-14" alt="" />
                <h5 class="text-lg font-bold">Richard Watts</h5>
                <p class="text-sm text-darkGrayishBlue">
                    “Manage has supercharged our team’s workflow. The ability to
                    maintain visibility on larger milestones at all times keeps
                    everyone motivated.”
                </p>
            </div>
        </div>
        <!-- Button -->
        <div class="my-16">
            <a href="#"
                class="p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-brightRedLight">Get
                Started</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="cta" class="bg-red-400">
    <!-- Flex Container -->
    <div
        class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
        <!-- Heading -->
        <h2 class="text-5xl font-bold text-center text-white md:text-4xl md:max-w-xl md:text-left">
            Simplify how your team works today
        </h2>
        <!-- Button -->
        <div>
            <a href="#"
                class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900">Get
                Started</a>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="bg-black">
    <!-- Flex Container -->
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
        <!-- Logo and social links container -->
        <div
            class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
            <div class="mx-auto my-6 text-center text-white md:hidden">
                Copyright &copy; 2022, All Rights Reserved
            </div>
            <!-- Logo -->
            <div>
                <img src="img/logo-white.svg" class="h-8" alt="" />
            </div>
            <!-- Social Links Container -->
            <div class="flex justify-center space-x-4">
                <!-- Link 1 -->
                <a href="#">
                    <img src="img/icon-facebook.svg" alt="" class="h-8" />
                </a>
                <!-- Link 2 -->
                <a href="#">
                    <img src="img/icon-youtube.svg" alt="" class="h-8" />
                </a>
                <!-- Link 3 -->
                <a href="#">
                    <img src="img/icon-twitter.svg" alt="" class="h-8" />
                </a>
                <!-- Link 4 -->
                <a href="#">
                    <img src="img/icon-pinterest.svg" alt="" class="h-8" />
                </a>
                <!-- Link 5 -->
                <a href="#">
                    <img src="img/icon-instagram.svg" alt="" class="h-8" />
                </a>
            </div>
        </div>
        <!-- List Container -->
        <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-brightRed">Home</a>
                <a href="#" class="hover:text-brightRed">Pricing</a>
                <a href="#" class="hover:text-brightRed">Products</a>
                <a href="#" class="hover:text-brightRed">About</a>
            </div>
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-brightRed">Careers</a>
                <a href="#" class="hover:text-brightRed">Community</a>
                <a href="#" class="hover:text-brightRed">Privacy Policy</a>
            </div>
        </div>

        <!-- Input Container -->
        <div class="flex flex-col justify-between">
            <form>
                <div class="flex space-x-3">
                    <input type="text" class="flex-1 px-4 rounded-full focus:outline-none"
                        placeholder="Updated in your inbox" />
                    <button
                        class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
                        Go
                    </button>
                </div>
            </form>
            <div class="hidden text-white md:block">
                Copyright &copy; 2024, All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<script>
    const btn = document.getElementById('menu-btn')
    const nav = document.getElementById('menu')

    btn.addEventListener('click', () => {
        btn.classList.toggle('open')
        nav.classList.toggle('flex')
        nav.classList.toggle('hidden')
    })
</script>
</body>

</html>
