<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $id_categoria
 * @property string $nombre
 * 
 * @property Collection|Licencia[] $licencia
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categoria';
	protected $primaryKey = 'id_categoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'nombre'
	];

	public function licencia()
	{
		return $this->hasMany(Licencia::class, 'id_categoria');
	}
}
