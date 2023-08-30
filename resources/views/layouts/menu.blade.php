<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('artikel.create') }}" class="nav-link {{ Request::is('admin/artikel/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plus"></i>
        <p>Tambah Artikel</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('artikel.create') }}" class="nav-link {{ Request::is('admin/artikel/create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plus"></i>
        <p>Tambah Kategori</p>
    </a>
</li>
