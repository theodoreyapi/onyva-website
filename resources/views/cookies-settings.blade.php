@extends('layouts.master')

@push('style')
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #e6ccff;
            border-bottom: none;
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

        .content-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .content-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }

        .content-card h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        .content-card p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .content-card .form-check {
            margin-bottom: 15px;
        }

        .content-card .form-check-input {
            margin-top: 0.3em;
            width: 1.25em;
            height: 1.25em;
            border-radius: 0.25rem;
            /* For checkboxes */
        }

        .content-card .form-check-label {
            font-size: 1.05rem;
            color: #333;
            font-weight: 500;
        }

        .content-card .cookie-type h3 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #571c87;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .content-card .cookie-type p.small-text {
            font-size: 0.95rem;
            color: #777;
            margin-bottom: 25px;
        }

        .content-card .btn-save-settings {
            background-color: #571c87;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
            width: auto;
            margin-top: 30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .content-card .btn-save-settings:hover {
            background-color: #4a1773;
        }

        /* Footer (re-used styles) */
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

            .content-card h1 {
                font-size: 2rem;
            }

            .content-card h2 {
                font-size: 1.6rem;
            }

            .content-card p,
            .content-card .form-check-label {
                font-size: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="content-section">
        <div class="container">
            <div class="content-card animate__animated animate__fadeInUp">
                <h1>Paramètres des Cookies</h1>
                <p>Gérez vos préférences en matière de cookies pour OnYVa. Vous pouvez choisir d'accepter ou de refuser
                    certains types de cookies. Veuillez noter que bloquer certains types de cookies peut impacter votre
                    expérience sur le site et les services que nous sommes en mesure de vous offrir.</p>

                <form>
                    <div class="cookie-type">
                        <h3>Cookies Essentiels (Obligatoires)</h3>
                        <p class="small-text">Ces cookies sont absolument nécessaires au bon fonctionnement du site web
                            et ne peuvent pas être désactivés dans nos systèmes. Ils sont généralement configurés en
                            réponse à des actions que vous effectuez et qui correspondent à une demande de services,
                            comme la définition de vos préférences de confidentialité, la connexion ou le remplissage de
                            formulaires. Vous pouvez configurer votre navigateur pour bloquer ou vous alerter à propos
                            de ces cookies, mais certaines parties du site ne fonctionneront alors plus.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="essentialCookies" checked disabled>
                            <label class="form-check-label" for="essentialCookies">
                                Toujours actif
                            </label>
                        </div>
                    </div>

                    <div class="cookie-type">
                        <h3>Cookies de Performance et Statistiques</h3>
                        <p class="small-text">Ces cookies nous permettent de compter les visites et les sources de
                            trafic afin que nous puissions mesurer et améliorer les performances de notre site. Ils nous
                            aident à savoir quelles pages sont les plus et les moins populaires et à voir comment les
                            visiteurs se déplacent sur le site. Si vous n'autorisez pas ces cookies, nous ne saurons pas
                            quand vous avez visité notre site et ne pourrons pas surveiller ses performances.</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="performanceCookies">
                            <label class="form-check-label" for="performanceCookies">
                                Activer les cookies de performance
                            </label>
                        </div>
                    </div>

                    <div class="cookie-type">
                        <h3>Cookies de Fonctionnalité</h3>
                        <p class="small-text">Ces cookies permettent au site web de fournir des fonctionnalités et une
                            personnalisation améliorées. Ils peuvent être mis en place par nous ou par des fournisseurs
                            tiers dont nous avons ajouté les services à nos pages. Si vous n'autorisez pas ces cookies,
                            certains ou tous ces services risquent de ne pas fonctionner correctement.</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="functionalityCookies">
                            <label class="form-check-label" for="functionalityCookies">
                                Activer les cookies de fonctionnalité
                            </label>
                        </div>
                    </div>

                    <div class="cookie-type">
                        <h3>Cookies de Ciblage / Publicitaires</h3>
                        <p class="small-text">Ces cookies peuvent être mis en place via notre site par nos partenaires
                            publicitaires. Ils peuvent être utilisés par ces entreprises pour créer un profil de vos
                            intérêts et vous montrer des publicités pertinentes sur d'autres sites. Ils ne stockent pas
                            directement d'informations personnelles, mais sont basés sur l'identification unique de
                            votre navigateur et de votre appareil Internet. Si vous n'autorisez pas ces cookies, vous
                            verrez moins de publicité ciblée.</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="targetingCookies">
                            <label class="form-check-label" for="targetingCookies">
                                Activer les cookies de ciblage
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-save-settings">Enregistrer mes préférences</button>
                </form>
            </div>
        </div>
    </section>
@endsection
