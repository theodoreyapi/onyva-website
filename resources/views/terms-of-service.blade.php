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
                <h1>Conditions Générales d'Utilisation</h1>
                <p>Dernière mise à jour : 21 Juin 2025</p>

                <p>Bienvenue sur OnYVa ! Ces Conditions Générales d'Utilisation ("CGU") régissent votre accès et votre
                    utilisation de l'application mobile et des services OnYVa (collectivement, le "Service"). En accédant ou
                    en utilisant le Service, vous acceptez d'être lié par ces CGU.</p>

                <h2>1. Acceptation des CGU</h2>
                <p>En créant un compte OnYVa ou en utilisant le Service, vous confirmez que vous avez lu, compris et accepté
                    d'être lié par ces CGU, y compris la Politique de Confidentialité.</p>

                <h2>2. Éligibilité</h2>
                <p>Vous devez avoir au moins 18 ans pour créer un compte et utiliser le Service. En utilisant le Service,
                    vous déclarez et garantissez que vous avez l'âge légal pour conclure un contrat avec OnYVa.</p>

                <h2>3. Votre Compte</h2>
                <ul>
                    <li>Vous êtes responsable de maintenir la confidentialité de vos informations de connexion et êtes
                        entièrement responsable de toutes les activités qui se produisent sous votre compte.</li>
                    <li>Vous vous engagez à nous informer immédiatement de toute utilisation non autorisée de votre compte.
                    </li>
                    <li>Vous vous engagez à fournir des informations exactes, complètes et à jour lors de la création et de
                        la mise à jour de votre compte.</li>
                </ul>

                <h2>4. Utilisation du Service</h2>
                <p>Vous vous engagez à utiliser le Service de manière licite et conformément à ces CGU. Vous ne devez pas :
                </p>
                <ul>
                    <li>Utiliser le Service à des fins illégales ou non autorisées.</li>
                    <li>Harceler, abuser, menacer, diffamer ou enfreindre de toute autre manière les droits d'autrui.</li>
                    <li>Télécharger ou transmettre des virus ou tout autre code malveillant.</li>
                    <li>Tenter d'obtenir un accès non autorisé à nos systèmes ou aux comptes d'autres utilisateurs.</li>
                    <li>Utiliser le Service pour du spam, du phishing ou toute autre activité commerciale non sollicitée.
                    </li>
                </ul>

                <h2>5. Contenu Utilisateur</h2>
                <ul>
                    <li>Vous êtes seul responsable du contenu que vous publiez sur le Service, y compris les textes, photos
                        et autres médias.</li>
                    <li>Vous garantissez que vous détenez les droits nécessaires sur tout contenu que vous soumettez.</li>
                    <li>OnYVa se réserve le droit de supprimer tout contenu jugé inapproprié ou en violation de ces CGU.
                    </li>
                </ul>

                <h2>6. Droits de Propriété Intellectuelle</h2>
                <p>Le Service et son contenu original, ses fonctionnalités et ses fonctionnalités sont et resteront la
                    propriété exclusive d'OnYVa et de ses concédants de licence.</p>

                <h2>7. Résiliation</h2>
                <p>Nous pouvons résilier ou suspendre votre accès à notre Service immédiatement, sans préavis ni
                    responsabilité, pour quelque raison que ce soit, y compris, sans limitation, si vous ne respectez pas
                    les présentes CGU.</p>

                <h2>8. Limitation de Responsabilité</h2>
                <p>En aucun cas, OnYVa, ni ses administrateurs, employés, partenaires, agents, fournisseurs ou affiliés, ne
                    seront responsables de dommages indirects, accessoires, spéciaux, consécutifs ou punitifs, y compris,
                    sans limitation, la perte de profits, de données, d'utilisation, de clientèle ou d'autres pertes
                    intangibles, résultant de votre accès ou de votre utilisation ou de votre incapacité à accéder ou à
                    utiliser le Service.</p>

                <h2>9. Droit Applicable</h2>
                <p>Les présentes CGU seront régies et interprétées conformément aux lois du pays où OnYVa est enregistrée,
                    sans égard à ses dispositions en matière de conflits de lois.</p>

                <h2>10. Modifications des CGU</h2>
                <p>Nous nous réservons le droit, à notre seule discrétion, de modifier ou de remplacer ces CGU à tout
                    moment. Si une révision est substantielle, nous essaierons de fournir un préavis d'au moins 30 jours
                    avant que les nouvelles conditions ne prennent effet.</p>

                <h2>11. Nous contacter</h2>
                <p>Si vous avez des questions concernant ces Conditions Générales d'Utilisation, vous pouvez nous contacter
                    à :</p>
                <p>Email : [votre email de contact]</p>
                <p>Adresse : [Votre adresse physique si applicable]</p>
            </div>
        </div>
    </section>
@endsection
