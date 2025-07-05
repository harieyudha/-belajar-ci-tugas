<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;
use App\Models\DiskonModel;


class AuthController extends BaseController
{
    protected $user;

    function __construct()
    {
        helper('form');
        $this->user= new UserModel();
    }

   public function login()
{
    if ($this->request->getPost()) {
        $rules = [
            'username' => 'required|min_length[6]',
            'password' => 'required|min_length[7]|numeric',
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = $this->user->where(['username' => $username])->first(); //pasw 1234567

            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) {
    session()->set([
        'username' => $dataUser['username'],
        'role' => $dataUser['role'],
        'isLoggedIn' => TRUE
    ]);

    // 🔽 Tambahkan logika diskon di sini
           $tanggal_hari_ini = date('Y-m-d');
$diskonModel = new \App\Models\Diskon_model();
$diskon = $diskonModel->get_diskon_by_date($tanggal_hari_ini);

if ($diskon) {
    $session = session();
    $session->set('diskon_nominal', $diskon['nominal']);
}

    return redirect()->to(base_url('/'));
}
else {
                    session()->setFlashdata('failed', 'Kombinasi Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', $this->validator->listErrors());
            return redirect()->back();
        }
    }

    return view('v_login');
}
public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}
}
