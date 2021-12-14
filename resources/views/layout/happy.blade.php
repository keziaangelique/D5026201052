<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Aplikasi Kepegawaian|@yield("title")</title>

    <style>
        /*===== GOOGLE FONTS =====*/
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        /*===== VARIABLES CSS =====*/
        :root {
            --header-height: 3rem;
            --nav-width: 68px;

            /*===== Colors =====*/
            --first-color: #F67E7D;
            --first-color-light: #FFD7D7;
            --white-color: #fbf6f7;

            /*===== Font and typography =====*/
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;

            /*===== z index =====*/
            --z-fixed: 100;
        }

        /*===== BASE =====*/
        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
        }

        a {
            text-decoration: none;
        }

        /*===== HEADER =====*/
        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s;
        }

        .header__toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .header__img {
            width: 40px;
            justify-content: center;
            overflow: hidden;
        }

        .header__img img {
            width: 40px;
        }

        /*===== NAV =====*/
        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed);
        }

        .nav {
            height: 100%;
            display: block;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .nav__logo,
        .nav__link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem;
        }

        .nav__logo {
            margin-bottom: 2rem;
        }

        .nav__logo-icon {
            font-size: 1.25rem;
            color: var(--white-color);
        }

        .nav__logo-name {
            color: var(--white-color);
            font-weight: 700;
        }

        .nav__link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s;
        }

        .nav__link:hover {
            color: var(--white-color);
        }

        .nav__icon {
            font-size: 1.25rem;
        }

        /*Show navbar movil*/
        .show {
            left: 0;
        }

        /*Add padding body movil*/
        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem);
        }

        /*Active links*/
        .active {
            color: var(--white-color);
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color);

        }

        .footer {
            font-family: var(--body-font);
            position: relative;
            bottom: 0;
            left: 0;
            color: #F67E7D;
            height: auto;
            width: 100%;
        }

        .footer-content {
            color: #F67E7D;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .socials {
            list-style-type: none;
            display: flex;
        }

        .socials a {
            text-decoration: none;
            color: #F67E7D;
        }

        .socials a i {
            font-size: 1.5rem;
            transition: color .4s ease;

        }

        .socials a:hover i {
            opacity: 70%;
        }

        /* ===== MEDIA QUERIES=====*/
        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem);
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
            }

            .header__img {
                width: 40px;
                height: 40px;
            }

            .header__img img {
                width: 35px;
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0;
            }

            /*Show navbar desktop*/
            .show {
                width: calc(var(--nav-width) + 156px);
            }

            /*Add padding body desktop*/
            .body-pd {
                padding-left: calc(var(--nav-width) + 188px);
            }
        }
    </style>


</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle" id="menu-btn">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img class="rounded-circle" src="{{ url('/profile.jpeg')}}" alt="profile">
        </div>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <a href="#" class="nav__logo">
                    <i class='bx bxs-face nav__logo-icon'></i>
                    <span class="nav__logo-name">Kezia Angelique S</span>
                </a>

                <a href="/pegawai" class="nav__link">
                    <i class='bx bx-user-circle nav__icon'></i>
                    <span class="nav__name">Pegawai</span>
                </a>

                <a href="/absen" class="nav__link">
                    <i class='bx bx-notepad nav__icon'></i>
                    <span class="nav__name">Absen</span>
                </a>

                <a href="/mutasi" class="nav__link">
                    <i class='bx bx-sitemap nav__icon'></i>
                    <span class="nav__name">Mutasi</span>
                </a>


                <a href="/hewan" class="nav__link">
                    <i class='bx bxs-cat'></i>
                    <span class="nav__name">Praktikum</span>
                </a>
            </nav>
        </div>
    </header>

    <section class="p-4 my-container">
        <div class="my-5">
            @section('konten')
            @show
        </div>
    </section>
    <br />
    <br />



    <div class="footer">
        <div class="footer-content">
            <p class="mt-3 small">© 2021 Kezia Angelique Sidabutar <br /> 5026201052</p>
            <div class="socials d-flex justify-content-evenly mb-2">
                <a target="_blank" href="https://www.instagram.com/keziaangelique"><i class="fa fa-instagram"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/kezia-angelique-sidabutar-746285212/"><i class="fa fa-linkedin-square mx-2"></i></a>
                <a target="_blank" href="https://github.com/keziaangelique"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>

    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
        /*===== SHOW NAVBAR  =====*/
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE  =====*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))
    </script>

</body>

</html>
