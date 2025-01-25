<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>register</title>
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Admin Register</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{ route('register') }}">
                                @csrf
                            <div class="form-group">
                                <label for="admin_name">Nombre:</label>
                                <input type="text" class="form-control" id="admin_name" name="admin_name" value="{{ old('admin_name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="admin_email">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="admin_email" name="admin_email" value="{{ old('admin_email') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="admin_password">Contraseña:</label>
                                <input type="password" class="form-control" id="admin_password" name="admin_password" required>
                            </div>

                            <div class="form-group">
                                <label for="admin_password_confirmation">Confirmar Contraseña:</label>
                                <input type="password" class="form-control" id="admin_password_confirmation" name="admin_password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>