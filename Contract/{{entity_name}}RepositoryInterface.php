<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract;

use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Interface {{entity_name}}RepositoryInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract
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
