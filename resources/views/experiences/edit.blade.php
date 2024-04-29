<x-modal name="edit-experience-{{ $experience->id }}" focusable>
    <form method="post" action="{{ route('experiences.update', $experience->id) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit experience') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="company" value="{{ __('Company') }}" class="sr-only" />
            <x-text-input id="company" name="company" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Company') }}" :value="$experience->company" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="link" value="{{ __('Link') }}" class="sr-only" />
            <x-text-input id="link" name="link" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Link') }}" :value="$experience->link" />
            <x-input-error :messages="$errors->get('link')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="address" value="{{ __('Address') }}" class="sr-only" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Address') }}" :value="$experience->address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="position" value="{{ __('Position') }}" class="sr-only" />
            <x-text-input id="position" name="position" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Position') }}" :value="$experience->position" />
            <x-input-error :messages="$errors->get('position')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="duration" value="{{ __('Duration') }}" class="sr-only" />
            <x-text-input id="duration" name="duration" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Duration') }}" :value="$experience->duration" />
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
