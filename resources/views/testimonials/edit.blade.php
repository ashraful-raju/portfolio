<x-modal name="edit-testimonial-{{ $testimonial->id }}" focusable>
    <form method="post" action="{{ route('testimonials.update', $testimonial->id) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit Review') }}
        </h2>

        <div class="mt-4">
            <x-input-label for="review" value="{{ __('Review') }}" class="sr-only" />
            <x-textarea id="review" name="review" :value="$testimonial->review" class="mt-1 block w-3/4"
                placeholder="{{ __('Review') }}" />
            <x-input-error :messages="$errors->get('review')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="name" value="{{ __('Name') }}" class="sr-only" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('By whom') }}" :value="$testimonial->name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="designation" value="{{ __('Designation') }}" class="sr-only" />
            <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Designation') }}" :value="$testimonial->designation" />
            <x-input-error :messages="$errors->get('designation')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="company" value="{{ __('Company') }}" class="sr-only" />
            <x-text-input id="company" name="company" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Company Name') }}" :value="$testimonial->company" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>
        <div class="mt-6">
            <x-input-label for="link" value="{{ __('Link') }}" class="sr-only" />
            <x-text-input id="link" name="link" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Company link') }}" :value="$testimonial->link" />
            <x-input-error :messages="$errors->get('link')" class="mt-2" />
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
