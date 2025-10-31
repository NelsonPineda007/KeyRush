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
    <link rel="stylesheet" href="../css/giftcard.css">
            <style>
        .btn-gradient {
            background: linear-gradient(135deg, #5bc0ff 0, #4a9fd9 100%);
        }
        .hover\:btn-gradient:hover {
            background: linear-gradient(135deg, #6bcaff 0, #5aafdf 100%);
        }
    </style>
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
                    <a href="perfil.html">
                        <button class="icon-btn text-white">
                            <i class="far fa-user text-2xl"></i>
                            <span class="icon-label">Cuenta</span>
                        </button>
                    </a>
                    <a href="perfil.html#favorites">
                        <button class="icon-btn text-white">
                            <i class="far fa-heart text-2xl"></i>
                            <span class="icon-label">Favoritos</span>
                        </button>
                    </a>
                    <button class="icon-btn text-white">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                        <span
                            class="cart-badge absolute top-0 right-0 bg-[#5BC0FF] text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold">3</span>
                        <span class="icon-label">Carrito</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Navegación de categorías -->
        <div class="py-3 px-6">
            <div class="max-w-7xl mx-auto flex justify-center gap-2">
                <a href="../vistas/gaming.php" class="nav-item flex items-center py-2 px-5 text-white text-sm font-medium rounded-lg hover:bg-white/5">
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
         <!-- Página de resultados de búsqueda -->
    <div id="searchResultsPage" class="search-results-page">
        <div class="max-w-7xl mx-auto px-6 py-8">

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Filtros -->
                <div class="lg:col-span-1">
                    <div class="filter-section bg-white rounded-xl p-5 shadow-sm mb-5">
                        <div class="filter-title text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">Plataforma</div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="platform-steam" checked>
                            <label for="platform-steam">Steam</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">12</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="platform-epic">
                            <label for="platform-epic">Epic Games</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">5</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="platform-battlenet">
                            <label for="platform-battlenet">Battle.net</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">3</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="platform-rockstar">
                            <label for="platform-rockstar">Rockstar</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">2</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="platform-origin">
                            <label for="platform-origin">Origin</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">2</span>
                        </div>
                    </div>

                    <div class="filter-section bg-white rounded-xl p-5 shadow-sm mb-5">
                        <div class="filter-title text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">Tipo de Producto</div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="type-key" checked>
                            <label for="type-key">Key</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">15</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="type-account">
                            <label for="type-account">Cuenta</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">6</span>
                        </div>
                        <div class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" id="type-subscription">
                            <label for="type-subscription">Suscripción</label>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">3</span>
                        </div>
                    </div>

                    <div class="filter-section bg-white rounded-xl p-5 shadow-sm mb-5">
                        <h3 class="filter-title text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">Región</h3>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="global">
                            <span>Global</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">247</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="europe">
                            <span>Europa</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">52</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="usa">
                            <span>Estados Unidos</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">97</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="latam">
                            <span>Latinoamérica</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">45</span>
                        </label>
                    </div>

                    <div class="filter-section bg-white rounded-xl p-5 shadow-sm mb-5">
                        <h3 class="filter-title text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">Tipo de Licencia</h3>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="key">
                            <span>Clave/Key</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">208</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="account">
                            <span>Cuenta</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">51</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="gift">
                            <span>Gift Card</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">20</span>
                        </label>
                        <label class="filter-option flex items-center py-2 cursor-pointer transition-all duration-200 hover:text-custom-blue">
                            <input type="checkbox" class="filter-checkbox w-4 h-4 mr-2.5 cursor-pointer accent-custom-blue" value="subscription">
                            <span>Suscripción</span>
                            <span class="filter-count ml-auto text-xs text-gray-500 font-medium">15</span>
                        </label>
                    </div>

                    <div class="filter-section bg-white rounded-xl p-5 shadow-sm mb-5">
                        <div class="filter-title text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">Precio</div>
                        <div class="space-y-4">
                            <div class="flex gap-2">
                                <input type="number" class="price-input w-full px-3 py-2 border border-gray-300 rounded-lg text-sm transition-all duration-200 focus:outline-none focus:border-custom-blue focus:ring-2 focus:ring-blue-200" placeholder="Mínimo" value="0">
                                <input type="number" class="price-input w-full px-3 py-2 border border-gray-300 rounded-lg text-sm transition-all duration-200 focus:outline-none focus:border-custom-blue focus:ring-2 focus:ring-blue-200" placeholder="Máximo" value="100">
                            </div>
                            <button class="btn-clear bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-xs font-semibold border-none cursor-pointer transition-all duration-200 hover:bg-gray-200 mt-3 w-full">Limpiar filtros</button>
                        </div>
                    </div>
                </div>

                <!-- Resultados -->
                <div class="lg:col-span-3">
                    <!-- Resultado 1 -->
            <!-- Resultado 1 - Steam Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://s.pacn.ws/1/p/11l/steam-gift-card-aed-100-for-united-arab-emirates-currency-only-676759.3.jpg?v=s74yus" alt="Steam Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Steam Gift Card $50 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-blue-50 text-blue-500 border border-blue-200">Steam</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">USA</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo digital para Steam. Canjea crédito en tu cartera de Steam para comprar juegos, software, hardware y más.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$50.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 2 - Amazon Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://m.media-amazon.com/images/G/01/gc/designs/livepreview/amazon_dkblue_noto_email_v2016_us-main._CB468775337_.png" alt="Amazon Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Amazon Gift Card $100 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-orange-50 text-orange-500 border border-orange-200">Amazon</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo digital para Amazon. Compra millones de productos, libros, electrónicos y más en Amazon.com.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$100.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 3 - PlayStation Store Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://static.vecteezy.com/system/resources/previews/020/190/708/non_2x/playstation-ps5-ps4-logo-free-free-vector.jpg">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">PlayStation Store $60 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-blue-50 text-blue-500 border border-blue-200">PlayStation</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">USA</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para PlayStation Store. Compra juegos, DLC, suscripciones y contenido adicional para PS4 y PS5.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$60.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 4 - Xbox Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://static.vecteezy.com/system/resources/previews/020/336/203/non_2x/xbox-logo-xbox-icon-free-free-vector.jpg">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Xbox Gift Card $25 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-green-50 text-green-600 border border-green-200">Xbox</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo digital para Microsoft Store. Compra juegos, películas, aplicaciones y más para Xbox y Windows.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$25.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 5 - Apple Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://images.seeklogo.com/logo-png/42/1/apple-logo-png_seeklogo-427436.png" alt="Apple Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Apple Gift Card $200 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-gray-50 text-gray-600 border border-gray-200">Apple</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">USA</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Apple Store. Compra productos Apple, aplicaciones, música, películas y suscripciones.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$200.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 6 - Google Play Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://cdn.mos.cms.futurecdn.net/Q2oLsPvoGLpzWuDqZgzANH-1200-80.jpg" alt="Google Play Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Google Play $30 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-green-50 text-green-600 border border-green-200">Google Play</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Google Play. Compra aplicaciones, juegos, libros, películas y música en la tienda de Google Play.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$30.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 7 - Nintendo eShop Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://pbs.twimg.com/profile_images/1716358287178817536/MQoRSNJ2_400x400.jpg" alt="Nintendo eShop Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Nintendo eShop $35 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-red-50 text-red-600 border border-red-200">Nintendo</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">USA</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Nintendo eShop. Compra juegos, DLC y contenido adicional para Nintendo Switch y 3DS.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$35.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 8 - Spotify Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://media.designrush.com/inspirations/757501/conversions/BDA-preview.jpg" alt="Spotify Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Spotify Gift Card 3 Meses</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-green-50 text-green-600 border border-green-200">Spotify</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Spotify Premium. Disfruta de 3 meses de música sin anuncios, modo sin conexión y más.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$29.97</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 9 - Razer Gold Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://assets2.razerzone.com/images/pnx.assets/77a3129a6bcbb490078654285d1bad1d/razer-gold-pin-hero-mobile.webp" alt="Razer Gold Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Razer Gold $75 USD</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-green-50 text-green-600 border border-green-200">Razer</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Razer Gold. Compra juegos, contenido digital y más en miles de juegos y plataformas.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$75.00</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>

<!-- Resultado 10 - Netflix Gift Card -->
<div class="search-result-card bg-white rounded-xl overflow-hidden transition-all duration-300 border border-gray-200 flex gap-5 p-5 mb-4 hover:-translate-y-1 hover:shadow-lg hover:border-blue-500">
    <div class="result-image w-44 h-28 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
        <img src="https://images.ctfassets.net/y2ske730sjqp/1aONibCke6niZhgPxuiilC/2c401b05a07288746ddf3bd3943fbc76/BrandAssets_Logos_01-Wordmark.jpg?w=940" alt="Netflix Gift Card" class="w-full h-full object-cover transition-transform duration-300">
    </div>
    <div class="result-content flex-1 flex flex-col justify-between">
        <div>
            <h3 class="result-title text-lg font-bold text-gray-900 mb-2 leading-tight">Netflix Gift Card 2 Meses</h3>
            <div class="result-badges flex gap-2 flex-wrap mb-3">
                <span class="badge badge-platform px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-red-50 text-red-600 border border-red-200">Netflix</span>
                <span class="badge badge-type px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Gift Card</span>
                <span class="badge badge-region px-2.5 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide bg-purple-50 text-purple-600 border border-purple-200">Global</span>
            </div>
            <p class="result-description text-sm text-gray-600 leading-relaxed mb-3">Tarjeta de regalo para Netflix. Regala 2 meses de streaming ilimitado de películas y series sin anuncios.</p>
        </div>
        <div class="result-footer flex justify-between items-center mt-auto">
            <div class="result-price flex flex-col">
                <span class="price-label text-xs text-gray-500 uppercase tracking-wide mb-1">Precio</span>
                <span class="price-value text-2xl font-black text-gray-900">$31.98</span>
            </div>
            <button class="btn-add btn-gradient text-white px-6 py-3 rounded-lg font-bold border-none cursor-pointer transition-all duration-300 flex items-center gap-2 hover:-translate-y-0.5 hover:shadow-lg">
                <i class="fas fa-shopping-cart"></i>
                Añadir al carrito
            </button>
        </div>
    </div>
</div>
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