<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventaris Barang</title>

    {{-- =========================
         FONT AWESOME
    ========================= --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- =========================
         BOOTSTRAP
    ========================= --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    {{-- =========================
         ADMINLTE
    ========================= --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">


    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        body {
            background: #f4f6f9;
        }

        .content-wrapper {
            background: #f4f6f9;
        }


        /* =====================================================
           SIDEBAR
           Lebar sidebar: 270px
        ===================================================== */

        .main-sidebar {
            width: 270px !important;
            background: #ffffff !important;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.08);
        }


        /* =====================================================
           BRAND / LOGO
        ===================================================== */

        .brand-link {
            width: 270px !important;
            background: #ffffff !important;
            border-bottom: 1px solid #eeeeee !important;

            display: flex;
            align-items: center;

            padding: 12px 15px;
        }

        .brand-image {
            width: 35px;
            height: 35px;

            object-fit: cover;

            margin-left: 0;
            margin-right: 10px;
        }

        .brand-text {
            color: #243447 !important;

            font-weight: 700 !important;
            font-size: 15px;

            white-space: nowrap;
        }


        /* =====================================================
           SIDEBAR CONTENT
        ===================================================== */

        .main-sidebar .sidebar {
            width: 270px !important;
        }


        /* =====================================================
           SEARCH SIDEBAR
        ===================================================== */

        .form-inline {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .form-inline .input-group {
            width: 100%;
        }

        .form-control-sidebar {
            background: #f5f7fa !important;

            border: 1px solid #e5e7eb !important;

            color: #344054 !important;

            border-radius: 7px 0 0 7px !important;

            height: 38px;
        }

        .form-control-sidebar::placeholder {
            color: #9ca3af;
        }

        .form-control-sidebar:focus {
            border-color: #1677ff !important;

            box-shadow: none !important;
        }

        .btn-sidebar {
            background: #f5f7fa !important;

            border: 1px solid #e5e7eb !important;

            color: #667085 !important;

            border-radius: 0 7px 7px 0 !important;

            height: 38px;
        }

        .btn-sidebar:hover {
            color: #1677ff !important;
        }


        /* =====================================================
           JUDUL MENU
        ===================================================== */

        .nav-sidebar .nav-header {
            color: #8a96a3 !important;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 1px;

            padding-left: 15px;

            margin-top: 10px;
        }


        /* =====================================================
           SEMUA MENU
        ===================================================== */

        .nav-sidebar .nav-link {
            color: #344054 !important;

            background: transparent !important;

            border-radius: 8px;

            margin: 3px 8px;

            padding: 12px 15px;

            width: calc(100% - 16px);

            box-sizing: border-box;

            transition: all 0.2s ease;
        }


        /* =====================================================
           ICON MENU
        ===================================================== */

        .nav-sidebar .nav-link .nav-icon {
            color: #667085 !important;

            font-size: 16px;

            margin-right: 7px;
        }


        /* =====================================================
           TEKS MENU
        ===================================================== */

        .nav-sidebar .nav-link p {
            color: #344054 !important;

            font-size: 14px;

            font-weight: 500;

            margin-bottom: 0;
        }


        /* =====================================================
           HOVER
        ===================================================== */

        .nav-sidebar .nav-link:hover {
            background: #f5f7fa !important;

            color: #1677ff !important;
        }

        .nav-sidebar .nav-link:hover p {
            color: #1677ff !important;
        }

        .nav-sidebar .nav-link:hover .nav-icon {
            color: #1677ff !important;
        }


        /* =====================================================
           MENU AKTIF
        ===================================================== */

        .nav-sidebar .nav-link.active {
            background: #f1f6ff !important;

            color: #1677ff !important;

            box-shadow: none !important;

            font-weight: 600;

            border-left: 4px solid #1677ff;

            padding-left: 11px;

            box-sizing: border-box;
        }

        .nav-sidebar .nav-link.active p {
            color: #1677ff !important;

            font-weight: 600;
        }

        .nav-sidebar .nav-link.active .nav-icon {
            color: #1677ff !important;
        }

        .nav-sidebar .nav-link.active:hover {
            background: #f1f6ff !important;
        }


        /* =====================================================
           CONTENT / NAVBAR / FOOTER
           Menyesuaikan sidebar 270px
        ===================================================== */

        .content-wrapper,
        .main-header,
        .main-footer {
            margin-left: 270px !important;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .main-header {
            background: #ffffff !important;

            border-bottom: 1px solid #e5e7eb;

            min-height: 57px;
        }

        .main-header .nav-link {
            color: #344054 !important;
        }

        .main-header .nav-link:hover {
            color: #1677ff !important;
        }


        /* =====================================================
           CONTENT HEADER
        ===================================================== */

        .content-header h1 {
            font-weight: 600;

            color: #1f2937;
        }

        .content-header p {
            color: #6b7280;
        }


        /* =====================================================
           WELCOME CARD
        ===================================================== */

        .welcome-card {
            border-radius: 10px;

            border-top: 3px solid #007bff;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .welcome-card h3 {
            font-size: 23px;

            font-weight: 500;
        }


        /* =====================================================
           STAT CARD
        ===================================================== */

        .small-box {
            border-radius: 9px;

            overflow: hidden;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);

            transition: all 0.2s ease;
        }

        .small-box:hover {
            transform: translateY(-3px);

            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
        }

        .small-box .inner h3 {
            font-size: 28px;

            font-weight: 600;
        }


        /* =====================================================
           DASHBOARD CARD
        ===================================================== */

        .dashboard-card {
            border: none;

            border-radius: 9px;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .dashboard-card .card-header {
            background: #ffffff;

            border-bottom: 1px solid #eeeeee;

            padding: 14px 18px;
        }

        .dashboard-card .card-title {
            font-size: 15px;

            font-weight: 600;
        }


        /* =====================================================
           QUICK MENU
        ===================================================== */

        .quick-menu {
            border-radius: 7px;

            margin-bottom: 10px;

            font-weight: 500;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .main-footer {
            background: #ffffff;

            border-top: 1px solid #e5e7eb;

            color: #6b7280;
        }

        .main-footer strong {
            color: #007bff;
        }


        /* =====================================================
           SIDEBAR COLLAPSE
        ===================================================== */

        body.sidebar-collapse .main-sidebar {
            margin-left: -270px !important;
        }

        body.sidebar-collapse .content-wrapper,
        body.sidebar-collapse .main-header,
        body.sidebar-collapse .main-footer {
            margin-left: 0 !important;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 991.98px) {

            .main-sidebar {
                margin-left: -270px !important;
            }

            .content-wrapper,
            .main-header,
            .main-footer {
                margin-left: 0 !important;
            }

            body.sidebar-open .main-sidebar {
                margin-left: 0 !important;
            }

        }

    </style>

</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">


    {{-- =====================================================
         NAVBAR
    ===================================================== --}}

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        {{-- Hamburger --}}

        <ul class="navbar-nav">

            <li class="nav-item">

                <a class="nav-link"
                   data-widget="pushmenu"
                   href="#"
                   role="button">

                    <i class="fas fa-bars"></i>

                </a>

            </li>

        </ul>


        {{-- Right Navbar --}}

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">

                <span class="nav-link">

                    <i class="fas fa-user-circle mr-1"></i>

                    {{ Auth::user()->nama ?? 'User' }}

                </span>

            </li>

        </ul>

    </nav>


    {{-- =====================================================
         SIDEBAR
    ===================================================== --}}

    <aside class="main-sidebar sidebar-light-primary elevation-2">


        {{-- BRAND --}}

        <a href="{{ route('dashboard.index') }}"
           class="brand-link">

            <img src="{{ asset('images/logo inventory.png') }}"
                 alt="Logo"
                 class="brand-image img-circle elevation-1">

            <span class="brand-text">
                INVENTORY SEKOLAH
            </span>

        </a>


        {{-- SIDEBAR CONTENT --}}

        <div class="sidebar">


            {{-- SEARCH --}}

            <div class="form-inline mt-3 mb-2">

                <div class="input-group">

                    <input class="form-control form-control-sidebar"
                           type="search"
                           placeholder="Cari menu..."
                           aria-label="Search">

                    <div class="input-group-append">

                        <button class="btn btn-sidebar">

                            <i class="fas fa-search"></i>

                        </button>

                    </div>

                </div>

            </div>


            {{-- MENU --}}

            <nav class="mt-3">

                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu">


                    {{-- =========================
                         MENU UTAMA
                    ========================= --}}

                    <li class="nav-header">
                        MENU UTAMA
                    </li>


                    {{-- DASHBOARD --}}

                    <li class="nav-item">

                        <a href="{{ route('dashboard.index') }}"
                           class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-home"></i>

                            <p>
                                Dashboard
                            </p>

                        </a>

                    </li>


                    {{-- USER --}}

                    <li class="nav-item">

                        <a href="{{ route('user.index') }}"
                           class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-users"></i>

                            <p>
                                User
                            </p>

                        </a>

                    </li>


                    {{-- RUANG --}}

                    <li class="nav-item">

                        <a href="{{ route('ruang.index') }}"
                           class="nav-link {{ request()->routeIs('ruang.*') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-door-open"></i>

                            <p>
                                Ruang
                            </p>

                        </a>

                    </li>


                    {{-- KATEGORI --}}

                    <li class="nav-item">

                        <a href="{{ route('kategori.index') }}"
                           class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-tags"></i>

                            <p>
                                Kategori
                            </p>

                        </a>

                    </li>


                    {{-- BARANG --}}

                    <li class="nav-item">

                        <a href="{{ route('barang.index') }}"
                           class="nav-link {{ request()->routeIs('barang.*') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-box"></i>

                            <p>
                                Barang
                            </p>

                        </a>

                    </li>


                    {{-- MASA EKONOMIS --}}

                    <li class="nav-item">

                        <a href="{{ route('masa.index') }}"
                           class="nav-link {{ request()->routeIs('masa.*') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-hourglass-half"></i>

                            <p>
                                Masa Ekonomis
                            </p>

                        </a>

                    </li>


                    {{-- =========================
                         AKUN
                    ========================= --}}

                    <li class="nav-header">
                        AKUN
                    </li>


                    {{-- LOGOUT --}}

                    <li class="nav-item">

                        <a href="{{ route('logout.index') }}"
                           class="nav-link logout-link">

                            <i class="nav-icon fas fa-sign-out-alt"></i>

                            <p>
                                Logout
                            </p>

                        </a>

                    </li>


                </ul>

            </nav>

        </div>

    </aside>


    {{-- =====================================================
         CONTENT
    ===================================================== --}}

    <div class="content-wrapper">

        <section class="content-header">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>


    {{-- =====================================================
         FOOTER
    ===================================================== --}}

    <footer class="main-footer">

        <strong>

            Copyright &copy; 2026

            <span class="text-primary">
                Inventory Sekolah
            </span>.

        </strong>

        All rights reserved.

        <div class="float-right d-none d-sm-inline">

            Sistem Informasi Inventaris Barang

        </div>

    </footer>


</div>


{{-- =====================================================
     JAVASCRIPT
===================================================== --}}

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>


</body>

</html>