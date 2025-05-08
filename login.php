<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominican Jet - Iniciar sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <style>
         
           
              /* Variables para colores y estilos consistentes */
              :root {
                --primary-color: #003366;
                --secondary-color: #005792;
                --accent-color: #BA0001;
                --accent-hover: #BA0001;
                --text-color: #333333;
                --text-light: #FFFFFF;
                --background-light: #F5F7FA;
                --box-shadow: 0 8px 20px rgba(0, 33, 74, 0.15);
                --transition: all 0.3s ease;
            }
            
            /* Reset y estilos generales */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            
            .container {
                max-width: 600px;
                margin: 50px auto;
                padding: 30px;
                background: rgba(255, 255, 255, 0.85);
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
                text-align: center;
            }
            
            .form-group {
                margin-bottom: 15px;
                text-align: left;
            }
            
            label {
                font-weight: bold;
                color: #00214A;
            }
            
            input, select, button {
                width: 100%;
                padding: 12px;
                margin-top: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 16px;
            }
            
            input, select {
                background: rgba(255, 255, 255, 0.9);
            }
            
            button {
                background-color: #BA0001;
                color: white;
                border: none;
                cursor: pointer;
                transition: transform 0.2s, background-color 0.3s;
            }
            
            button:hover {
                background-color: #8a0000;
                transform: scale(1.05);
            }
    
            .tabs {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }
            
            .tab {
                padding: 12px 30px;
                background-color: rgba(0, 33, 74, 0.7);
                color: white;
                cursor: pointer;
                border-radius: 5px 5px 0 0;
                margin: 0 5px;
                font-weight: bold;
                transition: background-color 0.3s;
            }
            
            .tab.active {
                background-color: #BA0001;
            }
            
            .form-container {
                display: none;
            }
            
            .form-container.active {
                display: block;
            }
            
            .forgot-password {
                text-align: right;
                margin: 10px 0;
            }
            
            .forgot-password a {
                color: #00214A;
                text-decoration: none;
                font-size: 14px;
            }
            
            .forgot-password a:hover {
                text-decoration: underline;
            }
            
            .benefits {
                margin-top: 30px;
                padding-top: 20px;
                border-top: 1px solid #ccc;
            }
            
            .benefits h3 {
                color: #00214A;
                margin-bottom: 10px;
            }
            
            .benefits ul {
                color: #00214A;
                text-align: left;
                padding-left: 20px;
            }
            
            .benefits li {
                margin-bottom: 8px;
            }
            
            .logo {
                height: 60px;
                margin-bottom: 20px;
            }
            
            .error-message {
                color: #BA0001;
                font-size: 14px;
                margin-top: 5px;
                display: none;
            }
            
            .success-message {
                color: #006400;
                font-size: 16px;
                margin-top: 15px;
                padding: 10px;
                background-color: rgba(0, 100, 0, 0.1);
                border-radius: 5px;
                display: none;
            }
            
         /* Footer - Versi�n optimizada */
    footer {
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        color: white;
        padding: 50px 0 20px;
        margin-top: 40px;
        position: relative;
        width: 100%;
        box-sizing: border-box;
        clear: both;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
    }
    
    .footer-column {
        display: flex;
        flex-direction: column;
    }
    
    .footer-column h3 {
        font-size: 18px;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
        font-weight: 600;
        color: white;
    }
    
    .footer-column h3:after {
        content: '';
        position: absolute;
        width: 40px;
        height: 2px;
        background: var(--accent-color);
        bottom: 0;
        left: 0;
    }
    
    .footer-column p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 20px;
        font-size: 14px;
    }
    
    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-column ul li {
        margin-bottom: 10px;
        padding: 0;
    }
    
    .footer-column ul li a {
        color: rgba(255, 255, 255, 0.8);
        transition: var(--transition);
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
    }
    
    .footer-column ul li a:hover {
        color: var(--accent-color);
        padding-left: 5px;
    }
    
    .footer-column ul li i {
        margin-right: 8px;
        color: var(--accent-color);
        width: 16px;
        display: inline-block;
        text-align: center;
    }
    
    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    
    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: var(--transition);
    }
    
    .social-icons a i {
        font-size: 16px;
        color: white;
    }
    
    .social-icons a:hover {
        background: var(--accent-color);
        transform: translateY(-3px);
    }
    
    .social-icons a:hover i {
        color: var(--primary-color);
    }
    
    .footer-bottom {
        text-align: center;
        padding-top: 40px;
        margin-top: 40px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }
    
    /* Responsive Footer */
    @media (max-width: 768px) {
        footer {
            padding: 40px 0 20px;
        }
        
        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .footer-column {
            padding: 0 10px;
        }
        
        .footer-column h3 {
            font-size: 16px;
        }
        
        .social-icons {
            justify-content: center;
        }
        
        .footer-bottom {
            margin-top: 30px;
            padding-top: 30px;
        }
    }
    
            .button-secondary {
                background-color: #00214A;
                margin-top: 10px;
            }
            
            .button-secondary:hover {
                background-color: #001633;
            }
    
             /* Reset y estilos generales */
             * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Montserrat', sans-serif;
                color: var(--text-color);
                background-color: var(--background-light);
                line-height: 1.6;
            }
                   
            h1 {
                font-weight: 600;
                line-height: 1.3;
            }
          
      
    
         
    a {
                text-decoration: none;
                color: inherit;
            }
            
            img {
                max-width: 100%;
                display: block;
            }
            
            /* Header y navegaci�n */
            header {
                background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                padding: 15px 0;
                position: relative;
                z-index: 100;
            }
            
            .header-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }
            
            .logo {
                display: flex;
                align-items: center;
            }
            
            .logo h1 {
                color: var(--text-light);
                font-size: 30px;
                font-weight: 700;
                margin-left: 10px;
            }
            
            .logo-icon {
                font-size: 32px;
                color: var(--accent-color);
            }
            
              /* Responsive */
              @media (max-width: 768px) {
                .header-container {
                    flex-direction: column;
                    padding: 15px;
                }
                
                .logo {
                    margin-bottom: 15px;
                }
            }
        </style>
