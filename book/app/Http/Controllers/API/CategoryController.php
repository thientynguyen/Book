<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Business\CategoryBusiness;

class CategoryController extends Controller
{
    /**
     * @var CategoryBusiness
     */
    protected $categoryBusiness;

    /**
     * CategoryController constructor.
     * @param CategoryBusiness $categoryBusiness
     */
    public function __construct(CategoryBusiness $categoryBusiness)
    {
        $this->categoryBusiness = $categoryBusiness;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response($this->categoryBusiness->getAllCategory());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoryName = $request->categoryName;
        $description = $request->description;
        return response($this->categoryBusiness->updateCategory([$categoryName,$description],$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
