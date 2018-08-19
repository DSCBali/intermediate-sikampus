<ul class="menu-items">
    <li class="m-t-30 {{ (url()->current() === route('staff.dashboard')) ? 'active':'' }} ">
        <a href="{{ route('staff.dashboard') }}" class="detailed">
            <span class="title">Dashboard</span>
        </a>
        <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
    </li>
    <li class="{{ (url()->current() === route('student.index')) ? 'active':'' }}">
        <a href="{{ route('student.index') }}"><span class="title">Mahasiswa</span></a>
        <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
    </li>
    <li class="{{ (url()->current() === route('lecturer.index')) ? 'active':'' }}">
        <a href="{{ route('lecturer.index') }}"><span class="title">Dosen</span></a>
        <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
    </li>
    <li class="{{ (url()->current() === route('course.index')) ? 'active':'' }}">
        <a href="{{ route('course.index') }}"><span class="title">Matakuliah</span></a>
        <span class="icon-thumbnail"><i class="fa fa-book"></i></span>
    </li>
    <li class="{{ (url()->current() === route('class.index')) ? 'active':'' }}">
        <a href="{{ route('class.index') }}"><span class="title">Kelas</span></a>
        <span class="icon-thumbnail"><i class="fa fa-graduation-cap"></i></span>
    </li>
    <li class="{{ (url()->current() === route('schedule.index')) ? 'active':'' }}">
        <a href="{{ route('schedule.index') }}"><span class="title">Jadwal</span></a>
        <span class="icon-thumbnail"><i class="fa fa-calendar"></i></span>
    </li>
    <li class="{{ (url()->current() === route('staff.index')) ? 'active':'' }}">
        <a href="{{ route('staff.index') }}"><span class="title">Staff</span></a>
        <span class="icon-thumbnail"><i class="fa fa-calendar"></i></span>
    </li>
</ul>
