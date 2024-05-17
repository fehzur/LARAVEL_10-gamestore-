<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page non trouvée</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .center-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border-bottom: none;
            text-align:center;
        }

        .card-body {
            padding: 30px;
        }

        .btn-primary {
            border-color: #007bff;
            text-decoration:none;
        }

        .btn-primary:hover {
            border-color: #004d99;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">404 - Page non trouvée</div>

                        <div class="card-body">
                            <p>Désolé, la page que vous avez demandée n'existe pas.</p>
                            <a href="{{ route('connexion') }}" class="btn btn-primary">Retourner à l'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>