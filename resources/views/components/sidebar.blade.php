<div>
    <div class="d-flex flex-column align-items-start">
        <a href={{ route('home') }} class="nav-link my-2 py-2"><i class="fas fa-tachometer-alt"></i>
            Dashboard</a>
        <a href="{{ route('user.index') }}" class="nav-link my-2 py-2 active"><i class="fas fa-users"></i>
            Users</a>
        <a href="{{ route('user.analytics') }}" class="nav-link my-2 py-2"><i class="fas fa-chart-line"></i> Analytics</a>
        <a href="{{ route('announcement.index') }}" class="nav-link my-2 py-2"><i class="fas fa-bullhorn"></i>
            View Announcement</a>
        <a href="{{ route('announcement.create') }}" class="nav-link my-2 py-2"><i class="fas fa-plus"></i>
            Post Announcement</a>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-primary py-2" style="padding: 0 60px;"><i class="fas fa-sign-out-alt"></i>
            Logout</button>
    </form>
</div>


