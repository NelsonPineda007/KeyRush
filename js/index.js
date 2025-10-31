// Animación de entrada para las cards
document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.product-card').forEach(card => {
        observer.observe(card);
    });
});

// Efecto hover mejorado para las cards del hero
document.querySelectorAll('.hero-card').forEach(card => {
    card.addEventListener('mouseenter', function () {
        this.style.zIndex = '10';
    });
    card.addEventListener('mouseleave', function () {
        this.style.zIndex = '1';
    });
});

// Funcionalidad del botón de favoritos
document.querySelectorAll('.heart-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        const icon = this.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            this.style.color = '#ff4757';
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            this.style.color = '';
        }
    });
});

// Animación del contador del carrito
let cartCount = 3;
document.querySelectorAll('.btn-cart').forEach(btn => {
    btn.addEventListener('click', function () {
        cartCount++;
        const badge = document.querySelector('.cart-badge');
        badge.textContent = cartCount;

        // Animación de feedback
        badge.style.transform = 'scale(1.5)';
        setTimeout(() => {
            badge.style.transform = 'scale(1)';
        }, 200);

        // Feedback visual en el botón
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
            this.style.transform = '';
        }, 100);
    });
});

// Smooth scroll para links internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Funcionalidad de búsqueda
const searchInput = document.querySelector('.search-input');
if (searchInput) {
    // use keydown (más fiable) y prevenir comportamiento por defecto
    searchInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            console.log('Buscando (Enter):', this.value);
            // Llamar a la función global de búsqueda si existe
            if (typeof performSearch === 'function') {
                performSearch();
            }
        }
    });
}

// Parallax suave en el hero banner
window.addEventListener('scroll', function () {
    const scrolled = window.pageYOffset;
    const header = document.querySelector('header img');
    if (header && scrolled < 600) {
        header.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
});


/* perfil.js */
// Show/Hide Sections
function showSection(section) {
    document.querySelectorAll('.content-section').forEach(s => s.classList.add('hidden'));
    document.querySelectorAll('.sidebar-btn').forEach(btn => btn.classList.remove('active'));

    if (section === 'purchases') {
        document.getElementById('purchasesSection').classList.remove('hidden');
        document.querySelector('[onclick="showSection(\'purchases\')"]').classList.add('active');
    } else if (section === 'profile') {
        document.getElementById('profileSection').classList.remove('hidden');
        document.querySelector('[onclick="showSection(\'profile\')"]').classList.add('active');
    } else if (section === 'favorites') {
        document.getElementById('favoritesSection').classList.remove('hidden');
        document.querySelector('[onclick="showSection(\'favorites\')"]').classList.add('active');
    }
}

// Password Modal
function openPasswordModal() {
    document.getElementById('passwordModal').classList.remove('hidden');
}

function closePasswordModal() {
    document.getElementById('passwordModal').classList.add('hidden');
    document.getElementById('currentPassword').value = '';
    document.getElementById('newPassword').value = '';
    document.getElementById('confirmPassword').value = '';
}

function changePassword(event) {
    event.preventDefault();
    const current = document.getElementById('currentPassword').value;
    const newPass = document.getElementById('newPassword').value;
    const confirm = document.getElementById('confirmPassword').value;

    if (newPass !== confirm) {
        alert('Las contraseñas no coinciden');
        return;
    }

    if (newPass.length < 8) {
        alert('La contraseña debe tener al menos 8 caracteres');
        return;
    }

    alert('Contraseña actualizada exitosamente');
    closePasswordModal();
}

// Order Detail Modal
function showOrderDetail() {
    document.getElementById('orderDetailModal').classList.remove('hidden');
}

function closeOrderDetail() {
    document.getElementById('orderDetailModal').classList.add('hidden');
}

// Copy to Clipboard
function copyToClipboard() {
    const text = document.querySelector('.key-display').innerText;
    navigator.clipboard.writeText(text).then(() => {
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check"></i> Copiado';
        setTimeout(() => {
            btn.innerHTML = originalHTML;
        }, 2000);
    });
}

// Close modals on click outside (protegemos para que no rompa en páginas sin estos modales)
const passwordModalEl = document.getElementById('passwordModal');
if (passwordModalEl) {
    passwordModalEl.addEventListener('click', function (e) {
        if (e.target === this) {
            closePasswordModal();
        }
    });
}

const orderDetailModalEl = document.getElementById('orderDetailModal');
if (orderDetailModalEl) {
    orderDetailModalEl.addEventListener('click', function (e) {
        if (e.target === this) {
            closeOrderDetail();
        }
    });
}

// Animation on scroll
document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.order-card').forEach(card => {
        observer.observe(card);
    });
});

// Heart button functionality
document.querySelectorAll('.heart-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        const icon = this.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            this.style.color = '#ff4757';
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            this.style.color = '';
        }
    });
});

// Detectar si viene desde un anchor
window.addEventListener('DOMContentLoaded', function () {
    const hash = window.location.hash;

    if (hash === '#favorites') {
        showSection('favorites');
    }
});

// funcionalidad de busqueda
// Funciones para cambiar entre páginas
function showHomePage() {
    document.getElementById('homePage').style.display = 'block';
    document.getElementById('searchResultsPage').style.display = 'none';
}

