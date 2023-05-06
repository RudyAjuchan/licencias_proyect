<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Licencia
 * 
 * @property int $id_licencia
 * @property string $nombre
 * @property float $precio
 * @property int $stock
 * @property string $descripcion
 * @property string $imagen
 * @property int $estado
 * @property int $id_categoria
 * 
 * @property Categoria $Categoria
 * @property Collection|DetalleVenta[] $detalle_venta
 *
 * @package App\Models
 */
class Licencia extends Model
{
	protected $table = 'licencia';
	protected $primaryKey = 'id_licencia';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'float',
		'stock' => 'int',
		'estado' => 'int',
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'nombre',
		'precio',
		'stock',
		'descripcion',
		'imagen',
		'estado',
		'id_categoria'
	];

	public function Categoria()
	{
		return $this->belongsTo(Categoria::class, 'id_categoria');
	}

	public function detalle_venta()
	{
		return $this->hasMany(DetalleVenta::class, 'id_licencia');
	}
}
