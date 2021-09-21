<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;

class TeamController extends Controller
{
    public function uploadteam(Request $request){
        $team = Team::create($request->only(['name','alamat','addres','keahlian','status',]));

        $image = $request->file('image');
        $name = md5($image->getClientOriginalName().now()). '.png';
        $ex = $image->getClientOriginalExtension();
        $img = ImageManagerStatic::make($image);
        $img = $img->resize(null, 500, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path("images/gallery/{$name}"), 70, $ex);
        Team::whereId($team->id)->update([
            'image' => $name
        ]);
        return back()->withSuccess('Tambah Team Berhasil');
    }

    public function Edit ($id){
        $status = 'edit';
        $data = Team::whereId($id)->first();
        return view('admin.team', compact(['data', 'status']));
    }

    public function Update(Request $request, $id){
        $team = Team::whereId($id)->update($request->only(['name', 'keahlian', 'status', 'addres']));

        if ($request->file('image')){
            $image = $request->file('image');
            $name = md5($image->getClientOriginalName().now()). '.png';
            $ex = $image->getClientOriginalExtension();
            $img = ImageManagerStatic::make($image);
            $img = $img->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path("images/gallery/{$name}"), 70, $ex);
            Team::whereId($id)->update([
                'image' => $name
            ]);
        }
        return back()->withSuccess('Berhasil');

    }

    public function Deletet($id){
        DB::table('teams')->where('id', $id)->delete();
        return back()->withSuccess('Data Berhasil Dihapus');
    }

    public function Detail($id){
        $team = Team::whereId($id)->first();
        return view('admin.detail', compact('team'));
    }
}
