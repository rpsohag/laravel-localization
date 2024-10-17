<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="relative font-inter antialiased">

    <main class="relative min-h-screen flex flex-col bg-slate-50 overflow-hidden">
        <div class="w-full max-w-6xl mx-auto">

            <!-- Menu -->
            <nav class="flex justify-between items-center">
            
                <div>
                    <h3 class="text-xl">Logo</h3>
                </div>
                <div>
                <ul class="flex flex-wrap items-center font-medium text-sm">
                    <li class="p-4 lg:px-8">
                        <a class="text-slate-800 hover:text-slate-900" href="{{ route('home') }}">{{ __('menu.home') }}</a>
                    </li>
                    <li class="p-4 lg:px-8">
                        <a class="text-slate-800 hover:text-slate-900" href="{{ route('about') }}">{{ __('menu.about') }}</a>
                    </li>
                    <li class="p-4 lg:px-8">
                        <a class="text-slate-800 hover:text-slate-900" href="#">{{ __('menu.contact') }}</a>
                    </li>
                    <li class="p-4 lg:px-8">
                        <a class="text-slate-800 hover:text-slate-900" href="#">{{ __('menu.services') }}</a>
                    </li>
                    <li class="p-4 lg:px-8 relative flex items-center space-x-1" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <span class="text-slate-800 hover:text-slate-900" href="" :aria-expanded="open" aria-expanded="false">{{ __('menu.change_lang') }}</span>
                        <button class="shrink-0 p-1" :aria-expanded="open" @click.prevent="open = !open" aria-expanded="false">
                            <span class="sr-only">Show submenu for "Flyout Menu"</span>
                            <svg class="w-3 h-3 fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z"></path>
                            </svg>
                        </button>
                        <!-- 2nd level menu -->
                        <ul class="origin-top-right absolute top-full left-1/2 -translate-x-1/2 min-w-[140px] bg-white border border-slate-200 p-2 rounded-lg shadow-xl [&amp;[x-cloak]]:hidden" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @focusout="await $nextTick();!$el.contains($focus.focused()) &amp;&amp; (open = false)" style="display: none;">
                            <li>
                                <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="{{ route('change.lang', 'bn') }}">
                                <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                               
                                <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#006A4D" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z"></path><circle fill="#F42A41" cx="16" cy="17.5" r="7"></circle></g></svg>

                                    </div>
                                    <span class="whitespace-nowrap">Bangla</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="{{ route('change.lang', 'en') }}">
                                    <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 130 120" enable-background="new 0 0 130 120" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Infos"> <rect id="BG" x="-200" y="-1350" fill="#D8D8D8" width="2180" height="1700"></rect> </g> <g id="Others"> <g> <rect y="0" fill="#DC4437" width="130" height="13.3"></rect> <rect y="26.7" fill="#DC4437" width="130" height="13.3"></rect> <rect y="80" fill="#DC4437" width="130" height="13.3"></rect> <rect y="106.7" fill="#DC4437" width="130" height="13.3"></rect> <rect y="53.3" fill="#DC4437" width="130" height="13.3"></rect> <rect y="13.3" fill="#FFFFFF" width="130" height="13.3"></rect> <rect y="40" fill="#FFFFFF" width="130" height="13.3"></rect> <rect y="93.3" fill="#FFFFFF" width="130" height="13.3"></rect> <rect y="66.7" fill="#FFFFFF" width="130" height="13.3"></rect> <rect y="0" fill="#2A66B7" width="70" height="66.7"></rect> <polygon fill="#FFFFFF" points="13.5,4 15.8,8.9 21,9.7 17.2,13.6 18.1,19 13.5,16.4 8.9,19 9.8,13.6 6,9.7 11.2,8.9 "></polygon> <polygon fill="#FFFFFF" points="34,4 36.3,8.9 41.5,9.7 37.8,13.6 38.6,19 34,16.4 29.4,19 30.2,13.6 26.5,9.7 31.7,8.9 "></polygon> <polygon fill="#FFFFFF" points="54.5,4 56.8,8.9 62,9.7 58.2,13.6 59.1,19 54.5,16.4 49.9,19 50.8,13.6 47,9.7 52.2,8.9 "></polygon> <polygon fill="#FFFFFF" points="24,24 26.3,28.9 31.5,29.7 27.8,33.6 28.6,39 24,36.4 19.4,39 20.2,33.6 16.5,29.7 21.7,28.9 "></polygon> <polygon fill="#FFFFFF" points="44.5,24 46.8,28.9 52,29.7 48.2,33.6 49.1,39 44.5,36.4 39.9,39 40.8,33.6 37,29.7 42.2,28.9 "></polygon> <polygon fill="#FFFFFF" points="13.5,45.2 15.8,50.1 21,50.9 17.2,54.7 18.1,60.2 13.5,57.6 8.9,60.2 9.8,54.7 6,50.9 11.2,50.1 "></polygon> <polygon fill="#FFFFFF" points="34,45.2 36.3,50.1 41.5,50.9 37.8,54.7 38.6,60.2 34,57.6 29.4,60.2 30.2,54.7 26.5,50.9 31.7,50.1 "></polygon> <polygon fill="#FFFFFF" points="54.5,45.2 56.8,50.1 62,50.9 58.2,54.7 59.1,60.2 54.5,57.6 49.9,60.2 50.8,54.7 47,50.9 52.2,50.1 "></polygon> </g> </g> <g id="Europe"> <g id="Row_5"> </g> <g id="Row_4"> </g> <g id="Row_3"> </g> <g id="Row_2"> </g> <g id="Row_1"> </g> </g> </g></svg>
                                    </div>
                                    <span class="whitespace-nowrap">English</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-slate-800 hover:bg-slate-50 flex items-center p-2" href="{{ route('change.lang', 'ch') }}">
                                    <div class="flex items-center justify-center bg-white border border-slate-200 rounded shadow-sm h-7 w-7 shrink-0 mr-3">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 130 120" enable-background="new 0 0 130 120" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Infos"> <rect id="BG" x="-350" y="-1350" fill="#D8D8D8" width="2180" height="1700"></rect> </g> <g id="Others"> <g> <rect fill="#DC4437" width="130" height="120"></rect> <polygon fill="#FCBE1F" points="31,14.5 36.9,27 50,29 40.5,38.8 42.7,52.5 31,46 19.3,52.5 21.5,38.8 12,29 25.1,27 "></polygon> <polygon fill="#FCBE1F" points="60.5,8 62.8,12.9 68,13.7 64.2,17.6 65.1,23 60.5,20.4 55.9,23 56.8,17.6 53,13.7 58.2,12.9 "></polygon> <polygon fill="#FCBE1F" points="64.5,25.8 66.8,30.8 72,31.6 68.2,35.4 69.1,40.8 64.5,38.3 59.9,40.8 60.8,35.4 57,31.6 62.2,30.8 "></polygon> <polygon fill="#FCBE1F" points="60.5,44 62.8,48.9 68,49.7 64.2,53.6 65.1,59 60.5,56.4 55.9,59 56.8,53.6 53,49.7 58.2,48.9 "></polygon> </g> </g> <g id="Europe"> <g id="Row_5"> </g> <g id="Row_4"> </g> <g id="Row_3"> </g> <g id="Row_2"> </g> <g id="Row_1"> </g> </g> </g></svg>
                                    </div>
                                    <span class="whitespace-nowrap">China</span>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>
                </div>
            
            </nav>
            <!-- End: Menu -->

            <div class="container ">
                    @yield("content")
            </div>

        </div>
    </main>
    @vite('resources/js/app.js')
</body>
</html>