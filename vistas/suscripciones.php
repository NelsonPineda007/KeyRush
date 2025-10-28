<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/suscripciones.css">
    <title>KeyRush</title>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar-bg">
        <div class="py-3 px-6 border-b border-gray-800">
            <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="../index.php">
                <img src="../images/logo.png" 
                alt="KeyRush Logo" 
                class="h-20">
                </a>
            </div>
                
                <div class="flex-1 max-w-xl mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Buscar juegos, software, gift cards..." 
                               class="w-full py-2 px-4 pr-10 rounded-lg search-input">
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-[#5BC0FF]">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center space-x-6">
                    <button class="icon-btn text-white text-xl relative">
                        <i class="far fa-user"></i>
                    </button>
                    <button class="icon-btn text-white text-xl relative">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="icon-btn text-white text-xl relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="absolute -top-2 -right-2 bg-[#5BC0FF] text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="py-2 px-6">
            <div class="flex justify-center space-x-8">
                <!-- Gaming -->
                <a href="../vistas/gaming.php" class="nav-item flex items-center py-2 px-4 text-white hover:text-[#5BC0FF]">
                    <i class="fas fa-gamepad mr-2 text-[#5BC0FF]"></i>
                    <span>Gaming</span>
                </a>
                
                <!-- Software -->
                <a href="../vistas/software.php" class="nav-item flex items-center py-2 px-4 text-white hover:text-[#5BC0FF]">
                    <i class="fas fa-desktop mr-2 text-[#5BC0FF]"></i>
                    <span>Software</span>
                </a>
                
                <!-- Suscripciones -->
                <a href="" class="nav-item flex items-center py-2 px-4 text-white hover:text-[#5BC0FF]">
                    <i class="fas fa-sync-alt mr-2 text-[#5BC0FF]"></i>
                    <span>Suscripciones</span>
                </a>
                
                <!-- Tarjeta de regalo -->
                <a href="../vistas/tarjetasderegalo.php" class="nav-item flex items-center py-2 px-4 text-white hover:text-[#5BC0FF]">
                    <i class="fas fa-gift mr-2 text-[#5BC0FF]"></i>
                    <span>Tarjeta de Regalo</span>
                </a>
                
                <!-- KeyRush Plus -->
                <a href="../vistas/plus.php" class="nav-item flex items-center py-2 px-4 text-white blue-bg rounded-lg hover:text-[#5BC0FF]">
                    <i class="fas fa-crown mr-2 text-[#5BC0FF]"></i>
                    <span>KeyRush Plus</span>
                </a>
            </div>
        </div>
    </nav>

    <header>
        <br>
    </header>

    <footer class="bg-[#000000] text-white py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                
                <!-- PARA COMPRADORES -->
                <div>
                    <h3 class="font-bold text-lg mb-4">PARA COMPRADORES</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">Asistencia al comprador</a></li>
                        <li><a href="#" class="hover:text-white">Información de la empresa</a></li>
                        <li><a href="#" class="hover:text-white">Cómo comprar</a></li>
                        <li><a href="#" class="hover:text-white">Compra con KEYRUSH Plus</a></li>
                        <li><a href="#" class="hover:text-white">Guarda con KEYRUSH</a></li>
                        <li><a href="#" class="hover:text-white">Guárnica</a></li>
                        <li><a href="#" class="hover:text-white">Noticias KEYRUSH</a></li>
                    </ul>
                </div>

                <!-- PARA VENDEDORES -->
                <div>
                    <h3 class="font-bold text-lg mb-4">PARA VENDEDORES</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">Asistencia al vendedor</a></li>
                        <li><a href="#" class="hover:text-white">Cómo vender</a></li>
                        <li><a href="#" class="hover:text-white">Importación via API</a></li>
                        <li><a href="#" class="hover:text-white">Prueba KEYRUSH A6s</a></li>
                        <li><a href="#" class="hover:text-white">Programa de colaboración</a></li>
                        <li><a href="#" class="hover:text-white">Colaboraciones con creadores</a></li>
                    </ul>
                </div>

                <!-- ASISTENCIA -->
                <div>
                    <h3 class="font-bold text-lg mb-4">ASISTENCIA</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">Términos y condiciones</a></li>
                        <li><a href="#" class="hover:text-white">Política de privacidad y cookies</a></li>
                        <li><a href="#" class="hover:text-white">Ley de Servicios Digitales</a></li>
                        <li><a href="#" class="hover:text-white">Política de devoluciones</a></li>
                        <li><a href="#" class="hover:text-white">Categoría mapa</a></li>
                    </ul>
                </div>

                <!-- PRENSA -->
                <div>
                    <h3 class="font-bold text-lg mb-4">PRENSA</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">KEYRUSH News - gaming y tendencias</a></li>
                        <li><a href="#" class="hover:text-white">KEYRUSH Insights - empresas y tecnología</a></li>
                        <li><a href="#" class="hover:text-white">Comunicados de prensa</a></li>
                        <li><a href="#" class="hover:text-white">Colaboración prensa</a></li>
                        <li><a href="#" class="hover:text-white">Web corporativa</a></li>
                    </ul>
                </div>

                <!-- APP -->
                <div>
                    <h3 class="font-bold text-lg mb-4">DESCARGA LA APP</h3>
                    <p class="text-gray-300 mb-4">
                        ¡Disfruta las mejores ofertas en videojuegos allá donde vayas!
                    </p>
                    <div class="flex items-center mb-2">
                        <div class="text-yellow-400">★★★★★</div>
                        <span class="ml-2 text-gray-300">4.4 - 55,900 votos</span>
                    </div>
                </div>
            </div>

            <!-- INFORMACIÓN EMPRESAS -->
            <div class="border-t border-gray-700 mt-8 pt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="font-bold mb-2">KEYRUSH.COM Limited</h4>
                    <p class="text-gray-300 text-sm">
                        Dirección: 31/7, Tower Two, Times Square, 1<br>
                        Matheson Rd, Hong Kong<br>
                        Número de registro: 625.6421
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-2">KEYRUSH LLC</h4>
                    <p class="text-gray-300 text-sm">
                        Dirección: 107 South Capitol Street, Suite 250,<br>
                        Nevada (1971), USA<br>
                        Número de registro: 836277.62314
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-2">KEYRUSH.COM Direct E.K</h4>
                    <p class="text-gray-300 text-sm">
                        Dirección: James Wattstrasse 77 A.3, 1970s,<br>
                        Poltra Rubina<br>
                        Número de registro: 89775561
                    </p>
                </div>
            </div>

            <!-- TÉRMINOS LEGALES -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300 text-sm">
                <p>
                    El uso de la plataforma KEYRUSH.COM implica la aceptación de 
                    <a href="#" class="text-white hover:underline">Términos y Condiciones</a>. 
                    Puedes encontrar información sobre cómo procesamos tus datos personales en la 
                    <a href="#" class="text-white hover:underline">Política de Privacidad y Cookies</a>. 
                    Copyright © KEYRUSH Group. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <script src = "js/tailwind.config.js"></script>

</body>
</html>