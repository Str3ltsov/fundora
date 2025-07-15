<footer class="bg-primary-color">
    <div class="w-full mx-auto max-w-screen-lg py-8 px-5 flex flex-col gap-10">
        <div>
            <a href="{{ route('privacyPolicy') }}"
                class="@if (request()->is('privacy-policy')) underline @endif text-base text-gray-400 hover:text-gray-300">
                {{ __('pages.privacyPolicy') }}
            </a>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-white text-sm">
                {{ __('© 2025 Fundora Global.') }}
            </span>
            <span class="text-white text-sm">
                {{ __('All rights reserved.') }}
            </span>
        </div>
    </div>
</footer>
