@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.sections.hero-section')
    <!-- Main Content -->
    <main class="p-6 md:p-12 space-y-8">
        @include('frontend.layouts.sections.trending-section')
        @include('frontend.layouts.sections.reasons-section')
        @include('frontend.layouts.sections.recent-section')
        @include('frontend.layouts.sections.faq-section')
    </main>
@endsection

@section('script')
    <script>
        let lastScrollTop = 0;
        window.addEventListener('scroll', function () {
            const header = document.getElementById('header');
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Scrolling down
                header.classList.add('transform', '-translate-y-full');
            } else {
                // Scrolling up
                header.classList.remove('transform', '-translate-y-full');
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        });
    </script>
@endsection
