<?php

namespace App\Business;

use App\Repositories\Contracts\CategoryInterface;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class CategoryBusiness extends BaseBusiness
{
    /**
     * @var categoryRepository
     */
    protected $categoryRepository;

    /**
     * CategoryBusiness constructor.
     * @param CategoryInterface $categoryRepository
     */
    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategory()
    {
        $data = $this->categoryRepository->getAll();

        return $this->returnSuccess($data);
    }

    public function updateCategory($data, $id)
    {
        $data = $this->categoryRepository->update($id, $data);

        return $this->returnSuccess($data);
    }

    public function showCategoryById($id)
    {
        $data = $this->categoryRepository->find($id);
        return $data;
    }

    public function createCategory($data)
    {
        try {

            $data = $this->categoryRepository->create($data);
            if ($data) {

                return $data;
            } else {

                return false;
            }
        } catch (Exception $e) {

            Log::error("Error in " . __METHOD__ . $e->getMessage());

            return false;
        }
    }

    public function deleteCategory($id)
    {
        try {
            $data = $this->categoryRepository->delete($id);

            if($data){
                return $data;
            }else{
                return false;
            }
        } catch (Exception $e) {
            Log::error("Error in" . __METHOD__ . $e->getMessage());
        }
    }
}
