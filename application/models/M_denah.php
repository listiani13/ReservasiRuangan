<?php 

class M_denah extends CI_Model{	
	function ambilSesi($tgl,$noruang){

		$queryString = "SELECT id_sesi, jam_sesi, CASE when 
		EXISTS (SELECT ID_SESI FROM TEMP WHERE 
		SESI.ID_SESI = temp.id_sesi AND tgl_reservasi = '$tgl' AND no_ruangan = '$noruang' ) 
		THEN 'NOT AVAILABLE' ELSE 'AVAILABLE' END AS Status FROM SESI";
		$query = $this->db->query($queryString);
		return $query;
	}

	public function selectSesi($id)
	{
		$this->db->select('*');
		$this->db->where('id_sesi',$id);
		$result = $this ->db->get('sesi');
		return $result->row_array();
	}
	public function ambilLastIdReservasi(){
		$host = "localhost";
		$dbname = "reservasi_db";
		$username = "root";
		$password = "";
		$conn = new PDO ("mysql:host=$host; dbname=$dbname", $username, $password);
		
		$query = "SELECT max(id_reservasi) AS last FROM `reservation`";
		$result = $conn -> query($query);
		$result = $result->fetch();
		$lastNoTransaksi = $result['last'];
		return $lastNoTransaksi;
	}
	public function insertReservationHeader($name,$id_admin)
	{
		$data = array(
			'nama_peminjam'=>$name,
			'id_admin'=>$id_admin
			);
		$this->db->insert('reservation',$data);
	}
	public function insertReservationDetail($id_reservasi,$date,$no_ruangan,$id_sesi,$ket)
	{
		$data = array(
			'id_reservasi'=>$id_reservasi,
			'tgl_reservasi'=>$date,
			'no_ruangan'=>$no_ruangan,
			'id_sesi'=>$id_sesi,
			'keterangan'=>$ket
			);
		$this->db->insert('detail',$data);
	}
	
}