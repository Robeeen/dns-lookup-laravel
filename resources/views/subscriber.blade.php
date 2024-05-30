<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Subscriber') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("DNS Lookup ") }}
                <div style="padding-right: 15px; width: 50%">
                        <form wire:submit="searchDns">
                        @csrf    
                            <div class="mb-5">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Please type website URL</label>
                                    <input wire:model="host" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Type DNS" required />
                            </div>
                            <button type="submit" style="padding: 5px; border: 1px solid; font-weight:bold;margin-top: 10px; margin-bottom: 15px; background: blue; color: white; width:100%">Search DNS</button>
                            <span wire:loading>Searching...</span> 
                        </form>
                </div>
                    
                <div style="padding-right: 15px; width: 50%">
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
