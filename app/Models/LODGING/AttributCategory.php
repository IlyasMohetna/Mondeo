<?php
namespace App\Models\LODGING;

use Illuminate\Database\Eloquent\Model;

class AttributCategory extends Model
{
	protected $table = 'lodging__attribut_categories';

	protected $guarded = [];

    public function attribut()
    {
        return $this->hasMany(AttributTerm::class,'attribut_categorie_id','id');
    }
}
