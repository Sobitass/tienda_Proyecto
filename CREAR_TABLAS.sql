CREATE SCHEMA IF NOT EXISTS `Ameizon2`;
USE `Ameizon2`;

-- Tabla de compra
CREATE TABLE IF NOT EXISTS `Compra` (
  `idCompra` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` VARCHAR(45) NOT NULL,
  `Fecha_Compra` date NOT NULL,
  `Precio_Producto` VARCHAR(45) NOT NULL,
  `Categoria_Producto` VARCHAR(45) NOT NULL,
  `Calificacion_Producto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCompra`),
  UNIQUE INDEX `idCompra_UNIQUE` (`idCompra`));
  -- llave foranea es producto
ALTER TABLE `ameizon2`.`compra` 
ADD INDEX `lista_Carrito_idx` (`lista_Carrito` ASC) ;

ALTER TABLE `ameizon2`.`compra` 
ADD CONSTRAINT `lista_Carrito`
  FOREIGN KEY (`lista_Carrito`)
  REFERENCES `ameizon2`.`lista` (`idLista`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



-- Tabla de Ventas
CREATE TABLE IF NOT EXISTS `Venta` (
  `idVenta` INT NOT NULL AUTO_INCREMENT,
  `Stock` int(3) NOT NULL,
  `Precio_Venta` VARCHAR(45) NOT NULL,
  `Calificacion_Venta` VARCHAR(45) NOT NULL,
  `Categoria_Venta` VARCHAR(45) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  PRIMARY KEY (`idVenta`),
  UNIQUE INDEX `idVenta_UNIQUE` (`idVenta`));
  
  -- llave foranea es Producto (Producto)
  ALTER TABLE `ameizon2`.`venta` 
ADD INDEX `Prod_Comprado_FK_idx` (`Prod_Comprado` ASC) ;

ALTER TABLE `ameizon2`.`venta` 
ADD CONSTRAINT `Prod_Comprado_FK`
  FOREIGN KEY (`Prod_Comprado`)
  REFERENCES `ameizon2`.`producto` (`idProducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

  
  
  
  
-- Tabla de Usuario no corrio
CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` VARCHAR(45) NOT NULL,
  `Apellido_Paterno_Usuario` VARCHAR(45) NOT NULL,
  `Apellido_Materno_Usuario` VARCHAR(45) NOT NULL,
  `Correo_Usuario` VARCHAR(45) NOT NULL,
  `Contrasenia_Usuario` VARCHAR(45) NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Privacidad_Usuario` bool NOT NULL,
  `Foto_Perfil` LONGBLOB NULL DEFAULT NULL,
  `Rol_User` INT NOT NULL,
  `Genero` INT NOT NULL,
  `Fecha_Nacimiento` DATE NOT NULL,
  `Fecha_Registro` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `Fecha_Modificacion` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `idUsuario_UNIQUE` (`idUsuario`),
  UNIQUE INDEX `Correo_Usuario_UNIQUE` (`Correo_Usuario`),
  UNIQUE INDEX `Username_UNIQUE` (`Username`)
  

  
    
  
)
ENGINE = InnoDB;

ADD 
INDEX `Rol_index` (`Rol_User`),
  CONSTRAINT `Rol`
    FOREIGN KEY (`Rol_User`)
     REFERENCES `Rol` (`idRol`),


