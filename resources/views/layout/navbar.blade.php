<div class="navbar bg-base-100 ">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{route('show.form')}}">Report Incident</a></li>
                <li>
                    <details>
                        <summary>Service</summary>
                        <ul class="p-2">
                            <li class="rounded-sm"><a href="{{route('show.fire')}}">Fire Service</a></li>
                            
                        </ul>
                    </details>
                </li>
                <li><a href="{{route('show.about.us')}}">About us</a></li>
                <li><a href="{{route('show.contact.us')}}">Contact Us</a></li>
                <li><a href="{{route('show.emergency')}}" >Emergency Contact</a></li>
                <li><a href="{{route('show.feedback')}}">Feedback</a></li>
            </ul>
        </div>
        <a href="/"><img src="{{ @asset('img/logo.png') }}" alt="" width="100" height="100"></a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{route('show.form')}}">Report Incident</a></li>
            <li>
                <details>
                    <summary>Service</summary>
                    <ul class="p-2">
                        <li><a href="{{route('show.fire')}}">Fire Service</a></li>
                        
                    </ul>
                </details>
            </li>
            <li><a href="{{route('show.about.us')}}">About us</a></li>
            <li><a href="{{route('show.contact.us')}}">Contact Us</a></li>
            <li><a href="{{route('show.emergency')}}">Emergency Contact</a></li>
            <li><a href="{{route('show.feedback')}}">Feedback</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        @if (Route::has('login'))
        <div class="  lg:py-10 lg:px-2 py-5 md:py-10 text-right z-10">
            @auth
                <a href="{{ url('/') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn btn-slate-600">Dashboard</button></a>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-slate-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn bg-slate-700 text-white  hover:text-slate-700 px-12 sm:px-10 xl:px-10 lg:px-6 md:px-10 sm:mb-5 mb-5 lg:mb-0 md:mb-0">Login</button></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold  text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn  text-black border-slate-800 border-2  hover:text-slate-700 px-10 sm:px-10 xl:px-10 lg:px-6 md:px-10 sm:mb-5 mb-5 lg:mb-0 md:mb-0">Register</button></a>
                @endif
            @endauth
        </div>
    @endif
    </div>
</div>