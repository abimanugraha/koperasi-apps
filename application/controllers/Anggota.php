<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
        require_once './vendor/fzaninotto/faker/src/autoload.php';
        $this->faker = Faker\Factory::create();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['anggota'] = $this->db->get('anggota')->result_array();
        $data['title'] = 'Manajemen Anggota';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Anggota_model->json();
    }

    public function read($id)
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen Anggota';
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data['user'] = array(
                'id' => $row->id,
                'username' => $row->username,
                'password' => $row->password,
                'email' => $row->email,
                'level' => $row->level,
                'foto' => $row->foto,
                'status' => $row->status,
                'date_created' => $row->date_created,
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('anggota/read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('anggota'));
        }
    }

    public function create()
    {
        // $this->Anggota_model->getDummyDataAnggota();
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['anggota'] = $this->db->get('anggota')->result_array();
        $data['title'] = 'Manajemen Anggota';

        $data['input'] = array(
            'id' => set_value('id'),
            'user_id' => set_value('user_id'),
            'nama' => set_value('nama'),
            'nik' => set_value('nik'),
            'tempat_lahir' => set_value('tempat_lahir'),
            'tgl_lahir' => set_value('tgl_lahir'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'pekerjaan' => set_value('pekerjaan'),
            'alamat' => set_value('alamat'),
            'no_hp' => set_value('no_hp'),
            'status' => set_value('status'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('anggota/create', $data);
        // $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function _create($error = null)
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['anggota'] = $this->db->get('anggota')->result_array();
        $data['title'] = 'Manajemen Anggota';

        $data['input'] = array(
            'id' => set_value('id'),
            'user_id' => set_value('user_id'),
            'nama' => set_value('nama'),
            'nik' => set_value('nik'),
            'tempat_lahir' => set_value('tempat_lahir'),
            'tgl_lahir' => set_value('tgl_lahir'),
            'jenis_kelamin' => set_value('jenis_kelamin'),
            'pekerjaan' => set_value('pekerjaan'),
            'alamat' => set_value('alamat'),
            'no_hp' => set_value('no_hp'),
            'status' => set_value('status'),
        );
        $data['error'] = $error;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('anggota/create-action', $data);
        // $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->_create();
        } else {
            $data = array(
                'user_id' => $this->input->post('user_id', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'pekerjaan' => $this->input->post('pekerjaan', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'status' => $this->input->post('status', TRUE),
            );
            $this->Anggota_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>');
            redirect(site_url('anggota'));
        }
    }

    public function update($id)
    {
        $row = $this->Anggota_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('anggota/update_action'),
                'id' => set_value('id', $row->id),
                'user_id' => set_value('user_id', $row->user_id),
                'nama' => set_value('nama', $row->nama),
                'nik' => set_value('nik', $row->nik),
                'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
                'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
                'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
                'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
                'alamat' => set_value('alamat', $row->alamat),
                'no_hp' => set_value('no_hp', $row->no_hp),
                'status' => set_value('status', $row->status),
            );
            $this->load->view('anggota/anggota_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('anggota'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'user_id' => $this->input->post('user_id', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                'pekerjaan' => $this->input->post('pekerjaan', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'status' => $this->input->post('status', TRUE),
            );
            $this->Anggota_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('anggota'));
        }
    }

    public function delete($id)
    {
        $row = $this->Anggota_model->get_by_id($id);

        if ($row) {
            $this->Anggota_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
            redirect(site_url('anggota'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('anggota'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('user_id', 'user id', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|is_unique[anggota.nik]');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required|is_unique[anggota.no_hp]|min_length[10]|max_length[13]');
        // $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */