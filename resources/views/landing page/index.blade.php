<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Inventory Sekolah
    </title>


    <style>

        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f5f8fc;

            color: #172554;

            min-height: 100vh;
        }


        a {
            text-decoration: none;
        }


        /* =========================================================
           NAVBAR
        ========================================================= */

        .navbar {

            width: 100%;

            height: 78px;

            background: #ffffff;

            border-bottom: 1px solid #e7edf5;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding:
                0
                clamp(25px, 6vw, 90px);

            position: relative;

            z-index: 100;

        }


        /* Logo */

        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            color: #172554;

        }


        .brand img {

            width: 46px;

            height: 46px;

            object-fit: contain;

        }


        .brand-name {

            font-size: 21px;

            font-weight: 700;

            color: #172554;

        }


        .brand-name span {

            color: #1d4ed8;

        }


        /* Menu */

        .nav-menu {

            display: flex;

            align-items: center;

            gap: 38px;

        }


        .nav-link {

            position: relative;

            color: #334155;

            font-size: 15px;

            font-weight: 500;

            padding: 28px 0;

            transition: 0.2s ease;

        }


        .nav-link:hover {

            color: #1d4ed8;

        }


        .nav-link.active {

            color: #1d4ed8;

            font-weight: 600;

        }


        .nav-link.active::after {

            content: "";

            position: absolute;

            left: 0;

            right: 0;

            bottom: 18px;

            height: 2px;

            background: #2563eb;

            border-radius: 5px;

        }


        /* Login */

        .login-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            min-width: 105px;

            height: 42px;

            padding: 0 20px;

            background: #1d4ed8;

            color: white;

            border-radius: 7px;

            font-size: 15px;

            font-weight: 600;

            transition: 0.2s ease;

        }


        .login-button:hover {

            background: #173ea8;

            color: white;

            transform: translateY(-1px);

        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {

            position: relative;

            overflow: hidden;

            min-height: 620px;

            display: flex;

            align-items: center;

            padding:
                65px
                clamp(25px, 7vw, 100px);

            background:

                radial-gradient(
                    circle at 68% 40%,
                    rgba(219, 234, 254, 0.8),
                    transparent 32%
                ),

                #f5f8fc;

        }


        /* Decorative dots */

        .hero-dots {

            position: absolute;

            left: 42px;

            top: 42px;

            width: 95px;

            height: 70px;

            opacity: 0.7;

            background-image:

                radial-gradient(
                    #bcd3ff 2px,
                    transparent 2px
                );

            background-size: 19px 19px;

        }


        .hero-container {

            position: relative;

            z-index: 2;

            width: 100%;

            max-width: 1400px;

            margin: 0 auto;

            display: grid;

            grid-template-columns:
                minmax(420px, 0.85fr)
                minmax(520px, 1.15fr);

            align-items: center;

            gap: clamp(35px, 5vw, 90px);

        }


        /* =========================================================
           HERO TEXT
        ========================================================= */

        .hero-content {

            max-width: 650px;

        }


        .hero-label {

            display: inline-flex;

            align-items: center;

            padding: 8px 17px;

            margin-bottom: 23px;

            border-radius: 30px;

            background: #e5efff;

            color: #1d4ed8;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 1.5px;

        }


        .hero-title {

            font-size: clamp(
                42px,
                4.2vw,
                64px
            );

            line-height: 1.1;

            letter-spacing: -1.5px;

            color: #172554;

            margin-bottom: 25px;

            font-weight: 700;

        }


        .hero-title span {

            color: #1d4ed8;

        }


        .title-line {

            width: 62px;

            height: 3px;

            background: #2563eb;

            margin-bottom: 24px;

        }


        .hero-description {

            max-width: 620px;

            color: #475569;

            font-size: clamp(
                16px,
                1.3vw,
                19px
            );

            line-height: 1.8;

            margin-bottom: 32px;

        }


        /* =========================================================
           HERO BUTTON
        ========================================================= */

        .hero-actions {

            display: flex;

            align-items: center;

            gap: 27px;

            flex-wrap: wrap;

        }


        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 175px;
            height: 48px;
            padding: 0 25px;
            background: #1d4ed8;
            color: #ffffff;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(29, 78, 216, 0.18);
            transition: all 0.2s ease;
        }

        .primary-button:hover {
            background: #173ea8;
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(29, 78, 216, 0.22);
        }

        .dashboard-area {

            position: relative;

            width: 100%;

            display: flex;

            justify-content: center;

            align-items: center;

        }


        .dashboard-shadow {

            position: absolute;

            width: 88%;

            height: 80%;

            background: rgba(
                37,
                99,
                235,
                0.12
            );

            filter: blur(45px);

            border-radius: 50%;

        }


        .laptop {
            position: relative;
            z-index: 2;
            width: min(100%, 570px);
        }


        /* Laptop screen */

        .laptop-screen {

            position: relative;

            width: 100%;

            padding: 13px;

            background: #1e293b;

            border-radius:
                14px
                14px
                5px
                5px;

            box-shadow:
                0 25px 45px
                rgba(15, 23, 42, 0.2);

        }


        .camera {

            position: absolute;

            width: 5px;

            height: 5px;

            background: #64748b;

            border-radius: 50%;

            top: 5px;

            left: 50%;

            transform:
                translateX(-50%);

        }


        /* Dashboard inside laptop */

        .dashboard {
            width: 100%;
            height: 290px;
            background: #f8fafc;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
        }


        /* Sidebar */

        .dashboard-sidebar {

            width: 125px;

            background: #172033;

            padding: 16px 10px;

            flex-shrink: 0;

        }


        .dashboard-brand {

            display: flex;

            align-items: center;

            gap: 5px;

            color: white;

            font-size: 8px;

            font-weight: 600;

            margin-bottom: 24px;

            padding: 0 5px;

        }


        .dashboard-brand img {

            width: 18px;

            height: 18px;

            object-fit: contain;

        }


        .side-item {

            height: 31px;

            display: flex;

            align-items: center;

            gap: 8px;

            padding: 0 8px;

            margin-bottom: 5px;

            color: #cbd5e1;

            border-radius: 4px;

            font-size: 8px;

        }


        .side-item.active {

            color: white;

            background: #1d4ed8;

        }


        .side-icon {

            font-size: 10px;

        }


        /* Dashboard content */

        .dashboard-content {

            flex: 1;

            padding: 18px;

            min-width: 0;

        }


        .dashboard-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 18px;

        }


        .dashboard-title {

            font-size: 17px;

            font-weight: 700;

            color: #172554;

        }


        .admin-user {

            font-size: 8px;

            color: #64748b;

            background: white;

            padding: 6px 9px;

            border-radius: 12px;

        }


        /* Statistic cards */

        .stat-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 9px;

            margin-bottom: 14px;

        }


        .stat-card {

            background: white;

            border: 1px solid #edf1f6;

            border-radius: 6px;

            padding: 11px;

            min-width: 0;

        }


        .stat-label {

            color: #64748b;

            font-size: 7px;

            margin-bottom: 7px;

        }


        .stat-number {

            color: #172554;

            font-size: 17px;

            font-weight: 700;

        }


        .stat-icon {

            float: right;

            width: 23px;

            height: 23px;

            border-radius: 6px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #eff6ff;

            color: #2563eb;

            font-size: 10px;

        }


        /* Charts */

        .chart-grid {

            display: grid;

            grid-template-columns:
                1.35fr
                0.9fr;

            gap: 10px;

        }


        .chart-card {

            background: white;

            border: 1px solid #edf1f6;

            border-radius: 6px;

            padding: 12px;

        }


        .chart-title {

            font-size: 9px;

            font-weight: 700;

            color: #172554;

            margin-bottom: 12px;

        }


        /* Bar chart */

        .bar-chart {

            height: 135px;

            display: flex;

            align-items: end;

            justify-content: space-around;

            gap: 8px;

            padding:
                10px
                8px
                0;

            border-bottom: 1px solid #e2e8f0;

        }


        .bar {

            width: 23px;

            border-radius:
                4px
                4px
                0
                0;

            background: #2563eb;

        }


        .bar:nth-child(1) {
            height: 72%;
        }

        .bar:nth-child(2) {
            height: 50%;
        }

        .bar:nth-child(3) {
            height: 83%;
        }

        .bar:nth-child(4) {
            height: 42%;
        }

        .bar:nth-child(5) {
            height: 63%;
        }


        /* Pie */

        .pie-wrapper {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 13px;

            height: 135px;

        }


        .pie {

            width: 85px;

            height: 85px;

            border-radius: 50%;

            background:

                conic-gradient(
                    #22c55e 0deg 125deg,
                    #2563eb 125deg 260deg,
                    #f59e0b 260deg 360deg
                );

        }


        .legend {

            display: flex;

            flex-direction: column;

            gap: 8px;

        }


        .legend-item {

            display: flex;

            align-items: center;

            gap: 5px;

            color: #64748b;

            font-size: 7px;

        }


        .legend-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

        }


        .green {
            background: #22c55e;
        }


        .blue {
            background: #2563eb;
        }


        .orange {
            background: #f59e0b;
        }


        /* Laptop bottom */

        .laptop-base {

            width: 106%;

            height: 18px;

            margin-left: -3%;

            background: #94a3b8;

            border-radius:
                0
                0
                15px
                15px;

            box-shadow:
                0 10px 15px
                rgba(15, 23, 42, 0.15);

        }


        /* =========================================================
           FEATURES
        ========================================================= */

        .features {

            position: relative;

            z-index: 5;

            max-width: 1320px;

            margin:
                -25px auto 0;

            background: white;

            border-radius: 16px;

            box-shadow:
                0 10px 35px
                rgba(15, 23, 42, 0.08);

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            padding: 25px 15px;

        }


        .feature {

            display: flex;

            align-items: center;

            gap: 15px;

            padding:
                10px 25px;

            border-right:
                1px solid #e2e8f0;

        }


        .feature:last-child {

            border-right: none;

        }


        .feature-icon {

            width: 50px;

            height: 50px;

            flex-shrink: 0;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            background: #eff6ff;

        }


        .feature h3 {

            color: #172554;

            font-size: 15px;

            margin-bottom: 5px;

        }


        .feature p {

            color: #64748b;

            font-size: 12px;

            line-height: 1.5;

        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .footer {

            margin-top: 40px;

            background: #17357f;

            color: white;

            padding:
                22px
                clamp(25px, 7vw, 100px);

        }


        .footer-container {

            max-width: 1250px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 30px;

        }


        .footer-brand {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 17px;

            font-weight: 600;

        }


        .footer-brand img {

            width: 36px;

            height: 36px;

            object-fit: contain;

        }


        .footer-line {

            width: 1px;

            height: 30px;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.35
                );

        }


        .footer-copy {

            font-size: 13px;

            color:
                rgba(
                    255,
                    255,
                    255,
                    0.9
                );

        }


        /* =========================================================
           RESPONSIVE - 1100px
        ========================================================= */

        @media (max-width: 1100px) {

            .nav-menu {

                gap: 22px;

            }


            .hero-container {

                grid-template-columns:
                    0.9fr
                    1.1fr;

                gap: 35px;

            }


            .hero-title {

                font-size: 45px;

            }


            .dashboard {

                height: 310px;

            }


            .features {

                margin-left: 25px;

                margin-right: 25px;

            }


            .feature {

                padding:
                    10px 15px;

            }

        }


        /* =========================================================
           RESPONSIVE - 850px
        ========================================================= */

        @media (max-width: 850px) {

            .nav-menu {

                display: none;

            }


            .hero {

                padding:
                    60px 30px;

            }


            .hero-container {

                grid-template-columns: 1fr;

                text-align: center;

            }


            .hero-content {

                max-width: 700px;

                margin: auto;

            }


            .title-line {

                margin-left: auto;

                margin-right: auto;

            }


            .hero-description {

                margin-left: auto;

                margin-right: auto;

            }


            .hero-actions {

                justify-content: center;

            }


            .dashboard-area {

                max-width: 700px;

                margin: auto;

            }


            .features {

                grid-template-columns:
                    repeat(2, 1fr);

            }


            .feature:nth-child(2) {

                border-right: none;

            }


            .feature:nth-child(1),
            .feature:nth-child(2) {

                border-bottom:
                    1px solid #e2e8f0;

                padding-bottom: 20px;

            }


            .feature:nth-child(3),
            .feature:nth-child(4) {

                padding-top: 20px;

            }

        }


        /* =========================================================
           RESPONSIVE - 550px
        ========================================================= */

        @media (max-width: 550px) {

            .navbar {

                height: 68px;

                padding:
                    0 18px;

            }


            .brand img {

                width: 40px;

                height: 40px;

            }


            .brand-name {

                font-size: 17px;

            }


            .login-button {

                min-width: auto;

                height: 38px;

                padding:
                    0 15px;

                font-size: 14px;

            }


            .hero {

                padding:
                    50px 20px;

            }


            .hero-dots {

                display: none;

            }


            .hero-title {

                font-size: 34px;

                letter-spacing: -0.7px;

            }


            .hero-description {

                font-size: 15px;

            }


            .hero-actions {

                flex-direction: column;

                gap: 18px;

            }


            .primary-button {

                width: 100%;

                max-width: 250px;

            }


            .dashboard {

                height: 240px;

            }


            .dashboard-sidebar {

                width: 80px;

            }


            .dashboard-content {

                padding: 10px;

            }


            .dashboard-brand {

                font-size: 6px;

            }


            .side-item {

                font-size: 6px;

            }


            .stat-grid {

                gap: 5px;

            }


            .stat-card {

                padding: 7px;

            }


            .stat-label {

                font-size: 5px;

            }


            .stat-number {

                font-size: 11px;

            }


            .chart-grid {

                gap: 5px;

            }


            .features {

                margin:
                    -10px 15px 0;

                grid-template-columns: 1fr;

                padding: 10px;

            }


            .feature {

                border-right: none !important;

                border-bottom:
                    1px solid #e2e8f0;

                padding:
                    18px 10px;

            }


            .feature:last-child {

                border-bottom: none;

            }


            .footer {

                margin-top: 25px;

            }


            .footer-container {

                flex-direction: column;

                gap: 10px;

            }


            .footer-line {

                display: none;

            }


            .footer-copy {

                font-size: 11px;

                text-align: center;

            }

        }

    </style>

