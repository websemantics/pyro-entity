<?php namespace Websemantics\BuilderModule\Builder\Builder\Table;

use Websemantics\BuilderModule\Builder\Builder\BuilderModel;

/**
 * Class BuilderTableColumns
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. hi@websemantics.ca
 * @author    Adnan Sagar msagar@websemantics.ca
 * @copyright 2012-2015 Web Semantics, Inc.
 * @since     March 24th 2015
 * @package   Websemantics\BuilderModule\Builder\Builder\Table
 */

class BuilderTableColumns
{

    /**
     * Handle the columns.
     *
     * @param BuilderTableBuilder $builder
     */
    public function handle(BuilderTableBuilder $builder)
    {
        $builder->setColumns(
            [
                'name',
                'language',
                ['heading' => 'slug',
                 'value'   => function  (BuilderModel $entry) {
                        return "<a class='ui label'>".trim($entry->slug)."</a>";
                    }
                ],
                'description'            ]
        );
    }
}
