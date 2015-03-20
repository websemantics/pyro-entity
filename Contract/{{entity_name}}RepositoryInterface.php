<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{namespace}}\\{{entity_name}}\Contract;

use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Interface {{entity_name}}RepositoryInterface
 *
{{docblock}}
 * @package   {{vendor_name}}\\{{module_name}}Module\\{{namespace}}\\{{entity_name}}\Contract
 */

interface {{entity_name}}RepositoryInterface
{

    /**
     * Create a new {{toLowerCase entity_name}}.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

   
}
