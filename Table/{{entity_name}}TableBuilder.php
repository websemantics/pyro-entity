<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class {{entity_name}}TableBuilder
 *
{{docblock}}
 * @package   {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table
 */

class {{entity_name}}TableBuilder extends TableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        /* 'name', */
    ];

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'edit'
    ];

}
