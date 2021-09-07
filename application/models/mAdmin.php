<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {
	public function checkAdmin($data)
	{
		return $this->db->get_where('admin', $data)->result_array(); 
	}

	public function checkProject($data)
	{
		return $this->db->get_where('project', array('gambar' =>$data['gambar'], 'nama_project' =>$data['nama_project']));
	}

	public function tambahProject($data)
	{
		return $this->db->insert('project', $data);
	}

	public function allProjects()
	{
		return $this->db->get_where('project', array('status' => 1))->num_rows();
	}

	public function fetchProjects($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get_where('project', array('status' => 1));
		if($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

	public function checkProjectID($id_project)
	{
		return $this->db->get_where('project', array('id_project' => $id_project))->result_array();
	}

	public function udpateProject($data, $id_project)
	{
		$this->db->where('id_project', $id_project);
		return $this->db->update('project', $data);
	}

	public function hapusProject($where, $table)
	{
		$this->db->where($where);
        $this->db->delete($table);
	}

	public function ambilData()
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->order_by('id_project', 'desc');
		$this->db->limit('4');
		$query = $this->db->get();
		return $query->result();
	}
}
