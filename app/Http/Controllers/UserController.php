<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;
use App\Models\Image_Upload;

class UserController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function add(){
        return view('/add');
    }

    public function add_data(Request $r){
        
        $text = $r->text;
        
        $upload = new Image_Upload();
            
        if($files = $r->file('img')) {
        $image_response = $upload->uploadImage($files,'post_img');
        
        }
        $data = new Datas;        
        $data->text = $text;
        $data->image = $image_response;

        
        $data->save();
            
        return redirect()->back()->with('msg','Data updated successfully');
    }

    public function edit($id){
        $data['post'] = Datas::Where('id', '=', $id)->get();
        
        return view('edit', $data);
    }

    public function edit_data(Request $r, $id){
        
        $text = $r->text;
        
        $upload = new Image_Upload();
            
        if($files = $r->file('img')) {
        $image_response = $upload->uploadImage($files,'post_img');
        
        }
        $data = Datas::find($id);        
        $data->text = $text;
        $data->image = $image_response;

        
        if($data->update())
        {
            return redirect()->back()->with('msg','Data updated successfully');
     
        }
        else{
                return redirect()->back()->with('msg','Some Thing went Wrong');
        }
    }


    public function delete_data($id){
        $data = Datas::find($id); 
        if($data->delete())
        {
            return redirect()->back()->with('msg','Data Deleted successfully');
     
        }
        else{
                return redirect()->back()->with('msg','Some Thing went Wrong');
        }

    }

    public function view_data($id){
        $data['view'] = Datas::find($id);
        return view('view', $data);
    }
}
