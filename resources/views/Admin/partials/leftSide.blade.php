
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin_bootstrap/img/logo.jpeg')}}" class="img-circle" alt="User Image" />

            </div>
            <div class="pull-left info">
                <p>Hello,{{ Auth::user()->name }} </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                <a href="{{ route('users') }}">
                    <i class="fa  fa-users"></i> <span>Users</span>
                </a>
                <a href="{{ url('category') }}">
                    <i class="fa   fa-tags"></i> <span>Categories</span>
                </a>
                <a href="{{ url('backer') }}">
                    <i class="fa   fa-money"></i> <span>Backers</span>
                </a>
                <a href="{{ url('creators') }}">
                    <i class="fa fa-user"></i> <span>Creators</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->