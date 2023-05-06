<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleVenta
 * 
 * @property int $id_detalle_venta
 * @property int $cantidad
 * @property float $total
 * @property int $id_venta
 * @property int $id_licencia
 * 
 * @property Venta $Venta
 * @property Licencia $Licencia
 *
 * @package App\Models
 */
class DetalleVenta extends Model
{
	protected $table = 'detalle_venta';
	protected $primaryKey = 'id_detalle_venta';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'total' => 'float',
		'id_venta' => 'int',
		'id_licencia' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'total',
		'id_venta',
		'id_licencia'
	];

	public function Venta()
	{
		return $this->belongsTo(Venta::class, 'id_venta');
	}

	public function Licencia()
	{
		return $this->belongsTo(Licencia::class, 'id_licencia');
	}
}
