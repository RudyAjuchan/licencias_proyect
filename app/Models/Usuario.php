<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id_usuario
 * @property string $usuario
 * @property string $password
 * @property int $id_persona
 * @property int $id_rol
 * 
 * @property Persona $persona
 * @property Rol $rol
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'id_usuario';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_rol' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'usuario',
		'password',
		'id_persona',
		'id_rol'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'id_rol');
	}
}
