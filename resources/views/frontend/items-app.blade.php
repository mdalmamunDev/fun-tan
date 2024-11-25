@extends('frontend.layouts.master')
@section('content')
    <div id="items-app">
        <items-app />
    </div>
@endsection
@section('script')
    <script src="{{ asset('vue-app/frontend/items-app/js/items-app.js') }}"></script>
@endsection