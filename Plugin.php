<?php namespace Joaquinb\SMSSender;

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
            'author'      => 'Joaquinb',
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
            'Joaquinb\SMSSender\Components\MyComponent' => 'myComponent',
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
            'joaquinb.smssender.some_permission' => [
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
                'url'         => Backend::url('joaquinb/smssender/sms'),
                'icon'        => 'icon-envelope-o',
                'permissions' => ['joaquinb.smssender.*'],
                'order'       => 500,
            ],
        ];
    }
}
