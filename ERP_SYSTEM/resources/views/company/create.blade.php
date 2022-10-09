<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            <x-jet-validation-errors class="mb-4" />
                <form action="{{route('company.store')}}" method="POST">
                    @csrf
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                        @errpr('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autofocus />
                    </div>

                    <div>
                        <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                        <x-jet-input id="mobile" class="block mt-1 w-full" type="mobile" name="mobile" :value="old('mobile')"  maxlength='10'/>
                    </div>

                    <div>
                        <x-jet-label for="subject" value="{{ __('Subject') }}" />
                        <x-jet-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')"  autofocus />
                    </div>

                    <div>
                        <x-jet-label for="message" value="{{ __('Mesasge') }}" />
                        <x-jet-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')"  autofocus />
                    </div>

                        <x-jet-button class="mt-4">
                            {{ __('Create') }}
                        </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>