<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function cek($in){
        $username = $in['username'];
        $password = $in['password'];


        $mhs =  $this->db->query("SELECT nim_mhs,id_mhs, password_mhs, nama_mhs as nama FROM tb_mhs WHERE nim_mhs='$username' AND password_mhs='$password'");
        $dosenwali =  $this->db->query("SELECT * FROM tb_dosenwali WHERE nip_doswal= '$username' AND password_doswal = '$password'");
        $kaprodi =  $this->db->query("SELECT * FROM tb_kaprodi WHERE nip_kaprodi= '$username' AND password_kaprodi = '$password'");
        $pusatkarir =  $this->db->query("SELECT * FROM tb_pusatkarir WHERE nip_pusatkarir= '$username' AND password_pusatkarir = '$password'");

		if ($mhs->num_rows() > 0) {
			foreach ($mhs->result() as $data) {
				// $session['nim_mhs'] = $data->username;
				$session['id_mhs'] = $data->id_mhs;
				$session['nama_mhs'] = $data->nama;
				$session['hak_akses'] = 'mahasiswa';
				$this->session->set_userdata('userdata', $session);
			}
			redirect('user/profil');//user
		} elseif ($dosenwali->num_rows() > 0) {
			foreach ($dosenwali->result() as $data) {
				$session['nip_doswal'] = $data->username;
				$session['id_doswal'] = $data->id;
				$session['nama_doswal'] = $data->nama;
				$session['hak_akses'] = 'dosenwali';
				$this->session->set_userdata('userdata', $session);
			}
			redirect('dashboard');//
		} elseif ($kaprodi->num_rows() > 0) {
			foreach ($kaprodi->result() as $data) {
				$session['nip_kaprodi'] = $data->username;
				$session['id_kaprodi'] = $data->id;
				$session['nama_kaprodi'] = $data->nama;
				$session['hak_akses'] = 'kaprodi';
				$this->session->set_userdata('userdata', $session);
			}
			redirect('dashboard');///
        }  elseif ($pusatkarir->num_rows() > 0) {
			foreach ($pusatkarir->result() as $data) {
				$session['nip_pusatkarir'] = $data->username;
				$session['id_pusatkarir'] = $data->id;
				$session['nama_pusatkarir'] = $data->nama;
				$session['hak_akses'] = 'pusatkarir';
				$this->session->set_userdata('userdata', $session);
			}
			redirect('dashboard');//////
        }else {
			$this->session->set_flashdata("error", "Gagal Login. NIP/NIM dan Password Salah");
			redirect(base_url('Login'));
		}
	}
}

