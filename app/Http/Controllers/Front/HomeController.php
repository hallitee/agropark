<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Shop\Brands\Brand;
use App\blog;
use App\Shop\Categories\category;
use App\Shop\Products\Product;

class HomeController
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    //   $cat = $this->categoryRepo->findCategoryById(6);
       // $cat2 = $this->categoryRepo->findCategoryById(7);
     // $cat =  $this->categoryRepo->listCategories('name', 'asc');
     $brand = Brand::with('products')->get();
     $cat = category::with('products')->where('status', 1)->get();
     $blog = blog::orderBy('created_at', 'desc')->first();
     return view('front.indexnew')->with(['cat'=>$cat,'blog'=>$blog,'brand'=>$brand]); //, compact('cat1', 'cat2'));
    }
        public function shoparea()
    {
        $cat = category::with('products.images','products.attributes')->where('status', 1)->get();
      //  $cat = Brand::with('products')->get();
        return view('front.products.shop-02')->with(['cat'=>$cat]);
    }
        public function aboutus()
    {
       
        return view('front.about');
    }   
        public function contactus()
    {
       
        return view('front.contact');
    } 	
}
