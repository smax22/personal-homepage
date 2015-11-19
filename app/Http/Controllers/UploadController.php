<?php

namespace App\Http\Controllers;

use App\Http\Contracts\UserRepositoryInterface;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use URL;

class UploadController extends Controller
{
    public function postUploadImage(Request $request, UserRepositoryInterface $user_rep, Filesystem $filesystem)
    {
        $message = "";
        if (!$request->hasFile('upload')) {
            $message = "Error during upload!";
            $url = "";
        } else {
            $this->validate($request, [
                'upload' => 'image'
            ]);
            $user = $user_rep->getCurrentUser();
            $extension = $request->file('upload')->guessExtension();
            $destination = 'blog/images/' . $user->id . '/';
            $filename = uniqid() . '.' . $extension;

            if (!$filesystem->isDirectory($destination)) {
                $filesystem->makeDirectory($destination);
            }
            $request->file('upload')->move($destination, $filename);
            $callback_func = $request['CKEditorFuncNum'];
            $url = URL::to($destination . $filename);
        }
        return '<html><body><script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$callback_func.'", "'.$url.'","'.$message.'");</script></body></html>';
    }
}