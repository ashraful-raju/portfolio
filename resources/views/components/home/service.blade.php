<section class="py-10 md:py-10">

    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-gray-50 px-8 py-10 rounded-md">
                    <div class="w-20 h-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                        {{-- <i data-feather="activity"></i> --}}
                        <img src="{{ $service->getIconUrl() }}" alt="Icon" class="w-10 h-10" />
                    </div>

                    <h4 class="font-medium text-gray-700 text-lg mb-4">{{ $service->title }}</h4>

                    <p class="font-normal text-gray-500 text-md">
                        {{ $service->description }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>

</section>
