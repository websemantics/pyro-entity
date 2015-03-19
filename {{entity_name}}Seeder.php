<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}};

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}RepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class {{entity_name}}Seeder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}
 */
class {{entity_name}}Seeder extends Seeder
{

    /**
     * The ${{toLowerPlural module_name}} repository.
     *
     * @var {{entity_name}}RepositoryInterface
     */
    protected $${{toLowerPlural module_name}};

    /**
     * Create a new {{entity_name}}Seeder instance.
     *
     * @param {{entity_name}}RepositoryInterface $${{toLowerPlural module_name}}
     */
    public function __construct({{entity_name}}RepositoryInterface $${{toLowerPlural module_name}})
    {
        $this->${{toLowerPlural module_name}} = $${{toLowerPlural module_name}};
    }

    /**
     * Seed the ${{toLowerPlural module_name}}.
     */
    public function run()
    {
        $this->${{toLowerPlural module_name}}->create(
            [
                'name'            => 'English',
                'iso'             => 'en',
                'enabled'         => true,
                'flag'            => 'US',
                'date_format'     => 'm/d/Y',
                'datetime_format' => 'm/d/Y g:iA',
                'rtl'             => false
            ]
        );
    }
}
