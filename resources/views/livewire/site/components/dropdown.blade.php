<div class="dark:bg-gray-800 relative inline-block text-left shadow-md" x-data="{ open: false, hover: false }" @mouseenter="hover = true; setTimeout(() => { if(hover) open = true; }, 200)" @mouseleave="hover = false; setTimeout(() => { if(!hover) open = false; }, 200)">
    <div>
        <button type="button" class="text-gray-800 dark:text-gray-200 text-sm font-semibold hover:text-blue-600 mr-4">
            {{ $title }}
        </button>
    </div>

    <div x-show="open" class="dark:bg-gray-800 bg-gray-200 dark:text-gray-200 text-gray-700 origin-top-center z-20 absolute right-0 mt-2 w-56 rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            @foreach($options as $option => $route)
                <a href="{{ route($route) }}" class="block px-4 py-2 text-sm dark:text-gray-200 text-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 hover:text-blue-600" role="menuitem">{{ $option }}</a>
            @endforeach
        </div>
    </div>
</div>
