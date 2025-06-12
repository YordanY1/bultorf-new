<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Bultorf – Висококачествени торфове и почвени продукти' }}</title>
    <meta name="description"
        content="{{ $description ?? 'Открийте органични и минерални торове от Bultorf. Подобрете реколтата си с висококачествени продукти за земеделие и градинарство.' }}" />
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}" />
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="{{ $og_title ?? ($title ?? 'Bultorf – Висококачествени торфове') }}" />
    <meta property="og:description"
        content="{{ $og_description ?? ($description ?? 'Торфени и почвени продукти от Bultorf за по-добра почва и реколта.') }}" />
    <meta property="og:image" content="{{ $og_image ?? asset('images/og-bultorf.jpg') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- PWA manifest -->
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    <meta name="apple-mobile-web-app-title" content="Bultorf">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Orbitron&family=Raleway&family=Roboto&display=swap"
        rel="stylesheet" />

    @if (config('services.recaptcha.site'))
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site') }}"></script>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col antialiased bg-[var(--color-card)]">
    <livewire:components.navbar />

    <main class="flex flex-1 flex-col">
        {{ $slot }}
    </main>
    <livewire:components.footer />
    @livewireScripts
</body>

</html>
