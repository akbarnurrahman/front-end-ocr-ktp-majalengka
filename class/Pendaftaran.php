<?php
	include "Database.php";

	class Pendaftaran {

		// Method untuk menampilkan semua data dari database
		public function getData() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM pendaftaran ORDER BY namacalon ASC";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}
		
		// Method untuk menampilkan semua data yang telah meng verifikasi
		public function getDataKtp() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM ktp";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}
		
		public function hapus()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "DELETE FROM pendaftaran where nomor_pendaftar = '{$this->nomor_pendaftaran}'";

			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
		}
		
		public function hapushistory()
		{
			$db = new Database();
			$dbConnect = $db->connect(); 
			$sql = "DELETE FROM historyverifikasi where idhistory != 'mamamia'";

			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
		}

		
		// Method untuk menampilkan semua data supaya muncul di detail
		public function getDetail ($nomor_pendaftar) {
			$db = new Database();	
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM pendaftaran where nomor_pendaftar = '{$nomor_pendaftar}'"; 
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();	
			return $data->fetch_array();			
		}

		public function getUser($id_user) {
			$db = new Database();	
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM pendaftaran where id_user = '{$id_user}'"; 
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();	
			return $data->fetch_array();			
		}


		public function updateDataNUN() 
		{	
		
			$db = new Database();
			$dbConnect = $db->connect();
			
			$sql = "UPDATE pendaftaran SET
					namacalon = '{$this->namacalon}',
					tempatlahir ='{$this->tempatlahir}',
					tanggallahir = '{$this->tanggallahir}',
					asalsekolah = '{$this->asalsekolah}',
					tahunlulus = '{$this->tahunlulus}',
					agamacalon = '{$this->agamacalon}',
					namaortu ='{$this->namaortu}',
					alamatlengkap = '{$this->alamatlengkap}',
					jalan	= '{$this->jalan}',
					rt = '{$this->rt}',
					rw	= '{$this->rw}',
					kelurahan = '{$this->kelurahan}',
					kecamatan = '{$this->kecamatan}',
					kota	= '{$this->kota}',
					jarak = '{$this->jarak}',
					notel = '{$this->notel}',
					kerjaortu = '{$this->kerjaortu}',
					agamaortu = '{$this->agamaortu}',
					noun = '{$this->noun}',
					nilaiindo = '{$this->nilaiindo}',
					nilaiinggris = '{$this->nilaiinggris}',
					nilaimtk = '{$this->nilaimtk}',
					nilaiipa = '{$this->nilaiipa}',
					jumlahnilai ='{$this->jumlahnilai}',
					pilihansekolah ='{$this->pilihansekolah}',
					pilihansekolah2 ='{$this->pilihansekolah2}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'
					";

			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;

		}


		public function updateDataKETM() 
		{	
		
			$db = new Database();
			$dbConnect = $db->connect();
			
			$sql = "UPDATE pendaftaran SET
					namacalon = '{$this->namacalon}',
					tempatlahir ='{$this->tempatlahir}',
					tanggallahir = '{$this->tanggallahir}',
					asalsekolah = '{$this->asalsekolah}',
					tahunlulus = '{$this->tahunlulus}',
					agamacalon = '{$this->agamacalon}',
					namaortu ='{$this->namaortu}',
					alamatlengkap = '{$this->alamatlengkap}',
					jalan	= '{$this->jalan}',
					rt = '{$this->rt}',
					rw	= '{$this->rw}',
					kelurahan = '{$this->kelurahan}',
					kecamatan = '{$this->kecamatan}',
					kota	= '{$this->kota}',
					jarak = '{$this->jarak}',
					notel = '{$this->notel}',
					nokk ='{$this->nokk}',
					kerjaortu = '{$this->kerjaortu}',
					agamaortu = '{$this->agamaortu}',
					noun = '{$this->noun}',
					nilaiindo = '{$this->nilaiindo}',
					nilaiinggris = '{$this->nilaiinggris}',
					nilaimtk = '{$this->nilaimtk}',
					nilaiipa = '{$this->nilaiipa}',
					jumlahnilai ='{$this->jumlahnilai}',
					sktm = '{$this->sktm}',
					kks = '{$this->kks}',
					kip = '{$this->kip}',
					kis ='{$this->kis}',
					terbitan_sktm  = '{$this->terbitan_sktm }',
					pilihansekolah ='{$this->pilihansekolah}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'
					";
				

			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;

		}

		public function updateDataPrestasi() 
		{	
		
			$db = new Database();
			$dbConnect = $db->connect();
			
			$sql = "UPDATE pendaftaran SET
					namacalon = '{$this->namacalon}',
					tempatlahir ='{$this->tempatlahir}',
					tanggallahir = '{$this->tanggallahir}',
					asalsekolah = '{$this->asalsekolah}',
					tahunlulus = '{$this->tahunlulus}',
					agamacalon = '{$this->agamacalon}',
					namaortu ='{$this->namaortu}',
					alamatlengkap = '{$this->alamatlengkap}',
					jalan	= '{$this->jalan}',
					rt = '{$this->rt}',
					rw	= '{$this->rw}',
					kelurahan = '{$this->kelurahan}',
					kecamatan = '{$this->kecamatan}',
					kota	= '{$this->kota}',
					jarak = '{$this->jarak}',
					notel = '{$this->notel}',
					kerjaortu = '{$this->kerjaortu}',
					agamaortu = '{$this->agamaortu}',
					noun = '{$this->noun}',
					nilaiindo = '{$this->nilaiindo}',
					nilaiinggris = '{$this->nilaiinggris}',
					nilaimtk = '{$this->nilaimtk}',
					nilaiipa = '{$this->nilaiipa}',
					jumlahnilai ='{$this->jumlahnilai}',
					prestasirequ = '{$this->prestasirequ}',
					peringkat = '{$this->peringkat}',
					tingkat = '{$this->tingkat}',
					pilihansekolah ='{$this->pilihansekolah}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'
					";
				

			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;

		}


		public function updateDataPMG() 
		{	
		
			$db = new Database();
			$dbConnect = $db->connect();
			
			$sql = "UPDATE pendaftaran SET
					namacalon = '{$this->namacalon}',
					tempatlahir ='{$this->tempatlahir}',
					tanggallahir = '{$this->tanggallahir}',
					asalsekolah = '{$this->asalsekolah}',
					tahunlulus = '{$this->tahunlulus}',
					agamacalon = '{$this->agamacalon}',
					namaortu ='{$this->namaortu}',
					alamatlengkap = '{$this->alamatlengkap}',
					jalan	= '{$this->jalan}',
					rt = '{$this->rt}',
					rw	= '{$this->rw}',
					kelurahan = '{$this->kelurahan}',
					kecamatan = '{$this->kecamatan}',
					kota	= '{$this->kota}',
					jarak = '{$this->jarak}',
					notel = '{$this->notel}',
					nokk ='{$this->nokk}',
					kerjaortu = '{$this->kerjaortu}',
					agamaortu = '{$this->agamaortu}',
					noun = '{$this->noun}',
					nilaiindo = '{$this->nilaiindo}',
					nilaiinggris = '{$this->nilaiinggris}',
					nilaimtk = '{$this->nilaimtk}',
					nilaiipa = '{$this->nilaiipa}',
					jumlahnilai ='{$this->jumlahnilai}',
					terbitan_dokumen = '{$this->terbitan_dokumen}',
					kp4 = '{$this->kp4}',
					skngajar = '{$this->skngajar}',
					skawal ='{$this->skawal}',
					sp  = '{$this->sp }',
					pilihansekolah ='{$this->pilihansekolah}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'
					";
				
			echo die($sql);
			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;

		}

		public function updateDataWPS() 
		{	
		
			$db = new Database();
			$dbConnect = $db->connect();
			
			$sql = "UPDATE pendaftaran SET
					namacalon = '{$this->namacalon}',
					tempatlahir ='{$this->tempatlahir}',
					tanggallahir = '{$this->tanggallahir}',
					asalsekolah = '{$this->asalsekolah}',
					tahunlulus = '{$this->tahunlulus}',
					agamacalon = '{$this->agamacalon}',
					namaortu ='{$this->namaortu}',
					alamatlengkap = '{$this->alamatlengkap}',
					jalan	= '{$this->jalan}',
					rt = '{$this->rt}',
					rw	= '{$this->rw}',
					kelurahan = '{$this->kelurahan}',
					kecamatan = '{$this->kecamatan}',
					kota	= '{$this->kota}',
					jarak = '{$this->jarak}',
					notel = '{$this->notel}',
					nokk ='{$this->nokk}',
					lamamenetap ='{$this->lamamenetap}',
					kerjaortu = '{$this->kerjaortu}',
					agamaortu = '{$this->agamaortu}',
					noun = '{$this->noun}',
					nilaiindo = '{$this->nilaiindo}',
					nilaiinggris = '{$this->nilaiinggris}',
					nilaimtk = '{$this->nilaimtk}',
					nilaiipa = '{$this->nilaiipa}',
					jumlahnilai ='{$this->jumlahnilai}',
					jarakortu = '{$this->jarakortu}',
					pilihansekolah ='{$this->pilihansekolah}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'
					";
				

			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;

		}


		
		
	
		/////////////////////////////////////////////////
		
		public function create() {
			$db = new Database();
			
			// Membuka koneksi
			$dbConnect = $db->connect();
			
		
			
			$sql1 = "INSERT INTO ktp
					(
						nama,
						jenis_kelamin,
						tempat_lahir,
						tanggal_lahir,
						alamat,
						rt_rw,
						kelurahan,
						kecamatan,
						provinsi,
						agama,
						kabupaten_kota,
						golongan_darah,
						scan_ktp,
						status_perkawinan,
						kewarganegaraan,
						nik,
						pekerjaan,
						nm_awal_photo
					)
					VALUES
					(
						'{$this->nama}',
						'{$this->jenis_kelamin}',
						'{$this->tempat_lahir}',
						'{$this->tanggal_lahir}',
						'{$this->alamat}',
						'{$this->rt_rw}',
						'{$this->kelurahan}',
						'{$this->kecamatan}',
						'{$this->provinsi}',
						'{$this->agama}',
						'{$this->kabupaten_kota}',
						'{$this->golongan_darah}',
						'{$this->scan_ktp}',
						'{$this->status_perkawinan}',
						'{$this->kewarganegaraan}',
						'{$this->nik}',
						'{$this->pekerjaan}',
						'{$this->nm_awal_photo}'
					)";
					
				
			$data = $dbConnect->query($sql1);
					
			//menampung error query simpan data
			$error = $dbConnect->error;
		
			//menutup koneksi
			$dbConnect = $db->close();
			
			//mengembalikan nilai error
			return $error;
		}
		
		public function update() {
			$db = new Database();
			//membukan koneksi
			$dbConnect = $db->connect();
			
			//query menyimpan data
			$sql = "UPDATE pendaftaran
					SET status = '{$this->status}'
					WHERE nomor_pendaftar = '{$this->nomor_pendaftar}'";
			
			// Query untuk menyimpan data ke historyverifikasi
			$sql2 = "INSERT INTO historyverifikasi
					(
						noun,
						idhistory,
						tanggal,
						jam,
						namauser
					)
					VALUES
					(
						'{$this->noun}',
						'{$this->idhistory}',
						'{$this->tanggal}',
						'{$this->jam}',
						'{$this->namauser}'
					)";

			$data = $dbConnect->query($sql);
			$data = $dbConnect->query($sql2);
			
			// Menampung error query simpan data
			$error = $dbConnect->error;
			
			// Menutup koneksi
			$dbConnect = $db->close();
			
			// Mengembalikan nilai error
			return $error;
		}
	}
?>