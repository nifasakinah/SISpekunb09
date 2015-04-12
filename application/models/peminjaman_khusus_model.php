<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class peminjaman_khusus_model extends CI_Model 
	{
		public $table = 'Peminjaman_Khusus';
		
		public function createNewPeminjamanKhusus($jumlahSpekun, $jamAwal, $jamAkhir, $pesan, $organisasi, $nama, $tahun, $tanggal, $bulan)
		{
			$data['Nama']	 	= 'Nama';
			$data['Organisasi']	 	= 'Organisasi';
		$data['Jumlah_Spekun']	= 'Jumlah_Spekun';				
			$data['Jam_Awal']	 	= 'Jam_Awal';
			$data['Jam_Akhir']	 	= 'Jam_Akhir';
$data['Tanggal']	 	= array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31');
data['Bulan']	 	= array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12');
$data['Tahun']	 	= array('2014'=>'2014',
                            '2015'=>'2015');
$data['Keterangan']	= 'Keterangan';	
$data['summary']	= 'Summary';
			$this->db->insert($this->table,$data);
		}
		
		public function updatePeminjamanKhusus($id, $jumlahSpekun, $jamAwal, $jamAkhir, $pesan, $organisasi, $nama, $tahun, $tanggal, $bulan)
		{
			$data = array(
				   'Nama' => $nama ,
				   'organisasi' => $organisasi ,
				   'jumlah_spekun' => $jumlahSpekun,
				   'jam_awal' => $jamAwal,
				   'jam_akhir' => $jamAkhir,
				   'pesan' => $pesan,
				   'tahun' => $tahun,
				   'Tanggal' => $tanggal,
				   'bulan' => $bulan
				);
			$this->db->where('Id_Peminjaman_Khusus',$id);
			$this->db->update($this->table,$data);
		
		}
		public function getAllPeminjamanKhusus()
		{
			return $this->db->get($this->table);
		}
	}	
?>
