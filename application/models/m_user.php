<?php

class M_user extends CI_Model {
    private $query;
    function cek($username, $password) {
        if(strlen($username) == 10){
            $this->db->from('user', 'mahasiswa');
            $this->db->join('mahasiswa', 'mahasiswa.nim = user.u_name');
            $query= $this->db;
        }
        else{
            $this->db->from('user', 'dosen');
            $this->db->join('dosen', 'dosen.nip = user.u_name');
            $query= $this->db;
        }
        $query->where("u_name", $username);
        $query->where("u_paswd", $password);
        return $query->get();
    }

    function semua() {
        if(strlen($username) == 10){
            $this->db->from('user', 'mahasiswa');
            $this->db->join('mahasiswa', 'mahasiswa.nim = user.u_name');
            $query= $this->db->get();
        }
        else{
            $this->db->from('user', 'dosen');
            $this->db->join('dosen', 'dosen.nip = user.u_name');
            $query= $this->db->get();
        }
        return $query->get();
    }

    function cekKode($kode) {
        $this->db->where("u_name", $kode);
        return $this->db->get("user");
    }

    function cekId($kode) {
        $this->db->where("u_id", $kode);
        return $this->db->get("user");
    }
    
    function getLoginData($usr, $psw) {
        $u = mysqli_real_escape_string($usr);
        $p = md5(mysqli_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'aingLoginWebYeuh';
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['nama'] = $qad->nama;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:login');
        }
    }

    function update($id, $info) {
        $this->db->where("u_id", $id);
        $this->db->update("user", $info);
    }

    function simpan($info) {
        $this->db->insert("user", $info);
    }

    function hapus($kode) {
        $this->db->where("u_id", $kode);
        $this->db->delete("user");
    }

}
