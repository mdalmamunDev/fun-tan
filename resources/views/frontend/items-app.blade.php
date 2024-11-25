@extends('frontend.layouts.master')
@section('content')
    <div id="items-app">
        <ItemsApp></ItemsApp>
    </div>
@endsection
@section('script')
    <script src="{{ asset('vue-app/frontend/items-app/js/items-app.js') }}"></script>
@endsection