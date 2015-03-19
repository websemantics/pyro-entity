<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class {{entity_name}}FormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Form
 */

class {{entity_name}}FormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = '{{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\\{{entity_name}}Model';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        /* 'name', */
    ];

}
