<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1619252584172-a83a949b6efd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTN8fHxlbnwwfHx8fHw%3D') no-repeat center center fixed;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(to bottom, #d3d3d3, #999999, #c5c5c5);
        }

        h5 {
            font-size: 1.8rem;
            color: #343a40;
        }

        table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        table th {
            background: linear-gradient(to bottom, #a0c4ff, #6a9bff, #3e75ff);
            color: white;
            text-align: center;
            font-weight: bold;
        }

        table td {
            text-align: center;
        }

        .btn {
            font-size: 0.9rem;
        }

        .quantidade {
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background: linear-gradient(to bottom, #ff7f50, #ff4500, #ff7f50);
            padding: 5px 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px 0;
        }

        .buttonSair {
            background: linear-gradient(to bottom, #ff7f7f, #ff4c4c, #ff0000);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="https://www.alfasoft.pt/assets/images/logo.png" alt="" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('formRegistro') }}">Formulário</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="buttonSair btn btn-danger btn-sm ml-3">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="container mt-5" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h4 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: #333;">Informações do Usuário</h4>

            <div class="card" style="border: 1px solid #ddd; border-radius: 8px;">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.2rem; font-weight: bold; color: #333;">Nome: {{ $contato->nome }}</h5>
                    <p class="card-text" style="font-size: 1rem; color: #555;"><strong>Contato:</strong> {{ $contato->contato }}</p>
                    <p class="card-text" style="font-size: 1rem; color: #555;"><strong>Email:</strong> {{ $contato->email }}</p>
                </div>
            </div>

            <div class="mt-4 d-flex justify-content-end">
                <a href="{{ route('editar', $contato->id) }}" class="btn btn-primary btn-sm ml-2">Editar</a>
                <a href="{{ route('excluir', $contato->id) }}" class="btn btn-danger btn-sm ml-2">Excluir</a>
                <a href="{{ route('adminContatos') }}" class="btn btn-secondary btn-sm ml-2">Voltar</a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
