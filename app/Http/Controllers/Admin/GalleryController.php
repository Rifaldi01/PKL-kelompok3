<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function uploadGallery(Request $request){
        if ($request->hasFile('img') ){
            $image = $request->file('img');

            $name = md5($image->getClientOriginalName().now()). '.png';
            $ex = $image->getClientOriginalExtension();
            $img = ImageManagerStatic::make($image);
            $img = $img->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path("images/gallery/{$name}"), 70, $ex);

            $foto = Gallery::create([
                'img_name' => $name,
                'category_id' => $request->input('category_id')
            ]);
        } else if(!$request->hasFile('img') ){

            return back()->with('warning', 'Silahkan Isi Foto');
        }
//            Alert::success('Berhasil','Upload data berhasil');
        return back()->with('success' , 'berhasil');
    }

    public function Deletet($id){
        DB::table('galleries')
            ->where('id', $id)
            ->delete();
        return back()->withSuccess('Data Berhasil Dihapus');
    }
}
