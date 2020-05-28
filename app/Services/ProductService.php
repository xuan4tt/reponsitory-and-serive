<?php 
namespace App\Services;

use Illuminate\Http\Request;
use App\Services\AppService;
use App\Repositories\ProductsRepository;

class ProductService extends AppService
{
	//Lay Repository Product
	 public function getRepository()
    {
        return \App\Repositories\ProductsRepository::class;
    }
   
    
}
 ?> 