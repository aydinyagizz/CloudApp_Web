<?php

namespace App\Models;

use CodeIgniter\Model;


class LoginModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['user_mail', 'user_pass'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function girisYap($user_mail, $user_pass, $user_key)
    {


        $builder = $this->builder($this->table);

        $user_hash_pass = $this->encryptpass($user_pass, $user_key);

        $builder = $builder->where([
            'user_email' => $user_mail,
            'user_pass' => $user_hash_pass,
            'user_verify_status' => 1
        ]);


        $builder = $builder->get();

        return $builder->getRow();
    }


    function encryptpass($pass, $secret_key)
    {

        $encrypt_method = 'AES-256-CBC'; //sifreleme yontemi
        $secret_iv = '22-=**_'; //gerekli sifreleme baslama vektoru
        $key = hash('sha256', $secret_key); //anahtar hast fonksiyonu ile sha256 algoritmasi ile sifreleniyor
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        return openssl_encrypt($pass, $encrypt_method, $key, false, $iv);
    }
}