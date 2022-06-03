<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'price', 'description', 'stock', 'brand', 'category'

    ];


    public function rules($id = '') 
    {
        return [
            'title' => "required|min:3|max:500|unique:products,title,{$id},id",
            'brand' => 'required|min:2'
        ];

    }

    public function rulesSearch($id = '') 
    {
        return [
            'key-search' => 'required'
        ];

    }

    public function search($data, $totalPage) 
    {
        return 
            $this->where ('title', $data['key-search'])
                ->orWhere('description', 'LIKE', "%{$data['key-search']}%")
                ->paginate($totalPage);

    }
}
