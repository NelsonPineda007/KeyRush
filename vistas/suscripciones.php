<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/suscripciones1.css">
    <title>KeyRush</title>
</head>
<body>

     <!-- navbar -->
   <nav class="navbar-bg sticky top-0 z-50">
        <div class="py-4 px-6 border-b border-gray-800/50">
            <div class="max-w-7xl mx-auto flex items-center justify-between gap-8">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="../index.html" class="block transition-transform hover:scale-105">
                        <img src="../images/logo.png" alt="KeyRush" class="h-16">
                    </a>
                </div>

                <!-- Búsqueda -->
                <div class="flex-1 max-w-2xl">
                    <div class="relative group">
                        <input type="text" placeholder="Buscar juegos, software, suscripciones..." class="w-full py-3 px-5 pr-12 rounded-xl search-input text-sm">
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#5BC0FF] transition-colors">
                            <i class="fas fa-search text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Iconos de acción -->
                <div class="flex items-center gap-6">
                    <button class="icon-btn text-white">
                        <i class="far fa-user text-2xl"></i>
                        <span class="icon-label">Cuenta</span>
                    </button>
                    <button class="icon-btn text-white">
                        <i class="far fa-heart text-2xl"></i>
                        <span class="icon-label">Favoritos</span>
                    </button>
                    <button class="icon-btn text-white">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                        <span class="cart-badge absolute top-0 right-0 bg-[#5BC0FF] text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold">3</span>
                        <span class="icon-label">Carrito</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Navegación de categorías -->
        <div class="py-3 px-6">
            <div class="max-w-7xl mx-auto flex justify-center gap-2">
                <a href="" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg hover:bg-white/5">
                    <i class="fas fa-gamepad mr-2 text-[#5BC0FF]"></i>
                    Gaming
                </a>
                <a href="../vistas/software.php" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg hover:bg-white/5">
                    <i class="fas fa-desktop mr-2 text-[#5BC0FF]"></i>
                    Software
                </a>
                <a href="../vistas/suscripciones.php" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg hover:bg-white/5">
                    <i class="fas fa-sync-alt mr-2 text-[#5BC0FF]"></i>
                    Suscripciones
                </a>
                <a href="../vistas/tarjetasderegalo.php" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg hover:bg-white/5">
                    <i class="fas fa-gift mr-2 text-[#5BC0FF]"></i>
                    Gift Cards
                </a>
                <a href="../vistas/plus.php" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg bg-gradient-to-r from-[#5BC0FF]/20 to-transparent border border-[#5BC0FF]/30">
                    <i class="fas fa-crown mr-2 text-[#5BC0FF]"></i>
                    KeyRush Plus
                </a>
            </div>
        </div>
    </nav>

    <header>
        <br>
    </header>

    <!-- Footer -->
    <footer class="bg-gradient-to-b from-[#0a0a1a] to-black text-white py-16 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">
                <!-- Columna 1 -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-[#5BC0FF]">PARA COMPRADORES</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Asistencia al comprador</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Información de la empresa</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Cómo comprar</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Compra con KEYRUSH Plus</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Garantía</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Noticias KEYRUSH</a></li>
                    </ul>
                </div>

                <!-- Columna 2 -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-[#5BC0FF]">PARA VENDEDORES</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Asistencia al vendedor</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Cómo vender</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Importación vía API</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Programa de afiliados</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Colaboraciones</a></li>
                    </ul>
                </div>

                <!-- Columna 3 -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-[#5BC0FF]">ASISTENCIA</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Términos y condiciones</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Política de privacidad</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Política de cookies</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Política de devoluciones</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Mapa del sitio</a></li>
                    </ul>
                </div>

                <!-- Columna 4 -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-[#5BC0FF]">PRENSA</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">KEYRUSH News</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">KEYRUSH Insights</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Comunicados</a></li>
                        <li><a href="#" class="hover:text-[#5BC0FF] transition-colors">Web corporativa</a></li>
                    </ul>
                </div>

                <!-- Columna 5 -->
                <div>
                    <h3 class="font-bold text-lg mb-6 text-[#5BC0FF]">DESCARGA LA APP</h3>
                    <p class="text-gray-300 mb-4 text-sm">
                        ¡Disfruta las mejores ofertas en videojuegos donde quieras!
                    </p>
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-lg">★★★★★</div>
                        <span class="ml-2 text-gray-400 text-sm">4.4 - 55,900 votos</span>
                    </div>
                    <div class="flex gap-3">
                        <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-colors text-sm">
                            <i class="fab fa-apple text-xl"></i>
                            <span>iOS</span>
                        </a>
                        <a href="#" class="flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-colors text-sm">
                            <i class="fab fa-google-play text-xl"></i>
                            <span>Android</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Información empresarial -->
            <div class="border-t border-gray-800 pt-12 pb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <h4 class="font-bold mb-3 text-sm">KEYRUSH.COM Limited</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">
                            31/7, Tower Two, Times Square, 1<br>
                            Matheson Rd, Hong Kong<br>
                            Registro: 625.6421
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-3 text-sm">KEYRUSH LLC</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">
                            107 South Capitol Street, Suite 250<br>
                            Nevada (1971), USA<br>
                            Registro: 836277.62314
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-3 text-sm">KEYRUSH.COM Direct E.K</h4>
                        <p class="text-gray-400 text-xs leading-relaxed">
                            James Wattstrasse 77 A.3, 1970s<br>
                            Poltra Rubina<br>
                            Registro: 89775561
                        </p>
                    </div>
                </div>

                <!-- Redes sociales -->
                <div class="flex justify-center gap-6 mb-8">
                    <a href="#" class="text-gray-400 hover:text-[#5BC0FF] transition-colors text-2xl">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#5BC0FF] transition-colors text-2xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#5BC0FF] transition-colors text-2xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#5BC0FF] transition-colors text-2xl">
                        <i class="fab fa-discord"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#5BC0FF] transition-colors text-2xl">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                <!-- Métodos de pago -->
                <div class="text-center mb-8">
                    <h4 class="text-sm font-bold mb-4 text-gray-400">MÉTODOS DE PAGO ACEPTADOS</h4>
                    <div class="flex justify-center gap-4 flex-wrap">
                        <div class="bg-white/10 px-4 py-2 rounded-lg">
                            <i class="fab fa-cc-visa text-2xl"></i>
                        </div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg">
                            <i class="fab fa-cc-mastercard text-2xl"></i>
                        </div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg">
                            <i class="fab fa-cc-paypal text-2xl"></i>
                        </div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg">
                            <i class="fab fa-bitcoin text-2xl"></i>
                        </div>
                        <div class="bg-white/10 px-4 py-2 rounded-lg">
                            <i class="fas fa-wallet text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="border-t border-gray-800 pt-8 text-center">
                    <p class="text-gray-400 text-xs leading-relaxed max-w-4xl mx-auto">
                        El uso de la plataforma KEYRUSH.COM implica la aceptación de nuestros <a href="#" class="text-[#5BC0FF] hover:underline">Términos y Condiciones</a>. Puedes encontrar información sobre cómo procesamos tus datos personales en la <a href="#" class="text-[#5BC0FF] hover:underline">Política de Privacidad y Cookies</a>.
                    </p>
                    <p class="text-gray-500 text-xs mt-4">
                        © 2025 KEYRUSH Group. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src = "js/tailwind.config.js"></script>

</body>
</html>