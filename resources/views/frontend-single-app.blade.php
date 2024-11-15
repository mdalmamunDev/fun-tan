<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('vue-app/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vue-app/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/styles/index.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-900 text-white max-w-screen-2xl mx-auto">
    @include('layouts.header')
    <div class="mt-16">
        @include('layouts.sections.hero-section')

        <!-- Main Content -->
        <main class="p-6 md:p-12 space-y-8">
            @include('layouts.sections.trending-section')
            @include('layouts.sections.reasons-section')
            @include('layouts.sections.faq-section')
        </main>
    </div>

    @include('layouts.footer')

    <!-- Tailwind Component -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('frontend/scripts/index.js') }}"></script>
</body>
</html>
