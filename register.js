function register(username, email, password) {
    if (!username || !email || !password) {
        throw new Error('Faltan parametros');
    }
    if (password.length < 8) {
        throw new Error('Contraseña demasiado corta!');
    }
    if (!email.includes('@')) {
        throw new Error('Correo inválido!');
    }
    if (username.length < 4) {
        throw new Error('Usuario demasiado corto!');
    }
    return true;
}

module.exports = register;