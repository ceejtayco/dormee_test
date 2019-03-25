<nav class="navbar navbar-expand-md navbar-inverse set-top shadowed text-white p-5">
    <a class="navbar-brand pb-2" href="{{URL::to('index')}}">
    <img class="mb-5 pb-5" src="{{ asset('public/img/logo.png') }}" alt="{{ config('app.name') }}" style="margin-top: -9px;">
    </a>
    <button type="button" class="navbar-toggle mb-3" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto navbar-inverse">
             @guest
                <li class="nav-item py-2">
                    <a class="nav-link" href="login">{{ ('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item py-2">
                    <a class="nav-link" href="register">{{ ('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item py-2">
                    Howdy, 
                    <a href="{{URL::to('dashboard')}}" class="mx-2 mr-5">
                        {{ Auth::user()->username }} 
                    </a>
                </li>
                <li class="nav-item pl-2 py-2">
                    
                    <a href="{{URL::to('dorms')}}" class="mx-2 mr-5">
                        Dorms
                    </a>
                    <a href="{{URL::to('roommates')}}">
                        {{ ('Roommates') }}
                    </a>

                </li>

                <li class="nav-item pl-2 py-2">
                    
                    <a href="{{URL::to('logout')}}" class="ml-5">
                        {{ ('Logout') }}
                    </a>
                </li>
                @endguest
        </ul>
      
    </div>
</nav>

