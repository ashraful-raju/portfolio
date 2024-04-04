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

                        <form method="post" action="{{ route('settings') }}" class="mt-6 space-y-6">
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
