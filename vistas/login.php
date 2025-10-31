<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyRush - Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .spinner {
            border: 2px solid #f3f4f6;
            border-top: 2px solid #3b82f6;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 flex items-center justify-center p-4">
    
    <div class="w-full max-w-6xl flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
        
        <!-- Sección Izquierda - Ilustración/Branding -->
        <div class="flex-1 text-center lg:text-left space-y-6 animate-float">
            <div class="inline-flex items-center justify-center lg:justify-start gap-3 mb-4">
                <img src="../images/icon/icon.png" alt="KeyRush" class="h-16 w-auto">
            </div>
            
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                Bienvenido a <br/>
                <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">KeyRush</span>
            </h1>
            
            <p class="text-lg text-gray-600 max-w-md">
                Tu tienda digital de confianza. Accede a miles de juegos, software y suscripciones al mejor precio.
            </p>
            
            <div class="hidden lg:flex flex-col gap-4 pt-8">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Compra Segura</h3>
                        <p class="text-sm text-gray-600">Transacciones protegidas y verificadas</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Entrega Instantánea</h3>
                        <p class="text-sm text-gray-600">Recibe tus keys al momento</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Mejores Precios</h3>
                        <p class="text-sm text-gray-600">Ofertas exclusivas cada día</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección Derecha - Formulario -->
        <div class="w-full lg:w-auto lg:flex-shrink-0">
            <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-10 w-full lg:w-[460px] border border-gray-100">
                
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Inicia Sesión</h2>
                    <p class="text-gray-600">Accede a tu cuenta de KeyRush</p>
                </div>

                <!-- Mensaje de Error -->
                <?php if (isset($_GET['error']) && $_GET['error'] === 'credenciales_invalidas'): ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl animate-pulse">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-red-800">Error de autenticación</h3>
                            <p class="text-sm text-red-600 mt-1">El correo electrónico o la contraseña son incorrectos. Por favor, verifica tus datos.</p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Mensaje de Login Exitoso -->
                <?php if (isset($_GET['success']) && $_GET['success'] === 'login_exitoso'): ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold text-green-800">¡Inicio de sesión exitoso!</h3>
                            <p class="text-sm text-green-600 mt-1">Bienvenido de vuelta. Redirigiendo a tu cuenta...</p>
                            <div class="mt-2 flex items-center gap-2">
                                <div class="spinner"></div>
                                <span class="text-xs text-green-600">Preparando tu experiencia KeyRush</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                    // Redirigir después de 3 segundos
                    setTimeout(() => {
                        window.location.href = '../index.html';
                    }, 3000);
                </script>
                <?php endif; ?>

                <!-- Botones Sociales -->
                <div class="grid grid-cols-2 gap-3 mb-6">
                    <button type="button" class="flex items-center justify-center gap-2 px-4 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition group">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">Google</span>
                    </button>
                    
                    <button type="button" class="flex items-center justify-center gap-2 px-4 py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition">
                        <svg class="w-5 h-5 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">GitHub</span>
                    </button>
                </div>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-3 bg-white text-gray-500">O con tu email</span>
                    </div>
                </div>

                <!-- Formulario -->
                <form class="space-y-5" action="../controllers/login.controllers.php" method="POST">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Correo electrónico
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            name="email"
                            placeholder="tu@email.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            required
                        >
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Contraseña
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                required
                            >
                            <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2">
                                <svg class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-gray-600 group-hover:text-gray-900">Recordarme</span>
                        </label>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]"
                    >
                        Iniciar Sesión
                    </button>
                </form>

                <!-- Registro -->
                <p class="text-center text-sm text-gray-600 mt-6">
                    ¿No tienes una cuenta? 
                    <a href="../vistas/register.php" class="text-blue-600 hover:text-blue-700 font-semibold">
                        Regístrate gratis
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });

        // Auto-ocultar mensaje de error después de 5 segundos
        setTimeout(() => {
            const errorMessage = document.querySelector('.bg-red-50');
            if (errorMessage) {
                errorMessage.style.opacity = '0';
                errorMessage.style.transition = 'opacity 0.5s ease';
                setTimeout(() => errorMessage.remove(), 500);
            }
        }, 5000);
    </script>
</body>
</html>