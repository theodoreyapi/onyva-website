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

        .content-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #571c87;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .content-card p,
        .content-card ul,
        .content-card ol {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .content-card ul,
        .content-card ol {
            margin-left: 20px;
        }

        .content-card ul li,
        .content-card ol li {
            margin-bottom: 10px;
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
            .content-card ul,
            .content-card ol {
                font-size: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="content-section">
        <div class="container">
            <div class="content-card animate__animated animate__fadeInUp">
                <h1>Politique de Confidentialité</h1>
                <p>Dernière mise à jour : 21 Juin 2025</p>

                <p>Chez OnYVa, nous nous engageons à protéger votre vie privée. Cette politique de confidentialité
                    explique comment nous collectons, utilisons et partageons vos informations lorsque vous utilisez
                    notre application et nos services.</p>

                <h2>1. Informations que nous collectons</h2>
                <p>Nous collectons différents types d'informations dans le but de vous fournir et d'améliorer nos
                    services, y compris :</p>
                <ul>
                    <li><strong>Informations personnelles :</strong> Nom, adresse e-mail, numéro de téléphone, date de
                        naissance, genre, photo de profil, et autres informations que vous nous fournissez
                        volontairement lors de l'inscription ou de l'utilisation de nos services.</li>
                    <li><strong>Données de localisation :</strong> Si vous activez les services de localisation, nous
                        collectons des informations sur votre position géographique pour faciliter les connexions
                        spontanées à proximité.</li>
                    <li><strong>Données d'utilisation :</strong> Informations sur la façon dont vous accédez et utilisez
                        nos services, telles que les pages visitées, les fonctionnalités utilisées, l'heure et la date
                        d'accès, et les interactions avec d'autres utilisateurs.</li>
                    <li><strong>Informations techniques :</strong> Adresse IP, type de navigateur, système
                        d'exploitation, identifiants d'appareil, informations de connexion et autres données techniques
                        collectées automatiquement.</li>
                </ul>

                <h2>2. Comment nous utilisons vos informations</h2>
                <p>Nous utilisons les informations collectées à diverses fins, notamment pour :</p>
                <ul>
                    <li>Fournir, maintenir et améliorer nos services.</li>
                    <li>Personnaliser votre expérience et vous proposer du contenu et des connexions pertinents.</li>
                    <li>Gérer votre compte et vous envoyer des notifications.</li>
                    <li>Analyser l'utilisation et les tendances pour comprendre comment nos services sont utilisés.</li>
                    <li>Prévenir les fraudes et assurer la sécurité de nos services.</li>
                    <li>Respecter nos obligations légales.</li>
                </ul>

                <h2>3. Partage de vos informations</h2>
                <p>Nous ne partageons vos informations personnelles qu'avec des tiers dans les circonstances suivantes :
                </p>
                <ul>
                    <li><strong>Avec votre consentement :</strong> Nous pouvons partager vos informations si vous nous
                        donnez votre consentement explicite.</li>
                    <li><strong>Avec des fournisseurs de services :</strong> Nous faisons appel à des tiers pour nous
                        aider à exploiter, fournir, améliorer, intégrer, optimiser et commercialiser nos services. Ces
                        fournisseurs ont accès à vos informations uniquement pour exécuter ces tâches en notre nom et
                        sont tenus de ne pas les divulguer ni les utiliser à d'autres fins.</li>
                    <li><strong>Pour des raisons légales :</strong> Nous pouvons divulguer vos informations si la loi
                        l'exige ou si nous pensons de bonne foi qu'une telle action est nécessaire pour se conformer à
                        une obligation légale, protéger nos droits ou nos biens, prévenir ou enquêter sur d'éventuels
                        actes répréhensibles liés au service.</li>
                </ul>

                <h2>4. Sécurité des données</h2>
                <p>Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles appropriées pour
                    protéger vos informations personnelles contre l'accès, l'utilisation, la divulgation, la
                    modification ou la destruction non autorisés.</p>

                <h2>5. Vos droits</h2>
                <p>Conformément aux lois applicables, vous disposez de certains droits concernant vos données
                    personnelles, notamment :</p>
                <ul>
                    <li>Le droit d'accéder à vos informations.</li>
                    <li>Le droit de rectifier des informations inexactes.</li>
                    <li>Le droit de demander la suppression de vos informations.</li>
                    <li>Le droit de vous opposer au traitement de vos informations.</li>
                    <li>Le droit à la portabilité de vos données.</li>
                </ul>
                <p>Pour exercer ces droits, veuillez nous contacter à [votre email de contact].</p>

                <h2>6. Modifications de cette politique</h2>
                <p>Nous pouvons mettre à jour notre politique de confidentialité de temps à autre. Nous vous informerons
                    de toute modification en publiant la nouvelle politique sur cette page. Il vous est conseillé de
                    consulter cette politique de confidentialité périodiquement pour tout changement.</p>

                <h2>7. Nous contacter</h2>
                <p>Si vous avez des questions concernant cette politique de confidentialité, vous pouvez nous contacter
                    à :</p>
                <p>Email : [votre email de contact]</p>
                <p>Adresse : [Votre adresse physique si applicable]</p>
            </div>
        </div>
    </section>
@endsection
