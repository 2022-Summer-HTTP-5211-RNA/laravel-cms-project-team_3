<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Storage;

class SocialMediaController extends Controller
{
    public function list()
    {
        return view('social_media.list', [
            'medias' => SocialMedia::all()
        ]);
    }

    public function addForm()
    {
        return view('social_media.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'bail|required|min:3|max:25',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'link' => 'bail|required|url|min:3|max:100'
        ]);
        
        $media = new SocialMedia();
        $media->title = $attributes['title'];
        $file = $attributes['photo'];
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $filePath = "media/".Auth()->user()->id."/". $fileName . time() . "." . $file->getClientOriginalExtension();
        if(!Storage::disk('public')->has("media/".Auth()->user()->id)) {
            Storage::disk('public')->makeDirectory("media/".Auth()->user()->id);
        }
        $store = Storage::disk('public')->put( $filePath, file_get_contents($file));
        $media->photo = $filePath;
       
        $media->link = $attributes['link'];
        $media->save();

        return redirect('/console/media/list')
            ->with('message', 'SocialMedia has been added!');
    }

    public function editForm(SocialMedia $media)
    {
        return view('social_media.edit', [
            'media' => $media,
        ]);
    }

    public function edit(SocialMedia $media)
    {

        $attributes = request()->validate([
            'title' => 'bail|required|min:3|max:25',
            'photo' => 'required',
            'link' => 'bail|required|url|min:3|max:100'
        ]);
       
        $media->title = $attributes['title'];
        $file = $attributes['photo'];
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $filePath = "media/".Auth()->user()->id."/". $fileName . time() . "." . $file->getClientOriginalExtension();
        if(!Storage::disk('public')->has("media/".Auth()->user()->id)) {
            Storage::disk('public')->makeDirectory("media/".Auth()->user()->id);
        }
        $store = Storage::disk('public')->put( $filePath, file_get_contents($file));
        $media->photo = $filePath;
       
        $media->link = $attributes['link'];
        $media->update();

        return redirect('/console/media/list')
            ->with('message', 'SocialMedia has been edited!');
    }

    public function delete(SocialMedia $media)
    {
        $media->delete();
        
        return redirect('/console/media/list')
            ->with('message', 'SocialMedia has been deleted!');        
    }

    public function getAll(){
        try{
            $medias=SocialMedia::all();
            $data=['status'=>1,'data'=>$medias,'message'=>'Success!'];
            return json_encode($data);

        }
        catch(Exception $e){
            $data=['status'=>0,'message'=>$e->getMessage()];
            return json_encode($data);

        }

    }
   
}
