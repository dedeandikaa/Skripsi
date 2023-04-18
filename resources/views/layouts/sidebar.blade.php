<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            Sistem Arsip
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-label">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label">Menu</p>
        <ul class="menu-list">
            <li class="--set-active-tables-html">
                <a href="{{ route('pegawai.index') }}">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Pegawai</span>
                </a>
            </li>
            {{-- <li class="--set-active-tables-html">
                <a href="tables.html">
                    <span class="icon"><i class="mdi mdi-account"></i></span>
                    <span class="menu-item-label">Siswa</span>
                </a>
            </li> --}}
            <li class="{{ (request()->is('kategori*')) ? 'active' : '' }}">
                <a href="{{ route('kategori.index') }}">
                    <span class="icon"><i class="mdi mdi-apps"></i></span>
                    <span class="menu-item-label">Kategori</span>
                </a>
            </li>
            {{-- <li class="{{ (request()->is('dokumen*')) ? 'active' : '' }}">
                <a href="tables.html">
                    <span class="icon"><i class="mdi mdi-file-document"></i></span>
                    <span class="menu-item-label">Dokumen</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>