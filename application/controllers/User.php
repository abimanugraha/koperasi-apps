<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
        $this->load->helper('date');
    }

    public function index()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->db->get('user')->result_array();
        $data['title'] = 'Manajemen User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->User_model->json();
    }

    public function read($id)
    {
        // echo $id;
        // die;
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen User';
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
            // var_dump($data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('user'));
        }
    }

    public function create()
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen User';
        $data['input'] = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
            'id' => set_value('id'),
            'username' => set_value('username'),
            'password' => set_value('password'),
            'email' => set_value('email'),
            'level' => set_value('level'),
            'foto' => set_value('foto'),
            'status' => set_value('status'),
            'date_created' => set_value('date_created'),
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/create', $data);
        $this->load->view('templates/footer');
    }

    public function _create($error = null)
    {
        $data['usr'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Manajemen User';
        $data['input'] = array(
            'button' => 'Create',
            'action' => site_url('user/create_action'),
            'id' => set_value('id'),
            'username' => set_value('username'),
            'password' => set_value('password'),
            'email' => set_value('email'),
            'level' => set_value('level'),
            'foto' => set_value('foto'),
            'status' => set_value('status'),
            'date_created' => set_value('date_created'),
        );
        $data['error'] = $error;
        // $this->load->view('user/user_form', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/create-action', $data);
        $this->load->view('templates/footer');
    }




    public function create_action()
    {
        $this->_rules();

        // Upload Foto Start
        $upload_foto = $_FILES['foto']['name'];
        if ($upload_foto) {
            $config['upload_path'] = './assets/img/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '1024';
            $config['file_name']    = $this->input->post('username', TRUE);
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $error = 1;
            } else {
                $error = 0;
            }
        } else {
            $foto = "default.png";
            $error = 1;
        }
        // Upload Foto End

        if ($this->form_validation->run() == FALSE || $error == 0) {
            $this->_create($error);
        } else {
            $path = $_FILES['foto']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($foto != "default.png") {
                $foto = $this->input->post('username', TRUE) . '.' . $ext;
            }
            $data = array(
                'username' => $this->input->post('username', TRUE),
                'password' => $this->input->post('password', TRUE),
                'email' => $this->input->post('email', TRUE),
                'level' => $this->input->post('level', TRUE),
                'foto' => $foto,
                'status' => $this->input->post('status', TRUE),
            );
            // date_default_timezone_set("Asia/Jakarta");
            // echo (strtotime("2020-07-22 18:58:46") . "<br>");
            // echo date('Y-m-d H:i:s', strtotime('2020-07-22 18:58:46'));
            // var_dump($data);
            $this->User_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan.</div>');
            redirect(site_url('user'));
        }
    }

    public function _update($id)
    {
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user/update_action'),
                'id' => set_value('id', $row->id),
                'username' => set_value('username', $row->username),
                'password' => set_value('password', $row->password),
                'email' => set_value('email', $row->email),
                'level' => set_value('level', $row->level),
                'foto' => set_value('foto', $row->foto),
                'status' => set_value('status', $row->status),
                'date_created' => set_value('date_created', $row->date_created),
            );
            $this->load->view('user/user_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('user'));
        }
    }

    public function update($id)
    {
        $this->_rulesUpdate();
        $row = $this->User_model->get_by_id($id);

        if ($row) {
            // Upload Foto Start
            $upload_foto = $_FILES['foto']['name'];
            if ($upload_foto) {
                $config['upload_path'] = './assets/img/uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '1024';
                $config['overwrite']    = true;
                $config['file_name']    = $this->input->post('username', TRUE);
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $path = $_FILES['foto']['name'];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $old_ext = pathinfo($row->foto, PATHINFO_EXTENSION);
                    if ($old_ext != $ext) {
                        unlink(FCPATH . 'assets/img/uploads/' . $row->foto);
                    }
                    $error = 1;
                } else {
                    $error = 0;
                }
            } else {
                $foto = "default.png";
                $error = 1;
            }
            // Upload Foto End


            if ($this->form_validation->run() == FALSE || $error == 0) {
                $this->read($id);
            } else {
                $path = $_FILES['foto']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                if ($foto != "default.png") {
                    $foto = $this->input->post('username', TRUE) . '.' . $ext;
                }
                $data = array(
                    'username' => $this->input->post('username', TRUE),
                    'password' => $this->input->post('password', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'level' => $this->input->post('level', TRUE),
                    'foto' => $foto,
                    'status' => $this->input->post('status', TRUE),
                );
                // var_dump($data);

                $this->User_model->update($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah.</div>');
                redirect(base_url('user/read/') . $id);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(base_url('user/read/') . $id);
        }
    }

    public function delete($id)
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            unlink(FCPATH . 'assets/img/uploads/' . $row->foto);
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
            redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
            redirect(site_url('user'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('level', 'level', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    public function _rulesUpdate()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('level', 'level', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-26 04:40:30 */
/* http://harviacode.com */
