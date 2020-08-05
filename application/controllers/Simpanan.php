<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Simpanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Simpanan_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('simpanan/simpanan_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Simpanan_model->json();
    }

    public function read($id)
    {
        $row = $this->Simpanan_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'id_anggota' => $row->id_anggota,
                'id_jenis' => $row->id_jenis,
                'tgl_simpan' => $row->tgl_simpan,
                'jumlah' => $row->jumlah,
                'id_user' => $row->id_user,
                'waktu_insert' => $row->waktu_insert,
            );
            $this->load->view('simpanan/simpanan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('simpanan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('simpanan/create_action'),
            'id' => set_value('id'),
            'id_anggota' => set_value('id_anggota'),
            'id_jenis' => set_value('id_jenis'),
            'tgl_simpan' => set_value('tgl_simpan'),
            'jumlah' => set_value('jumlah'),
            'id_user' => set_value('id_user'),
            'waktu_insert' => set_value('waktu_insert'),
        );
        $this->load->view('simpanan/simpanan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'id' => $this->input->post('id', TRUE),
                'id_anggota' => $this->input->post('id_anggota', TRUE),
                'id_jenis' => $this->input->post('id_jenis', TRUE),
                'tgl_simpan' => $this->input->post('tgl_simpan', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'waktu_insert' => $this->input->post('waktu_insert', TRUE),
            );

            $this->Simpanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('simpanan'));
        }
    }

    public function update($id)
    {
        $row = $this->Simpanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('simpanan/update_action'),
                'id' => set_value('id', $row->id),
                'id_anggota' => set_value('id_anggota', $row->id_anggota),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'tgl_simpan' => set_value('tgl_simpan', $row->tgl_simpan),
                'jumlah' => set_value('jumlah', $row->jumlah),
                'id_user' => set_value('id_user', $row->id_user),
                'waktu_insert' => set_value('waktu_insert', $row->waktu_insert),
            );
            $this->load->view('simpanan/simpanan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('simpanan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('', TRUE));
        } else {
            $data = array(
                'id' => $this->input->post('id', TRUE),
                'id_anggota' => $this->input->post('id_anggota', TRUE),
                'id_jenis' => $this->input->post('id_jenis', TRUE),
                'tgl_simpan' => $this->input->post('tgl_simpan', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'waktu_insert' => $this->input->post('waktu_insert', TRUE),
            );

            $this->Simpanan_model->update($this->input->post('', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('simpanan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Simpanan_model->get_by_id($id);

        if ($row) {
            $this->Simpanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('simpanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('simpanan'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id', 'id', 'trim|required');
        $this->form_validation->set_rules('id_anggota', 'id anggota', 'trim|required');
        $this->form_validation->set_rules('id_jenis', 'id jenis', 'trim|required');
        $this->form_validation->set_rules('tgl_simpan', 'tgl simpan', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
        $this->form_validation->set_rules('id_user', 'id user', 'trim|required');
        $this->form_validation->set_rules('waktu_insert', 'waktu insert', 'trim|required');

        $this->form_validation->set_rules('', '', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Simpanan.php */
/* Location: ./application/controllers/Simpanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 11:37:12 */
/* http://harviacode.com */