</head>
<body>
    
        <header >
            <div class="header-container">
                <div class="logo">
                    
                    <h1>Dominican Jet</h1>
                </div>
            </header>
    <div class="container">
        <img src="logo.png" href="login2.html" width="150" height="150">
        
        <div class="tabs">
            <div class="tab active" onclick="showTab('login')">Iniciar sesión</div>
            <div class="tab" onclick="showTab('register')">Registrarse</div>
        </div>
        

<!-- Formulario de Inicio de Sesión -->
<div id="login-form" class="form-container active">
    <form id="loginForm" method="post" action="login.php">
        <div class="form-group">
            <label for="login-email">Correo Electrónico</label>
            <input type="email" id="login-email" name="correo" placeholder="ejemplo@correo.com" required>
            <div class="error-message" id="login-email-error">Por favor ingrese un correo electrónico válido.</div>
        </div>
        
        <div class="form-group">
            <label for="login-password">Contraseña</label>
            <input type="password" id="login-password" name="contraseña" placeholder="Contraseña" required>
            <div class="error-message" id="login-password-error">La contraseña debe tener al menos 6 caracteres.</div>
        </div>
        
        <button type="submit">Iniciar sesión</button>
        <button type="button" class="button-secondary" onclick="window.location.href='paginaPrincipal (1).html'">Continuar como Invitado</button>
    </form>
