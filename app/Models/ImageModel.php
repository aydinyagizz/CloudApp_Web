<?php

namespace App\Models;
use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'image_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['image_name','image_url','image_type','image_data','image_size','image_user_id'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function ImageInsert($data){

        $builder = $this->builder($this->table);
        return $builder->insert($data);

    }

    public function GetAllImage(){

        $builder = $this->builder($this->table);
        $builder = $this->builder->where('image_user_id',$_SESSION['userData']['id']);
        return $builder->get()->getResult();

    }
    public function GetBar(){
        $builder = $this->builder($this->table);
        $builder->selectSum('image_size');

        $builder = $this->builder->where('image_user_id',$_SESSION['userData']['id']);


        return $builder->get()->getRow();
    }

}