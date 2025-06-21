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

        /* Specific styles for the Features page hero */
        .features-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .features-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .features-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
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

        .engage-section {
            /* Re-using styles from index */
            padding: 80px 0;
            text-align: center;
            background-color: #f8f9fa;
        }

        .engage-section h4.sub-heading {
            color: #8c8c8c;
            font-weight: 500;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .engage-section h2.main-heading {
            font-size: 2.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .engage-section p.lead-text {
            font-size: 1.2rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .feature-item {
            text-align: center;
            padding: 20px;
        }

        .feature-item .icon-box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            background-color: #f2e6fb;
            border-radius: 50%;
            margin-bottom: 20px;
            font-size: 2.2rem;
            color: #571c87;
            border: 1px solid #571c87;
        }

        .feature-item h5 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-item p {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
        }

        .features-grid-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .features-grid-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 50px;
        }

        .feature-card {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            min-height: 280px;
            /* Ensure consistent card height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .feature-card .icon-large {
            font-size: 3.5rem;
            color: #571c87;
            margin-bottom: 20px;
        }

        .feature-card h4 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .feature-card p {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
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

            .features-hero h1 {
                font-size: 2.5rem;
            }

            .engage-section h2.main-heading {
                font-size: 2.2rem;
            }

            .features-grid-section h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .features-hero h1 {
                font-size: 2rem;
            }

            .features-hero p {
                font-size: 1rem;
            }

            .engage-section h2.main-heading {
                font-size: 1.8rem;
            }

            .features-grid-section h2 {
                font-size: 1.8rem;
            }

            .feature-card {
                padding: 20px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="features-hero">
        <div class="container">
            <h1>Découvrez les puissantes Fonctionnalités d'OnYVa</h1>
            <p>OnYVa est conçue pour rendre la connexion sociale spontanée, facile et amusante. Explorez toutes les
                façons dont notre application améliore vos expériences de rencontre.</p>
        </div>
    </section>

    <section class="engage-section">
        <div class="container">
            <h4 class="sub-heading">Connectez-vous</h4>
            <h2 class="main-heading">Engagez-vous dans des Activités Spontanées<br> avec vos Amis</h2>
            <p class="lead-text">Rejoignez ou créez des groupes de discussion temporaires pour des activités spontanées.
                Connectez-vous avec jusqu'à 5 participants pour une expérience unique.</p>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-chat-text"></i>
                        </div>
                        <h5>Groupes de Discussion Temporaires pour<br> des Connexions Instantanées</h5>
                        <p>Créez un groupe de discussion qui ne dure que 24 heures, parfait pour l'imprévu.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Limité à 5 Participants pour<br> un Contact Personnel</h5>
                        <p>Profitez de conversations intimes et de qualité avec un petit groupe d'amis ou de nouvelles
                            rencontres.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-trash"></i>
                        </div>
                        <h5>Suppression Automatique Garantit<br> Confidentialité et Nouveauté</h5>
                        <p>Votre groupe disparaît après 24 heures, assurant votre confidentialité et une fraîcheur
                            constante des interactions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-grid-section">
        <div class="container">
            <h2>Plus de Fonctionnalités Clés</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-geo-alt-fill icon-large"></i>
                        <h4>Localisation Basée</h4>
                        <p>Découvrez des activités et des personnes autour de vous en temps réel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-bell-fill icon-large"></i>
                        <h4>Notifications Intelligentes</h4>
                        <p>Recevez des alertes instantanées pour les activités qui correspondent à vos intérêts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-filter-circle-fill icon-large"></i>
                        <h4>Filtres Personnalisables</h4>
                        <p>Affinez votre recherche d'activités par type, heure et préférences.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-calendar-event-fill icon-large"></i>
                        <h4>Planification Facile</h4>
                        <p>Créez et gérez vos propres activités en quelques clics.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-chat-dots-fill icon-large"></i>
                        <h4>Messagerie Sécurisée</h4>
                        <p>Communiquez en toute sécurité avec votre groupe avant de vous rencontrer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="bi bi-shield-lock-fill icon-large"></i>
                        <h4>Confidentialité Avancée</h4>
                        <p>Contrôlez qui voit votre profil et vos activités proposées.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