</head>
<body>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="brand">
            <img src="{{ asset('images/logo inventory.png') }}" alt="Logo Inventory Sekolah">
            <div class="brand-name">
                Inventory
                <span>Sekolah</span>
            </div>
        </a>

        <a href="{{ route('user.index') }}" class="login-button">
            Login
        </a>
    </nav>

    <main>
        <section class="hero" id="tentang">
            <div class="hero-dots"></div>
            <div class="hero-container">
                <div class="hero-content">
                    <div class="hero-label">
                        SISTEM INFORMASI
                    </div>

                    <h1 class="hero-title">
                        Kelola
                        <span>Inventory Sekolah</span>
                        <br>
                        Lebih Mudah &
                        Terstruktur
                    </h1>

                    <div class="title-line"></div>

                    <p class="hero-description">
                        Sistem informasi inventory yang membantu
                        pengelolaan data barang, kategori, dan jenis
                        barang secara cepat, akurat, dan terorganisir.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ route('user.index') }}" class="primary-button">
                            Mulai Sekarang
                        </a>
                    </div>
                </div>

                <div class="dashboard-area">
                    <div class="dashboard-shadow"></div>
                    <div class="laptop">
                        <div class="laptop-screen">
                            <div class="camera"></div>
                            <div class="dashboard">
                                <aside class="dashboard-sidebar">
                                    <div class="dashboard-brand">
                                        <img src="{{ asset('images/logo inventory.png') }}" alt="Logo">
                                        Inventory
                                    </div>

                                    <div class="side-item active">
                                        <span class="side-icon">
                                            ▣
                                        </span>
                                        Dashboard
                                    </div>

                                    <div class="side-item">
                                        <span class="side-icon">
                                            ▦
                                        </span>
                                        Barang
                                    </div>

                                    <div class="side-item">
                                        <span class="side-icon">
                                            ▰
                                        </span>
                                        Kategori
                                    </div>

                                    <div class="side-item">
                                        <span class="side-icon">
                                            ◫
                                        </span>
                                        Jenis
                                    </div>

                                    <div class="side-item">
                                        <span class="side-icon">
                                            ▤
                                        </span>
                                        Laporan
                                    </div>
                                </aside>

                                <div class="dashboard-content">
                                    <div class="dashboard-header">
                                        <div class="dashboard-title">
                                            Dashboard
                                        </div>

                                        <div class="admin-user">
                                            👤 Admin ▾
                                        </div>
                                    </div>

                                    <div class="stat-grid">
                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                📦
                                            </div>

                                            <div class="stat-label">
                                                Total Barang
                                            </div>

                                            <div class="stat-number">
                                                320
                                            </div>
                                        </div>

                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                🏷
                                            </div>

                                            <div class="stat-label">
                                                Kategori
                                            </div>

                                            <div class="stat-number">
                                                24
                                            </div>
                                        </div>

                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                ▦
                                            </div>

                                            <div class="stat-label">
                                                Jenis Barang
                                            </div>

                                            <div class="stat-number">
                                                12
                                            </div>
                                        </div>

                                        <div class="stat-card">
                                            <div class="stat-icon">
                                                ▣
                                            </div>

                                            <div class="stat-label">
                                                Total Ruang
                                            </div>

                                            <div class="stat-number">
                                                15
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="chart-grid"
                                    >


                                        <!-- BAR -->

                                        <div
                                            class="chart-card"
                                        >

                                            <div
                                                class="chart-title"
                                            >
                                                Barang per Kategori
                                            </div>


                                            <div
                                                class="bar-chart"
                                            >

                                                <div
                                                    class="bar"
                                                ></div>

                                                <div
                                                    class="bar"
                                                ></div>

                                                <div
                                                    class="bar"
                                                ></div>

                                                <div
                                                    class="bar"
                                                ></div>

                                                <div
                                                    class="bar"
                                                ></div>

                                            </div>

                                        </div>



                                        <!-- PIE -->

                                        <div
                                            class="chart-card"
                                        >

                                            <div
                                                class="chart-title"
                                            >
                                                Status Barang
                                            </div>


                                            <div
                                                class="pie-wrapper"
                                            >


                                                <div
                                                    class="pie"
                                                ></div>


                                                <div
                                                    class="legend"
                                                >

                                                    <div
                                                        class="legend-item"
                                                    >

                                                        <span
                                                            class="legend-dot green"
                                                        ></span>

                                                        Baik

                                                    </div>


                                                    <div
                                                        class="legend-item"
                                                    >

                                                        <span
                                                            class="legend-dot blue"
                                                        ></span>

                                                        Rusak

                                                    </div>


                                                    <div
                                                        class="legend-item"
                                                    >

                                                        <span
                                                            class="legend-dot orange"
                                                        ></span>

                                                        Perbaikan

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                    </div>


                                </div>


                            </div>

                        </div>

                        <div class="laptop-base"></div>

                    </div>
                </div>
            </div>
        </section>

    <footer class="footer" id="kontak">
        <div class="footer-container">

            <div class="footer-brand">
                <span>
                    Inventory Sekolah
                </span>
            </div>

            <div class="footer-line"></div>

            <p class="footer-copy">
                © 2026 Inventory SMK Informatika Utama
            </p>

        </div>
    </footer>
</body>
</html>