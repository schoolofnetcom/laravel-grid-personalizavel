<?php

namespace App\Http\Controllers;

use App\Category;
use App\Table\Table;

class CategoriesController extends Controller
{
    /**
     * @var Table
     */
    private $table;


    /**
     * CategoriesController constructor.
     */
    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function index()
    {
        $this->table
            ->model(Category::class)
            ->columns([
                [
                    'label' => 'Nome',
                    'name' => 'name',
                    'order' => true //true, asc ou desc
                ]
            ])
            ->filters([
                [
                    'name' => 'id',
                    'operator' => '='
                ],
                [
                    'name' => 'name',
                    'operator' => 'LIKE'
                ],
                [
                    'name' => 'products.name', //relacionamento products
                    'operator' => 'LIKE'
                ]
            ])
            ->addEditAction('categories.edit')
            ->addDeleteAction('categories.destroy')
            ->paginate(5)
            ->search();
        return view('categories.index',[
            'table' => $this->table
        ]);
    }

    public function edit($id){
        echo $id;
    }

    public function destroy($id){
        echo $id;
    }
}
