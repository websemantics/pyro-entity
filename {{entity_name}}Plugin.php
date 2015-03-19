<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}};

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}RepositoryInterface;
use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class {{entity_name}}Plugin
 *
{{docblock}}
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}
 */

class {{entity_name}}Plugin extends Plugin
{

    /**
     * The {{toLowerCase entity_name}} repository.
     *
     * @var {{entity_name}}RepositoryInterface
     */
    protected ${{toLowerPlural entity_name}};

    /**
     * Create a new {{entity_name}}Plugin instance.
     *
     * @param {{entity_name}}RepositoryInterface ${{toLowerPlural entity_name}}
     */
    public function __construct({{entity_name}}RepositoryInterface ${{toLowerPlural entity_name}})
    {
        $this->{{toLowerPlural entity_name}} = ${{toLowerPlural entity_name}};
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {

    }
}
