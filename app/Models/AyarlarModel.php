<?php

namespace App\Models;
use CodeIgniter\Model;

class AyarlarModel extends Model
{
    protected $table = 'ayarlar';
    protected $primaryKey = 'yazi_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['site_logo','site_footer_logo','site_favicon','site_linkedin','site_linkedin','site_twitter','site_facebook'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getRow();

    }
    public function SosyalMedyaDuzenle($data){

        $builder = $this->builder($this->table);
        return $builder->update($data);

    }

}