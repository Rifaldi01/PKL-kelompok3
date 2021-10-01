<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use App\Berita;

class BeritaController extends Controller
{
    public function uploadberita(Request $request){

            $berita = Berita::create($request->only(['title','info','desc']));

            $image = $request->file('img_berita');
            $name = md5($image->getClientOriginalName().now()). '.png';
            $ex = $image->getClientOriginalExtension();
            $img = ImageManagerStatic::make($image);
            $img = $img->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path("images/news/{$name}"), 70, $ex);
            Berita::whereId($berita->id)->update([
                'img_berita' => $name
            ]);
            return back()->withSuccess('Berita berhasil Ditambahkan');
        }
    public function Delete($id){
        DB::table('beritas')->where('id', $id)->delete();
        return back()->withSuccess('Berita berhasil Dihapus');
    }
}