function performSearch() {
    const searchInput = document.getElementById('mainSearchInput');
    const searchQuery = searchInput.value.trim();

    console.log('Realizando búsqueda:', searchQuery); // Para debugging

    if (searchQuery) {
        document.getElementById('searchQueryText').textContent = `"${searchQuery}"`;
        document.getElementById('homePage').style.display = 'none';
        document.getElementById('searchResultsPage').style.display = 'block';

        // Scroll suave hacia los resultados
        document.getElementById('searchResultsPage').scrollIntoView({ behavior: 'smooth' });
    }
}

// Inicializar la página mostrando la página principal
document.addEventListener('DOMContentLoaded', function () {
    console.log('Página cargada'); // Para debugging
    showHomePage();

    // Buscar el input por ID y agregar evento
    const searchInput = document.getElementById('mainSearchInput');
    console.log('Input encontrado:', searchInput); // Para debugging

    if (searchInput) {
        searchInput.addEventListener('keydown', function (e) {
            console.log('Tecla presionada:', e.key); // Para debugging
            if (e.key === 'Enter') {
                e.preventDefault();
                console.log('Enter detectado'); // Para debugging
                performSearch();
            }
        });
    }
});


// CARRITO FUNCIONES JS

 let subtotalBase = 32.83;
        let currentSubscription = 'none';

        function calculateSubtotal() {
            let total = 0;
            document.querySelectorAll('.quantity-input').forEach(input => {
                const price = parseFloat(input.dataset.price);
                const qty = parseInt(input.value);
                total += price * qty;
            });
            return total;
        }

        function updateCart() {
            subtotalBase = calculateSubtotal();
            updateSubscription();
        }

        function updateSubscription() {
            const selected = document.querySelector('input[name="subscription"]:checked');
            currentSubscription = selected ? selected.value : 'none';

            const discountRow = document.getElementById('discount-row');
            const subscriptionRow = document.getElementById('subscription-row');
            const discountEl = document.getElementById('discount');
            const discountLabel = document.getElementById('discount-label');
            const subscriptionName = document.getElementById('subscription-name');
            const subscriptionPriceEl = document.getElementById('subscription-price');
            const totalEl = document.getElementById('total');
            const subtotalEl = document.getElementById('subtotal');

            subtotalEl.textContent = `${subtotalBase.toFixed(2)}`;

            let total = subtotalBase;
            let discount = 0;
            let subscriptionPrice = 0;

            if (currentSubscription === 'pro') {
                discount = subtotalBase * 0.15;
                subscriptionPrice = 9.99;
                discountLabel.textContent = 'Descuento Pro (15%)';
                subscriptionName.textContent = 'KeyRush Pro';
                subscriptionPriceEl.textContent = `${subscriptionPrice.toFixed(2)}`;
                total = subtotalBase - discount + subscriptionPrice;
                discountRow.style.display = 'flex';
                subscriptionRow.style.display = 'flex';
                discountEl.textContent = `-${discount.toFixed(2)}`;
            } else if (currentSubscription === 'elite') {
                discount = subtotalBase * 0.25;
                subscriptionPrice = 19.99;
                discountLabel.textContent = 'Descuento Elite (25%)';
                subscriptionName.textContent = 'KeyRush Elite';
                subscriptionPriceEl.textContent = `${subscriptionPrice.toFixed(2)}`;
                total = subtotalBase - discount + subscriptionPrice;
                discountRow.style.display = 'flex';
                subscriptionRow.style.display = 'flex';
                discountEl.textContent = `-${discount.toFixed(2)}`;
            } else {
                discountRow.style.display = 'none';
                subscriptionRow.style.display = 'none';
            }

            totalEl.textContent = `${total.toFixed(2)}`;
        }

        function increaseQty(btn) {
            const input = btn.previousElementSibling;
            const currentValue = parseInt(input.value);
            if (currentValue < parseInt(input.max)) {
                input.value = currentValue + 1;
                updateCart();
            }
        }

        function decreaseQty(btn) {
            const input = btn.nextElementSibling;
            const currentValue = parseInt(input.value);
            if (currentValue > parseInt(input.min)) {
                input.value = currentValue - 1;
                updateCart();
            }
        }

        function removeItem(btn) {
            const item = btn.closest('.item-card');
            item.style.opacity = '0';
            item.style.transform = 'translateX(-20px)';
            setTimeout(() => {
                item.remove();
                updateCart();
            }, 300);
        }

        function addSuggested(btn) {
            btn.innerHTML = '<i class="fas fa-check mr-1"></i>Agregado';
            btn.disabled = true;
            btn.classList.add('opacity-50', 'cursor-not-allowed');

            setTimeout(() => {
                btn.closest('.bg-white').style.opacity = '0';
                setTimeout(() => {
                    btn.closest('.bg-white').remove();
                }, 300);
            }, 1000);
        }

        function addToCart() {
            alert('Producto agregado al carrito');
        }

        function checkout() {
            const email = document.querySelector('input[type="email"]').value;
            if (!email) {
                alert('Por favor ingresa tu correo electrónico');
                return;
            }
            alert('Redirigiendo al proceso de pago...');
        }

        // Initialize
        updateSubscription();