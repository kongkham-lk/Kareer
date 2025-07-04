@props(['url'])

<a {{ $attributes(["class"=>"mt-auto bg-neutral-900 border border-neutral-700 hover:bg-blue-800 hover:border-blue-800 rounded-lg py-2 px-4 font-bold cursor-pointer transition-colors duration-200"]) }} href={{ $url }}>{{ $slot }}</a>
