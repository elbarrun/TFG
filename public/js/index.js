document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');
    const passwordField = document.getElementById('passwordField');
    const confirmPasswordField = document.getElementById('confirmPasswordField');

    form.addEventListener('submit', function(event) {
        if (passwordField.value !== confirmPasswordField.value) {
            event.preventDefault();
            alert('Las contraseñas no coinciden');
        } else if (passwordField.value.length < 8) {
            event.preventDefault();
            alert('La contraseña debe tener al menos 8 caracteres');
        }
    });
});


document.querySelector('a[data-role]').addEventListener('click', function(event) {
    if (this.getAttribute('data-role') !== 'Admin') {
        event.preventDefault();
        alert('Solo los administradores pueden acceder a esta página.');
    }
});

