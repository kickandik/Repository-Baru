Create table Mahasiswa (
Nim Char(16) Not Null Primary Key,
Nama_Mhs Varchar(40) Not Null,
Kelas Varchar(15),
Semester Varchar(10),
Kd_Prodi Char(10));

INSERT INTO 'Mahasiswa' ('nim', 'nama_mhs', 'kelas', 'semester', 'kd_prodi') VALUES
('21.20.2020','Cristiano Ronaldo','B1','7','FTI-17'), 
('21.21.2020','Dybala','B1','7','FTI-17'),
('21.22.2020','Andrea Pirlo','B1','7','FTI-17'),
('21.23.2020','Buffon','B1','7','FTI-17');

Create table Prodi(
Kd_Prodi Char(10) Not Null Primary Key,
Nm_Prodi Varchar(30));

INSERT INTO Prodi VALUES
('FTI-17','Sistem Informasi');

Create table Matakuliah(
Kd_Makul Char(10) Not Null Primary Key,
Nm_Makul Varcahar(30) Not Null,
SKS Char(10));

INSERT INTO 'Matakuliah' ('kd_prodi','Nm_Prodi') VALUES
('WSD','Web ServiceDevelpoment','3');

Create tabel Nilai(
Nim Char(16),
Kd_Makul Char(10),
Nilai_Tugas Integer,
Nilai_UTS Integer,
Nilai_UAS Integer);

INSERT INTO 'Nilai' ('nim','kd_makul','nilai_tugas','nilai_UTS','nilai_UAS') VALUES
('21.20.2020','WSD','99','99','99'),
('21.21.2020','WSD','89','90','88'),
('21.22.2020','WSD','99','80','75'),
('21.23.2020','WSD','80','83','85');