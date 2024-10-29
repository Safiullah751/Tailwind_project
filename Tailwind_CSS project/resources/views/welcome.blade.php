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
        <a href=""
            class="hidden xl:block p-2 px-10 text-white bg-red-400 rounded-full pt-3 hover:bg-black delay-100 ease-in-out">Get
            Started</a>
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
        <div
          class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:w-1/3"
        >
          <img src="img/avatar-anisha.png" class="w-16 -mt-14" alt="" />
          <h5 class="text-lg font-bold">Anisha Li</h5>
          <p class="text-sm text-darkGrayishBlue">
            “Manage has supercharged our team’s workflow. The ability to
            maintain visibility on larger milestones at all times keeps
            everyone motivated.”
          </p>
        </div>

        <!-- Testimonial 2 -->
        <div
          class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:flex md:w-1/3"
        >
          <img src="img/avatar-ali.png" class="w-16 -mt-14" alt="" />
          <h5 class="text-lg font-bold">Ali Bravo</h5>
          <p class="text-sm text-darkGrayishBlue">
            “We have been able to cancel so many other subscriptions since
            using Manage. There is no more cross-channel confusion and
            everyone is much more focused.”
          </p>
        </div>

        <!-- Testimonial 3 -->
        <div
          class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-slate-100 md:flex md:w-1/3"
        >
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
        <a
          href="#"
          class="p-3 px-6 pt-2 text-white bg-red-400 rounded-full baseline hover:bg-brightRedLight"
          >Get Started</a
        >
      </div>
    </div>
  </section>
</body>
</html>
