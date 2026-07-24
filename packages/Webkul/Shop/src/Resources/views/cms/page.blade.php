<!-- SEO Meta Content -->
@push('meta')
    <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" />
@endPush

<!-- Page Layout -->
<x-shop::layouts>
    <!-- Page Title -->
    <x-slot:title>
        {{ $page->page_title ?? $page->meta_title ?? 'Page Not Available' }}
    </x-slot>

    <!-- Beautiful Page Not Available Hero Section -->
    <div class="py-16 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-center">
        <div class="bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-2xl rounded-3xl p-8 sm:p-12 md:p-16 transition-all duration-300">
            
            <!-- Animated / Styled Badge & Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-400 mb-6 shadow-inner ring-8 ring-blue-50/50 dark:ring-blue-900/20">
                <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <!-- Page Name Pill -->
            <div class="mb-4">
                <span class="inline-block px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300">
                    {{ $page->page_title ?? 'Information' }}
                </span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">
                The page you are trying to reach is currently not available
            </h1>

            <!-- Supporting Text -->
            <p class="text-base sm:text-lg text-gray-500 dark:text-gray-400 max-w-xl mx-auto leading-relaxed mb-8">
                We are currently updating our store information and policy pages to provide you with the best shopping experience. Please check back soon or return to the main store.
            </p>

            <!-- Divider Line -->
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full mx-auto mb-8 opacity-80"></div>

            <!-- Call to Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a 
                    href="{{ route('shop.home.index') }}"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold text-base shadow-lg shadow-blue-500/25 transition-all duration-200 transform hover:-translate-y-0.5"
                >
                    <svg class="w-5 h-5 ltr:mr-2 rtl:ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Return to Home Page
                </a>
            </div>

        </div>
    </div>
</x-shop::layouts>