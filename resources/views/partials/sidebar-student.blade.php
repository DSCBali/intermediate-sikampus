<ul class="menu-items">
    <li class="m-t-30 {{ (url()->current() === route('staff.dashboard')) ? 'active':'' }} ">
        <a href="{{ route('staff.dashboard') }}" class="detailed">
            <span class="title">Dashboard</span>
        </a>
        <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
    </li>
</ul>
