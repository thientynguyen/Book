<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryRequest;
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
    public function index(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([]);
        }

        $items = $this->categoryBusiness->getAllCategory()['data'];
        $body = view('components.table_body', compact('items'))->render();
        return response()->json([
            'data' => $body
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCategoryRequest $request)
    {

        if (isset($request->validator) && $request->validator->fails()) {
            $message = $request->validator->messages();

            return $this->response('',422,$message);
        }
        return response($this->categoryBusiness->createCategory($request->all()));

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
        $data = $this->categoryBusiness->showCategoryById($id);
        return $this->response($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            $message = $request->validator->messages();

            return $this->response('',422,$message);
        }
        $data =[
            'categoryName'=>$request->categoryName,
            'description'=> $request->description,
        ];
        return response($this->categoryBusiness->updateCategory($data,$id));
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
        return response($this->categoryBusiness->deleteCategory($id));
    }
}
