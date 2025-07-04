<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-neutral-950 text-white font-museo pb-18">
    <div class="px-10">
        <nav class=" flex items-center justify-between py-4 border-b border-white/15 ">
            <a href="/" class="flex gap-2 items-center">
                <img class="size-6" src="{{ Vite::asset('resources/images/icons-job-seeker-100-white.png') }}" alt="logo"/>
                <div>Kareer</div>
            </a>
{{--            <div class="space-x-6 font-bold">--}}
{{--                <a href="#">Jobs</a>--}}
{{--                <a href="#">Careers</a>--}}
{{--                <a href="#">Salaries</a>--}}
{{--                <a href="#">Companies</a>--}}
{{--            </div>--}}
            @auth
                <div class="space-x-4 font-bold flex items-center group">
                    <x-url-button class="text-md bg-transparent border-none" url="/jobs/create">Post Job</x-url-button>

                    <form method="POST" action="/logout">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="cursor-pointer rounded-lg py-2 px-4 bg-blue-800 group-hover:bg-transparent hover:bg-neutral-700 transition-colors duration-150">Logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class="font-bold">
                    <x-url-button class="text-md max-w-1 bg-transparent border-none" url="/register">Sign Up</x-url-button>
                    <x-url-button class="text-md bg-transparent border-none" url="/login">Log In</x-url-button>
                </div>
            @endguest

        </nav>
        <main class="mt-18 max-w-[986px] mx-auto py-2">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
