<?php namespace {{vendor_name}}\\{{module_name}}Module\\{{entity_name}};

use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}Interface;
use {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}\Contract\\{{entity_name}}RepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class {{entity_name}}Repository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       {{vendor_name}}\\{{module_name}}Module\\{{entity_name}}
 */

class {{entity_name}}Repository implements {{entity_name}}RepositoryInterface
{

    /**
     * The {{toLowerCase module_name}} model.
     *
     * @var {{entity_name}}Model
     */
    protected $model;

    /**
     * Create a new {{entity_name}}Repository instance.
     *
     * @param {{entity_name}}Model $model
     */
    public function __construct({{entity_name}}Model $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new {{toLowerCase module_name}}.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

}