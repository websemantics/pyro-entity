<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}};

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}Interface;
use Anomaly\Streams\Platform\Model\\{{namespace}}\\{{namespace}}{{toPlural entity_name}}EntryModel;

/**
 * Class {{entity_name}}Model
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}
 */

class {{entity_name}}Model extends {{namespace}}{{toPlural entity_name}}EntryModel implements {{entity_name}}Interface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

}