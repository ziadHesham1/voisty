<?php

namespace App\Http\Controllers;

use App\fileUpload;
use Illuminate\Http\Request;

class uploadController extends Controller
{
public function index()
{
    $downloadedFile = fileUpload::all();
    return view('test',compact('downloadedFile'));
}
    public function store(Request $request)
    {
        $major = $request->input('major-select');
        $year = $request->input('year-select');
         $subject= $request->input('subj-select');
         $type= $request->input('type-select');
        $week = $request->input('week-select');
        //for pdf
        $filename=$major."-".$year."-".$subject."-".$type."-".$week.".pdf";
        //$filename="thefile1.pdf";
        $filePath = $request->file('uploadedfile')->storeAs('uploads', $filename, 'public');
        $fileModel=new fileUpload();
        $fileModel->name = $filename;
        $fileModel->file_path = '/storage/' . $filePath;
        $fileModel->save();

        return back()
            ->with('success','File has been uploaded.')
            ->with('file', $filename);
    }


}
