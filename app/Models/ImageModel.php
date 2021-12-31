<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'items_image';
    protected $primaryKey = 'items_image_id';

    public function getImages($items_id = '')
    {
        if ($items_id == '') {
            return $this->db->table('items_image')->get()->getResultArray();
        } else {
            return $this->db->table('items_image')->where(['items_id' => $items_id])->get()->getResultArray();
        }
    }
}
