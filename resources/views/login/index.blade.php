<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Inventory Sekolah</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;
            min-height: 100vh;
            background: #f3f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .login-container {

            width: 100%;

            max-width: 1050px;

            min-height: 580px;

            background: #ffffff;

            border-radius: 16px;

            overflow: hidden;

            display: flex;

            box-shadow:
                0 15px 40px
                rgba(15, 23, 42, 0.10);
        }


        /* =====================================================
           LEFT SIDE
        ===================================================== */

        .login-left {

            width: 45%;

            background: #1e3a8a;

            color: #ffffff;

            padding: 55px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            position: relative;

            overflow: hidden;
        }


        /* Dekorasi lingkaran */

        .login-left::before {

            content: "";

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.05);

            top: -120px;

            right: -100px;
        }


        .login-left::after {

            content: "";

            position: absolute;

            width: 220px;

            height: 220px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.04);

            bottom: -100px;

            left: -90px;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo-box {

            width: 70px;

            height: 70px;

            background: #ffffff;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 28px;

            position: relative;

            z-index: 2;
        }


        .logo-box img {

            width: 52px;

            height: 52px;

            object-fit: contain;
        }


        /* =====================================================
           LEFT TEXT
        ===================================================== */

        .login-left h1 {

            font-size: 34px;

            line-height: 1.2;

            font-weight: 700;

            margin-bottom: 12px;

            position: relative;

            z-index: 2;
        }


        .login-left h3 {

            font-size: 18px;

            font-weight: 400;

            color: #dbeafe;

            margin-bottom: 25px;

            position: relative;

            z-index: 2;
        }


        .line {

            width: 65px;

            height: 3px;

            background: #60a5fa;

            margin-bottom: 25px;

            position: relative;

            z-index: 2;
        }


        .login-left p {

            max-width: 400px;

            color: #dbeafe;

            font-size: 15px;

            line-height: 1.8;

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           RIGHT SIDE
        ===================================================== */

        .login-right {

            width: 55%;

            padding: 55px 70px;

            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .login-header {

            margin-bottom: 32px;
        }


        .login-header h2 {

            font-size: 29px;

            color: #172554;

            margin-bottom: 10px;
        }


        .login-header p {

            color: #64748b;

            font-size: 14px;

            line-height: 1.6;
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .alert-error {

            background: #fef2f2;

            border: 1px solid #fecaca;

            color: #b91c1c;

            padding: 12px 14px;

            border-radius: 6px;

            font-size: 14px;

            margin-bottom: 20px;
        }


        .error-message {

            color: #dc2626;

            font-size: 13px;

            margin-top: 6px;
        }


        /* =====================================================
           FORM
        ===================================================== */

        .form-group {

            margin-bottom: 20px;
        }


        .form-group label {

            display: block;

            color: #334155;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 8px;
        }


        .form-control {

            width: 100%;

            height: 48px;

            border: 1px solid #cbd5e1;

            border-radius: 7px;

            padding: 0 14px;

            font-size: 14px;

            color: #1e293b;

            background: #ffffff;

            outline: none;

            transition:
                border-color 0.2s,
                box-shadow 0.2s;
        }


        .form-control:focus {

            border-color: #2563eb;

            box-shadow:
                0 0 0 3px
                rgba(37,99,235,0.10);
        }


        .form-control::placeholder {

            color: #94a3b8;
        }


        /* =====================================================
           LOGIN BUTTON
        ===================================================== */

        .btn-login {

            width: 100%;

            height: 48px;

            border: none;

            border-radius: 7px;

            background: #1d4ed8;

            color: #ffffff;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

            transition: all 0.2s ease;

            margin-top: 5px;
        }


        .btn-login:hover {

            background: #173ea8;

            transform:
                translateY(-1px);

            box-shadow:
                0 5px 12px
                rgba(29,78,216,0.18);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .login-footer {

            text-align: center;

            margin-top: 32px;

            color: #94a3b8;

            font-size: 12px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 850px) {

            body {

                padding: 20px;
            }


            .login-container {

                max-width: 550px;

                min-height: auto;
            }


            .login-left {

                display: none;
            }


            .login-right {

                width: 100%;

                padding: 50px 45px;
            }
        }


        @media (max-width: 500px) {

            body {

                padding: 15px;
            }


            .login-container {

                border-radius: 12px;
            }


            .login-right {

                padding: 40px 25px;
            }


            .login-header h2 {

                font-size: 25px;
            }
        }

    </style>

</head>


<body>


    <!-- =====================================================
         LOGIN CONTAINER
    ====================================================== -->

    <div class="login-container">


        <!-- =================================================
             LEFT SIDE
        ================================================== -->

        <div class="login-left">


            <!-- LOGO -->

            <div class="logo-box">

                <img
                    src="{{ asset('images/logo inventory.png') }}"
                    alt="Logo Inventory Sekolah"
                >

            </div>


            <!-- TITLE -->

            <h1>
                Inventory Sekolah
            </h1>


            <h3>
                Sistem Informasi Inventory Sekolah
            </h3>


            <div class="line"></div>


            <p>

                Kelola data barang, kategori, dan jenis
                barang secara mudah, cepat, dan terstruktur
                dalam satu sistem inventory sekolah.

            </p>


        </div>



        <!-- =================================================
             RIGHT SIDE
        ================================================== -->

        <div class="login-right">


            <!-- HEADER -->

            <div class="login-header">

                <h2>
                    Selamat Datang Kembali
                </h2>

                <p>
                    Silakan login untuk mengakses
                    sistem inventory sekolah.
                </p>

            </div>



            <!-- =================================================
                 ERROR LOGIN
            ================================================== -->

            @if ($errors->has('login'))

                <div class="alert-error">

                    {{ $errors->first('login') }}

                </div>

            @endif



            <!-- =================================================
                 FORM LOGIN
            ================================================== -->

            <form action="{{ route('login.process') }}" method="POST">

                @csrf

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        value="{{ old('username') }}"
                        autocomplete="username"
                        autofocus
                    >

                    @error('username')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                    >

                    @error('password')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <button
                    type="submit"
                    class="btn-login"
                >
                    Login
                </button>

            </form>


            <!-- FOOTER -->

            <div class="login-footer">

                © 2026 Inventory SMK Informatika Utama

            </div>


        </div>


    </div>


</body>

</html>