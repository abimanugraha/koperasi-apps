<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pinjaman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjaman_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
        $this->load->model('Anggota_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pinjaman'] = $this->Pinjaman_model->get_data_pinjaman();
        $data['title'] = 'Transaksi Pinjaman';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pinjaman/index', $data);
        $this->load->view('templates/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Pinjaman_model->json();
    }

    public function read($id)
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Transaksi Pinjaman';
        $data['list_anggota'] = $this->db->get_where('anggota', ['status' => '1'])->result();
        $row = $this->Pinjaman_model->get_data_pinjaman_by_id($id);

        if ($row) {
            $data['pinjaman'] = array(
                'id' => $row->id,
                'id_anggota' => $row->id_anggota,
                'tgl_pinjam' => $row->tgl_pinjam,
                'jumlah' => $row->jumlah,
                'durasi' => $row->durasi,
                'bunga' => $row->bunga,
                'status' => $row->status,
                'id_user' => $row->id_user,
                'waktu_insert' => strtotime($row->waktu_insert),
                'bulan' => set_value('bulan'),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pinjaman/read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('pinjaman'));
        }
    }

    public function create()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Transaksi Pinjaman';
        $data['list_anggota'] = $this->db->get_where('anggota', ['status' => '1'])->result();
        $data['list_jenis'] = $this->Pinjaman_model->get_all();
        $data['input'] = array(
            'id_anggota' => set_value('id_anggota'),
            'tgl_pinjam' => set_value('tgl_pinjam'),
            'jumlah' => set_value('jumlah'),
            'durasi' => set_value('durasi'),
            'bunga' => set_value('bunga'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pinjaman/create', $data);
        $this->load->view('templates/footer');
    }

    public function _create()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Transaksi Pinjaman';
        $data['list_anggota'] = $this->db->get_where('anggota', ['status' => '1'])->result();
        $data['input'] = array(
            'id_anggota' => set_value('id_anggota'),
            'tgl_pinjam' => set_value('tgl_pinjam'),
            'jumlah' => set_value('jumlah'),
            'durasi' => set_value('durasi'),
            'bunga' => set_value('bunga'),
            'bulan' => set_value('bulan'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pinjaman/create-action', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->_create();
        } else {
            if ($this->input->post('bulan', TRUE) == 1) {
                $durasi = $this->input->post('durasi', TRUE);
            } else {
                $durasi = $this->input->post('durasi', TRUE);
                $bulan = $this->input->post('bulan', TRUE);
                $durasi = $durasi * $bulan;
            }
            $data = array(
                'id_anggota' => $this->input->post('id_anggota', TRUE),
                'tgl_pinjam' => $this->input->post('tgl_pinjam', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'durasi' => $durasi,
                'bunga' => $this->input->post('bunga', TRUE),
                'status' => $durasi,
                'id_user' => $this->input->post('id_user', TRUE),
            );
            $this->Pinjaman_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>');
            redirect(site_url('pinjaman'));
        }
    }

    public function update($id)
    {
        $this->_rules();
        $row = $this->Pinjaman_model->get_by_id($id);

        if ($row) {
            if ($this->form_validation->run() == FALSE) {
                $this->read($id);
            } else {
                $data = array(
                    'id_anggota' => set_value('id_anggota', $row->id_anggota),
                    'tgl_pinjam' => set_value('tgl_pinjam', $row->tgl_pinjam),
                    'jumlah' => set_value('jumlah', $row->jumlah),
                    'durasi' => set_value('durasi', $row->durasi),
                    'bunga' => set_value('bunga', $row->bunga),
                    'status' => set_value('status', $row->status),
                    'id_user' => set_value('id_user', $row->id_user),
                    'waktu_insert' => set_value('waktu_insert', $row->waktu_insert),
                );
                $this->Pinjaman_model->update($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah.</div>');
                redirect(base_url('pinjaman/read/') . $id);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(base_url('pinjaman'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'id_anggota' => $this->input->post('id_anggota', TRUE),
                'tgl_pinjam' => $this->input->post('tgl_pinjam', TRUE),
                'jumlah' => $this->input->post('jumlah', TRUE),
                'durasi' => $this->input->post('durasi', TRUE),
                'bunga' => $this->input->post('bunga', TRUE),
                'status' => $this->input->post('status', TRUE),
                'id_user' => $this->input->post('id_user', TRUE),
                'waktu_insert' => $this->input->post('waktu_insert', TRUE),
            );

            $this->Pinjaman_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pinjaman'));
        }
    }

    public function delete($id)
    {
        $row = $this->Pinjaman_model->get_by_id($id);

        if ($row) {
            $this->Pinjaman_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
            redirect(site_url('pinjaman'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('pinjaman'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_anggota', 'id anggota', 'trim|required');
        $this->form_validation->set_rules('tgl_pinjam', 'tgl pinjam', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
        $this->form_validation->set_rules('durasi', 'durasi', 'trim|required');
        $this->form_validation->set_rules('bunga', 'bunga', 'trim|required|numeric');
        // $this->form_validation->set_rules('status', 'status', 'trim|required');
        // $this->form_validation->set_rules('id_user', 'id user', 'trim|required');
        // $this->form_validation->set_rules('waktu_insert', 'waktu insert', 'trim|required');
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Pinjaman.php */
/* Location: ./application/controllers/Pinjaman.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */