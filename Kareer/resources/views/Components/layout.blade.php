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
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex items-center">
                    <a href="" class="">Post Job</a>
{{--                    <x-forms.form method="DELETE" action="/logout">--}}
                        <x-forms.button>Logout</x-forms.button>
{{--                    </x-forms.form>--}}
                </div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register" class="">Sign Up</a>
                    <a href="/login" class="">log In</a>
                </div>
            @endguest

        </nav>
        <main class="mt-18 max-w-[986px] mx-auto py-2">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
