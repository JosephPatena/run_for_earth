<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function all_participants(){
        return $this->all();
    }

    public function create_participant($request){
    	return $this->create($request);
    }

    public function update_participant($id, $data){
    	return $this->find($id)->update($data);
    }

    public function delete_participant($id){
    	return $this->destroy($id);
    }

    public function find_participant($id){
        return $this->findOrFail($id);
    }
}
