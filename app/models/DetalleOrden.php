<?php
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class DetalleOrden extends Eloquent implements  RemindableInterface {

	use  RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'detalle_orden';
	public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
 * Get the unique identifier for the user.
 *
 * @return mixed
 */
 public function orden()
    {
          return $this->belongsTo('Orden','id_orden','id_detalle');
    }

public function getAuthIdentifier()
{
  return $this->getKey();
}
 
/**
 * Get the password for the user.
 *
 * @return string
 */
public function getAuthPassword()
{
  return $this->password;
}
 
/**
 * Get the e-mail address where password reminders are sent.
 *
 * @return string
 */
public function getReminderEmail()
{
  return $this->email;
}

}
