<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Ruang Cerita</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('siswa.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Siswa</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('konselor.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Konselor</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('konseling.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Pesan Konseling</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{route('feedback.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Feedback</span></a>
</li>

<!-- Divider -->


</ul>