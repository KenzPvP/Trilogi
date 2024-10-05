<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function viewCatalog()
{
    $dataForPage1 = Catalogs::where('category', 1)->get();
    $dataForPage2 = Catalogs::where('category', 2)->get();
    $dataForPage3 = Catalogs::where('category', 3)->get();

    return view('catalogs', compact('dataForPage1', 'dataForPage2', 'dataForPage3'));
}

public function view($category)
{
    $data = catalogs::where('category', $category)->get();

    if ($category == 1) {
        return view('Catalog.catalogs_page', compact('data'));
    } elseif ($category == 2) {
        return view('Catalog.catalogs2_page', compact('data'));
    } elseif ($category == 3) {
        return view('Catalog.catalogs3_page', compact('data'));
    } else {
        return redirect()->route('/')->with('error', 'Kategori tidak ditemukan');
    }
}

public function views($id)
{
    $data = Catalogs::findOrFail($id); 
    
    if($data){
        return view('Catalog.catalog_page', compact('data'));
    }
}



    public function index(){
        $data = catalogs::get();

        return view('Catalog.cms.index',compact('data'));
    }

    public function create(){
        return view('Catalog.cms.add');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'category' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(storage_path('app/public'), $imageName);
        $data['image'] = $imageName;
    }
    
    $catalog = Catalogs::create($data);

    if($catalog){
        Alert::success('Hore!', 'Data Berhasil di Tambahkan');
        return redirect('/catalog/admin')->with('success','Add Data Catalog is Successful');
    }else{
        return back()->with('error','Failed to add Catalog');
    }
}


    public function edit($id){
        $catalog = catalogs::where('id',$id)->first();

        return view('Catalog.cms.update', compact('catalog'));
    }

    public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // gambar bisa nullable saat update
        'description' => 'required',
        'category' => 'required',
    ]);

    $catalog = Catalogs::findOrFail($id);

        if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(storage_path('app/public'), $imageName);
        $data['image'] = $imageName;
    } else {
        $data['image'] = $catalog->image;
    }

    if ($catalog->update($data)) {
        Alert::success('Hore!', 'Data Berhasil di Update');
        return redirect('/catalog/admin')->with('success', 'Catalog update is Successful');
    } else {
        return back()->with('error', 'Failed to update Catalog');
    }
}


    public function delete($id)
    {
        $data = catalogs::find($id);
    
        if ($data) {
            $data->delete();
            Alert::success('Hore!', 'Data Berhasil di Hapus');
            return back()->with('success', 'Category was deleted');
        } else {
            return back()->with('error', 'Category not found');
        }
    }
}
