@extends('layouts.app')

@section('pageTitle', __('pages.aboutUs'))

@section('content')
    <main class="min-h-100">
        <section class="bg-secondary-color">
            <div class="text-white max-w-screen-lg  mx-auto px-5 py-30 flex flex-col gap-6">
                <h2 class="font-medium text-3xl">
                    {{ $page->title ? $page->title : __('texts.privacyPolicyTitle') }}
                </h2>
                <div class="flex flex-col gap-3">
                    {!! $page->description ?? '-' !!}
                </div>
            </div>
        </section>
    </main>
@endsection
