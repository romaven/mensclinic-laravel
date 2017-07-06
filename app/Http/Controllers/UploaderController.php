<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploaderController extends Controller
{
    public function get(Request $request)
    {
        $funcNum = $request->get('CKEditorFuncNum');
        $message = $url = '';
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            if ($file->isValid()) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path() . '/images/uploads/', $filename);
                $url = '/images/uploads/' . $filename;
            } else {
                $message = 'An error occured while uploading the file.';
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction(' . $funcNum . ', "' . $url . '", "' . $message . '")</script>';
    }
}
