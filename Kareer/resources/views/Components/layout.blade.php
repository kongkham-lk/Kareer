<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-neutral-950 text-white">
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
            <div class="">Post jobs</div>
        </nav>
        <main class="mt-10 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
