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
searchInput.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        console.log('Buscando:', this.value);
    }
});

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

// Close modals on click outside
document.getElementById('passwordModal').addEventListener('click', function (e) {
    if (e.target === this) {
        closePasswordModal();
    }
});

document.getElementById('orderDetailModal').addEventListener('click', function (e) {
    if (e.target === this) {
        closeOrderDetail();
    }
});

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

