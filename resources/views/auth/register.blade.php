<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full border-lavendergray focus:border-ebonyclay focus:ring-ebonyclay" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border-lavendergray focus:border-ebonyclay focus:ring-ebonyclay" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full border-lavendergray focus:border-ebonyclay focus:ring-ebonyclay"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full border-lavendergray focus:border-ebonyclay focus:ring-ebonyclay"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-end mt-4">

            <div>
                <a href="{{ url('/') }}">
                    <button type="button" class="inline-flex items-center px-4 py-2 ms-3 my-4 border border-2 border-eboynyclay rounded-md font-semibold text-xs text-ebonyclay uppercase tracking-widest hover:bg-lavendergray dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        Back
                    </button>
                </a>

                <x-primary-button class="ms-4 my-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            <a class="text-sm text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                Already have an account? <span class="underline font-bold hover:text-lavendergray">{{ __('Click here') }}</span>
            </a>
        </div>
    </form>
</x-guest-layout>