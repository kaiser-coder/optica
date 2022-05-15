<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Optica | Login</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="{{ route('auth') }}" method="post" class="col-6 mr-auto ml-auto mt-5 card p-0">
                @csrf()
                <div class="card-header">
                    <h5 class="text-center">Login</h5>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <input type="text" placeholder="Adresse e-mail" name="email" class="form-control col-12">
                    </div>
                    <div class="row mt-2">
                        <input type="password" placeholder="Mot de passe" name="password" class="form-control col-12">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Se connecter" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
