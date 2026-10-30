<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-slate-100 text-slate-800">
    <nav class="bg-emerald-700 text-white">
        <div class="mx-auto flex max-w-5xl flex-col gap-2 px-4 py-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="/dashboard" class="text-lg font-bold">Bakuna Tracker</a>

            <div class="flex items-center gap-4 text-sm">
                @auth
                    <a href="/dashboard" class="hover:underline">Dashboard</a>
                    <a href="/schedule" class="hover:underline">Schedule</a>
                    <span>Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="underline">Logout</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="underline">Sign in</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="mx-auto w-full max-w-5xl flex-1 px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-slate-800 py-4 text-center text-sm text-slate-300">
        Barangay Matina Crossing Health Center &middot; Davao City
    </footer>
</body>
</html>
