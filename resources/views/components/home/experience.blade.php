<section class="py-10 md:py-10">

    <div class="container max-w-screen-xl mx-auto px-4">

        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Experience</h1>

        <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Below is a summary of the places I studied
        </p>

        <div class="flex flex-col lg:flex-row justify-between">
            <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                <h6 class="font-medium text-gray-400 text-base uppercase">Company</h6>
                @foreach ($experiences as $experience)
                    <p class="font-semibold text-gray-600 text-base"><a href="{{ $experience->link }}"
                            target="_blank">{{ $experience->company }}</a>
                        <span class="font-normal text-gray-300">/
                            {{ $experience->address }}</span>
                    </p>
                @endforeach
            </div>

            <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">

                <h6 class="font-medium text-gray-400 text-base uppercase">Position</h6>
                @foreach ($experiences as $experience)
                    <p class="font-normal text-gray-400 text-base">{{ $experience->position }}</p>
                @endforeach
            </div>

            <div class="space-y-8 md:space-y-16">

                <h6 class="font-medium text-gray-400 text-base uppercase">Duration</h6>
                @foreach ($experiences as $experience)
                    <p class="font-normal text-gray-400 text-base">{{ $experience->duration }}</p>
                @endforeach
            </div>
        </div>
    </div>


</section>
