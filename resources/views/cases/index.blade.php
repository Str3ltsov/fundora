@extends('layouts.app')

@section('pageTitle', __('pages.cases'))

@section('content')
    <main class="min-h-100">
        <section class="bg-secondary-color">
            <div class="text-white max-w-screen-lg mx-auto px-5 py-30 flex flex-col gap-10">
                <div class="flex flex-col gap-4">
                    <h2 class="font-medium text-3xl">{{ __('texts.casesTitle') }}</h2>
                    @if (__('texts.casesDescription') != '')
                        <p>{{ __('texts.casesDescription') }}</p>
                    @endif
                    <form class="w-fit py-3 px-4 button bg-button-color hover:bg-secondary-color cursor-pointer">
                        <select id="countries" class="border-0 outline-0 pr-2">
                            <option selected>Choose a country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="flex flex-col items-center gap-10">
                    @forelse ($cases as $case)
                        @include('cases.case')
                    @empty
                        <p class="text-md text-gray-300">{{ __('texts.casesEmpty') }}</p>
                    @endforelse
                    <div class="pagination">
                        {{ $cases->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('styles')
    <style>
        .case {
            transition: all 300ms ease;

            &:hover {
                transform: scale(1.03, 1.03);
                box-shadow: 1px 1px 2rem #00282b, -1px -1px 2rem #00282b;
            }
        }

        .pagination {
            width: 100%;

            p {
                font-size: 1rem;
                color: #dadada;
            }
        }
    </style>
@endpush
