<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reference;

class ReferenceController extends Controller {
	public function getIndex() {
		$references = Reference::all();

		return view('reference/index', ['references' => $references]);
	}

	public function getCreate() {
		return view('reference/edit');
	}

	public function postCreate(Request $request) {
		$this->validate($request, [
			'title' => 'required|max:160|unique:references',
			'customer' => 'required|max:160|unique:references',
			'description' => 'required'
		]);

		$reference = new Reference();
		$reference->title = $request['title'];
		$reference->customer = $request['customer'];
		$reference->description = $request['description'];
		$reference->save();

		return redirect()->route('admin.index');
	}

	public function getShowAll() {
		$references = Reference::orderBy('created_at', 'desc')->get();
		return view('reference/showall', ['references' => $references]);
	}

	public function getEdit($referenceId) {
		if (!isset($referenceId)) {
			return redirect()->back();
		}

		$reference = Reference::where('id', $referenceId)->first();

		return view('reference.edit', ['reference' => $reference]);
	}

	public function postEdit(Request $request) {
		if (!isset($request['id'])) {
			return redirect()->back();
		}
		$this->validate($request, [
			'title' => 'required|max:160',
			'customer' => 'required|max:160',
			'description' => 'required'
		]);
		$reference = Reference::where('id',$request['id'])->first();
		$reference->title = $request['title'];
		$reference->customer = $request['customer'];
		$reference->description = $request['description'];
		$reference->update();
		return redirect()->route('admin.index');
	}

	public function getDelete($referenceId) {
		if (!isset($referenceId)) {
			return redirect()->back();
		}

		$reference = Reference::where('id', $referenceId)->first();
		$reference->delete();

		return redirect()->back();
	}
}