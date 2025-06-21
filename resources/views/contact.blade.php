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

        /* Specific styles for the Contact page hero */
        .contact-hero {
            background-color: #e6ccff;
            padding: 100px 0 60px;
            text-align: center;
        }

        .contact-hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1e1e1e;
        }

        .contact-hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 50px;
        }

        .contact-info {
            background-color: #f2e6fb;
            /* Light purple background */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #571c87;
            /* Purple heading */
            margin-bottom: 25px;
            text-align: center;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-info-item i {
            font-size: 1.8rem;
            color: #571c87;
            margin-right: 15px;
            width: 30px;
            /* Fixed width for icons */
            text-align: center;
        }

        .contact-info-item p {
            margin-bottom: 0;
            font-size: 1.1rem;
            color: #333;
        }

        .contact-info-item a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-info-item a:hover {
            color: #571c87;
        }

        .contact-form-container {
            background-color: #f8f9fa;
            /* Light grey background */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .contact-form-container h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        .contact-form .form-label {
            font-weight: 500;
            color: #555;
        }

        .contact-form .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .contact-form .form-control:focus {
            border-color: #571c87;
            box-shadow: 0 0 0 0.25rem rgba(87, 28, 135, 0.25);
        }

        .contact-form .btn-primary-custom {
            background-color: #e6ccff;
            /* Light purple button */
            color: #1e1e1e;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .contact-form .btn-primary-custom:hover {
            background-color: #d1b3f0;
        }

        /* Map section */
        .map-section {
            padding: 60px 0;
            background-color: #e6ccff;
            /* Consistent background color */
            text-align: center;
        }

        .map-section h2 {
            font-size: 2.2rem;
            font-weight: bold;
            color: #1e1e1e;
            margin-bottom: 30px;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 0 auto;
        }

        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }

        /* Re-use existing global styles for footer */
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

            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-section h2 {
                font-size: 2rem;
            }

            .contact-info,
            .contact-form-container {
                padding: 30px;
            }
        }

        @media (max-width: 767.98px) {
            .contact-hero h1 {
                font-size: 2rem;
            }

            .contact-hero p {
                font-size: 1rem;
            }

            .contact-section h2 {
                font-size: 1.8rem;
            }

            .contact-info-item {
                flex-direction: column;
                text-align: center;
            }

            .contact-info-item i {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .map-container iframe {
                height: 300px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="contact-hero">
        <div class="container">
            <h1>Contactez-nous</h1>
            <p>Nous sommes là pour vous aider ! Que vous ayez des questions, des commentaires ou que vous souhaitiez
                signaler un problème, n'hésitez pas à nous contacter.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <h2>Nous sommes à votre écoute</h2>
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="contact-info">
                        <h3>Informations de Contact</h3>
                        <div class="contact-info-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>123 Rue de l'Spontanéité, 75001 Paris, France</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-envelope-fill"></i>
                            <p><a href="mailto:contact@onyva.com">contact@onyva.com</a></p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-phone-fill"></i>
                            <p><a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-clock-fill"></i>
                            <p>Lun - Ven : 9h00 - 17h00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form-container">
                        <h3>Envoyez-nous un Message</h3>
                        <form class="contact-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom Complet</label>
                                <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet</label>
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Sujet de votre message">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Votre Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-custom w-100">Envoyer le Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <div class="container">
            <h2>Retrouvez-nous sur la Carte</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991627443657!2d2.292292615674068!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e296848126b%3A0xc3f58a361fb559!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1678999999999!5m2!1sen!2sfr"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
