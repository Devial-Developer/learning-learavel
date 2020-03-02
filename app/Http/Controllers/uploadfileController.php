<?php

namespace App\Http\Controllers;

use App\FileImage;
use Illuminate\Http\Request;

class uploadfileController extends Controller
{

    /**
     * Home Page
     *
     */
    public function index()
    {

        $res = FileImage::fetchData();
        return view('upload_files', ['res' => $res]);

    }

    /**
     * Upload Images
     *
     */

    public function upload(Request $req)
    {
        FileImage::fileQuery($req);
        return back();

    }

    /**
     * Delete Images
     *
     * @param [type] $id
     *
     */
    public function deleteImage($id)
    {
        $res = FileImage::deleteImg($id);
        if ($res) {
            return redirect()->back();
        }
    }
    /**
     * Undocumented function
     *
     * @param [type] $req
     * @return void
     */
    public function editimage($req)
    {
        $update = FileImage::editfiles($req);
        return view('edit', ['update' => $update]);

    }
    public function updateDetails(Request $request)
    {
        $res = FileImage::updateFile($request);
        if ($res) {
            $res = FileImage::fetchData();
            return view('upload_files', ['res' => $res]);
        }
    }

}
