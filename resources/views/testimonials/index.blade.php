<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Testimonial') }}
            </h2>
            <x-primary-button type="button" x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'add-testimonial')">
                Add new
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert :message="session('alert')" class="-mt-6" />

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Review
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    By whom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Company
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                        {{ $testimonial->review }}
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $testimonial->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $testimonial->company }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <button type="button" x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'edit-testimonial-{{ $testimonial->id }}')"
                                                class="text-cyan-500">Edit</button>
                                            <span class="mx-1">|</span>
                                            <form onsubmit="return confirm('Are you sure?')"
                                                action="{{ route('testimonials.destroy', $testimonial->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-600" type="submit">Delete</button>
                                            </form>
                                        </div>
                                        @include('testimonials.edit')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <x-modal name="add-testimonial" :show="$errors->isNotEmpty()" focusable>
        <form method="post" action="{{ route('testimonials.store') }}" class="p-6">
            @csrf
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Add a new review') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="review" value="{{ __('Review') }}" class="sr-only" />
                <x-textarea id="review" name="review" class="mt-1 block w-3/4" placeholder="{{ __('Review') }}"
                    :value="old('review')" />
                <x-input-error :messages="$errors->get('review')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="name" value="{{ __('Name') }}" class="sr-only" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('By whom') }}" :value="old('name')" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="designation" value="{{ __('Designation') }}" class="sr-only" />
                <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Designation') }}" :value="old('designation')" />
                <x-input-error :messages="$errors->get('designation')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="company" value="{{ __('Company') }}" class="sr-only" />
                <x-text-input id="company" name="company" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Company Name') }}" :value="old('company')" />
                <x-input-error :messages="$errors->get('company')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="link" value="{{ __('Link') }}" class="sr-only" />
                <x-text-input id="link" name="link" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Company link') }}" :value="old('link')" />
                <x-input-error :messages="$errors->get('link')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
</x-app-layout>
