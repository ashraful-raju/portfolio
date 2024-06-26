<section class="py-10 md:py-10">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Education</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Below is a summary of the places I studied
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($educations as $education)
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <h4 class="font-medium text-gray-700 text-lg mb-4">{{ $education->title }}</h4>

                    <p class="font-normal text-gray-500 text-md mb-4">{{ $education->description }}</p>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">{{ $education->duration }}</h4>


                </div>
            @endforeach

        </div>

    </div>

</section>
