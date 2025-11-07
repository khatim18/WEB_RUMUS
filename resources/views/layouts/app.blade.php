<!DOCTYPE html>
<html lang="id">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RUMUS BUMI JAYA')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .orange-primary {
            background-color: #FF7D00;
        }
        .orange-secondary {
            background-color: #FF9500;
        }
        .orange-text {
            color: #FF7D00;
        }
        .orange-text-secondary {
            color: #FF9500;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<body class="bg-gray-50">
    @include('components.navigation')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @if (file_exists(public_path('js/app.js')))
    <script src="{{ asset('js/app.js') }}"></script>
    @endif
</body>
</html>