</div>

        

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar inicio de sesión
    if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
        $correo = $_POST['correo'];
        $password = $_POST['contraseña'];

        $stmt = $conn->prepare("SELECT contraseña FROM login WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            echo "<script>alert('El usuario no existe.'); window.history.back();</script>";
        } else {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['contraseña'])) {
                echo "<script>alert('Inicio de sesión exitoso.'); window.location.href='paginaPrincipal (1).html';</script>";
            } else {
                echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
            }
        }
        
        $stmt->close();
    }


    // Validar registro
    elseif (
        isset($_POST['nombre_completo']) && 
        isset($_POST['correo']) &&
        isset($_POST['contraseña']) &&
        isset($_POST['confircontraseña']) &&
        isset($_POST['telefono'])
    ) {
        $nombre = $_POST['nombre_completo'];
        $correo = $_POST['correo'];
        $password = $_POST['contraseña'];
        $confirm = $_POST['confircontraseña'];
        $telefono = $_POST['telefono'];

        if ($password !== $confirm) {
            echo "Las contraseñas no coinciden.";
            exit;
        }

        $check = $conn->prepare("SELECT correo FROM login WHERE correo = ?");
        $check->bind_param("s", $correo);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "El correo ya está registrado.";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO login (nombre_completo, correo, contraseña, confircontraseña, telefono) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nombre, $correo, $hashed, $hashed, $telefono);

            if ($stmt->execute()) {
                echo "success";
            } else {
                echo "Error al registrar.";
            }
            $stmt->close();
        }

        $check->close();
    }

    $conn->close();
}
?>

        <!-- Formulario de Registro -->
        <div id="register-form" class="form-container">
        <form method="post" action="login.php">

            <form id="registerForm">
                <div class="form-group">
                    <label for="register-name">Nombre Completo</label>
                    <input type="text" id="register-name" placeholder="Nombre Completo" name="nombre_completo" required>
                    <div class="error-message" id="register-name-error">Por favor ingrese su nombre completo</div>
                </div>
                
                <div class="form-group">
                    <label for="register-email">Correo Electrónico</label>
                    <input type="email" id="register-email" placeholder="ejemplo@correo.com"  name="correo" required>
                    <div class="error-message" id="register-email-error">Por favor ingrese un correo electrónico válido.</div>
                </div>
                
                <div class="form-group">
                    <label for="register-password">Contraseña</label>
                    <input type="password" id="register-password" placeholder="Mínimo 6 caracteres"  name="contraseña" required>
                    <div class="error-message" id="register-password-error">La contraseña debe tener al menos 6 caracteres.</div>
                </div>
                
                <div class="form-group">
                    <label for="register-confirm-password">Confirmar Contraseña</label>
                    <input type="password" id="register-confirm-password" placeholder="Confirmar Contraseña"  name="confircontraseña" required>
                    <div class="error-message" id="register-confirm-password-error">Las contraseñas no coinciden.</div>
                </div>
                
                <div class="form-group">
                    <label for="register-phone">Número de Teléfono</label>
                    <input type="tel" id="register-phone" name="telefono" required>
                    <div class="error-message" id="register-phone-error">Por favor ingrese un número de teléfono válido.</div>
                </div>
                
                <button type="submit" href="paginaPrincipal (1)">Crear Cuenta</button>
            </form>
            
            <div class="success-message" id="register-success">
                ¡Cuenta creada con éxito! Ya puedes iniciar sesión con tus credenciales.
            </div>
        </div>
        
        <!-- Beneficios de tener una cuenta -->
        <div class="benefits">
            <h3>Beneficios de tener una cuenta en Dominican Jet</h3>
            <ul>
                <li>Gestiona tus reservas desde un solo lugar</li>
                <li>Acumula millas y cánjalas por vuelos gratis.</li>
                <li>Check-in prioritario en aeropuertos</li>
                <li>Recibe ofertas y promociones exclusivas</li>
                <li>Guarda tus preferencias de viaje</li>
            </ul>
        </div>
    </div>
   
    <script>
        // Mostrar y cambiar entre pesta�as
        function showTab(tabId) {
            // Ocultar todos los formularios
            document.querySelectorAll('.form-container').forEach(form => {
                form.classList.remove('active');
            });
            
            // Quitar la clase activa de todas las pesta�as
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Mostrar el formulario seleccionado
            document.getElementById(tabId + '-form').classList.add('active');
            
            // Activar la pesta�a seleccionada
            event.target.classList.add('active');
        }
        
        // Validaci�n formulario de inicio de sesi�n
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let valid = true;
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;
            
            // Validar correo
            if (!validateEmail(email)) {
                document.getElementById('login-email-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('login-email-error').style.display = 'none';
            }
            
            // Validar contrase�a
            if (password.length < 6) {
                document.getElementById('login-password-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('login-password-error').style.display = 'none';
            }
            
            if (valid) {
                // Aqu� ir�a el c�digo para enviar los datos al servidor
                // Por ahora, simulamos un inicio de sesi�n exitoso redirigiendo a la p�gina de reserva
                window.location.href = 'paginaPrincipal (1).html';
            }
        });
        
        // Validaci�n formulario de registro
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let valid = true;
            const name = document.getElementById('register-name').value;
            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('register-confirm-password').value;
            const phone = document.getElementById('register-phone').value;
            
            // Validar nombre
            if (name.trim() === '') {
                document.getElementById('register-name-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('register-name-error').style.display = 'none';
            }
            
            // Validar correo
            if (!validateEmail(email)) {
                document.getElementById('register-email-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('register-email-error').style.display = 'none';
            }
            
            // Validar contrase�a
            if (password.length < 6) {
                document.getElementById('register-password-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('register-password-error').style.display = 'none';
            }
            
            // Validar confirmaci�n de contrase�a
            if (password !== confirmPassword) {
                document.getElementById('register-confirm-password-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('register-confirm-password-error').style.display = 'none';
            }
            
            // Validar tel�fono (validaci�n simple)
            if (phone.trim() === '') {
                document.getElementById('register-phone-error').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('register-phone-error').style.display = 'none';
            }
            
            if (valid) {
                // Aqu� ir�a el c�digo para enviar los datos al servidor
                // Por ahora, mostramos un mensaje de �xito
                document.getElementById('register-success').style.display = 'block';
                document.getElementById('registerForm').reset();
                
                // Despu�s de 3 segundos, cambiamos a la pesta�a de inicio de sesi�n
                setTimeout(function() {
                    document.getElementById('register-success').style.display = 'none';
                    showTab('login');
                    document.querySelectorAll('.tab')[0].classList.add('active');
                    document.querySelectorAll('.tab')[1].classList.remove('active');
                }, 3000);
            }
        });
        
        // Funci�n para validar formato de correo electr�nico
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>

<footer>
    <div class="footer-content">
        <div class="footer-column">
            <h3>Dominican Jet</h3>
            <p>La aerolínea líder de República Dominicana, comprometida con la excelencia en servicio y seguridad aérea.</p>
            <div class="social-icons">
                <a href="https://www.instagram.com/dominican_jet"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Enlaces rápidos</h3>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#destinos">Destinos</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#reservar">Reservar</a></li>
                <li><a href="#">Ofertas</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Información</h3>
            <ul>
                <li><a href="#">Sobre nosotros</a></li>
                <li><a href="#">Política de equipaje</a></li>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>                    
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contacto</h3>
            <ul>
                                <li><i class="fas fa-map-marker-alt"></i> Blue mall piso 1 </li>
                                <li><i class="fas fa-phone"></i> +1 (829) 610-1259</li>
                                <li><i class="fas fa-envelope"></i> DominicanJet18@gmail.com.</li>
                            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Aerolínea Dominican Jet - Todos los derechos reservados.
</body>
</html>