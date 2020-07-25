<?php
	ini_set('display_errors',FALSE);
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "koperasi";
	
	
	$connect = new mysqli ($host,$user,$pass,$db);
	
	if ($connect&&$db){
		//echo "berhasil : )";
	}else{
?>
	<script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
	}
	
	
	class Tabungan{
		private $saldo;
		function Tabungan($a){
			$this->saldo = $a;
		}
		function simpan($sim){
			$this->saldo = $this->saldo + $sim;
		}
		function pinjam($pin){
			$this->saldo = $this->saldo - $pin;
		}
		function cek_saldo(){
			return $this->saldo;
		}
	};
?>