<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyRush - Crear Cuenta</title>
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
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 flex items-center justify-center p-4">
    
    <div class="w-full max-w-6xl flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
        
        <!-- Sección Izquierda - Ilustración/Branding -->
        <div class="flex-1 text-center lg:text-left space-y-6 animate-float">
            <div class="inline-flex items-center justify-center lg:justify-start gap-3 mb-4">
                <img src="../images/logo.png" alt="KeyRush" class="h-16 w-auto">
            </div>
            
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                Únete a <br/>
                <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">KeyRush</span>
            </h1>
            
            <p class="text-lg text-gray-600 max-w-md">
                Crea tu cuenta y accede a miles de juegos, software y suscripciones al mejor precio del mercado.
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
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Crear una cuenta</h2>
                    <p class="text-gray-600">Completa el formulario para registrarte</p>
                </div>

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
                <form class="space-y-5" id="registerForm">
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Correo electrónico
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            placeholder="tu@email.com"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        >
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Contraseña
                        </label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password"
                                placeholder="••••••••"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            >
                            <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2">
                                <svg class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Validaciones de contraseña -->
                        <div class="mt-3 space-y-2">
                            <div class="flex items-center gap-2 text-sm" id="length-check">
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="10"/>
                                </svg>
                                <span class="text-gray-500">Al menos 8 caracteres</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm" id="special-check">
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="10"/>
                                </svg>
                                <span class="text-gray-500">Carácter especial o un dígito</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm" id="lowercase-check">
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="10"/>
                                </svg>
                                <span class="text-gray-500">Al menos 1 letra minúscula</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm" id="uppercase-check">
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="10"/>
                                </svg>
                                <span class="text-gray-500">Al menos 1 letra mayúscula</span>
                            </div>
                        </div>
                    </div>

                    <!-- Checkbox Términos -->
                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="terms" required class="w-4 h-4 mt-0.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="terms" class="text-sm text-gray-600 cursor-pointer">
                            Acepto el uso de cookies. 
                            <a href="#" class="text-blue-600 hover:underline">Más información</a>
                        </label>
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3.5 rounded-xl shadow-lg shadow-blue-500/30 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]"
                    >
                        Crear cuenta
                    </button>
                </form>

                <!-- Login -->
                <p class="text-center text-sm text-gray-600 mt-6">
                    ¿Ya tienes una cuenta? 
                    <a href="../vistas/login.php" class="text-blue-600 hover:text-blue-700 font-semibold">
                        Inicia sesión
                    </a>
                </p>
            </div>

            <!-- Info Extra -->
            <div class="mt-6 text-center">
                <p class="text-xs text-gray-500">
                    Al crear una cuenta, aceptas nuestros 
                    <a href="#" class="text-blue-600 hover:underline">Términos de Servicio</a> y 
                    <a href="#" class="text-blue-600 hover:underline">Política de Privacidad</a>
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

        // Password validation
        const passwordInput = document.getElementById('password');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            // At least 8 characters
            const lengthCheck = document.getElementById('length-check');
            if (password.length >= 8) {
                lengthCheck.querySelector('svg').classList.remove('text-gray-300');
                lengthCheck.querySelector('svg').classList.add('text-green-500');
                lengthCheck.querySelector('span').classList.remove('text-gray-500');
                lengthCheck.querySelector('span').classList.add('text-green-600');
            } else {
                lengthCheck.querySelector('svg').classList.remove('text-green-500');
                lengthCheck.querySelector('svg').classList.add('text-gray-300');
                lengthCheck.querySelector('span').classList.remove('text-green-600');
                lengthCheck.querySelector('span').classList.add('text-gray-500');
            }
            
            // Special character or digit
            const specialCheck = document.getElementById('special-check');
            if (/[\d\W]/.test(password)) {
                specialCheck.querySelector('svg').classList.remove('text-gray-300');
                specialCheck.querySelector('svg').classList.add('text-green-500');
                specialCheck.querySelector('span').classList.remove('text-gray-500');
                specialCheck.querySelector('span').classList.add('text-green-600');
            } else {
                specialCheck.querySelector('svg').classList.remove('text-green-500');
                specialCheck.querySelector('svg').classList.add('text-gray-300');
                specialCheck.querySelector('span').classList.remove('text-green-600');
                specialCheck.querySelector('span').classList.add('text-gray-500');
            }
            
            // At least 1 lowercase
            const lowercaseCheck = document.getElementById('lowercase-check');
            if (/[a-z]/.test(password)) {
                lowercaseCheck.querySelector('svg').classList.remove('text-gray-300');
                lowercaseCheck.querySelector('svg').classList.add('text-green-500');
                lowercaseCheck.querySelector('span').classList.remove('text-gray-500');
                lowercaseCheck.querySelector('span').classList.add('text-green-600');
            } else {
                lowercaseCheck.querySelector('svg').classList.remove('text-green-500');
                lowercaseCheck.querySelector('svg').classList.add('text-gray-300');
                lowercaseCheck.querySelector('span').classList.remove('text-green-600');
                lowercaseCheck.querySelector('span').classList.add('text-gray-500');
            }
            
            // At least 1 uppercase
            const uppercaseCheck = document.getElementById('uppercase-check');
            if (/[A-Z]/.test(password)) {
                uppercaseCheck.querySelector('svg').classList.remove('text-gray-300');
                uppercaseCheck.querySelector('svg').classList.add('text-green-500');
                uppercaseCheck.querySelector('span').classList.remove('text-gray-500');
                uppercaseCheck.querySelector('span').classList.add('text-green-600');
            } else {
                uppercaseCheck.querySelector('svg').classList.remove('text-green-500');
                uppercaseCheck.querySelector('svg').classList.add('text-gray-300');
                uppercaseCheck.querySelector('span').classList.remove('text-green-600');
                uppercaseCheck.querySelector('span').classList.add('text-gray-500');
            }
        });

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const password = document.getElementById('password').value;
            const terms = document.getElementById('terms').checked;
            
            // Validate all requirements
            const validLength = password.length >= 8;
            const hasSpecial = /[\d\W]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasUppercase = /[A-Z]/.test(password);
            
            if (validLength && hasSpecial && hasLowercase && hasUppercase && terms) {
                alert('¡Cuenta creada exitosamente!');
                // Aquí iría la lógica para crear la cuenta
            } else if (!terms) {
                alert('Debes aceptar los términos y condiciones');
            } else {
                alert('Por favor, cumple con todos los requisitos de contraseña');
            }
        });
    </script>

</body>
</html>