<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['user_name', 'user_surname', 'user_email', 'user_pass'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function kayitOl($user_name, $user_surname, $user_email, $user_pass, $user_key,$verify_code)
    {
        ob_start();
        system('getmac');
        $Content = ob_get_contents();
        ob_clean();

        //TODO: BASE64 İÇİN GEREKLİ KÜTÜPHANELER
//        $config         = new \Config\Encryption();
//        $config->key    = 'aBigsecret_ofAtleast32Characters';
//        $config->driver = 'OpenSSL';
//        $encrypter = \Config\Services::encrypter($config);

        $ip_address = $_SERVER["REMOTE_ADDR"];
        $mac_address = substr($Content, strpos($Content, '\\') - 20, 17);

//        $user_hash_key =htmlspecialchars(trim(base64_encode($encrypter->encrypt($user_key))));
//        $user_hash_pass = htmlspecialchars(trim(base64_encode($encrypter->encrypt($user_pass))));

//        $user_xor_pass = $user_hash_pass xor $user_hash_key;
        $user_xor_pass=$this->encryptpass($user_pass,$user_key);



        $builder = $this->builder($this->table);

        $builder = $builder->insert([
            'user_name' => $user_name,
            'user_surname' => $user_surname,
            'user_email' => $user_email,
            'user_pass' => $user_xor_pass,
            'user_ip_address' => $ip_address,
            'user_mac_address' => $mac_address,
            'user_verify_code' => $verify_code,
        ]);

        return $builder;

    }

    public function verify_Email($token)
    {
        $builder = $this->builder($this->table);
        $builder->set('user_verify_status', '1', false);
        $builder->where('user_verify_code', $token);
        $builder->update();

        return $builder;

    }
    function encryptpass($pass,$secret_key) {
        //AES-256-CBC
        $encrypt_method = 'AES-256-CBC'; //sifreleme yontemi
        $secret_iv = '22-=**_'; //gerekli sifreleme baslama vektoru
        $key = hash('sha256', $secret_key); //anahtar hast fonksiyonu ile sha256 algoritmasi ile sifreleniyor
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        return openssl_encrypt($pass,$encrypt_method, $key, false, $iv);

    }

}