<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id_persona
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string|null $nit
 * 
 * @property Collection|Usuario[] $usuarios
 * @property Collection|Venta[] $venta
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'persona';
	protected $primaryKey = 'id_persona';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'direccion',
		'telefono',
		'email',
		'nit'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'id_persona');
	}

	public function venta()
	{
		return $this->hasMany(Venta::class, 'id_cliente');
	}
}
