<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'ten_bai_viet', 'anh_dai_dien', 'danh_muc_id','category_desc','category_status'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'tbl_post';
}