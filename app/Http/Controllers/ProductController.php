<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {
	public function getIndex() {
		$products = Product::all();

		return view('product/index', ['products' => $products]);
	}

	public function getCreate() {
		return view('product/edit');
	}

	public function postCreate(Request $request) {
		$this->validate($request, [
			'title' => 'required|max:160|unique:products',
			'description' => 'required'
		]);

		$product = new Product();
		$product->title = $request['title'];
		$product->description = $request['description'];
		$product->save();

		return redirect()->route('admin.index');
	}

	public function getShowAll() {
		$products = Product::orderBy('created_at', 'desc')->get();
		return view('product/showall', ['products' => $products]);
	}

	public function getEdit($productId) {
		if (!isset($productId)) {
			return redirect()->back();
		}

		$product = Product::where('id', $productId)->first();

		return view('product.edit', ['product' => $product]);
	}

	public function postEdit(Request $request) {
		if (!isset($request['id'])) {
			return redirect()->back();
		}
		$this->validate($request, [
			'title' => 'required|max:160',
			'description' => 'required'
		]);
		$product = Product::where('id',$request['id'])->first();
		$product->title = $request['title'];
		$product->description = $request['description'];
		$product->update();
		return redirect()->route('admin.index');
	}

	public function getDelete($productId) {
		if (!isset($productId)) {
			return redirect()->back();
		}

		$product = Product::where('id', $productId)->first();
		$product->delete();

		return redirect()->back();
	}
}