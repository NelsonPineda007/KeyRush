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

        // Form submission - validación adicional antes de enviar
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const terms = document.getElementById('terms').checked;
            
            // Validate all requirements
            const validLength = password.length >= 8;
            const hasSpecial = /[\d\W]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasUppercase = /[A-Z]/.test(password);
            
            if (!validLength || !hasSpecial || !hasLowercase || !hasUppercase) {
                e.preventDefault();
                alert('Por favor, cumple con todos los requisitos de contraseña');
            } else if (!terms) {
                e.preventDefault();
                alert('Debes aceptar los términos y condiciones');
            }
            // Si todo está bien, el formulario se envía automáticamente
        });