<?php

namespace App\Http\Controllers;

use App\Models\AboutEdit;
use App\Models\HomeEdit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $home = HomeEdit::get();
        $about = AboutEdit::get();

        return view('Admin.index', 
            [
                'allData' => $home,
                'dataAll' => $about
            ]
        );
    }

    public function add()
    {
        return view('Admin.add');
    }
                // THE HOMEPAGE EDIT FOR ADMIN CONTROL

                
    public function create(Request $request)
    {
        // $home = HomeEdit::create([
        //     'image' => $request->image,  
        //     'content' => $request->content,
        //     'title' => $request->title,
        // ]);
        $home = HomeEdit::create($request->all());
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        // $home = ;
        return view('Admin.edit', ['home' => HomeEdit::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $home = HomeEdit::findOrFail($id);
        $home->fill($request->all());
        $home->save();

        // $home = HomeEdit::where('id', $id)->home([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $request->image
        // ]);
        if($home){
            // $home = HomeEdit::findOrFail($id);
            return redirect()->route('admin.edit', [$home->id]);
        }         
    }

    public function destroy($id)
    {
        $home = HomeEdit::findOrFail($id);
        $home->delete();

        return redirect()->route('admin.index');
    }



                     // THE ABOUT PAGE FOR ADMIN CONTROL

    public function addAboutPage()
    {
        return view('Admin.create-about');
    }

    public function createAboutPage(Request $request)
    {

        $about = AboutEdit::create($request->all());
        return redirect()->route('admin.index');
    }
    public function editAboutPage($id)
    {
        return view('Admin.edit-about', ['about' => AboutEdit::findOrFail($id)]);
    }
    public function updateAboutPage(Request $request, $id)
    {
        $about = AboutEdit::findOrFail($id);
        $about->fill($request->all());
        $about->save();
        if($about){
            // $about = AboutEdit::findOrFail($id);
            return redirect()->route('admin-about.edit', [$about->id]);
        }         
    }
    
    public function destroyAboutPage($id)
    {
        $about = AboutEdit::findOrFail($id);
        $about->delete();

        return redirect()->route('admin.index');
    }
}
