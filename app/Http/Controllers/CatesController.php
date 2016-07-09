<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Cate;
use App\Http\Requests\CateFormRequest;
use DB;
class CatesController extends Controller{
	public function create()
	{
		return view('cates.create');
	}
	public function store(CateFormRequest $request)
	{
		$name=$request->input('name');
		$des=$request->input('des');
		Cate::create([
			'name'=>$name,
			'des'=>$des
		]);
		return redirect()->route('cate.index');
	}
	public function index()
	{
		$cates=Cate::all();
		// echo "<pre>";
		// print_r($cates);
		// echo "</pre>";
		return view('cates.index',compact('cates'));
	}
	public function show($id)
	{
		echo "N/A: It will be upgraded late";
	}
	public function edit($id)
	{
		$cate=Cate::find($id);
		// echo "<pre>";
		// print_r($cate);
		// echo "</pre>";
		return view('cates.edit',compact('cate'));
	}
	public function update($id,CateFormRequest $request)
	{
		$cate=Cate::find($id);
		$cate->update([
			'name'=>$request->input('name'),
			'des'=>$request->input('des')
		]);
		$cate->save();
		return redirect()->route('cate.index');
	}
	public function destroy($id)
	{
		$cate=Cate::find($id);
		$cate->delete();
		return redirect()->route('cate.index');
	}
	//Home page
	public function indexHome()
	{
		$cates=Cate::all();
		return view('cates.indexHome',compact('cates'));
	}
	public function showHome($id)
	{
		//Using Query Builder in controller
		$data=DB::table('cates')
				->join('products','cates.id','=','products.cate_id')
				->select('cates.name as cate_name','products.*')
				->where('cates.id','=',$id)
				->get();
		//var_dump($data);
		return view('cates.showHome',compact('data'));
	}
	public function getAllProducts()
	{
		//Using Eloquent in controller
		$cates=Cate::select('id','name')->get()->toArray();
		$data=array();
		foreach($cates as $cate)
		{
			$data[$cate['name']]= Cate::find($cate['id'])
								->product()
								->select('name','id')
								->get()
								->toArray();
		}
		//var_dump($data);
		return view('home.home',compact('data'));
	}
}
