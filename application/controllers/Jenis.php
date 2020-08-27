<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jenis_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['title'] = 'Manajemen Jenis Pinjaman';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('jenis/index', $data);
        $this->load->view('templates/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Jenis_model->json();
    }

    public function read($id)
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen Jenis Pinjaman';
        $row = $this->Jenis_model->get_by_id($id);
        if ($row) {
            $data['jenis'] = array(
                'id' => $row->id,
                'jenis' => $row->jenis,
                'keterangan' => $row->keterangan,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('jenis/read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('user'));
        }
    }

    public function create()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen Jenis Pinjaman';
        $data['input'] = array(
            'id' => set_value('id'),
            'jenis' => set_value('jenis'),
            'keterangan' => set_value('keterangan'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('jenis/create', $data);
        $this->load->view('templates/footer');
    }

    public function _create()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen Jenis Pinjaman';
        $data['input'] = array(
            'id' => set_value('id'),
            'jenis' => set_value('jenis'),
            'keterangan' => set_value('keterangan'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('jenis/create-action', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->_create();
        } else {
            $data = array(
                'jenis' => $this->input->post('jenis', TRUE),
                'keterangan' => $this->input->post('keterangan', TRUE),
            );

            $this->Jenis_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>');
            redirect(site_url('jenis'));
        }
    }

    public function update($id)
    {
        $this->_rules();
        $row = $this->Jenis_model->get_by_id($id);

        if ($row) {
            if ($this->form_validation->run() == FALSE) {
                $this->read($id);
            } else {
                $data = array(
                    'jenis' => $this->input->post('jenis', TRUE),
                    'keterangan' => $this->input->post('keterangan', TRUE),
                );
                // var_dump($data);
                $this->Jenis_model->update($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah.</div>');
                redirect(base_url('jenis/read/') . $id);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(base_url('jenis/read/') . $id);
        }
    }

    public function delete($id)
    {
        $row = $this->Jenis_model->get_by_id($id);

        if ($row) {
            $this->Jenis_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
            redirect(site_url('jenis'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('jenis'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Jenis.php */
/* Location: ./application/controllers/Jenis.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */