<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('id')) {
			$totalRows = $this->mAdmin->allProjects();
			$config['total_rows'] = $totalRows;
			$config['per_page'] = 12;
			$config['uri_segment'] = 3;
			$this->load->library('pagination');
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3): 0;
			$data['allProjects'] = $this->mAdmin->fetchProjects($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();

			$this->load->view('admin/header');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('admin/footer');
		}
		else {
			$this->session->set_flashdata('error', 'Silahkan Login');
			redirect('login');
		}
	}

	public function logOut()
	{
		if($this->session->userdata('id')) {
			$this->session->set_userdata('id');
			$this->session->set_flashdata('error', 'Logout Berhasil');
			redirect('login');
		}
		else {
			$this->session->set_flashdata('error', 'Silahkan Login');
			redirect('login');
		}
	}

	public function project()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/project');
		$this->load->view('admin/footer');
	}

	public function tambahProject()
	{
		if($this->session->userdata('id')) {
			$data['nama_project'] = $this->input->post('nama_project', true);
			$data['gambar'] = $this->input->post('gambar', true);
			if(!empty($data['nama_project'])) {
				$path = realpath(APPPATH.'../assets/images/projects');
				$config['upload_path'] = $path;
				$config['max_size'] = 1000;
				$config['allowed_types'] = 'gif|png|jpg|jpeg';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')) {
					$error = $this->upload->display_errors();
					setFlashData('alert-danger', $error, 'admin/project');
				}
				else {
					$fileName = $this->upload->data();
					$data['gambar'] = $fileName['file_name'];
					$data['tanggal'] = date('Y-m-d');
					$data['admin_id'] = getAdminId();
				}
				$addData = $this->mAdmin->checkProject($data);
				if($addData->num_rows() > 0) {
					$this->session->set_flashdata('error', 'Project sudah ada');
					redirect('admin/project');
				}
				else {
					$addData = $this->mAdmin->tambahProject($data);
					if($addData) {
						setFlashData('alert-success', 'Project Berhasil Ditambahkan', 'admin/project');
					}
					else {
						setFlashData('alert danger', 'Gagal Menambah Project', 'admin/project');
					}
				}
			}
			else {
				setFlashData('alert-danger', 'Data harus diisi dengan lengkap', 'admin/project');
			}
		}
		else {
			setFlashData('alert-danger', 'Silahkan Login Terlebihdahulu', 'login');
		}
	}

	public function editProject($id_project)
	{
		if($this->session->userdata('id')) {
			if(!empty($id_project) && isset($id_project)) {
				$data['project'] = $this->mAdmin->checkProjectID($id_project);
				if(count($data['project']) == 1) {
					$this->load->view('admin/header');
					$this->load->view('admin/edit', $data);
					$this->load->view('admin/footer');
				}
				else {
					setFlashData('alert-danger', 'Project tidak ditemukan', 'admin');
				}
			}
		}
	}

	public function udpateProject()
	{
		if($this->session->userdata('id')) {
			$data['nama_project'] = $this->input->post('nama_project', true);
			$id_project = $this->input->post('xid', true);
			$oldImg = $this->input->post('oldImg', true);

			if(!empty($data['nama_project']) && isset($data['nama_project'])){
				if(isset($_FILES['gambar']) && is_uploaded_file($_FILES['gambar']['tmp_name'])){
					$path = realpath(APPPATH.'../assets/images/projects');
					$config['upload_path'] = $path;
					$config['max_size'] = 400;
					$config['allowed_types'] = 'gif|png|jpg|jpeg';
					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('gambar')){
						$error = $this->upload->display_errors();
						$this->session->set_flashdata('error', $error);
						redirect('admin/editProject/'.$id_project);
					}
					else{
						$fileName = $this->upload->data();
						$data['gambar'] = $fileName['file_name'];
					}
				}

				$reply = $this->mAdmin->udpateProject($data, $id_project);
				if($reply){
					if(!empty($data['gambar']) && isset($data['gambar'])){
						if(file_exists($path.'/'.$oldImg)){
							unlink($path.'/'.$oldImg);
						}
						else{
							echo "gagal";
						}
					}
					setFlashData('alert-success', 'Data berhasil diubah', 'admin');
				}
				else {
					setFlashData('alert-danger', 'You can not update your category', 'admin');
				}
			}
			else {
				$this->session->set_flashdata('error', 'Category name is required');
				redirect('admin/editProject/'.$id_project);
			}
		}
		else {
			setFlashData('alert-danger', 'Silahkan login', 'login');
		}
	}

	public function hapusProject($id_project)
	{
		if($this->session->userdata('id')) {
			$where = array('id_project' => $id_project);
        	$this->mAdmin->hapusProject($where,'project');
			setFlashData('alert-success', 'Data Berhasil di hapus', 'admin');
		}
		else {
			setFlashData('alert-danger', 'Silahkan Login', 'login');
		}
	}

}
