<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Préinscription – OnYVa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #571c87, #571c874d);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Fredoka', sans-serif;
            overflow: hidden;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.98);
            border-radius: 16px;
            padding: 40px;
            max-width: 500px;
            width: 100%;
            color: #333;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-in-out;
        }

        h2 {
            color: #571c87;
            font-weight: 700;
        }

        .btn-purple {
            background-color: #571c87;
            border: none;
            color: white;
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .btn-purple:hover {
            background-color: #42146c;
            transform: translateY(-2px);
        }

        .form-control:focus {
            border-color: #571c87;
            box-shadow: 0 0 0 0.2rem rgba(87, 28, 135, 0.25);
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <div class="form-container animate__animated animate__fadeInUp">
        <h2 class="text-center mb-4">🚀 OnYVa arrive bientôt</h2>
        <p class="text-center">Laissez-nous vos coordonnées pour être informé dès le lancement officiel.</p>

        <form id="betaForm">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="telephone" placeholder="Votre téléphone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="exemple@mail.com" required>
            </div>
            <button type="submit" id="submitBtn" class="btn btn-purple w-100 mt-3">M'inscrire</button>
        </form>
        <div id="message" class="mt-3"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#betaForm').on('submit', function(e) {
            e.preventDefault();

            $('#message').html('');
            $('#submitBtn').prop('disabled', true).html("⏳ Enregistrement...");

            const data = {
                nom: $('#nom').val(),
                telephone: $('#telephone').val(),
                email: $('#email').val()
            };

            $.ajax({
                url: 'http://onyva.sodalite-consulting.com/api/betas',
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
                success: function(response) {
                    $('#message').html(
                    '<div class="alert alert-success">✅ Inscription réussie !</div>');
                    $('#betaForm')[0].reset();
                },
                error: function(xhr) {
                    let msg = '❌ Erreur lors de l’inscription.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        msg += '<br>' + xhr.responseJSON.message;
                    }
                    $('#message').html('<div class="alert alert-danger">' + msg + '</div>');
                },
                complete: function() {
                    $('#submitBtn').prop('disabled', false).html("M'inscrire");
                }
            });
        });
    </script>

</body>

</html>
