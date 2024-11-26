<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FunTan | Backend</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('vue-app/css/tailwind.css') }}">
    </head>
    <body class="bg-gray-900 text-white max-w-screen-2xl mx-auto">
        <div id="app">
            <App />
        </div>

        <!-- vue app -->
        <script src="{{asset('vue-app/backend/js/app.js')}}"></script>
    </body>
</html>
