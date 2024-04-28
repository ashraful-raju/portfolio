<x-modal name="edit-education-{{ $education->id }}" focusable>
    <form method="post" action="{{ route('educations.update', $education->id) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit education') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="title" value="{{ __('Title') }}" class="sr-only" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Title') }}" :value="$education->title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="description" value="{{ __('Description') }}" class="sr-only" />
            <x-textarea id="description" name="description" :value="$education->description" class="mt-1 block w-3/4"
                placeholder="{{ __('Description') }}" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="duration" value="{{ __('Duration') }}" class="sr-only" />
            <x-text-input id="duration" name="duration" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Duration') }}" :value="$education->duration" />
            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
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
