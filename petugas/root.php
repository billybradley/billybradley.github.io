<?php
class root
{
	function __construct()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "koperasi";

		$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

		if (!$connect) {
			echo "Tidak terhubung ke database";
		}
	}
	public function tambah($kode_user, $kode_petugas, $kode_p, $nama_petugas, $alamat_petugas, $telp, $jenis_kelamin, $u_entry, $tgl_entri)
	{
		global $connect;
		$qtambah = mysqli_query($connect, "INSERT INTO t_petugas values('$kode_petugas','$nama_petugas','$alamat_petugas','$telp','$jenis_kelamin','$u_entry','$tgl_entri');");
		if ($qtambah) {
			header("location:../index.php?pilih=4.7");
		}
	}
	public function edit($kode_user, $kode_petugas, $kode_p, $nama_petugas, $alamat_petugas, $telp, $jenis_kelamin, $u_entry, $tgl_entri)
	{
		global $connect;
		$qubah = mysqli_query($connect, "UPDATE t_petugas SET nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',no_telp='$telp',jenis_kelamin='$jenis_kelamin',u_entry='$u_entry',tgl_entri='$tgl_entri' WHERE kode_petugas='$kode_petugas'");
		if ($qubah) {
			header("location:../index.php?pilih=4.7");
		} else {
			echo "Edit Data Gagal!!!";
		}
	}
	public function hapus($kode_user, $kode_petugas, $kode_p, $nama_petugas, $alamat_petugas, $telp, $jenis_kelamin, $u_entry, $tgl_entri)
	{
		global $connect;
		$qdelete = mysqli_query($connect, "DELETE FROM t_petugas WHERE kode_petugas='$kode_p'");
		if ($qdelete) {
			header("location:../index.php?pilih=4.7");
		} else {
			echo "Hapus Data Gagal!!!!";
		}
	}
}
