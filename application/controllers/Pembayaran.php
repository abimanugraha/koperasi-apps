<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pembayaran/pembayaran_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Pembayaran_model->json();
    }

    public function read($id)
    {
        $row = $this->Pembayaran_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'id_pinjaman' => $row->id_pinjaman,
                'angsuran' => $row->angsuran,
                'cicilan' => $row->cicilan,
                'tgl_jatuh_tempo' => $row->tgl_jatuh_tempo,
                'tgl_bayar' => $row->tgl_bayar,
                'jumlah' => $row->jumlah,
                'id_user' => $row->id_user,
                'waktu_insert' => $row->waktu_insert,
            );
            $this->load->view('pembayaran/pembayaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pembayaran/create_action'),
            'id' => set_value('id'),
            'id_pinjaman' => set_value('id_pinjaman'),
            'angsuran' => set_value('angsuran'),
            'cicilan' => set_value('cicilan'),
            'tgl_jatuh_tempo' => set_value('tgl_jatuh_tempo'),
            'tgl_bayar' => set_value('tgl_bayar'),
            'jumlah' => set_value('jumlah'),
            'id_user' => set_value('id_user'),
            'waktu_insert' => set_value('waktu_insert'),
        );
        $this->load->view('pembayaran/pembayaran_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'id_pinjaman' => $this->input->post('id_pinjaman', TRUE),
                'angsuran' => $this->input->post('angsuran', TRUE),
                'cicilan' => $this->input->post('cicilan', TRUE),
                'tgl_jatuh_tempo' => $this->input->post('tgl_jatuh_tempo', TRUE),
                'tgl_bayar' => $this->input->post('tgl_bayar', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'waktu_insert' => $this->input->post('waktu_insert', TRUE),
            );

            $this->Pembayaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pembayaran'));
        }
    }

    public function update($id)
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pembayaran/update_action'),
                'id' => set_value('id', $row->id),
                'id_pinjaman' => set_value('id_pinjaman', $row->id_pinjaman),
                'angsuran' => set_value('angsuran', $row->angsuran),
                'cicilan' => set_value('cicilan', $row->cicilan),
                'tgl_jatuh_tempo' => set_value('tgl_jatuh_tempo', $row->tgl_jatuh_tempo),
                'tgl_bayar' => set_value('tgl_bayar', $row->tgl_bayar),
                'jumlah' => set_value('jumlah', $row->jumlah),
                'id_user' => set_value('id_user', $row->id_user),
                'waktu_insert' => set_value('waktu_insert', $row->waktu_insert),
            );
            $this->load->view('pembayaran/pembayaran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'id_pinjaman' => $this->input->post('id_pinjaman', TRUE),
                'angsuran' => $this->input->post('angsuran', TRUE),
                'cicilan' => $this->input->post('cicilan', TRUE),
                'tgl_jatuh_tempo' => $this->input->post('tgl_jatuh_tempo', TRUE),
                'tgl_bayar' => $this->input->post('tgl_bayar', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'waktu_insert' => $this->input->post('waktu_insert', TRUE),
            );

            $this->Pembayaran_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pembayaran'));
        }
    }

    public function delete($id)
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $this->Pembayaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pembayaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pinjaman', 'id pinjaman', 'trim|required');
        $this->form_validation->set_rules('angsuran', 'angsuran', 'trim|required');
        $this->form_validation->set_rules('cicilan', 'cicilan', 'trim|required');
        $this->form_validation->set_rules('tgl_jatuh_tempo', 'tgl jatuh tempo', 'trim|required');
        $this->form_validation->set_rules('tgl_bayar', 'tgl bayar', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
        $this->form_validation->set_rules('id_user', 'id user', 'trim|required');
        $this->form_validation->set_rules('waktu_insert', 'waktu insert', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */