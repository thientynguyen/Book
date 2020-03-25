<?php

namespace App\Business;

use App\Repositories\Contracts\CategoryInterface;

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
        $data= $this->categoryRepository->getAll();

       return $this->returnSuccess($data);
    }

}
