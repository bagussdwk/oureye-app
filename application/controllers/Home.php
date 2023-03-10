<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $this->load->view('home/index', $data);
  }
  public function hasil_diagnosa()
  {
    $this->load->view('home/hasil_diagnosa');
  }

  public function article()
  {
    $this->load->model('Artikel_model', 'artikel');
    $data['artikel'] = $this->artikel->getArtikel();
    $this->load->view('home/artikel', $data);
  }

  public function diagnosa()
  {
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
    $this->session->set_flashdata('hasil');
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('home/diagnosa', $data);
  }
}
