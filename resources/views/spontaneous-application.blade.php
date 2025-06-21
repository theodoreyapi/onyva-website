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

        .spontaneous-application-section {
            padding: 80px 0;
            background-color: #ffffff;
        }

        .application-form-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }

        .application-form-card h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .application-form-card p {
            font-size: 1.1rem;
            color: #555;
            text-align: center;
            margin-bottom: 40px;
        }

        .application-form-card .form-label {
            font-weight: 600;
            color: #333;
        }

        .application-form-card .form-control,
        .application-form-card .form-select {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ddd;
        }

        .application-form-card .form-control:focus,
        .application-form-card .form-select:focus {
            border-color: #e6ccff;
            box-shadow: 0 0 0 0.25rem rgba(87, 28, 135, 0.25);
        }

        .application-form-card .btn-submit {
            background-color: #571c87;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .application-form-card .btn-submit:hover {
            background-color: #4a1773;
        }

        .back-link {
            margin-top: 30px;
            text-align: center;
        }

        .back-link a {
            color: #571c87;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #4a1773;
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

            .application-form-card h1 {
                font-size: 2rem;
            }

            .application-form-card p {
                font-size: 1rem;
            }

            .application-form-card .btn-submit {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="spontaneous-application-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="application-form-card animate__animated animate__fadeInUp">
                        <h1>Candidature Spontanée</h1>
                        <p>Vous êtes passionné(e) par notre mission et pensez pouvoir apporter une valeur ajoutée à OnYVa,
                            même si vous ne trouvez pas d'offre correspondant à votre profil ? Envoyez-nous votre
                            candidature !</p>

                        <form>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Votre prénom" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="votre.email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Téléphone (optionnel)</label>
                                <input type="tel" class="form-control" id="phone" placeholder="+33 6 12 34 56 78">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Domaine d'intérêt (optionnel)</label>
                                <input type="text" class="form-control" id="position"
                                    placeholder="Ex: Développement, Marketing, UX/UI...">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Votre message / Lettre de motivation</label>
                                <textarea class="form-control" id="message" rows="6"
                                    placeholder="Expliquez pourquoi vous souhaitez rejoindre OnYVa et ce que vous pouvez nous apporter..." required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="cvUpload" class="form-label">Télécharger votre CV (PDF, max 5MB)</label>
                                <input class="form-control" type="file" id="cvUpload" accept=".pdf" required>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    J'accepte que mes données soient traitées conformément à la <a href="#">Politique
                                        de Confidentialité</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-submit">Envoyer ma Candidature Spontanée</button>
                        </form>
                    </div>
                    <div class="back-link">
                        <a href="careers"><i class="bi bi-arrow-left"></i> Retour à la page Carrières</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
