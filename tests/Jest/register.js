function register(username, email, password) {
    if (!username || !email || !password) {
        return false;
        throw new Error('Faltan parametros');
    }
    if (password.length < 8) {
        return false;
        throw new Error('Contraseña demasiado corta!');
    }
    if (!email.includes('@')) {
        return false;
        throw new Error('Correo inválido!');
    }
    if (username.length < 4) {
        return false;
        throw new Error('Usuario demasiado corto!');
    }
    return true;
}


module.exports = register;