<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $judul['judul'] = 'Halaman Dashboard';
        $this->template_mahasiswa->views('dashboard', $judul);
    }

    public function data_mahasiswa()
    {
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAll()->result();
        $this->template_mahasiswa->views('data_mahasiswa', $data);
    }

    public function profil($id)
    {
        $data['judul'] = 'Profil Mahasiswa';
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->Mahasiswa_model->profil($where, 'tb_mahasiswa')->result();
        $this->template_mahasiswa->views('profil', $data);
    }

    public function tambah_mahasiswa()
    {
        $data['judul'] = 'Tambah Mahasiswa';
        $this->template_mahasiswa->views('tambah_mahasiswa', $data);
    }

    public function input_mahasiswa()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $jenkel = $this->input->post('jenkel');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $jurusan = $this->input->post('jurusan');
        $prodi = $this->input->post('prodi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {

            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto maks 2MB!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('crud/tambah_mahasiswa');
                // echo "Upload Gagal";
                // die();
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $no_hp,
            'jurusan' => $jurusan,
            'prodi' => $prodi,
            'foto' => $foto
        );
        $this->Mahasiswa_model->input_data($data, 'tb_mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil ditambahkan!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('crud/data_mahasiswa');
    }

    public function edit_mahasiswa($id)
    {
        $where = array('id' => $id);
        $data['judul'] = 'Edit Mahasiswa';
        $data['editmahasiswa'] = $this->Mahasiswa_model->edit_data($where, 'tb_mahasiswa')->result();
        $this->template_mahasiswa->views('edit_mahasiswa', $data);
    }

    public function update_mahasiswa()
    {
        $id = $this->input->post('id');
        $nim = $this->input->post('nim');
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $jenkel = $_POST['jenkel'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $jurusan = $_POST['jurusan'];
        $prodi = $_POST['prodi'];
        //upload gambar
        $foto = $_FILES['foto'];
        if ($foto = '') {
            echo "Gambar harus di isi!";
        } else {

            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['overwrite'] = true;
            $config['max_size'] = 2048; //2MB

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'nim' => $nim,
                    'nama' => $nama,
                    'ttl' => $ttl,
                    'jenkel' => $jenkel,
                    'agama' => $agama,
                    'alamat' => $alamat,
                    'email' => $email,
                    'no_hp' => $no_hp,
                    'jurusan' => $jurusan,
                    'prodi' => $prodi
                );

                $where = array(
                    'id' => $id
                );

                $this->Mahasiswa_model->update_data($where, $data, 'tb_mahasiswa');
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('crud/data_mahasiswa');
            } else {
                $foto = $this->upload->data("file_name");
            }
        }

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'ttl' => $ttl,
            'jenkel' => $jenkel,
            'agama' => $agama,
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $no_hp,
            'jurusan' => $jurusan,
            'prodi' => $prodi,
            'foto' => $foto
        );

        $where = array(
            'id' => $id
        );

        $this->Mahasiswa_model->update_data($where, $data, 'tb_mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('crud/data_mahasiswa');
    }

    public function delete_mahasiswa($id)
    {
        $where = array('id' => $id);
        $this->Mahasiswa_model->hapus_data($where, 'tb_mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('crud/data_mahasiswa');
    }

    public function download()
    {
        $data['judul'] = 'Download Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAll()->result();
        $this->load->view('report_mahasiswa', $data);
    }
}
