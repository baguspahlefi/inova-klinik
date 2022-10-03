<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href=" {{route('home')}} ">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href=" {{route('menu_pasien')}} ">
                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                Pasien
            </a>
            <a class="nav-link" href=" {{route('menu_tindakan_dan_obat')}} ">
                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                Tindakan Dan Obat
            </a>
            <a class="nav-link" href=" {{route('tagihan')}} ">
                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                Tagihan
            </a>
            @if (Auth::user()->status == 'admin')
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMaster" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Master
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseMaster" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('master_wilayah')}}">Master Wilayah</a>
                    <a class="nav-link" href="{{route('master_pegawai')}}">Master Pegawai</a>
                    <a class="nav-link" href=" {{route('master_tindakan')}} ">Master Tindakan</a>
                    <a class="nav-link" href="{{route('master_obat')}}">Master Obat</a>
                </nav>
            </div>
            @else
            @endif




            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">{{ Str::upper(Auth::user()->name) }}</div>
        {{ Str::upper(Auth::user()->status) }}
        <div class="small">Test</div>
    </div>
</nav>