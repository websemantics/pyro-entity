<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class {{entity_name}}TableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Table
 */

class {{entity_name}}TableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\\{{entity_name}}Model';

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
