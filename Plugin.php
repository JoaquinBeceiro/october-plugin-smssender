<?php namespace Joaquin\SMSSender;

use Backend;
use System\Classes\PluginBase;

/**
 * SMSSender Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SMSSender',
            'description' => 'No description provided yet...',
            'author'      => 'Joaquin',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Joaquin\SMSSender\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'joaquin.smssender.some_permission' => [
                'tab' => 'SMSSender',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'smssender' => [
                'label'       => 'SMSSender',
                'url'         => Backend::url('joaquin/smssender/sms'),
                'icon'        => 'icon-envelope-o',
                'permissions' => ['joaquin.smssender.*'],
                'order'       => 500,
            ],
        ];
    }
}
