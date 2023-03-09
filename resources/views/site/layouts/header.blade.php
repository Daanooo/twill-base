<header class="container">
    <nav class="bg-gray-100 p-5 w-screen mx-auto flex flex-wrap justify-between">
        <div id="nav-logo justify-self-start" id="main-nav-logo">
            <a href="{{ url('/') }}">
                <h1 class="text-xl">{{ config('app.name') }}</h1>
            </a>
        </div>

        <div class="hidden md:flex basis-80 justify-around" id="main-desktop-nav">
            @foreach(config('site-navigation') as $url => $label)
                <div class="inline-block">
                    <a href="{{ url($url) }}">{{ $label }}</a>
                </div>
            @endforeach
        </div>

        <div class="space-y-1 md:hidden my-auto cursor-pointer mobile-nav-toggle">
            <div class="w-5 h-0.5 bg-gray-600"></div>
            <div class="w-5 h-0.5 bg-gray-600"></div>
            <div class="w-5 h-0.5 bg-gray-600"></div>
        </div>
    </nav>

    <div class="h-full w-full bg-gray-100 fixed top-0 p-5 mobile-nav-toggle hidden" id="main-mobile-nav">
        <div class="cursor-pointer absolute right-5 inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</header>

<script>

let mobileNavToggles = document.querySelectorAll('.mobile-nav-toggle');
let mobileNavBar = document.getElementById('main-mobile-nav');

mobileNavToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        mobileNavBar.classList.toggle('hidden');
    });
});

</script>
