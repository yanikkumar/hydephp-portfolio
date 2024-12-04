@if (config('hyde.footer') !== false)
    <footer aria-label="Page footer" class="flex w-full px-6 py-4 mt-auto text-center bg-slate-100 dark:bg-gray-800">
        <div class="mx-auto prose text-center dark:prose-invert">
            &copy; {{ date('Y') }} - Made with 💖 in India
            <div class="mx-auto prose text-center dark:prose-invert">
                <small class="text-sm">Built with <a href="https://hydephp.com">HydePHP</a> by Yanik Kumar</small>
            </div>
        </div>
        <a href="#app" aria-label="Go to top of page" class="float-right">
            <button title="Scroll to top">
                <svg width="1.5rem" height="1.5rem" role="presentation" class="w-6 h-6 text-gray-500 fill-current"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                </svg>
            </button>
        </a>
    </footer>
@endif
