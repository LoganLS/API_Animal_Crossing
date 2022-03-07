<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VillagerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class VillagerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VillagerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Villager::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/villager');
        CRUD::setEntityNameStrings('villager', 'villagers');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('code');
        CRUD::column('name');
        CRUD::column('url');
        CRUD::column('image_url');
        CRUD::column('icon_url');
        CRUD::column('birthday_month');
        CRUD::column('birthday_day');
        CRUD::column('phrase');
        CRUD::column('catchphrase');
        CRUD::column('clothing');
        CRUD::column('gender_id');
        CRUD::column('lang_id');
        CRUD::column('sign_id');
        CRUD::column('species_id');
        CRUD::column('personality_id');

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
        CRUD::setValidation(VillagerRequest::class);

        CRUD::field('code');
        $this->crud->addField(['name' => 'name', 'label' => 'Nom']);
        CRUD::field('url');
        CRUD::field('image_url');
        CRUD::field('icon_url');
        $this->crud->addField(['name' => 'birthday_month', 'label' => 'Mois de naissance']);
        $this->crud->addField(['name' => 'birthday_month', 'label' => 'Jour de naissance']);
        $this->crud->addField(['name' => 'phrase', 'label' => 'Phrase fétiche']);
        $this->crud->addField(['name' => 'catchphrase', 'label' => 'Phrase fétiche (courte)']);
        $this->crud->addField(['name' => 'clothing', 'label' => 'Vêtement porté']);
        $this->crud->addField(['name' => 'gender_id', 'label' => 'Genre']);
        $this->crud->addField(['name' => 'lang_id', 'label' => 'Langue (nom du personnage en anglais ou français)']);
        $this->crud->addField(['name' => 'sign_id', 'label' => 'Signe astro.']);
        $this->crud->addField(['name' => 'species_id', 'label' => 'Espèce']);
        $this->crud->addField(['name' => 'personality_id', 'label' => 'Espèce']);
        CRUD::field('personality_id');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
