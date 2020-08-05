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
    }

    public function index()
    {
        $this->load->view('pinjaman/pinjaman_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pinjaman_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pinjaman_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_anggota' => $row->id_anggota,
		'tgl_pinjam' => $row->tgl_pinjam,
		'jumlah' => $row->jumlah,
		'durasi' => $row->durasi,
		'bunga' => $row->bunga,
		'status' => $row->status,
		'id_user' => $row->id_user,
		'waktu_insert' => $row->waktu_insert,
	    );
            $this->load->view('pinjaman/pinjaman_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pinjaman'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pinjaman/create_action'),
	    'id' => set_value('id'),
	    'id_anggota' => set_value('id_anggota'),
	    'tgl_pinjam' => set_value('tgl_pinjam'),
	    'jumlah' => set_value('jumlah'),
	    'durasi' => set_value('durasi'),
	    'bunga' => set_value('bunga'),
	    'status' => set_value('status'),
	    'id_user' => set_value('id_user'),
	    'waktu_insert' => set_value('waktu_insert'),
	);
        $this->load->view('pinjaman/pinjaman_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_anggota' => $this->input->post('id_anggota',TRUE),
		'tgl_pinjam' => $this->input->post('tgl_pinjam',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'durasi' => $this->input->post('durasi',TRUE),
		'bunga' => $this->input->post('bunga',TRUE),
		'status' => $this->input->post('status',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'waktu_insert' => $this->input->post('waktu_insert',TRUE),
	    );

            $this->Pinjaman_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pinjaman'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pinjaman_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pinjaman/update_action'),
		'id' => set_value('id', $row->id),
		'id_anggota' => set_value('id_anggota', $row->id_anggota),
		'tgl_pinjam' => set_value('tgl_pinjam', $row->tgl_pinjam),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'durasi' => set_value('durasi', $row->durasi),
		'bunga' => set_value('bunga', $row->bunga),
		'status' => set_value('status', $row->status),
		'id_user' => set_value('id_user', $row->id_user),
		'waktu_insert' => set_value('waktu_insert', $row->waktu_insert),
	    );
            $this->load->view('pinjaman/pinjaman_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pinjaman'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_anggota' => $this->input->post('id_anggota',TRUE),
		'tgl_pinjam' => $this->input->post('tgl_pinjam',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'durasi' => $this->input->post('durasi',TRUE),
		'bunga' => $this->input->post('bunga',TRUE),
		'status' => $this->input->post('status',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'waktu_insert' => $this->input->post('waktu_insert',TRUE),
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
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pinjaman'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pinjaman'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_anggota', 'id anggota', 'trim|required');
	$this->form_validation->set_rules('tgl_pinjam', 'tgl pinjam', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('durasi', 'durasi', 'trim|required');
	$this->form_validation->set_rules('bunga', 'bunga', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('waktu_insert', 'waktu insert', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pinjaman.php */
/* Location: ./application/controllers/Pinjaman.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */