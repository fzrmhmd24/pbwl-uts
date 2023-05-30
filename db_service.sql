CREATE TABLE tb_kamera (
  id_kamera int(50) NOT NULL AUTO_INCREMENT,
  nama_kamera varchar(100) NOT NULL,
  hrg_kamera varchar(50) NOT NULL,
  PRIMARY KEY(id_kamera)
);
CREATE TABLE tb_laptop (
  id_laptop int(50) NOT NULL AUTO_INCREMENT,
  nama_laptop varchar(100) NOT NULL,
  hrg_laptop varchar(50) NOT NULL,
  PRIMARY KEY(id_laptop)
);
CREATE TABLE tb_smartphone (
  id_smartphone int(50) NOT NULL AUTO_INCREMENT,
  nama_smartphone varchar(100) NOT NULL,
  hrg_smartphone varchar(50) NOT NULL,
  PRIMARY KEY(id_smartphone)
);