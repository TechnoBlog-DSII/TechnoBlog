function register(username, email, password) {
    if (!username || !email || !password) {
        return false;
        //throw new Error('Faltan parametros');
    }
    if (username.length < 4) {
        return false;
    }
    if (!email.includes('@')) {
        return false;
        //throw new Error('Correo inválido!');
    }
    if (email.length < 8) {
        return false;
        //throw new Error('Correo demasiado corto!');
    }
    if (password.length < 8) {
        return false;
        //throw new Error('Contraseña demasiado corta!');
    }
    if (password.length > 20) {
        return false;
        //throw new Error('Contraseña demasiado larga!');
    }
    if (password.includes(username)) {
        return false;
        //throw new Error('Contraseña no puede contener el nombre de usuario!');
    }
    return true;
}

module.exports = register;