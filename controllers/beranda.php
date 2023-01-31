<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {


    // function __construct()
    // {
    //    parent::__construct();
    //     $this->load->database();
    // }
	public function index()
	{
        $data['hotel'] = $this->db->get('pesanan')->result_array();

		$this->load->view('beranda', $data);
	}
    public function tambah_data()
    {
        $this->load->view('tambah.php');
    }
    public function proses()
    {
        $id = $this->input->post('id');
        $nama_pemesan = $this->input->post('nama_pemesan');
        $nomor_ruangan = $this->input->post('nomor_ruangan');

        $query = $this->db->insert('pesanan' , array('id' => $id , 'nama_pemesan' => $nama_pemesan , 'nomor_ruangan' => $nomor_ruangan));

        if($query){
            redirect('beranda');
        }
        //$this->load->view('proses_tambah.php');
    }
}
