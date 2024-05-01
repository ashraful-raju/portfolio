<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-2xl mb-6">Welcome back <span class="text-black font-bold">{{ auth()->user()->name }}</span>!
            </h2>
            <div class="flex space-x-6" id="widget">
                <x-card title="Services" value="24" icon="steelseries" />
            </div>
        </div>
    </div>
</x-app-layout>
