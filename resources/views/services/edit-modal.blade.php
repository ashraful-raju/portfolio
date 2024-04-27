<x-modal name="edit-service-{{ $service->id }}" focusable>
    <form method="post" action="{{ route('services.update', $service->id) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit service') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="title" value="{{ __('Title') }}" class="sr-only" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Title') }}" :value="$service->title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="icon" value="{{ __('Icon') }}" class="sr-only" />
            <x-text-input id="icon" name="icon" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Icon name') }}" :value="$service->icon" />
            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
            <p class="text-sm text-gray-900 py-2">Choose the name of an icon from <a class="text-blue-400"
                    href="https://simpleicons.org/">Simple
                    Icon</a></p>
        </div>

        <div class="mt-4">
            <x-input-label for="description" value="{{ __('Description') }}" class="sr-only" />
            <x-textarea id="description" name="description" :value="$service->description" class="mt-1 block w-3/4"
                placeholder="{{ __('Description') }}" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
