<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengambilan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengambilan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pengambilan/pengambilan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pengambilan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pengambilan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_anggota' => $row->id_anggota,
		'tgl_ambil' => $row->tgl_ambil,
		'id_jenis' => $row->id_jenis,
		'jumlah' => $row->jumlah,
		'id_user' => $row->id_user,
		'waktu_insert' => $row->waktu_insert,
	    );
            $this->load->view('pengambilan/pengambilan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengambilan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengambilan/create_action'),
	    'id' => set_value('id'),
	    'id_anggota' => set_value('id_anggota'),
	    'tgl_ambil' => set_value('tgl_ambil'),
	    'id_jenis' => set_value('id_jenis'),
	    'jumlah' => set_value('jumlah'),
	    'id_user' => set_value('id_user'),
	    'waktu_insert' => set_value('waktu_insert'),
	);
        $this->load->view('pengambilan/pengambilan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_anggota' => $this->input->post('id_anggota',TRUE),
		'tgl_ambil' => $this->input->post('tgl_ambil',TRUE),
		'id_jenis' => $this->input->post('id_jenis',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'waktu_insert' => $this->input->post('waktu_insert',TRUE),
	    );

            $this->Pengambilan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengambilan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengambilan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengambilan/update_action'),
		'id' => set_value('id', $row->id),
		'id_anggota' => set_value('id_anggota', $row->id_anggota),
		'tgl_ambil' => set_value('tgl_ambil', $row->tgl_ambil),
		'id_jenis' => set_value('id_jenis', $row->id_jenis),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'id_user' => set_value('id_user', $row->id_user),
		'waktu_insert' => set_value('waktu_insert', $row->waktu_insert),
	    );
            $this->load->view('pengambilan/pengambilan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengambilan'));
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
		'tgl_ambil' => $this->input->post('tgl_ambil',TRUE),
		'id_jenis' => $this->input->post('id_jenis',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'waktu_insert' => $this->input->post('waktu_insert',TRUE),
	    );

            $this->Pengambilan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengambilan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengambilan_model->get_by_id($id);

        if ($row) {
            $this->Pengambilan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengambilan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengambilan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_anggota', 'id anggota', 'trim|required');
	$this->form_validation->set_rules('tgl_ambil', 'tgl ambil', 'trim|required');
	$this->form_validation->set_rules('id_jenis', 'id jenis', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('waktu_insert', 'waktu insert', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengambilan.php */
/* Location: ./application/controllers/Pengambilan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:35:23 */
/* http://harviacode.com */