<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-200 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-blue-900  active:bg-gray-900 dark:active:bg-blue-600 focus:outline-none disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
