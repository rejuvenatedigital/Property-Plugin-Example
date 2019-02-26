<?php namespace Rejuvenate\Properties;

use Backend;
use System\Classes\PluginBase;

/**
 * Properties Plugin Information File
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
            'name'        => 'Properties',
            'description' => 'No description provided yet...',
            'author'      => 'Rejuvenate',
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
            'Rejuvenate\Properties\Components\MyComponent' => 'myComponent',
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
            'rejuvenate.properties.access_properties' => [
                'tab' => 'Properties',
                'label' => 'Access properties'
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
            'properties' => [
                'label'       => 'Properties',
                'url'         => Backend::url('rejuvenate/properties/properties'),
                'icon'        => 'icon-leaf',
                'permissions' => ['rejuvenate.properties.*'],
                'order'       => 500,
            ],
        ];
    }
}
