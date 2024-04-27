<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Services') }}
            </h2>
            <x-primary-button type="button" x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'add-service')">
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
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Icon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Details
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $service->title }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <img src="{{ $service->getIconUrl() }}" alt="Icon"
                                            class="w-8 h-8 rounded-full">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $service->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <button type="button" x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'edit-service-{{ $service->id }}')"
                                                class="text-cyan-500">Edit</button>
                                            <span class="mx-1">|</span>
                                            <form onsubmit="return confirm('Are you sure?')"
                                                action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-600" type="submit">Delete</button>
                                            </form>
                                        </div>
                                        @include('services.edit-modal')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <x-modal name="add-service" :show="$errors->isNotEmpty()" focusable>
        <form method="post" action="{{ route('services.store') }}" class="p-6">
            @csrf
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Add a new service') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="title" value="{{ __('Title') }}" class="sr-only" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Title') }}" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="icon" value="{{ __('Icon') }}" class="sr-only" />
                <x-text-input id="icon" name="icon" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Icon name') }}" />
                <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                <p class="text-sm text-gray-900 py-2">Choose the name of an icon from <a class="text-blue-400"
                        href="https://simpleicons.org/">Simple
                        Icon</a></p>
            </div>

            <div class="mt-4">
                <x-input-label for="description" value="{{ __('Description') }}" class="sr-only" />
                <x-textarea id="description" name="description" value="" class="mt-1 block w-3/4"
                    placeholder="{{ __('Description') }}" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
