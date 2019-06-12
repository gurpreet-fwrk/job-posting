<header>
    <nav class="navbar navbar-expand-md {{ Route::currentRouteName() == 'home' ? 'main-navbar' : 'navbar-new' }} ">
        <div class="container">
            @if(\App\Config::get_field('logo') != '')
            <a href="#" class="navbar-brand">
                <img src="{{ url('/') }}/images/config/{{ \App\Config::get_field('logo') }}">
            </a>
            @else
            {{ \App\Config::get_field('site_title') }}
            @endif
            <button type="button" id="nav-btn" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <div  class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a href="#" class="active">home</a>
                    </li>
                    <li class="nav-item">
                    <a  href="positions.html">positions</a>
                    </li>
                    <li class="nav-item">
                    <a  href="practisegrowthinterviews.html">practise growth interviews</a>
                    </li>
                    @if (Auth::guest())
                    <li class="nav-item">
                    <a href="{{ route('register') }}" id="register-color">register</a>
                    </li>
                    <li class="nav-item login-btn">
                    <a  href="{{ route('login') }}">login</a>
                    </li>
                    @else
                    <li class="nav-item user-profile">
	                    <a href="profilepage.html"><img src="images/profile-img.png"></a>
                    </li>
                    <li class="nav-item login-btn">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>