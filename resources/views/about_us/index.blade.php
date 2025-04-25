@extends('layouts.app')

@section('pageTitle', __('pages.aboutUs'))

@section('content')
    <main class="min-h-100">
        <section class="bg-secondary-color">
            <div class="text-white max-w-screen-lg mx-auto px-5 py-30 flex flex-col gap-5">
                <h2 class="font-medium text-3xl">{{ __('texts.aboutUsTitle') }}</h2>
                <p>{{ __('texts.aboutUsFirstParagraph') }}</p>
                <p>{{ __('texts.aboutUsSecondParagraph') }}</p>
                <p>{{ __('texts.aboutUsThirdParagraph') }}</p>
                <p>{{ __('texts.aboutUsFourthParagraph') }}</p>
            </div>
        </section>
    </main>
@endsection
