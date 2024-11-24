<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div id="app">
            <App />
        </div>

        <!-- vue app -->
        <script src="{{asset('vue-app/backend/js/app.js')}}"></script>
    </body>
</html>
