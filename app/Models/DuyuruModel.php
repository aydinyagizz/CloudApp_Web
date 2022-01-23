<?php

namespace App\Models;
use CodeIgniter\Model;

class DuyuruModel extends Model
{
    protected $table = 'yazilar';
    protected $primaryKey = 'yazi_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['yazi_foto','yazi_title','yazi_icerik','yazi_tarih','yazi_kategori_id','yazi_kategori_alt_id','yazi_seolink','yazi_keyw','yazi_desc'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function getSingleDuyuru($title){

        $builder = $this->builder($this->table);

        $builder = $builder->where('yazi_seolink',$title);

        $builder = $builder->get();

        return $builder->getRow();
    }
    public function DuyuruEkle($data){
        $builder = $this->builder($this->table);

        return $builder->insert($data);

    }

    public function GetAll(){

        $builder = $this->builder($this->table);

        return $builder->get()->getResult();

    }

}