<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class VideosController extends Controller
{
    const REGISTER_DISABLED = 'disabled';
    const REGISTER_ENABLED = 'enabled';

    public function index(Request $request)
    {

        $search = $request->input('search');

        $videos = Video::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(5);

        return view('video.index',compact('videos', 'search'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('video.create' , compact('categories'));
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'url' => 'required|file|mimes:mp4,mov,ogg,qt|max:50000',
            'category_id' => 'required|string',
        ]);

        if ($request->hasFile('url')) {
            $path = $request->file('url')->store('videos', 'public');
        }else {
            return back()->withErrors(['url' => 'No se ha subido ningún archivo de video.']);
        }


        $video = new Video();

        $video->name = $request->name;
        $video->url = $path;
        $video->category_id = $request->category_id;

        $video->save();

        if ($request->input('continue_register') == self::REGISTER_ENABLED) {
            return redirect(route('videos.create'))->with('message', 'Se registro correctamente.');
        }

        return redirect(route('videos.index'))->with('message', 'Se registro correctamente.');
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('video.edit', compact('video', 'categories'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'url' => 'nullable|file|mimes:mp4,mov,ogg,qt|max:50000',
            'category_id' => 'required|string',
        ]);

        if ($request->hasFile('url')) {
            $path = $request->file('url')->store('videos', 'public');
            $video->url = $path;
        } elseif ($request->input('remove_video')) {
            $video->url = null;
        }

        $video->name = $request->name;
        $video->category_id = $request->category_id;
        $video->save();

        return redirect(route('videos.index'))->with('message', 'Se actualizo correctamente.');
    }

    public function delete(Video $video)
    {
        return view('video.destroy', compact('video'));
    }

     public function destroy(Video $video)
     {
        $video->delete();

        return redirect(route('videos.index'))->with('message', 'Se elimino correctamente.');
     }
}
