<?php 
namespace App\Repositories;

use App\Repositories\BaseRepository;

class ProductsRepository extends BaseRepository implements ProductsInterface {

	//lay model
	public function getTable(){
		 //return \App\Products::class;
		return 'product';

	}
	


}

 ?>