-- Tabla de Listas no cor
CREATE TABLE IF NOT EXISTS `Lista` (
  `idLista` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Lista` VARCHAR(45) NOT NULL,
  `Descripcion_Lista` VARCHAR(200) NOT NULL,
  `Privacidad_Lista` bool NOT NULL,
  `Foto_Lista` LONGBLOB NULL DEFAULT NULL,
  `Fecha_Creacion_categoria` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `EstadoCategoria` TINYINT DEFAULT 1,
  PRIMARY KEY (`idLista`)
  
  -- INDEX `Creador_index` (``),
  -- CONSTRAINT `Creador`
   -- FOREIGN KEY (`Creador_categoria`)
    -- REFERENCES `Usuario` (`idUsuario`)
    -- ON DELETE NO ACTION
    -- ON UPDATE NO ACTION)
)
ENGINE = InnoDB;

-- LLAVE FORANEA DE USER
ALTER TABLE `ameizon2`.`lista` 
ADD INDEX `id_User_idx` (`id_User` ASC);

ALTER TABLE `ameizon2`.`lista` 
ADD CONSTRAINT `id_User`
  FOREIGN KEY (`id_User`)
  REFERENCES `ameizon2`.`usuario` (`idUsuario`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



-- LLAVE FORANEA DE PRODUCTO
ALTER TABLE `ameizon2`.`lista` 
ADD COLUMN `id_Prod` INT NOT NULL AFTER `id_User`,

ADD INDEX `id_Prod_idx` (`id_Prod` ASC);

ALTER TABLE `ameizon2`.`lista` 
ADD CONSTRAINT `id_Prod`
  FOREIGN KEY (`id_Prod`)
  REFERENCES `ameizon2`.`producto` (`idProducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



-- Comprobar que hay una variable de referencia para la foránea
-- Y si no la hay, se crea

ALTER TABLE Lista ADD id_user INT NOT NULL;

ALTER TABLE Lista ADD id_obj INT NOT NULL;

--  Primero se tiene que poner en un indice la referencia
ALTER TABLE `ameizon`.`lista` ADD INDEX `id_user_idx` (`id_user` ASC) ;

-- Ahora convertimos el indice en llave foranea
ALTER TABLE `ameizon`.`lista` 

ADD CONSTRAINT `id_user`
  FOREIGN KEY (`id_user`)
  REFERENCES `ameizon`.`usuario` (`idUsuario`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



-- Tabla de Productos
CREATE TABLE IF NOT EXISTS `Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` VARCHAR(45) NOT NULL,
  `Descripcion_Producto` VARCHAR(200) NOT NULL,
  `Fecha_Registro_Producto` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `Categoria_Producto` VARCHAR(45) NOT NULL,
  `Vendedor_Producto` VARCHAR(45) NOT NULL,
  `Cotizable` BOOL NOT NULL,
  `Precio_Producto` DECIMAL(10,2) NOT NULL,
  `Stock_Producto` INT NOT NULL,
  `Imagen_Producto` LONGBLOB NULL DEFAULT NULL,
  `Video_Producto` LONGBLOB NULL DEFAULT NULL,
  `Comentarios_Producto` INT NOT NULL,
  `Calificacion_Producto` INT NOT NULL,
   PRIMARY KEY (`idProducto`)
 -- INDEX `Creador_index` (`Vendedor_Producto`),
--  CONSTRAINT `VendedorProducto`
   -- FOREIGN KEY (`Vendedor_Producto`)
   -- REFERENCES `Usuario` (`idUsuario`)
  --  ON DELETE NO ACTION
  --  ON UPDATE NO ACTION)
)
ENGINE = InnoDB;

-- Comprobar que hay una variable de referencia para la foránea
-- Y si no la hay, se crea
--  Primero se tiene que poner en un indice la referencia

ALTER TABLE `ameizon`.`lista` 
ADD INDEX `id_obj_idx` (`id_obj` ASC) ;

-- Ahora convertimos el indice en llave foranea
ALTER TABLE `ameizon`.`lista` 

