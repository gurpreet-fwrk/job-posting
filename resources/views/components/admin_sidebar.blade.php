<!-- Sidebar -->
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @if(Auth::user()->image != '')
                <img src="{{url('/')}}/images/users/{{Auth::user()->image}}" class="img-circle" alt="User Image">
                @else
                <img src="{{url('/')}}/images/users/noimage.png" class="img-circle" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{url('admin/dashboard')}}">
                <i class="fa fa-globe"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                </span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.config') }}">
                <i class="fa fa-gear"></i> <span>Config</span>
                <span class="pull-right-container">
                </span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.plans') }}">
                <i class="fa fa-pencil"></i> <span>Subscription Plans</span>
                <span class="pull-right-container">
                </span>
                </a>
            </li>

            <!-- <li>
                <a href="">
                <i class="fa fa-cube"></i> <span>Kitchen Categories</span>
                <span class="pull-right-container">
                </span>
                </a>
            </li> -->


            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Sidebar end -->