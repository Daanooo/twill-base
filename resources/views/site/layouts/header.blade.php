<header class="bg-gray-100 p-5">
    <nav class="container mx-auto flex flex-wrap justify-between">

        <div id="nav-logo justify-self-start">
            <a href="{{ url('/') }}">
                <h1 class="text-xl">{{ config('app.name') }}</h1>
            </a>
        </div>

        <div class="flex basis-80 justify-around">
            @foreach(config('site-navigation') as $url => $label)
                <div class="inline-block">
                    <a href="{{ url($url) }}">{{ $label }}</a>
                </div>
            @endforeach
        </div>
    </nav>
</header>
