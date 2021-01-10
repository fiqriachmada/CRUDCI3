<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Tamu_model', 'agm');
    }

    public function index()
    {
        $data['tamu'] = $this->agm->getTamu();
        $this->load->view('pages/layout/header');
        $this->load->view('pages/Home', $data);
        $this->load->view('pages/layout/footer');
    }

    public function add()
    {
        $this->load->view('pages/layout/header');
        $this->load->view('pages/Tambah_Tamu');
        $this->load->view('pages/layout/footer');
    }

    public function insert()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $this->agm->insert($nama, $alamat);
        redirect(base_url());
    }

    public function edit($id)
    {
        $data['tamu'] = $this->agm->edit($id);

        $this->load->view('pages/layout/header');
        $this->load->view('pages/Update_Tamu', $data);
        $this->load->view('pages/layout/footer');
    }
    public function update($id)
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $this->agm->update($id, $nama, $alamat);
        redirect(base_url());
    }



    public function delete($id)
    {
        $this->agm->delete($id);
        redirect(base_url());
    }
}
