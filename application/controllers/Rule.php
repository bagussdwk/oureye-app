<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function miopia()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['miopia'] = $this->rule->getRuleMiopia();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_miopia');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }

  public function hipermetropia()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['hipermetropia'] = $this->rule->getRuleHipermetropia();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_Hipermetropia');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }

  public function astigmatisma()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['astigmatisma'] = $this->rule->getRuleAstigmatisma();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_astigmatisma');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }
  public function presbiopi()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['presbiopi'] = $this->rule->getRulePresbiopi();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_presbiopi');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }


  public function tambahRule()
  {
    $this->admin->tambahRule();
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('admin/rule');
  }

  public function editRule()
  {
    $this->admin->editRule();
    $this->session->set_flashdata('flash', 'Diubah');
    redirect('admin/rule');
  }

  public function hapusRule($id)
  {
    $this->admin->hapusRule($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/rule');
  }
}
