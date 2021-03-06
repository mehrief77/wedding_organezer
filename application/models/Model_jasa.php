<?php

class Model_jasa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_jasa');

        // $this->db->select('*');
        // $this->db->from('tb_jasa');
        // $this->db->join('tb_invoice_detail', 'tb_invoice_detail.id_tkg = tb_jasa.id_tkg', 'left');
        // // $this->db->where('tb_jasa.id_tkg');
        // // return $this->db->get()->result();
        // $query = $this->db->get();
        // return $query;
    }


    public function tambah_jasa($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function edit_jasa($where, $table)
    {
        return $this->db->get_where($table, $where);
    }


    // public function update_data($where, $data, $table)
    public function update_jasa($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }


    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //  public function tolak_order($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }

    public function detail_jasa($id_tkg)
    {
        $result = $this->db->where('id_tkg', $id_tkg)->get('tb_jasa');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


    public function detail_jasa_admin($id)
    {
        $result = $this->db->where('id_tkg', $id)->get('tb_jasa');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


    public function find($id)
    {
        $result = $this->db->where('id_tkg', $id)
            ->limit(1)
            ->get('tb_jasa');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }


    // public function update_status_t()
    // {
    //     // $id     = $this->input->post('id_tkg');
    //     $status = $this->input->post('status');

    //     $getNama = $this->session->userdata('name');
    //     $this->db->select('*');
    //     $this->db->from('tb_jasa');
    //     $this->db->where('nama_tkg', $getNama);
    //     $resultData = $this->db->get()->row_array();
    //     // var_dump($resultData['id_tkg']);


    //     // var_dump($id);
    //     // var_dump($status);
    //     // die();

    //     $test = array(
    //         'status'           => $status,
    //     );

    //     $this->db->where('id_tkg',  $resultData['id_tkg']);
    //     $this->db->update('tb_jasa', $test);
    // }

    public function update_status_t($id_invoice, $id_tkg, $status)
    {
        $builder = $this->db->table('tb_invoice_detail');
        // $this->db->update('tb_invoice_detail', ['status' => $status, ] $where);
        $data = [
            'status' => $status,
        ];

        $builder->where('id_invoice', $id_invoice);
        $builder->where('id_tkg', $id_tkg);
        $builder->update($data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_jasa');
        $this->db->like('nama_tkg', $keyword);
        $this->db->or_like('tempat_lahir', $keyword);
        $this->db->or_like('tanggal_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('keahlian', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('harga_tkg', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get()->result();
    }
}
