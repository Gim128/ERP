<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <a href="{{ route('company.create') }}">Create</a>
                <br/><br/>
                @foreach($companies as $company)
                    {{$company->name}}, {{$company->mobile}}, {{$company->email}}<br/>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
