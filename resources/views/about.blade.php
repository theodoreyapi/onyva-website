@extends('layouts.master')

@push('style')
<style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #f8f9fa;
            /* Lighter background for overall page */
        }

        .navbar {
            background-color: #e6ccff;
            /* Changed to match image-gallery */
            border-bottom: none;
            /* Removed border */
        }

        .navbar .nav-link {
            color: #333;
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #571c87;
        }

        .navbar-brand {
            font-family: 'Fredoka', cursive;
            font-size: 24px;
            font-weight: bold;
        }

        /* Specific styles for the About page hero */
        .about-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .about-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .about-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .about-content-section {
            padding: 80px 0;
            background-color: #ffffff;
            text-align: center;
        }

        .about-content-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
        }

        .about-content-section p {
            font-size: 1.1rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto 20px;
            line-height: 1.6;
        }

        .values-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .values-section h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .value-item {
            text-align: center;
            padding: 20px;
        }

        .value-item .icon-box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 70px;
            height: 70px;
            background-color: #f2e6fb;
            border-radius: 50%;
            margin-bottom: 20px;
            font-size: 2.5rem;
            color: #571c87;
            border: 1px solid #571c87;
        }

        .value-item h5 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .value-item p {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
        }

        /* Re-use existing global styles where applicable */
        .btn-dark {
            background-color: #1e1e1e;
            color: #fff;
            border: none;
        }

        .btn-outline-dark {
            border: 2px solid #1e1e1e;
            color: #1e1e1e;
        }

        .footer-section {
            background-color: #1e1e1e;
            color: #fff;
            padding: 80px 0 20px;
            font-size: 0.95rem;
        }

        .footer-section h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: #fff;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #fff;
        }

        .footer-section .footer-logo {
            font-family: 'Fredoka', cursive;
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 25px;
            display: block;
        }

        .footer-section .newsletter-form .form-control {
            background-color: #333;
            border: 1px solid #555;
            color: #fff;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .footer-section .newsletter-form .form-control::placeholder {
            color: #bbb;
        }

        .footer-section .newsletter-form .btn-subscribe {
            background-color: #e6ccff;
            color: #1e1e1e;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .footer-section .newsletter-form .btn-subscribe:hover {
            background-color: #d1b3f0;
        }

        .footer-section .newsletter-text {
            color: #ccc;
            font-size: 0.85rem;
            margin-top: 15px;
            line-height: 1.5;
        }

        .footer-section .newsletter-text a {
            color: #e6ccff;
            text-decoration: none;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-bottom .copyright {
            color: #ccc;
        }

        .footer-bottom .bottom-links a {
            color: #ccc;
            text-decoration: none;
            margin-right: 20px;
            transition: color 0.3s ease;
        }

        .footer-bottom .bottom-links a:hover {
            color: #fff;
        }

        .footer-bottom .footer-social-icons a {
            color: #ccc;
            font-size: 1.2rem;
            margin-left: 15px;
            transition: color 0.3s ease;
        }

        .footer-bottom .footer-social-icons a:hover {
            color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {

            .footer-section .col-lg-2,
            .footer-section .col-lg-3,
            .footer-section .col-lg-4 {
                margin-bottom: 30px;
                text-align: center;
            }

            .footer-section .newsletter-form .input-group {
                flex-direction: column;
                align-items: center;
            }

            .footer-section .newsletter-form .btn-subscribe {
                margin-left: 0;
                margin-top: 15px;
                width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom .copyright {
                margin-bottom: 15px;
            }

            .footer-bottom .bottom-links a {
                display: block;
                margin-bottom: 10px;
                margin-right: 0;
            }

            .footer-bottom .footer-social-icons {
                margin-top: 15px;
            }

            .about-hero h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .about-hero h1 {
                font-size: 2rem;
            }

            .about-hero p {
                font-size: 1rem;
            }

            .about-content-section h2 {
                font-size: 2rem;
            }

            .about-content-section p {
                font-size: 0.95rem;
            }

            .values-section h3 {
                font-size: 1.8rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="about-hero">
        <div class="container">
            <h1>Découvrez l'histoire d'OnYVa</h1>
            <p>Nous sommes une équipe passionnée dédiée à connecter les gens grâce à des activités spontanées et
                enrichissantes. Notre mission est de rendre les rencontres plus faciles et plus amusantes.</p>
        </div>
    </section>

    <section class="about-content-section">
        <div class="container">
            <h2>Notre Mission et Vision</h2>
            <p>Chez OnYVa, notre mission est de briser les barrières de la connexion sociale en offrant une plateforme
                simple et intuitive pour organiser et rejoindre des activités spontanées. Nous croyons que les
                meilleures rencontres se produisent souvent de manière inattendue, et nous voulons faciliter ces
                moments.</p>
            <p>Notre vision est de créer une communauté mondiale où chacun peut facilement trouver des partenaires pour
                des activités, explorer de nouveaux passe-temps et forger des amitiés durables, en se basant sur le
                plaisir partagé et la spontanéité.</p>

            <h2 class="mt-5">Nos Valeurs Fondamentales</h2>
            <div class="row mt-4 values-section">
                <div class="col-md-4">
                    <div class="value-item">
                        <div class="icon-box">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h5>Authenticité</h5>
                        <p>Nous encourageons les interactions réelles et sincères, loin des pressions des réseaux
                            sociaux traditionnels.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-item">
                        <div class="icon-box">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h5>Innovation</h5>
                        <p>Nous nous engageons à améliorer constamment notre plateforme pour offrir la meilleure
                            expérience utilisateur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-item">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Communauté</h5>
                        <p>Nous construisons un environnement inclusif et accueillant où chacun se sent en sécurité et
                            valorisé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
