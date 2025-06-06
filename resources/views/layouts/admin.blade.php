{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Administration')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <header>
    {{-- Votre barre de navigation admin --}}
  </header>
  <main class="container py-4">
    @yield('content')
  </main>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
