@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> {{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name', '') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/ef53f961f0.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Styles -->
  @livewireStyles
</head>

<body
  class="antialised min-h-screen font-sans text-black bg-[conic-gradient(at_top_left,_var(--tw-gradient-stops))] from-red-50 to-red-100"
  x-data>
  <main>
    @include('layouts.partials._header')
    {{ $slot }}
    @include('layouts.partials._footer')
  </main>
  @livewireScripts
</body>

</html>