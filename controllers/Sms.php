<?php namespace Joaquinb\Smssender\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Queue;
use Joaquinb\Smssender\Models\Sms as SmsModel;

/**
 * Sms Controller Back-end Controller
 */
class Sms extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Joaquinb.Smssender', 'smssender', 'sms');
    }

    /**
     * Schedule sms
     */
    public static function sendSms($to, $msg, $id){

        $data['to']     = $to;
        $data['msg']    = $msg;

        Queue::push('\Joaquinb\Smssender\Jobs\SendSMSJob', [
            'data'  => $data,
            'id'    => $id,
        ], 'sms');

    }

    /**
     * Create sms and send it after save
     */
    public static function newSms($to, $msg){

        $sms        = SmsModel::new();
        $sms->to    = $to;
        $sms->body  = $body;
        $sms->save();

    }
}
