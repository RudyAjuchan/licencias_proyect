<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('css/mdb-icon-font.min.css') }}">

    <!-- Main css -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registro</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="direccion" id="direccion" placeholder="Dirección"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="telefono" id="telefono" placeholder="Telefono"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Correo"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="nit" id="nit" placeholder="Nit"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="usuario" id="usuario" placeholder="Usuario"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>                                                        
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('img/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">Ya estoy registrado</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>