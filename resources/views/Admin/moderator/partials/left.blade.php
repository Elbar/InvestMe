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

    <ul class="sidebar-menu">
        <li class="active">
            <a href="{{ route('moderator.project.index') }}">
                <i class="fa fa-tags"></i> <span>Projects</span>
            </a>
        </li>
    </ul>
</section>
