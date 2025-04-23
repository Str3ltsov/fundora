@extends('layouts.app')

@section('pageTitle', 'Book a Consultation')

@section('content')
    <main class="min-h-100">
        <section>
            <div class="max-w-screen-lg mx-auto px-5 py-30">
                <div class="flex lg:flex-row flex-col lg:items-start items-center justify-between gap-20">
                    <section class="w-100">
                        <div class="flex flex-col gap-6">
                            <h1 class="font-medium text-3xl text-white">
                                {{ __('Book a Consultation') }}
                            </h1>
                            <p class="text-white">
                                {{ __('Looking for investment opportunities? Let us help you take the first step.') }}
                            </p>
                            <p class="text-white">
                                {{ __('Our team is ready to answer all your questions – from the first consultation to acquisition or management support.') }}
                            </p>
                            <div class="flex items-center gap-4 text-white">
                                <x-grommet-mail-option class="size-8" />
                                <div>
                                    <h2 class="font-medium">{{ __('Email') }}</h2>
                                    <a href="mailto:info@fundoraglobal.com" class="opacity-75 hover:opacity-50">
                                        {{ __('info@fundoraglobal.com') }}
                                    </a>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 text-white">
                                <x-heroicon-o-phone class="size-8" />
                                <div>
                                    <h2 class="font-medium">{{ __('Phone (WhatsApp, Telegram)') }}</h2>
                                    <a href="tel:+37061572799" class="opacity-75 hover:opacity-50">
                                        {{ __('+370 615 82 799') }}
                                    </a>
                                </div>
                            </div>
                    </section>
                    <section class="w-100">
                        @include('book_consulation.store_form')
                    </section>
                </div>
            </div>
        </section>
    </main>
@endsection
