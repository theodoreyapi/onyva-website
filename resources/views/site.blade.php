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

        .hero {
            background-color: #e6ccff;
            /* Changed to match image-gallery */
            padding: 100px 0 60px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .hero .btn {
            padding: 12px 24px;
            border-radius: 6px;
            margin: 10px;
        }

        .btn-dark {
            background-color: #1e1e1e;
            color: #fff;
            border: none;
        }

        .btn-outline-dark {
            border: 2px solid #1e1e1e;
            color: #1e1e1e;
        }

        .image-gallery {
            background-color: #e6ccff;
            padding: 40px 0;
        }

        .image-gallery img {
            width: 100%;
            border-radius: 20px;
            margin-bottom: 20px;
            object-fit: cover;
        }

        /* Styles for the "Notifications" section */
        .notifications-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            /* Matches the background of the mockup */
        }

        .notifications-content {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            /* Subtle shadow like in the image */
            display: flex;
            align-items: center;
            /* Vertically align content */
            min-height: 400px;
            /* Ensure content and image align */
        }

        .notifications-text h4 {
            color: #8c8c8c;
            /* Lighter grey for "Notifications" heading */
            font-weight: 500;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .notifications-text h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .notifications-text p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .notifications-img-container {
            border-radius: 20px;
            /* More rounded corners for the image container */
            overflow: hidden;
            /* Ensures image respects border-radius */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            /* Stronger shadow for the image container */
            height: 100%;
            /* Take full height of the parent column */
            min-height: 450px;
            /* A minimum height to ensure the image box is substantial */
        }

        .notifications-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cover the container while maintaining aspect ratio */
            border-radius: 20px;
            /* Apply border radius directly to the image */
        }

        .notifications-section .btn {
            padding: 10px 20px;
            border-radius: 8px;
            /* Slightly more rounded buttons */
        }

        .notifications-section .btn-outline-dark {
            border: 2px solid #571c87;
            /* Adjust outline button color to match theme */
            color: #571c87;
        }

        .notifications-section .btn-outline-dark:hover {
            background-color: #571c87;
            color: #fff;
        }

        .notifications-section .btn-dark {
            background-color: #571c87;
            /* Adjust dark button color to match theme */
            color: #fff;
        }

        .notifications-section .btn-dark:hover {
            background-color: #4a1773;
        }

        /* Adjustments for the existing "Propose Activities" section to integrate better */
        .py-5 {
            padding-top: 5rem !important;
            padding-bottom: 5rem !important;
        }

        .bg-dark h2 {
            font-size: 2.2rem;
            font-weight: bold;
            line-height: 1.3;
        }

        .bg-dark p {
            font-size: 1.1rem;
        }

        .bg-dark .bi {
            color: #e6ccff;
            /* A lighter color for icons in dark section */
        }

        .bg-dark h6 {
            color: #fff;
        }

        .bg-dark small {
            color: #ccc;
        }

        /* Styles for the "Engage in Spontaneous Activities" section */
        .engage-section {
            padding: 80px 0;
            text-align: center;
            background-color: #f8f9fa;
            /* Consistent light background */
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
            /* Light purple circle background */
            border-radius: 50%;
            margin-bottom: 20px;
            font-size: 2.2rem;
            /* Size of the icon */
            color: #571c87;
            /* Color of the icon */
            border: 1px solid #571c87;
            /* Small border for the circle */
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

        .engage-section .buttons-group .btn {
            padding: 12px 30px;
            border-radius: 8px;
            margin: 10px;
            font-size: 1.1rem;
        }

        .engage-section .buttons-group .btn-outline-dark {
            border: 2px solid #1e1e1e;
            /* Using dark for these buttons as per image */
            color: #1e1e1e;
        }

        .engage-section .buttons-group .btn-dark {
            background-color: #1e1e1e;
            color: #fff;
            border: none;
        }

        .engage-section .buttons-group .btn-outline-dark:hover {
            background-color: #1e1e1e;
            color: #fff;
        }

        /* Styles for the "Discover New Friends" section */
        .discover-section {
            padding: 100px 0;
            background-color: #f0f0f0;
            /* Lighter grey background as in the image */
        }

        .discover-section .text-content {
            padding-right: 40px;
            /* Space between text and image */
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center content vertically */
            height: 100%;
            /* Take full height of the column */
        }

        .discover-section h2 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .discover-section p {
            font-size: 1.15rem;
            color: #555;
            line-height: 1.6;
            max-width: 550px;
            /* Limit text width */
        }

        .discover-section .image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            /* Stronger shadow for the image */
            height: 100%;
            /* Ensure image container takes full height */
        }

        .discover-section .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cover the container */
            display: block;
            /* Remove extra space below image */
        }

        /* Styles for the "Join the Adventure" section (Call to Action) */
        .call-to-action-section {
            padding: 80px 0;
            text-align: center;
            background-color: #ffffff;
            /* White background as in the image */
        }

        .call-to-action-section h2 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .call-to-action-section p {
            font-size: 1.2rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto 40px;
            /* Center text and add space below */
        }

        .call-to-action-section .btn {
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1rem;
            margin: 0 10px;
            /* Space between buttons */
        }

        .call-to-action-section .btn-primary-custom {
            background-color: #e6ccff;
            /* Light purple from the hero section, as seen in image */
            color: #1e1e1e;
            /* Dark text on light button */
            border: none;
        }

        .call-to-action-section .btn-primary-custom:hover {
            background-color: #d1b3f0;
            /* Slightly darker purple on hover */
        }

        .call-to-action-section .btn-outline-secondary-custom {
            border: 2px solid #1e1e1e;
            /* Dark outline */
            color: #1e1e1e;
            /* Dark text */
            background-color: transparent;
        }

        .call-to-action-section .btn-outline-secondary-custom:hover {
            background-color: #1e1e1e;
            color: #fff;
        }

        /* Styles for the Testimonial Section */
        .testimonial-section {
            padding: 80px 0;
            background-color: #ffffff;
            /* White background as in the image */
            text-align: center;
        }

        .testimonial-section .webflow-logo {
            margin-bottom: 40px;
            /* Space below the logo */
            width: 120px;
            /* Adjust size as needed */
        }

        .testimonial-section .testimonial-quote {
            font-size: 2rem;
            font-weight: 500;
            color: #333;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.5;
        }

        .testimonial-section .author-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .testimonial-section .author-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .testimonial-section .author-title {
            font-size: 1rem;
            color: #777;
            margin-bottom: 40px;
        }

        .testimonial-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            /* Space between arrows and dots */
        }

        .testimonial-navigation .nav-arrow {
            background-color: transparent;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            color: #555;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .testimonial-navigation .nav-arrow:hover {
            background-color: #f0f0f0;
            border-color: #ccc;
        }

        .testimonial-navigation .nav-dots span {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .testimonial-navigation .nav-dots span.active {
            background-color: #571c87;
            /* Active dot color */
        }

        /* Styles for the "Our Team" section */
        .team-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            /* Light background */
            text-align: center;
        }

        .team-section .team-heading {
            font-size: 1.1rem;
            font-weight: 500;
            color: #8c8c8c;
            margin-bottom: 10px;
        }

        .team-section .main-heading {
            font-size: 2.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .team-section .team-description {
            font-size: 1.1rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .team-member-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            /* Ensure cards are same height */
        }

        .team-member-card .member-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #f2e6fb;
            /* Light purple border around avatar */
        }

        .team-member-card .member-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .team-member-card .member-role {
            font-size: 1rem;
            color: #571c87;
            /* Purple for the role */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .team-member-card .member-bio {
            font-size: 0.95rem;
            color: #777;
            line-height: 1.6;
            margin-bottom: 25px;
            flex-grow: 1;
            /* Allows bio to take available space */
        }

        .team-member-card .social-links a {
            color: #777;
            font-size: 1.4rem;
            margin: 0 8px;
            transition: color 0.3s ease;
        }

        .team-member-card .social-links a:hover {
            color: #571c87;
            /* Purple on hover */
        }

        /* Styles for the "We're hiring!" block */
        .hiring-block {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            margin-top: 30px;
            /* Space from team members */
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hiring-block h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .hiring-block p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
            max-width: 600px;
        }

        .hiring-block .btn {
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1rem;
            background-color: #1e1e1e;
            /* Dark button */
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .hiring-block .btn:hover {
            background-color: #333;
        }

        /* Footer styles */
        .footer-section {
            background-color: #1e1e1e;
            /* Dark background as per image */
            color: #fff;
            padding: 80px 0 20px;
            /* Padding top, bottom, and extra for copyright section */
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
            /* Assuming logo style for footer matches navbar brand */
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 25px;
            display: block;
            /* Ensures it takes up its own line */
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
            /* Light purple button */
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
            /* Purple link for privacy policy */
            text-decoration: none;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            /* Darker line separating copyright from main footer */
            padding-top: 20px;
            margin-top: 40px;
            /* Space above the line */
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            /* Allow wrapping on small screens */
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

            /* Adjust for medium screens and below */
            .footer-section .col-lg-2,
            .footer-section .col-lg-3,
            .footer-section .col-lg-4 {
                margin-bottom: 30px;
                /* Add space between stacked columns */
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
                /* Full width button */
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
        }

        @media (max-width: 767.98px) {
            .discover-section .text-content {
                padding-right: 15px;
                padding-bottom: 30px;
                /* Add space below text on small screens */
                text-align: center;
            }

            .discover-section h2 {
                font-size: 2.2rem;
            }

            .discover-section p {
                max-width: 100%;
            }

            .discover-section .image-container {
                margin-left: 15px;
                margin-right: 15px;
            }

            .call-to-action-section h2 {
                font-size: 2.2rem;
            }

            .call-to-action-section p {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .call-to-action-section .btn {
                display: block;
                /* Stack buttons on small screens */
                width: 80%;
                margin: 15px auto;
            }

            .testimonial-section .testimonial-quote {
                font-size: 1.5rem;
            }

            .testimonial-navigation {
                flex-direction: column;
                gap: 15px;
            }

            .team-section .main-heading {
                font-size: 2.2rem;
            }

            .team-member-card {
                padding: 20px;
            }

            .team-member-card .member-avatar {
                width: 100px;
                height: 100px;
            }

            .hiring-block h3 {
                font-size: 1.8rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero">
        <div class="container">
            <h1>Connectez-vous spontanément avec <br> <strong>OnYVa dès aujourd'hui !</strong></h1>
            <p>OnYVa est votre application de référence pour des activités sociales spontanées. Rejoignez ou créez des
                événements dans votre zone et rencontrez de nouvelles personnes en toute simplicité !</p>
            <div>
                <a href="#" class=""><img width="180" height="60"
                        src="{{ URL::asset('assets/playstore.png') }}" alt=""></a>
                <a href="#" class=""><img width="180" height="60"
                        src="{{ URL::asset('assets/appstore.png') }}" alt=""></a>
            </div>
        </div>
    </section>

    <section class="image-gallery" style="text-align: -webkit-center;">
        <div class="container">
            <div class="col-md-6">
                <img src="{{ URL::asset('assets/accueil3.png') }}" alt="Image 1">
            </div>
        </div>
    </section>

    <section class="notifications-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="notifications-content">
                        <div class="notifications-text">
                            <h4>Notifications</h4>
                            <h2>Restez connecté avec les activités locales</h2>
                            <p>Grâce à notre système de notifications, ne manquez aucune activité spontanée dans votre
                                région. Dès qu'un événement vous est proposé, vous recevez une alerte instantanée et
                                vous pouvez participer !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="notifications-img-container" style="height: 50%; width: 50%;">
                        <img src="{{ URL::asset('assets/telecharger.png') }}" alt="Two women smiling and connecting">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4">Proposez des activités en toute simplicité<br> et connectez-vous avec des
                        personnes autour de vous</h2>
                    <p class="mb-4">Avec OnYVa, proposez facilement des activités spontanées aux personnes autour de
                        vous qui partagent vos centres d'intérêt. Qu'il s'agisse d'une sortie à la plage ou d'une soirée
                        ciné, créer du lien n’a jamais été aussi simple !</p>
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="bi bi-ticket-perforated fs-3"></i>
                            <h6 class="mt-2">Propositions d’activités</h6>
                            <small>Exemple : « Je vais à la plage demain, qui veut venir ? »</small>
                        </div>
                        <div>
                            <i class="bi bi-link-45deg fs-3"></i>
                            <h6 class="mt-2">Rejoindre</h6>
                            <small>Jusqu’à 5 personnes peuvent se regrouper pour une sortie spontanée.</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ URL::asset('assets/7.png') }}" style="height: 500px" alt="Rencontre OnYVa"
                        class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="engage-section">
        <div class="container">
            <h4 class="sub-heading">Connecter</h4>
            <h2 class="main-heading">Participez à des activités spontanées
                <br>avec des amis
            </h2>
            <p class="lead-text">Rejoignez ou créez des groupes de discussion temporaires pour des activités
                spontanées. Connectez-vous avec jusqu'à 5 participants pour une expérience unique.</p>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-chat-text"></i>
                        </div>
                        <h5>Groupes de discussion temporaires pour<br> des connexions instantanées</h5>
                        <p>Créez une discussion de groupe qui ne dure que 24 heures</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Limité à 5 participants pour
                            <br> une touche personnelle
                        </h5>
                        <p>Profitez de conversations intimes avec un petit groupe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="icon-box">
                            <i class="bi bi-trash"></i>
                        </div>
                        <h5>La suppression automatique garantit<br> la confidentialité et la fraîcheur</h5>
                        <p>Votre groupe disparaît après 24 heures pour des raisons de confidentialité.</p>
                    </div>
                </div>
            </div>

            <div class="buttons-group mt-4">
                <a href="features" class="btn btn-outline-dark">Apprendre encore plus <i
                        class="bi bi-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <section class="discover-section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-6 d-flex">
                    <div class="text-content">
                        <h2>Découvrez de nouveaux amis grâce à des activités spontanées avec OnYVa</h2>
                        <p>
                            OnYVa vous met en relation avec des personnes partageant les mêmes idées et désireuses de
                            participer à des activités spontanées dans votre région. Découvrez le plaisir de vous faire
                            de nouveaux amis tout en explorant ensemble des aventures locales !
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="image-container" style="height: 500px">
                        <img src="{{ URL::asset('assets/8.png') }}"
                            alt="Person relaxing on a sofa with plants, using a laptop">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-section">
        <div class="container">
            <h2>Rejoignez l'aventure aujourd'hui !</h2>
            <p>Téléchargez OnYVa maintenant et commencez à rencontrer de nouveaux amis grâce à des activités spontanées
                dans votre région !</p>
            <div>
                <a href="#" class=""><img width="180" height="60"
                        src="{{ URL::asset('assets/playstore.png') }}" alt=""></a>
                <a href="#" class=""><img width="180" height="60"
                        src="{{ URL::asset('assets/appstore.png') }}" alt=""></a>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="container">
            <img src="https://uploads-ssl.webflow.com/img/webflow-logo-small.svg" alt="Webflow Logo" class="webflow-logo">
            <p class="testimonial-quote">"OnYVa a transformé mes week-ends ! J'ai rencontré des gens formidables et
                créé des souvenirs inoubliables grâce à des activités spontanées."</p>
            <img src="https://i.imgur.com/your-avatar-here.jpg" alt="Alice Johnson Avatar" class="author-avatar">
            <div class="author-name">Alice Johnson</div>
            <div class="author-title">Organisateur d'événements, indépendant</div>

            <div class="testimonial-navigation">
                <span class="nav-arrow"><i class="bi bi-arrow-left"></i></span>
                <div class="nav-dots">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <span class="nav-arrow"><i class="bi bi-arrow-right"></i></span>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h4 class="team-heading">Notre équipe</h4>
            <h2 class="main-heading">Rencontrez notre équipe dévouée et innovante</h2>
            <p class="team-description">Rencontrez les talents qui animent la mission d'OnYVa : connecter les gens
                grâce à des activités spontanées. Notre équipe diversifiée est passionnée par la création d'expériences
                fluides et agréables pour nos utilisateurs.</p>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-member-card">
                        <img src="https://i.imgur.com/placeholder-alice.jpg" alt="Alice Johnson" class="member-avatar">
                        <div class="member-name">Alice Johnson</div>
                        <div class="member-role">CEO & Co-founder</div>
                        <p class="member-bio">Alice leads our vision and strategy, bringing years of experience in tech
                            startups and community building.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member-card">
                        <img src="https://i.imgur.com/placeholder-mark.jpg" alt="Mark Smith" class="member-avatar">
                        <div class="member-name">Mark Smith</div>
                        <div class="member-role">CTO & Co-founder</div>
                        <p class="member-bio">Mark is the tech wizard behind OnYVa, ensuring our platform is robust,
                            scalable, and user-friendly.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member-card">
                        <img src="https://i.imgur.com/placeholder-sara.jpg" alt="Sara Lee" class="member-avatar">
                        <div class="member-name">Sara Lee</div>
                        <div class="member-role">Head of Product Design</div>
                        <p class="member-bio">Sara crafts intuitive and beautiful user experiences, making OnYVa a joy
                            to use for everyone.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member-card">
                        <img src="https://i.imgur.com/placeholder-tom.jpg" alt="Tom Brown" class="member-avatar">
                        <div class="member-name">Tom Brown</div>
                        <div class="member-role">Community Manager</div>
                        <p class="member-bio">Tom ensures our users feel heard and valued, fostering a vibrant and
                            engaging community.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-member-card">
                        <img src="https://i.imgur.com/placeholder-emily.jpg" alt="Emily White" class="member-avatar">
                        <div class="member-name">Emily White</div>
                        <div class="member-role">Marketing Lead</div>
                        <p class="member-bio">Emily champions OnYVa's message, reaching new audiences and spreading the
                            word about spontaneous fun.</p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hiring-block team-member-card">
                        <h3>Nous embauchons !</h3>
                        <p>Rejoignez notre démarche innovante pour connecter les gens. Explorez des opportunités de
                            carrière passionnantes.</p>
                        <a href="careers" class="btn btn-dark">Postes ouverts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
