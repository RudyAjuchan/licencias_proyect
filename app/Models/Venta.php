<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $id_venta
 * @property Carbon $fecha_hora
 * @property float $total
 * @property int $estado
 * @property int $id_cliente
 * 
 * @property Persona $persona
 * @property Collection|DetalleVenta[] $detalle_venta
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'venta';
	protected $primaryKey = 'id_venta';
	public $timestamps = false;

	protected $casts = [
		'fecha_hora' => 'datetime',
		'total' => 'float',
		'estado' => 'int',
		'id_cliente' => 'int'
	];

	protected $fillable = [
		'fecha_hora',
		'total',
		'estado',
		'id_cliente'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_cliente');
	}

	public function detalle_venta()
	{
		return $this->hasMany(DetalleVenta::class, 'id_venta');
	}
}
