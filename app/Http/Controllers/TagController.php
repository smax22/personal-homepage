<?php

namespace App\Http\Controllers;

use App\Http\Contracts\TagRepositoryInterface;
use Illuminate\Http\Request;

class TagController extends Controller {


    /**
     * TagController constructor.
     */
    public function __construct(TagRepositoryInterface $tag_repository)
    {
        $this->tag_repository = $tag_repository;
    }

    public function getTagIndex() {
        return view('admin.tags', ['tags' => $this->tag_repository->getAllTags()]);
    }

    public function postCreateTag(Request $request) {
        $this->validate($request, [
           'name' => 'required|max:10|unique:tags'
        ]);

        $name = str_replace(' ', '-', $request['name']);

        $this->tag_repository->createTag($name);

        return redirect()->back()->with(['success' => 'Tag created!']);
    }

    public function getChangeShowAsFilter($tag_id, $show) {
        $this->tag_repository->showAsFilter($tag_id, $show);

        return redirect()->back()->with(['success' => 'State changed']);
    }

    public function getDeleteTag($tag_id) {
        $this->tag_repository->deleteTag($tag_id);

        return redirect()->back()->with(['success' => 'Tag deleted!']);
    }
}