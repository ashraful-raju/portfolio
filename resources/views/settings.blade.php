<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Personal Information') }}
                            </h2>
                        </header>

                        <form method="post" action="{{ route('settings') }}" class="mt-6 space-y-6"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    placeholder="Enter name" :value="old('name', settings('user-name'))" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    placeholder="Enter title" :value="old('title', settings('user-title'))" autocomplete="title" />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>
                            <div>
                                <x-input-label for="about" :value="__('About')" />
                                <x-textarea id="about" name="about" class="mt-1 block w-full"
                                    placeholder="Enter about" :value="old('about', settings('user-about'))" />
                                <x-input-error class="mt-2" :messages="$errors->get('about')" />
                            </div>

                            <div>
                                <x-input-label for="contact-link" :value="__('Contact link')" />
                                <x-text-input id="contact-link" name="contact-link" class="mt-1 block w-full"
                                    placeholder="Enter contact link" :value="old('contact-link', settings('user-contact-link'))" />
                                <x-input-error class="mt-2" :messages="$errors->get('contact-link')" />
                            </div>
                            <div>
                                <x-input-label for="resume-link" :value="__('Resume link')" />
                                <x-text-input id="resume-link" name="resume-link" class="mt-1 block w-full"
                                    placeholder="Enter resume link" :value="old('resume-link', settings('user-resume-link'))" />
                                <x-input-error class="mt-2" :messages="$errors->get('resume-link')" />
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('User Image')" />
                                <div class="flex items-center">
                                    <x-text-input id="image" name="image"
                                        class="mt-1 block border p-1 mr-2 w-full" placeholder="Enter contact link"
                                        type="file" accept="image/*" />
                                    @if (settings('user-image'))
                                        <img src="{{ asset(settings('user-image')) }}" alt="user"
                                            class="w-10 h-10 rounded-full" />
                                    @endif
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <section class="mt-4">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Skill Information') }}
                            </h2>
                        </header>

                        <form method="post" action="{{ route('settings') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="skill-title" type="text" class="mt-1 block w-full"
                                    placeholder="Enter title" :value="old('skill-title', settings('user-skill-title'))" autocomplete="skill-title" />
                                <x-input-error class="mt-2" :messages="$errors->get('skill-title')" />
                            </div>
                            <div>
                                <x-input-label for="about" :value="__('About')" />
                                <x-textarea id="about" name="skill-about" class="mt-1 block w-full"
                                    placeholder="Enter about" :value="old('skill-about', settings('user-skill-about'))" />
                                <x-input-error class="mt-2" :messages="$errors->get('skill-about')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
