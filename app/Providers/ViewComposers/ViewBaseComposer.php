<?php
namespace App\Providers\ViewComposers;
use App\Categories;
use Illuminate\Contracts\View\View;

class ViewBaseComposer{
	public function compose(View $view){
		$all = Categories::where('showhide', 'show')->get();
		$view->with('all', $all);
	}
}