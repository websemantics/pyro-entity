<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{namespace}}\\{{entity_name}}\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class {{entity_name}}TableBuilder
 *
{{docblock}}
 * @package   {{vendor_name}}\\{{module_name}}Module\\{{namespace}}\\{{entity_name}}\Table
 */

class {{entity_name}}TableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = '{{vendor_name}}\\{{module_name}}Module\\{{namespace}}\\{{entity_name}}\\{{entity_name}}Model';

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
