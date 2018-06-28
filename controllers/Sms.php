<?php namespace Joaquin\Smssender\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Queue;

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

        BackendMenu::setContext('Joaquin.Smssender', 'smssender', 'sms');
    }

    /**
     * Schedule sms
     */
    public static function sendSms($to, $msg, $id){

        $data['to']     = $to;
        $data['msg']    = $msg;

        Queue::push('\Joaquin\Smssender\Jobs\SendSMSJob', [
            'data'  => $data,
            'id'    => $id,
        ], 'sms');

    }
}
