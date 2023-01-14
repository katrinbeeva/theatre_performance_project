<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PerformanceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PerformanceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PerformanceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return [
            [
                'name'=> 'name_of_performance',
                'label' => 'Name of Performance',
                'type'=> 'text'
            ],
            [
                'name' => 'performance_date',
                'label' => 'Performance date',
                'type' => 'datetime'
            ],
            [    // SelectMultiple = n-n relationship (with pivot table)
                'label'     => "Venue",
                'type'      => ($show ? "select": 'select_multiple'),
                'name'      => 'venues', // the method that defines the relationship in your Model
// optional
                'entity'    => 'venues', // the method that defines the relationship in your Model
                'model'     => "App\Models\Venue", // foreign key model
                'attribute' => 'name_of_theatre', // foreign key attribute that is shown to user
                'attribute' => 'location', // foreign key attribute that is shown to user
                'attribute' => 'city', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            ]
        ];
    }




    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Performance::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/performance');
        CRUD::setEntityNameStrings('performance', 'performances');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name_of_performance');
        CRUD::column('performance_date');
        CRUD::column('created_at');
        CRUD::column('updated_at');



        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PerformanceRequest::class);
        CRUD::field('name_of_performance');
        CRUD::field('performance_date');


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
