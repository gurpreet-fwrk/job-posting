<!-- Header -->

<header class="main-header">
<!-- Logo -->
<a href="{{ url('/') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>K</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Kitchen</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               
                @if(Auth::user()->image != null || Auth::user()->image != '')
                <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="user-image" alt="User Image">
                @else
                <img src="{{url('/')}}/images/users/noimage.png" class="user-image" alt="User Image">
                @endif
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        @if(Auth::user()->image != '')
                        <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="img-circle" alt="User Image">
                        @else
                        <img src="{{url('/')}}/images/users/noimage.png" class="img-circle" alt="User Image">
                        @endif
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{date('M. Y', strtotime(Auth::user()->created_at))}}</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            
                            <a href="{{ url('/admin/users/view/'.Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>
</header>
<!-- Header end -->