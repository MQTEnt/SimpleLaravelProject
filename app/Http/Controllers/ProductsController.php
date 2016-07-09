<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use DB;
class ProductsController extends Controller {
	public function create()
	{
		$cates=Cate::select('id')->get()->toArray();
		$cate_id=array();
		foreach ($cates as $cate) {
			$cate_id[$cate['id']]=$cate['id'];
		}
		//var_dump($cate_id);
		return view('products.create',compact('cate_id'));
	}
	public function store(ProductFormRequest $request)
	{
		$name=$request->input('name');
		$des=$request->input('des');
		$cate_id=$request->input('cate_id');
		Product::create([
			'name'=>$name,
			'des'=>$des,
			'cate_id'=>$cate_id
		]);
		return redirect()->route('product.index');
	}
	public function index()
	{
		$products=Product::all();
		//var_dump($products);
		return view('products.index',compact('products'));
	}
	public function show($id)
	{
		echo "N/A: It will be upgraded late";
	}
	public function edit($id)
	{
		$product=Product::find($id);
		$cates=Cate::select('id')->get()->toArray();
		$cate_id=array();
		foreach($cates as $cate)
		{
			$cate_id[$cate['id']]=$cate['id'];
		}
		return view('products.edit',compact('product','cate_id'));
	}
	public function update($id, ProductFormRequest $request)
	{
		$product=Product::find($id);
		$product->update([
			'name'=>$request->input('name'),
			'des'=>$request->input('des'),
			'cate_id'=>$request->input('cate_id')
		]);
		$product->save();
		return redirect()->route('product.index');
	}
	public function destroy($id)
	{
		$product=Product::find($id);
		$product->delete();
		return redirect()->route('product.index');
	}
	//Home page
	public function indexHome()
	{
		//Using Query Builder in controller
		$products=DB::table('products')
			->join('cates','products.cate_id','=','cates.id')
			->select('products.*','cates.name as cate_name')
			->get();
		//var_dump($products);
		return view('products.indexHome',compact('products'));
	}
	public function showHome($id)
	{
		//Using Eloquent in controller
		$product=Product::find($id);
		$cate_id=$product->cate_id;
		$relaProducts=Product::select('id','name')
								->whereRaw('cate_id =? and id !=?',[$cate_id,$id])
								->get()
								->toArray();
		//var_dump($relaProducts);
		return view('products.showHome',compact(['product','relaProducts']));
	}
}
