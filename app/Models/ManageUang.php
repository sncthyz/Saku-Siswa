<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManageUang extends Model
{
protected $fillable = [
'nama_barang','harga','jenis_jajananharian','uangsaku','message','user_id'

];


public function user(){
return $this->belongsTo(User::class);


}
}
