document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('login-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const emailField = document.getElementById('email');
        const senhaField = document.getElementById('senha');
        const emailError = document.getElementById('email-error');
        const senhaError = document.getElementById('senha-error');

        emailError.textContent = '';
        senhaError.textContent = '';

        let valid = true;

        if (emailField.value.trim() === '') {
            emailField.style.borderColor = 'red';
            emailError.textContent = 'O campo E-mail deve ser preenchido.';
            emailError.classList.add('error-message');
            valid = false;
        } else {
            emailField.style.borderColor = '';
        }

        if (senhaField.value.trim() === '') {
            senhaField.style.borderColor = 'red';
            senhaError.textContent = 'O campo Senha deve ser preenchido.';
            valid = false;
        } else {
            senhaField.style.borderColor = '';
        }

        if (valid) {
            console.log('Login bem-sucedido!');
        }
    });
});