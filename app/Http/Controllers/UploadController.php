<?php

namespace App\Http\Controllers;

use App\Models\files;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index(){
        return view('upload');
    }
    // مسار الذي رح يتم فيه حفظ الملفات
    //D:\Laravel 8\uploadFile\storage\app\public
    public function create( Request $request){
        //عمل vaildation
        $validate = $request->validate([
            //الملف الذي رح ياتي من الحقل 
            //ماذا نستقبل صور او فيديو او اي امتدد نريده
            'file'=>'required|mimes:png,jpg,pjen|max:1024'
        ]);
        if($validate){
            //validate في حال تحقق 
            // نعمل جيسون لبيانات التي رجعت لنا 
            $requestDecode=json_decode($request->date,true);
            // البيانات او الملف الذي رجع نعمل له تسميه جديده مع الحفظ الامتداد حقه
           

            $file_name=time().'.'.$request->file->getClientOriginalExtension();
            // نحفظ الملف الذي جاء من حقل الادخال 
            // بداخل ملف pics
            // public في الملف الموجود
            $file_path=$request->file('file')->storeAs('pics',$file_name,'public');
           //التخزين في قواعد البيانات 
            files::create([
                'file'=>$file_name
            ]);
            return response()->json(['alert'=>'success'],200);
           
        }
        else
        return response()->json(['alert'=>'Error '],404);

    }
}
