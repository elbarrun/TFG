document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');
    const passwordField = document.getElementById('passwordField');

    form.addEventListener('submit', function(event) {
        if (passwordField.value.length < 8) {
            event.preventDefault();
            alert('La contraseña debe tener al menos 8 caracteres');
        }
    });
});
