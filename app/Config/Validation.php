<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $login = [
        'user_email' => [
            'rules' => 'required|string|valid_email',
            'errors' => [
                'required' => 'Mail Adresini Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'valid_email' => 'Lütfen geçerli bir email giriniz.',
            ]
        ],
        'user_pass' => [
            'rules' => 'required|string|min_length[6]',
            'errors' => [
                'required' => 'Şifre Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Şifreniz En Az Altı Karakterli Olmalıdır.',
            ]
        ],
        'user_key' => [
            'rules' => 'required|string|min_length[6]',
            'errors' => [
                'required' => 'Kullanıcı Key Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Kullanıcı Keyiniz En Az Altı Karakterli Olmalıdır.',
            ]
        ],
    ];



    public $register = [
        'user_name' => [
            'rules' => 'required|string|min_length[3]',
            'errors' => [
                'required' => 'Adınızı Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Adınız En Az Üç Karakterli Olmalıdır.',
            ]
        ],
        'user_surname   ' => [
            'rules' => 'required|string|min_length[3]',
            'errors' => [
                'required' => 'Soyadınızı Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Soyadınız En Az Üç Karakterli Olmalıdır.',
            ]
        ],

        'user_email' => [
            'rules' => 'required|string|valid_email',
            'errors' => [
                'required' => 'Mail Adresini Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'valid_email' => 'Lütfen geçerli bir email giriniz.',
            ]
        ],
        'user_pass' => [
            'rules' => 'required|string|min_length[6]',
            'errors' => [
                'required' => 'Şifre Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Şifreniz En Az Altı Karakterli Olmalıdır.',
            ]
        ],
        'user_pass2' => [
            'rules' => 'required|string|matches[user_pass]|min_length[6]',
            'errors' => [
                'required' => 'Şifre Tekrar Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'matches' => 'Şifreleriniz uyuşmuyor. Lütfen tekrar deneyiniz.',
                'min_length' => 'Şifre Tekrarı En Az Altı Karakterli Olmalıdır.',
            ]
        ],
        'user_key' => [
            'rules' => 'required|string|min_length[6]',
            'errors' => [
                'required' => 'Kullanıcı Key Alanını Lütfen Boş Bırakmayınız.',
                'string' => 'Lütfen Sadece Alfa Numerik Karakter Giriniz.',
                'min_length' => 'Kullanıcı Keyiniz En Az Altı Karakterli Olmalıdır.',
            ]
        ],
        'politika' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Politika Alanı Alanını Lütfen Boş Bırakmayınız.',

            ]
        ],
    ];

}
