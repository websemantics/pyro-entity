<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}};

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}RepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class {{entity_name}}Seeder
 *
{{docblock}}
 * @package   {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}
 */
class {{entity_name}}Seeder extends Seeder
{

    /**
     * The ${{toLowerPlural entity_name}} repository.
     *
     * @var {{entity_name}}RepositoryInterface
     */
    protected ${{toLowerPlural entity_name}};

    /**
     * Create a new {{entity_name}}Seeder instance.
     *
     * @param {{entity_name}}RepositoryInterface ${{toLowerPlural entity_name}}
     */
    public function __construct({{entity_name}}RepositoryInterface ${{toLowerPlural entity_name}})
    {
        $this->${{toLowerPlural entity_name}} = ${{toLowerPlural entity_name}};
    }

    /**
     * Seed the ${{toLowerPlural entity_name}}.
     */
    public function run()
    {
        $this->${{toLowerPlural entity_name}}->create(
            [
                /* 'name'            => 'English', */
            ]
        );
    }
}
