<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Imports\CategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $categories = Category::get();

            return datatables()
            ->of($categories)
            ->addColumn('edit', 'admin/category/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    public function createImport()
    {
        return view('admin.category.import');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name      = $request->name;
        $category->description = $request->description;
        $category->iva         = $request->iva;
        $category->utility    = $request->utility;
        $category->status      = '1';
        $category->save();

        return redirect('category');
    }

    public function import(Request $request)
    {
        $category = $request->file('category_file');
        Excel::import(new CategoryImport, $category);

        $message = 'Importacion de Categorias realizada con exito';
        //Alert::success('Categoria', $message);
        toast($message,'success');
        //Alert::success('Categoria','Creada Satisfactoriamente.');
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->name      = $request->name;
        $category->description = $request->description;
        $category->iva         = $request->iva;
        $category->utility    = $request->utility;
        $category->status      = 1;
        $category->update();

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
