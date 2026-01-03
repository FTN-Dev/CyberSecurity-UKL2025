CREATE DATABASE IF NOT EXISTS rs_harapan_sehat;
USE rs_harapan_sehat;
CREATE TABLE IF NOT EXISTS users(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(50));
INSERT INTO users(username,password) VALUES('admin','admin') ON DUPLICATE KEY UPDATE username=username;

CREATE TABLE IF NOT EXISTS patients(id INT AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(100), photo VARCHAR(255));
INSERT INTO patients(nama,photo) VALUES ('Joni Santoso','/flags/flag_img_trv.txt'),('Siti Aminah','/assets/img/patient2.jpg');

CREATE TABLE IF NOT EXISTS doctors(id INT AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(100), spesialis VARCHAR(100));
INSERT INTO doctors(nama,spesialis) VALUES ('Dr. Budi','Umum'),('Dr. Ani','Anak');

CREATE TABLE IF NOT EXISTS feedback(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), message TEXT);
INSERT INTO feedback(name,message) VALUES ('Guest','Terima kasih atas pelayanannya.');

CREATE TABLE IF NOT EXISTS schedules(id INT AUTO_INCREMENT PRIMARY KEY, dokter_id INT, hari VARCHAR(20), jam VARCHAR(20));
INSERT INTO schedules(dokter_id,hari,jam) VALUES (1,'Senin','09:00-12:00'),(2,'Selasa','13:00-15:00');

