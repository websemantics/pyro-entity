<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table;

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\{{entity_name}}Model;

/**
 * Class {{entity_name}}TableBuilder
 *
{{docblock}}
 * @package   {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table
 */
class {{entity_name}}TableColumns
{

    /**
     * Handle the columns.
     *
     * @param {{entity_name}}TableBuilder $builder
     */
    public function handle({{entity_name}}TableBuilder $builder)
    {
        $builder->setColumns(
            []
        );
    }
}
