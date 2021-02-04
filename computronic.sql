DROP DATABASE IF EXISTS ventas;
CREATE DATABASE IF NOT EXISTS ventas;
USE ventas;
CREATE TABLE productos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	codigo VARCHAR(255) NOT NULL,
	nombre TEXT(100) NOT NULL,
	precioVenta DECIMAL(5, 2) NOT NULL,
	caracteristica TEXT(100) NOT NULL,
	stock VARCHAR(20) NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE ventas(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha DATE NOT NULL,
	total DECIMAL(7,2),
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

CREATE TABLE productos_vendidos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	id_producto BIGINT UNSIGNED NOT NULL,
	cantidad BIGINT UNSIGNED NOT NULL,
	id_venta BIGINT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_producto) REFERENCES productos(id) ON DELETE CASCADE,
	FOREIGN KEY(id_venta) REFERENCES ventas(id) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

INSERT INTO productos(id, codigo, nombre, precioVenta, caracteristica, stock) 
VALUES
(1, '1', 'Galletas chokis', 15, 'CHOCOLATE', 100),
(2, '2', 'Mermelada de fresa', 80, 'FRESA', 100),
(3, '3', 'Aceite', 20, 'MARIMAR', 100),
(4, '4', 'Palomitas de maíz', 15, 'CANCHITA', 100),
(5, '5', 'Doritos', 8, 'QUESO', 100);

# Correcto
