@extends('layouts.app')

@section('content')
    <main class="min-h-100">
        <section class="hero"
            style="background-image: url('../images/home_background.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: darken;">
            <div class="flex items-center max-w-screen-md mx-auto px-5 pt-46 pb-30">
                <div class="hero-content text-white flex flex-col gap-6 max-w-lg">
                    <h1 class="font-medium text-5xl leading-14">Trusted Global Property Investments</h1>
                    <p class="text-lg">Connecting you to premium real estate opportunities across Europe, Asia, and the
                        Americas.</p>
                    <button type="button" class="bg-primary-color h-13 w-fit hover:bg-secondary-color hover:border-1">
                        <a href="#" class="py-4 px-6">{{ __('Explore Investment Opportunities') }}</a>
                    </button>
                </div>
            </div>
        </section>
        <section class="why-fundora bg-primary-color">
            <div class="text-white max-w-screen-md mx-auto px-5 py-12">
                <h2 class="text-2xl font-medium pb-10">{{ __('Why Fundora') }}</h2>
                <div class="flex sm:flex-row flex-col items-center justify-center text-center gap-10">
                    <div class="card flex flex-col items-center gap-2 max-w-50">
                        <x-heroicon-o-chart-bar class="w-15" />
                        <h3 class="font-medium text-lg">{{ __('Trust & Experience') }}</h3>
                        <p class="text-sm">
                            {{ __('Certified experts with over 10 years of international investment experience.') }}</p>
                    </div>
                    <div class="card flex flex-col items-center gap-2 max-w-50">
                        <x-heroicon-o-globe-alt class="w-15" />
                        <h3 class="font-medium text-lg">{{ __('Global Reach') }}</h3>
                        <p class="text-sm">{{ __('Opportunities across Europe, Asia, and the Americas.') }}</p>
                    </div>
                    <div class="card flex flex-col items-center gap-2 max-w-50">
                        <x-grommet-grow class="w-13 pb-2" />
                        <h3 class="font-medium text-lg">{{ __('Sustainable Growth') }}</h3>
                        <p class="text-sm">{{ __('Long-term strategies for stable returns and value appreciation.') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta bg-secondary-color">
            <div class="text-white max-w-screen-md mx-auto px-5 py-12 flex flex-col gap-5">
                <h2 class="font-medium text-3xl">{{ __('Ready to Invest Globally?') }}</h2>
                <p class="max-w-100">
                    {{ __('Get personalized guidance and discover the best international real estate opportunities.') }}</p>
                <button type="button" class="bg-primary-color h-12 w-fit hover:bg-secondary-color hover:border-1">
                    <a href="#" class="py-4 px-6">{{ __('Book a Consultation') }}</a>
                </button>
            </div>
        </section>
    </main>
@endsection
