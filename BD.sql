
/*-----------------------------------------Usuarios_intranet-------------------------------------------------*/
CREATE TABLE usuarios_intranet(
    id_user int NOT NULL,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    nombre varchar(50) NOT NULL,
    user_role varchar(60) NOT NULL,
    PRIMARY KEY (id_user),
    FOREIGN KEY (user_role) REFERENCES user_type(role)
);
/*-------------------------------------tour-------------------------------------------------------*/
CREATE TABLE tour (
    id_tour int NOT NULL AUTO_INCREMENT,
    titulo varchar(200) NOT NULL,
    url varchar(200) NOT NULL,
    brief_desc MEDIUMTEXT,
    filtro varchar(200),
    long_description MEDIUMTEXT,
    duracion INT,
    tipo varchar(50),
    PRIMARY KEY (id_tour)
);

/*-------------------------------------------------city----------------------------*/
CREATE TABLE city(
    id_city int NOT NULL AUTO_INCREMENT,
    nombre varchar(200) NOT NULL,
    region char(20) NOT NULL,
    PRIMARY KEY (id_city),
    FOREIGN KEY (Region) REFERENCES region(ID)
);

/*-------------------------------------------------region----------------------------*/
CREATE TABLE region(
    ID int NOT NULL AUTO_INCREMENT,
    region char(20) NOT NULL,
    PRIMARY KEY (ID)
);



/*-----------------------------------------PPT-------------------------------------------------*/
CREATE TABLE ppt(
    id_ppt int NOT NULL AUTO_INCREMENT,
    titulo varchar(200) NOT NULL,
    ruta varchar(200) NOT NULL,
    PRIMARY KEY (id_ppt)
);


/*-------------------------------------itinerario---------------------------------*/
CREATE TABLE itinerario (
    id_it int NOT NULL AUTO_INCREMENT,
    id_tour int NOT NULL,
    nro_dia varchar(200) NOT NULL,
    contenido MEDIUMTEXT,
    titulo_dia varchar(200),
    PRIMARY KEY (id_it),
    FOREIGN KEY (id_tour) REFERENCES tour(id_tour)
);

/*-------------------------------------------highlights---------------------------*/
CREATE TABLE highlights (
    id_hi int NOT NULL AUTO_INCREMENT,
    id_tour int NOT NULL,
    includes MEDIUMTEXT,
    notincludes MEDIUMTEXT,
    PRIMARY KEY (id_hi),
    FOREIGN KEY (id_tour) REFERENCES tour(id_tour)
);


/*-------------------------------------------------segmento----------------------------*/
CREATE TABLE segmento(
    id_segmento int NOT NULL AUTO_INCREMENT,
    nombre varchar(200) NOT NULL,
    PRIMARY KEY (id_segmento)
);
/*-------------------------------------------------Reporte----------------------------*/
CREATE TABLE reporte(
    id_reporte int NOT NULL AUTO_INCREMENT,
    id_user int NOT NULL,
    fecha_inicial DATE,
    nombre_campanha varchar(200),
    canal_captacion varchar(50),
    contacto varchar(200),
    correo_contacto varchar(200),
    telefono varchar(10),
    pais varchar(50),
    producto varchar(50),
    contrato varchar(30),
    fecha_contrato DATE,
    comentario MEDIUMTEXT,
    PRIMARY KEY (id_reporte),
    FOREIGN KEY (id_user) REFERENCES usuarios_intranet(id_user)
);

/*-------------------------------------------------seguimiento-Reporte----------------------------*/
CREATE TABLE seguimiento_reporte(
    id_seg int NOT NULL AUTO_INCREMENT,
    id_reporte int NOT NULL,
    fecha_seguimiento DATE,
    comentario_seguimiento MEDIUMTEXT,
    id_user_session INT NOT NULL,
    PRIMARY KEY (id_seg),
    FOREIGN KEY (id_reporte) REFERENCES Reporte(id_reporte),
    FOREIGN KEY (id_user_session) REFERENCES usuarios_intranet(id_user)
);


/*--------------------------------------------segmento-city !!!!!--------------------------*/
CREATE TABLE segmento_city (
    id_city int NOT NULL,
    id_segmento int NOT NULL,
    FOREIGN KEY (id_city) REFERENCES city(id_city),
    FOREIGN KEY (id_segmento) REFERENCES segmento(id_segmento)
);

/*--------------------------------------------segmento-tour !!!!!--------------------------*/
CREATE TABLE segmento_tour (
    id_tour int NOT NULL,
    id_segmento int NOT NULL,
    FOREIGN KEY (id_tour) REFERENCES tour(id_tour),
    FOREIGN KEY (id_segmento) REFERENCES segmento(id_segmento)
);
/*--------------------------------------------city-tour !!!!!--------------------------*/
CREATE TABLE city_tour (
    id_city int NOT NULL,
    id_tour int NOT NULL,
    FOREIGN KEY (id_city) REFERENCES city(id_city),
    FOREIGN KEY (id_tour) REFERENCES tour(id_tour)
);
/*--------------------------------------------ppt-user !!!!!--------------------------*/
CREATE TABLE ppt_user (
    id_ppt int NOT NULL,
    id_user int NOT NULL,
    FOREIGN KEY (id_ppt) REFERENCES ppt(id_ppt),
    FOREIGN KEY (id_user) REFERENCES usuarios_intranet(id_user)
);
/*--------------------------------------------FOTOS--------------------------*/

CREATE TABLE fotos(
    id_foto int NOT NULL AUTO_INCREMENT,
    ruta varchar(200) NOT NULL,
    descripcion MEDIUMTEXT,
    region char(20),
    PRIMARY KEY (id_foto)
    FOREIGN KEY (region) REFERENCES region(ID)
);


/*--------------------------------------------VIDEOS--------------------------*/

CREATE TABLE videos(
    id_video int NOT NULL AUTO_INCREMENT,
    ruta varchar(200) NOT NULL,
    nombre varchar(200) ,
    descripcion MEDIUMTEXT,
    formato varchar(10),
     region char(20),
    PRIMARY KEY (id_video)
    FOREIGN KEY (region) REFERENCES region(ID)
);

/*--------------------------------------------PERMISOS--------------------------*/

CREATE TABLE permissions(
   cod_permiso varchar(10) NOT NULL,
   ruta varchar(150) NULL,
  nombre varchar(200) NULL,
    PRIMARY KEY (cod_permiso)
);
/*--------------------------------------------tipo user-------------------------*/

CREATE TABLE user_type(
    role varchar(60) NOT NULL,
    descripcion varchar(50) NOT NULL,
    PRIMARY KEY (role)
);

/*--------------------------------------------usuario_permisos------------------------*/

CREATE TABLE usertype_permissions(
    role varchar(60) NOT NULL,
    cod_permiso varchar(10) NOT NULL,
    FOREIGN KEY (role) REFERENCES user_type(role),
    FOREIGN KEY (cod_permiso) REFERENCES permissions(cod_permiso)
);
