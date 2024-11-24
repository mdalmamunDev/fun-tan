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
