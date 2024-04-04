CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellidos VARCHAR(50),
    telefono VARCHAR(15),
    correo_electronico VARCHAR(100),
    username VARCHAR(50),
    contrasena VARCHAR(100)
);

-- Tabla de trabajadores
CREATE TABLE trabajadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo_corporativo VARCHAR(100),
    username VARCHAR(50),
    contrasena VARCHAR(100)
);