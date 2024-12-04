<a href="{{ $item }}" {!! $item->isCurrent() ? 'aria-current="page"' : '' !!} @class([
    'block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100 text-2xl',
    'border-l-4 border-indigo-500 md:border-none font-extrabold -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent' => $item->isCurrent(),
])>{{ $item->label }}</a>
