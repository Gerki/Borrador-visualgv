<?php
//This file should include:
//✅ A signup form with fields for email, password, and confirm password.
//✅ Basic HTML5 form validation.
//✅ A POST request to LandingPage_signupAction.php, which will handle form submission.
//✅ Basic Bootstrap styling (optional).
Explanation:

    Basic HTML Structure

        Uses Bootstrap for styling.

        Centers the form using a card layout.

    Signup Form

        Includes fields for email, password, and confirm password.

        Uses HTML5 validation (required, minlength).

        Submits data to LandingPage_signupAction.php via POST.

    Session Handling

        session_start(); is added at the top to later manage user sessions.

    Navigation Links

        A link to the login page for existing users.

session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - SaaS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Crear Cuenta</h3>
                </div>
                <div class="card-body">
                    <!-- Signup Form -->
                    <form action="LandingPage_signupAction.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required minlength="6">
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    ¿Ya tienes cuenta? <a href="landingPage_login.php">Inicia sesión aquí</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
