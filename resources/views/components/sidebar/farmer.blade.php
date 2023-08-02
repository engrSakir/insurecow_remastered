<div class="sidenav-menu">
    <div class="nav accordion" id="accordionSidenav">


        {{-- ---------------------------------- Farmer Navbar ---------------------------------- --}}



        <!-- Sidenav Heading (Addons)-->
        <div class="sidenav-menu-heading">Farmer Panel</div>
        <!-- Sidenav Link (Charts)-->
        <a class="nav-link" href="#">
            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
            Dashboard
        </a>
        <!-- Sidenav Link (Tables)-->
        <a class="nav-link" href="{{ route('profile.index') }}">
            <div class="nav-link-icon"><i data-feather="filter"></i></div>
            Profile
        </a>

        <!-- Sidenav Link (Tables)-->
        <a class="nav-link" href="{{ route('sp_register_company') }}">
            <div class="nav-link-icon"><i data-feather="filter"></i></div>
            Registration
        </a>

        <!-- Sidenav Link (Tables)-->
        <a class="nav-link" href="{{ route('sp.company_request') }}">
            <div class="nav-link-icon"><i data-feather="filter"></i></div>
            Company Request
        </a>

        <!-- Sidenav Link (Tables)-->
        <a class="nav-link" href="{{ route('sp.user_history') }}">
            <div class="nav-link-icon"><i data-feather="filter"></i></div>
            History
        </a>

        {{-- ---------------------------------- Farmer Navbar ---------------------------------- --}}


    </div>
</div>