ADD CONSTRAINT `id_obj`
  FOREIGN KEY (`id_obj`)
  REFERENCES `ameizon`.`producto` (`idProducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  







-- Crear la tabla que almacena un paquete con varias categorias
CREATE TABLE IF NOT EXISTS `CategoriaPaquete` (
  `idCategoriaPaquete` INT NOT NULL AUTO_INCREMENT,
  `idCategoria` INT NOT NULL,
  `idPaquete` INT NOT NULL,
  PRIMARY KEY (`idCategoriaPaquete`)
  
 -- INDEX `Categoria_index` (`idCategoria`),
 -- CONSTRAINT `CategoriaServicio`
   -- FOREIGN KEY (`idCategoria`)
   -- REFERENCES `Categoria` (`idCategoria`),
 -- INDEX `Paquete_index` (`idPaquete`),
 -- CONSTRAINT  `idPaqueteC`
 -- FOREIGN KEY (`idPaquete`)
 -- REFERENCES `Paquete` (`idPaquete`)
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION)
)
ENGINE = InnoDB;


-- Tabla de Calificacion de Producto
CREATE TABLE IF NOT EXISTS `Calificacion` (
  `idCalificacion` INT NOT NULL AUTO_INCREMENT,
  `Nombre_calificacion` VARCHAR(45) NULL,
  `Comentario` VARCHAR(200) NULL,
  `Usuario_calificador` INT NOT NULL,
  `Producto_Calificado` INT NOT NULL,
  `Fecha_Calificacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCalificacion`)
  
--  INDEX `Calificador_index` (`Usuario_calificador`),
 -- INDEX `Calificacion_index` (`Producto_Calificado`),
 -- CONSTRAINT `Calificador`
   -- FOREIGN KEY (`Usuario_calificador`)
   -- REFERENCES `Usuario` (`idUsuario`)
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION,
 -- CONSTRAINT `Calificacion`
   -- FOREIGN KEY (`Producto_Calificado`)
   -- REFERENCES `Paquete` (`idProducto`)
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION)
)
ENGINE = InnoDB;


-- Tabla de Mensajes entre organizadores y clientes
CREATE TABLE IF NOT EXISTS `Mensajes` (
  `idMensajes` INT NOT NULL AUTO_INCREMENT,
  `Mensaje` VARCHAR(500) NOT NULL,
  `Emisor` INT NOT NULL,
  `Receptor` INT NOT NULL,
  `Fecha_envio` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idMensajes`)
 -- INDEX `Emisor_index` (`Emisor`),
 -- INDEX `Receptor_index` (`Receptor`, `Emisor`),
  
 -- CONSTRAINT `Emisor`
   -- FOREIGN KEY (`Emisor`)
   -- REFERENCES `Usuario` (`idUsuario`)
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION,
 -- CONSTRAINT `Receptor`
   -- FOREIGN KEY (`Receptor`)
   -- REFERENCES `Usuario` (`idUsuario`)
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION)
)
ENGINE = InnoDB;





-- Tabla de Productos Comprados (donde se guardaran los Productos comprados de los usuarios)
CREATE TABLE IF NOT EXISTS `Producto_Comprado` (
  `IdProducto_Comprado` INT NOT NULL AUTO_INCREMENT,
  `FechaCompra` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `IdProducto` INT NOT NULL,
  `IdUser` INT NOT NULL,
  `Calificacion` TINYINT DEFAULT -1,
  `PrecioPagado` DECIMAL(10,2) NOT NULL,
  `FormaPago` TINYINT DEFAULT 0,
  `Invitados` INT NOT NULL,
  PRIMARY KEY (`IdProducto_Comprado`)
  
 -- INDEX `Producto_index` (`idProducto`),
 -- CONSTRAINT `ProductoCompra`
  --  FOREIGN KEY (`idProducto`)
   -- REFERENCES `Producto` (`idProducto`),
    
 -- INDEX `User_index` (`IdUser`),
 -- CONSTRAINT `User`
   -- FOREIGN KEY (`IdUser`)
   -- REFERENCES `Usuario` (`idUsuario`)
    
   -- ON DELETE NO ACTION
   -- ON UPDATE NO ACTION)
   )
ENGINE = InnoDB;


ALTER TABLE `ameizon2`.`compra` 
ADD INDEX `Producto_Comprado_FK_idx` (`Producto_Comprado` ASC) ;

ALTER TABLE `ameizon2`.`compra` 
ADD CONSTRAINT `Producto_Comprado_FK`
  FOREIGN KEY (`Producto_Comprado`)
  REFERENCES `ameizon`.`producto` (`idProducto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;




-- Crear vista de reportes de los paquetes comprados
CREATE VIEW reporte_Productos AS
SELECT P.idPaquete, P.Titulo_Paquete, cast(P.Fecha_Registro_Paquete as Date) as Fecha, P.EstadoPaquete, P.Creador_Paquete, FORMAT(P.Precio_Paquete, 2) AS Precio_Paquete, CAT.idCategoria, CAT.Nombre_categoria,
(SELECT COUNT(*) FROM PaqueteComprado PC WHERE PC.idPaquete = P.idPaquete) AS Clientes_Inscritos FROM Paquete P 
INNER JOIN CategoriaPaquete CATP ON CATP.idPaquete = P.idPaquete INNER JOIN Categoria CAT ON CAT.idCategoria = CATP.idCategoria
GROUP BY P.idPaquete, CAT.idCategoria;