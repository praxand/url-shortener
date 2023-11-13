<x-guest-layout>
    @if (session()->has('error'))
        <x-notification
            :message="session('error')"
            title="Error!"
            type="error"
        />
    @endif

    <form action="{{ route('shortlinks.confirm', $shortlink) }}" method="post">
        @csrf

        <div>
            <x-input-label for="password">
                Password
            </x-input-label>

            <div class="mt-2">
                <x-text-input
                    type="password"
                    name="password"
                    id="password"
                    class="block mt-1 w-full"
                />
            </div>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                Submit
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
