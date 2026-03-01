<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tantan Taryana</title>
    
    {{-- Dark Mode Script - Must load before page renders --}}
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    {{-- ICON --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}?v=<?= date('YmdHis') ?>">

    {{-- TAILWIND CSS --}}
    <link href="{{ asset('css/app.css') }}?v=<?= date('YmdHis') ?>" rel="stylesheet">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="bg-white dark:bg-slate-900 transition-colors duration-300">
    @include('layouts.nav')
    @yield('container')

    {{-- BASIC SCRIPT --}}
    <script src="{{ asset('js/script.js') }}?v=<?= date('YmdHis') ?>"></script>
    
    {{-- Dark Mode Toggle Script --}}
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                if (html.classList.contains('dark')) {
                    html.classList.remove('dark');
                    localStorage.theme = 'light';
                } else {
                    html.classList.add('dark');
                    localStorage.theme = 'dark';
                }
            });
        }
    </script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @include('layouts.foot')
</body>

</html>
