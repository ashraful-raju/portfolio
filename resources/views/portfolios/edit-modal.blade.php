<x-modal name="edit-portfolio-{{ $portfolio->id }}" focusable>
    <form method="post" action="{{ route('portfolios.update', $portfolio->id) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit portfolio') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="title" value="{{ __('Title') }}" class="sr-only" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Title') }}" :value="$portfolio->title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="link" value="{{ __('Link') }}" class="sr-only" />
            <x-text-input id="link" name="link" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Link') }}" :value="$portfolio->link" />
            <x-input-error :messages="$errors->get('link')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="description" value="{{ __('Description') }}" class="sr-only" />
            <x-textarea id="description" name="description" :value="$portfolio->description" class="mt-1 block w-3/4"
                placeholder="{{ __('Description') }}" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="technologies" value="{{ __('Technologies') }}" class="sr-only" />
            <x-text-input id="technologies" name="technologies" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Tech Stack, comma seperated.') }}" :value="join(', ', $portfolio->technologies)" />
            <x-input-error :messages="$errors->get('technologies')" class="mt-2" />
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
