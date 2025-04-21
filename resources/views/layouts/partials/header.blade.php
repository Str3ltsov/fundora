<nav class="bg-header-color">
    <div class="mx-auto max-w-screen-xl px-5">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-primary-color focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only"></span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        {{-- <img class="h-8 w-auto" src="{{ asset('images/logo.jpg') }}" alt="{{ config('app.name') }}"> --}}
                        <span class="text-amber-200 uppercase tracking-widest">{{ __('Fundora') }}</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                            class="rounded-md @if (request()->is('/')) bg-secondary-color @endif px-3 py-2 text-sm font-medium text-white hover:bg-primary-color"
                            aria-current="page">{{ __('Pagrindinis') }}
                        </a>
                        <a href="#"
                            class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-primary-color">
                            {{ __('Apie mus') }}
                        </a>
                        <a href="#"
                            class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-primary-color">
                            {{ __('Paslaugos') }}
                        </a>
                        <a href="#"
                            class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-primary-color">
                            {{ __('DUK') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="rounded-md bg-primary-color hover:bg-secondary-color px-3 py-2">
                    <a href="#" class="flex text-sm font-medium text-white">
                        <x-heroicon-s-arrow-right-circle class="fill-current" />
                        {{ __('Atvejai') }}
                    </a>
                </button>
            </div>
        </div>
    </div>

    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="{{ route('home') }}"
                class="block rounded-md @if (request()->is('/')) bg-secondary-color @endif px-3 py-2 text-base font-medium text-white"
                aria-current="page">
                {{ __('Pagrindinis') }}
            </a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-primary-color">
                {{ __('Apie mus') }}
            </a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-primary-color">
                {{ __('Paslaugos') }}
            </a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-primary-color">
                {{ __('DUK') }}
            </a>
        </div>
    </div>
</nav>
