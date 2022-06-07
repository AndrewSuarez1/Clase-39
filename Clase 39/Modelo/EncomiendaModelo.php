<?php
	class encomienda_model{
		
		private $db;
		private $Encomienda;
	 
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->Encomienda = array();
			
		}
		
		public function getEncomienda(){
			
			$sql = "SELECT * FROM encomienda";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){

				$this->Encomienda[]=$filas;
			}

			return $this->Encomienda;
			
		}

	}
    
?>