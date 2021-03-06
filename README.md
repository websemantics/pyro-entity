#PyroEntity

An Entity is a representation of an Object Type which may correspond with a Stream,.. for example, a Person, a Company or an Animal can all be generated as Pyro Entities

#{{entity_name}} Entity

{{description}}

#Install

(1) Move the Http folder to your module's corresponding Http folder.

(2) Add the following lines to your Module's ServiceProvider: {{module_name}}ModuleServiceProvider.


    /**
     * The class bindings.
     *
     * @var array
     */
    protected $bindings = [
        '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\\{{entity_name}}Model' => '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\\{{entity_name}}Model'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}RepositoryInterface' => '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\\{{entity_name}}Repository',
    ];


    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/{{toLowerCase module_name}}/{{toLowerPlural entity_name}}'            => '{{vendor_name}}\\{{module_name}}Module\Http\Controller\Admin\\{{toPlural entity_name}}Controller@index',
        'admin/{{toLowerCase module_name}}/{{toLowerPlural entity_name}}/create'     => '{{vendor_name}}\\{{module_name}}Module\Http\Controller\Admin\\{{toPlural entity_name}}Controller@create',
        'admin/{{toLowerCase module_name}}/{{toLowerPlural entity_name}}/edit/{id}'  => '{{vendor_name}}\\{{module_name}}Module\Http\Controller\Admin\\{{toPlural entity_name}}Controller@edit',
    ];

(3) Add the following code to the Module's sections in {{module_name}}Module.php

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        '{{toLowerPlural entity_name}}'  => [
            'buttons' => [
                'create'
            ]
        ]
    ];

(4) Update your language file, at for example, 'resources/lang/en/addon.php'

    return [
        'section'     => [
            '{{toLowerPlural entity_name}}' => '{{toPlural entity_name}}'
        ]
    ];

(5) Finally, you can relocate the Plugin and the Seeder classes anywhere in your application.

{{generatedBy}}