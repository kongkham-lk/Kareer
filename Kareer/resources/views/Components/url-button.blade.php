@props(['url'])

<a {{ $attributes(["class"=>"mt-auto text-xs bg-neutral-900 border border-neutral-700 hover:bg-neutral-700 rounded-lg py-2 px-6 font-bold cursor-pointer transition-colors duration-200"]) }} href={{ $url }}>{{ $slot }}</a>
