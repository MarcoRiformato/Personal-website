<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="ahrefs-site-verification" content="5f0dbeea8f4a77d4df5d333f901ebf0ae3e56edfc705a74a3b26d2889e04e79d">
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <title inertia>{{ config('app.name', 'DigitaLegale') }}</title>

        <!-- Scripts -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-H6DEQG0KZ0"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-H6DEQG0KZ0');
        </script>

        <!-- Script for Hotjar -->
        <script async>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:3748496,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])

        @inertiaHead
    </head>
    <body class="font-sans antialiased theme-night">
        @inertia
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <script async src="https://player.vimeo.com/api/player.js"></script>
    </body>
</html>
