<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<head>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/hero.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/raison.css') }}" rel="stylesheet">
    <link href="{{ asset('css/newslatter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ex_recette.css') }}" rel="stylesheet">
    <link href="{{ asset('css/avis.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    @include('components2.header')

    @include('components2.hero')

    <main class="container mt-4">
        @yield('content')
    </main>
    @include('components2.ex_recette')
    @include('components2.raison')
    @include('components2.avis')
    @include('components2.newslatter')
    
    @include('components2.footer')
    
    <!-- JS Bootstrap (pour menu responsive) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
