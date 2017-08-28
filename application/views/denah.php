<?php 

class Denah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_denah');
	}
	
	function index(){
		if($this->session->userdata('status')){
			//$data['sesi']=$this->M_denah->ambilSesi();
			$this->load->view('pilihtanggal');
		}
		else {
			$data['error']='';
			$data['kelas']='';
			$this->load->view('index',$data);
		}
	}

	function displayPilihRuangan(){
		$data['tgl']=$this->input->post('date');
		$tgl = $data['tgl'];
		$this->load->view('pilihRuangan',$data);
		$this->session->set_userdata('tgl',$tgl);
	}

	function displayPilihJam($noruang){
		# ambil data noruangan dan tanggal dari halaman sebelumnya
		$data['noruang']= 'B'.$noruang;
		$tgl=$this->session->userdata('tgl');
		$data['tgl']= $tgl;

		# ambil sesi yang available
		$this->load->model('M_denah');
		$data['sesi_tersedia'] = $this->M_denah->ambilSesi($tgl,$noruang);
		$this->load->view('pilihJam',$data);
	}

	function displayReservasi(){
		$data['tgl'] = $this->input->post('date');
		$data['noruang']=$this->input->post('room');
		$selectedSesi = $this->input->post('sesi');
		
		foreach ($selectedSesi as $line) {
			$nyeleksesi = $this->M_denah->selectSesi($line);
			$nama_sesi[] = $nyeleksesi['nama_sesi'];
			$id_sesi[] = $nyeleksesi['id_sesi'];
			$jam_sesi[] = $nyeleksesi['jam_sesi'];
		}
		$data['nama_sesi'] = $nama_sesi;
		$data['id_sesi'] = $id_sesi;
		$data['jam_sesi'] = $jam_sesi;
		$data['sesi'] = $selectedSesi;
		$this->session->set_userdata('selectedSesi',$selectedSesi);
		$this->load->view('reservation',$data);
	}
	
	function insertTransaksi(){
		$name = $this->input->post('name');
		$date = $this->input->post('date');
		$ket = $this->input->post('subject');
		$room = $this ->input->post('room');
		$noruang = substr($room, 1);
		$id_admin = $this->session->userdata('id_admin');
		# ambil id Transaksi untuk insert ke transaksi detail
		$lastNoTransaksi= $this->M_denah->ambilLastIdReservasi();
		$idReservasi = $lastNoTransaksi + 1;
		# diforeach soalnya data id_adminnya bukan berupa string jadi ga bisa langsung di echo
		foreach ($id_admin as $line) {
			$id_admin_db = $line;
		}
		$this->M_denah->insertReservationHeader($name,$id_admin_db);
		$selectedSesi = $this->session->userdata('selectedSesi');
		foreach ($selectedSesi as $line) {
			$this->M_denah->insertReservationDetail($idReservasi,$date,$noruang,$line,$ket);
			$nyeleksesi = $this->M_denah->selectSesi($line);
			$nama_sesi[] = $nyeleksesi['nama_sesi'];
			$id_sesi[] = $nyeleksesi['id_sesi'];
			$jam_sesi[] = $nyeleksesi['jam_sesi'];
		}
		$data['name'] = $name;
		$data['tgl'] = $date;
		$data['room'] = $room;
		$data['ket'] = $ket;
		$data['sesi'] = $selectedSesi;
		$data['nama_sesi'] = $nama_sesi;
		$data['id_sesi'] = $id_sesi;
		$data['jam_sesi'] = $jam_sesi;
		$this->load->view('bukti',$data);
		/*echo "$idReservasi";
		echo '<pre>'; print_r($this->session->all_userdata());exit;*/
	}
	/*# Untuk delete Sesi
	function deleteSesi($sesi){
		$selectedSesi[] = $this->session->userdata('selectedSesi');
		if (($key = array_search($sesi, $selectedSesi)) !== false) {
		    unset($selectedSesi[$key]);
		}
	}*/

	# dummy
	

	# Display Pilih Ruangan Back, untuk tombol Back to Map yang ada di displayPilihJam
	function displayPilihRuanganBack($tgl){
		$data['tgl']=$tgl;
		$this->session->set_userdata('tgl',$tgl);
		$this->load->view('pilihRuangan',$data);
	}
}