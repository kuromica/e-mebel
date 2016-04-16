CREATE TABLE Cabang (
  idCabang INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Cabang VARCHAR(20) NULL,
  PRIMARY KEY(idCabang)
);

CREATE TABLE Dim_Realisasi_kerja (
  idPegawai INTEGER UNSIGNED NOT NULL,
  Kuantitas_Pekerjaan INTEGER UNSIGNED NULL,
  Kualitas_Pekerjaan INTEGER UNSIGNED NULL,
  Waktu_Pekerjaan INTEGER UNSIGNED NULL,
  Biaya_Pekerjaan INTEGER UNSIGNED NULL,
  Jabatan VARCHAR(20) NULL,
  PRIMARY KEY(idPegawai)
);

CREATE TABLE Dim_Target_Kerja (
  idJabatan INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Jabatan VARCHAR NULL,
  Kuantitas_perkerjaan INTEGER UNSIGNED NULL,
  Kualitas_perkerjaan INTEGER UNSIGNED NULL,
  Waktu_perkerjaan INTEGER UNSIGNED NULL,
  Biaya_perkerjaan INTEGER UNSIGNED NULL,
  PRIMARY KEY(idJabatan)
);

CREATE TABLE Dim_Waktu (
  Id_Waktu DATE NOT NULL,
  Tahun INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Bulan INTEGER UNSIGNED NULL,
  Tanggal INTEGER UNSIGNED NULL,
  PRIMARY KEY(Id_Waktu)
);

CREATE TABLE Kinerja_Pegawai (
  idPegawai INTEGER UNSIGNED NOT NULL,
  idJabatan INTEGER UNSIGNED NOT NULL,
  Id_Waktu DATE NOT NULL,
  Angka_Kredit INTEGER UNSIGNED NOT NULL,
  Kreatifitas INTEGER UNSIGNED NULL,
  Tugas_tambahan INTEGER UNSIGNED NULL,
  PRIMARY KEY(idPegawai, idJabatan, Id_Waktu),
  INDEX Kinerja_Pegawai_FKIndex1(idPegawai),
  INDEX Kinerja_Pegawai_FKIndex2(idJabatan),
  INDEX Kinerja_Pegawai_FKIndex3(Id_Waktu)
);

CREATE TABLE Pegawai (
  idPegawai INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idCabang INTEGER UNSIGNED NOT NULL,
  Nama VARCHAR(150) NULL,
  Jabatan VARCHAR(20) NULL,
  Masa_Kerja INTEGER UNSIGNED NULL,
  PRIMARY KEY(idPegawai),
  INDEX Pegawai_FKIndex1(idCabang)
);

CREATE TABLE Realisasi_kerja (
  idRealisasi_kerja INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idTugas INTEGER UNSIGNED NOT NULL,
  idPegawai INTEGER UNSIGNED NOT NULL,
  Kualitas INTEGER UNSIGNED NULL,
  Waktu INTEGER UNSIGNED NULL,
  Biaya INTEGER UNSIGNED NULL,
  INDEX Realisasi_kerja_FKIndex1(idPegawai),
  INDEX Realisasi_kerja_FKIndex2(idTugas)
);

CREATE TABLE Tugas (
  idTugas INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  jenis_tugas VARCHAR(20) NULL,
  PRIMARY KEY(idTugas)
);


