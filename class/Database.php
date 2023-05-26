<?php

	class Database {
	
		// Variable Koneksi
		private $conn;
		
		// Method untuk menghubungkan ke database
		public function connect() {
			$this->conn = new mysqli("localhost", "root", "", "berkah");
			return $this->conn;
		}
		
		// Method untuk memutuskan koneksi dengan database
		public function close() {
			return $this->conn->close();
		}
	}
	
?>