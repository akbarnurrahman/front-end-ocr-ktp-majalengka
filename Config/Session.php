<?php
	class Session {
		
		public function BukaSession()
		{
			Session_start();
		}
		
	
		
		public function Autentikasi()
		{
			if($_session == null){
				header("location:index.php");
			}
		}
	
		

	}
		
?>