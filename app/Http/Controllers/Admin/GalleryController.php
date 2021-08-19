<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function uploadGallery(Request $request){
        foreach ($request->file('img') as $image){
            $name = md5($image->getClientOriginalName().now()). '.png';
            $ex = $image->getClientOriginalExtension();
            $img = ImageManagerStatic::make($image);
            $img = $img->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path("images/gallery/{$name}"), 70, $ex);
            Gallery::create([
                'img_name' => $name,
                'category_id' => $request->input('category_id')
            ]);
//            Alert::success('Berhasil','Upload data berhasil');
            return back()->with('success' , 'berhaisl');
        }
    }
}
