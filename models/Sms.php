<?php namespace Joaquin\Smssender\Models;

use Model;
use Joaquin\Smssender\Controllers\Sms as SmsController;

/**
 * Sms Model
 */
class Sms extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'joaquin_smssender_sms';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['sended'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];



    public function afterSave()
    {
        if( $this->sended == 0 ){
            // Create SMS job
            SmsController::sendSms( $this->to, $this->body, $this->id );
        }
    }

}
