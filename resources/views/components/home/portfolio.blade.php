<section class="py-10 md:py-10">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="flex flex-col lg:flex-row justify-between">
            <div class="mb-10 lg:mb-0">
                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Portfolio</h1>

                <p class="font-normal text-gray-500 text-xs md:text-base">I have brought here my biggest and
                    favorite works <br> as a professional.</p>
            </div>

            <div class="space-y-24 w-3/5">
                @foreach ($portfolios as $portfolio)
                    <div class="flex space-x-6">
                        <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">
                            {{ sprintf('%02d', $loop->iteration) }}
                        </h1>

                        <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                        <div>
                            <a href="{{ $portfolio->link }}" target="_blank"
                                class="block font-normal text-gray-700 text-3xl md:text-4xl mb-5">{{ $portfolio->title }}</a>

                            <p class="font-normal text-gray-500 text-sm md:text-base">{{ $portfolio->description }}</p>

                            <div class="flex space-1 mt-4">
                                @foreach ($portfolio->technologies as $item)
                                    <x-badge :text="$item" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

</section>
