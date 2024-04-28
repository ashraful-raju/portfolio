<section class="py-10 md:py-10">

    <div class="container max-w-screen-xl mx-auto px-4">

        <nav class="flex items-center justify-between mb-40">
            <img src="/image/navbar-logo.png" alt="Logo">

            <a href="{{ settings('user-resume-link', '#') }}"
                class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500">Get
                my CV</a>
        </nav>

        <div class="text-center">
            <div class="flex justify-center mb-16">
                <img class="rounded-full w-44 h-44" src="{{ asset(settings('user-image', '/image/27.jpg')) }}"
                    alt="User Image">
            </div>

            <h6 class="font-medium text-gray-600 text-lg md:text-2xl uppercase mb-8">{{ settings('user-name') }}</h6>

            <h1 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-8">{{ settings('user-title') }}
            </h1>

            <p class="font-normal text-gray-600 text-md md:text-xl mb-16">{{ settings('user-about') }}</p>

            <a href="{{ settings('user-contact-link', '#') }}"
                class="px-7 py-3 md:px-9 md:py-4 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500">Hire
                me</a>
        </div>

    </div>

</section>
