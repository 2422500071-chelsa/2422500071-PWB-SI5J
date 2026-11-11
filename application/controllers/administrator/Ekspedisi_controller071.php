<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi_controller071 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('ekspedisi_model071');
    }

    public function index()
    {
        $data['list_ekspedisi'] = $this->ekspedisi_model071->get_all();

        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ekspedisi2422500071/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ekspedisi()
    {
        $data['title'] = 'Tambah Ekspedisi';

        $this->form_validation->set_rules(
            'nama_ekspedisi071',
            'Nama ekspedisi',
            'required'
        );

        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_ekspedisi();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ekspedisi2422500071/tambah_ekspedisi');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function __simpan_ekspedisi()
    {
        $data = array(
            'nama_ekspedisi071' => ucwords($this->input->post('nama_ekspedisi071')),
            'jenis_layanan071' => ucfirst($this->input->post('jenis_layanan071')),
            'tarif_per_kg071' => ucfirst($this->input->post('tarif_per_kg071')),
            'status071' => ucfirst($this->input->post('status071'))
        );

        // Diubah menjadi ekspedisi_model071
        $simpan = $this->ekspedisi_model071->tambah($data);

        if ($simpan) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil menambahkan ekspedisi!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal menambahkan ekspedisi!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        }

        redirect('admin/ekspedisi2422500071');
    }

    public function hapus_ekspedisi($id)
    {
        // Diubah menjadi ekspedisi_model071
        $ekspedisi = $this->ekspedisi_model071->get_by_id($id);

        if ($ekspedisi) {
            $hapus = $this->ekspedisi_model071->hapus($id);

            if ($hapus) {
                $pesan = 'Berhasil menghapus ekspedisi!!';
                $jenis = 'success';
            } else {
                $pesan = 'Gagal menghapus ekspedisi!!';
                $jenis = 'danger';
            }
        } else {
            $pesan = 'ekspedisi tidak ditemukan!!';
            $jenis = 'danger';
        }

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-' . $jenis . ' alert-dismissible fade show" role="alert">'
            . $pesan .
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );

        redirect('admin/ekspedisi2422500071');
    }

    public function ubah_ekspedisi($id)
    {
        // Diubah menjadi ekspedisi_model071
        $ekspedisi = $this->ekspedisi_model071->get_by_id($id);

        if ($ekspedisi) {
            $this->form_validation->set_rules(
                'nama_ekspedisi071',
                'Nama ekspedisi',
                'required'
            );

            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_ekspedisi($id);
            } else {
                $data['title'] = 'Ubah ekspedisi';
                $data['ekspedisi'] = $ekspedisi;

                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/ekspedisi2422500071/ubah_ekspedisi', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">ekspedisi tidak ditemukan!!</div>'
            );

            redirect('admin/ekspedisi2422500071');
        }
    }

    private function __ubah_ekspedisi($id)
    {
        $data = array(
            'nama_ekspedisi071' => ucwords($this->input->post('nama_ekspedisi071')),
            'jenis_layanan071' => ucfirst($this->input->post('jenis_layanan071')),
            'tarif_per_kg071' => ucfirst($this->input->post('tarif_per_kg071')),
            'status071' => ucfirst($this->input->post('status071'))
        );
    
        // Diubah menjadi ekspedisi_model071
        $ubah = $this->ekspedisi_model071->ubah($id, $data);

        if ($ubah) {
            $pesan = 'Berhasil mengubah ekspedisi!!';
            $jenis = 'success';
        } else {
            $pesan = 'Gagal mengubah ekspedisi!!';
            $jenis = 'danger';
        }

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-' . $jenis . '" role="alert">'
            . $pesan .
            '</div>'
        );

        redirect('admin/ekspedisi2422500071');
    }
}