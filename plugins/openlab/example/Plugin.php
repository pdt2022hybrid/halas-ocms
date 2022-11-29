<?php namespace OpenLab\Example;

use Backend;
use System\Classes\PluginBase;

/**
 * Example Plugin Information File
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
            'name'        => 'Example',
            'description' => 'No description provided yet...',
            'author'      => 'OpenLab',
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
        return []; // Remove this line to activate

        return [
            'OpenLab\Example\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'openlab.example.some_permission' => [
                'tab' => 'Example',
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
            'notes' => [
                'label'       => 'Notes',
                'url'         => Backend::url('openlab/example/notes'),
                'icon'        => 'icon-pencil-square',
                'permissions' => ['openlab.example.*'],
                'order'       => 500,
            ],
        ];
    }
}
