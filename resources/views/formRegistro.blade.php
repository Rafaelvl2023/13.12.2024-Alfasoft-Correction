<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro de Contato</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1619252584172-a83a949b6efd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTN8fHxlbnwwfHx8fHw%3D')no-repeat center center fixed;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(to bottom, #d3d3d3, #999999, #c5c5c5);
        }

        .navbar-brand img {
            height: 0px;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .container {
            margin-top: 0px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #343a40;
        }

        table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            overflow: hidden;
        }

        table th {
            background: linear-gradient(to bottom, #007bff, #7079ff);
            color: white;
            text-align: center;
            font-weight: bold;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn {
            font-size: 0.9rem;
        }

        .pagination {
            margin-top: 20px;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .pagination .page-link:hover {
            background-color: #f1f1f1;
            color: #007bff;
        }

        .button {
            background: linear-gradient(to bottom, #a0c4ff, #6a9bff, #3e75ff);
        }

        .buttonSair {
            background: linear-gradient(to bottom, #ff7f7f, #ff4c4c, #ff0000);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="https://www.alfasoft.pt/assets/images/logo.png" alt="" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminContatos') }}">Contatos</a>
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
    <div class="container col-md-4 mt-5 border border-dark rounded" style="background: url('https://wallpapers.com/images/hd/white-hd-5760-x-3840-background-xfkbx1irwnhb275r.jpg') no-repeat center center fixed; background-size: cover; padding: 20px;">
        <h4 class="text-center mt-4 mb-4">Cadastrar novo contato</h4>
        <form action="{{ route('contatos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}" required>
            </div>
            <div class="form-group">
                <label for="contato">Contato</label>
                <input type="text" class="form-control @error('contato') is-invalid @enderror" id="contato" name="contato" value="{{ old('contato') }}" required>
                <small class="form-text text-muted">Formato: XXXXX-XXXX</small>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="button btn btn-primary btn-block mb-4">Cadastrar Contato</button>
        </form>


        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertMessage">
                {{ session('status') }}
            </div>
        @elseif($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertMessage">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        @if (session('status'))
            setTimeout(function() {
                $('#alertMessage').fadeOut('slow');
            }, 5000);
        @endif
    </script>
</body>

</html>
