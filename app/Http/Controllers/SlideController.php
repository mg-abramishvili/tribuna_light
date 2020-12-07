<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Background;
use App\Models\Logo;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::where('id', '1')->first();
        return view('slides.index', compact('slides'));
    }

    public function edit($id)
    {
        $slides = Slide::find($id);
        $backgrounds = Background::all();
        $logos = Logo::all();
        return view('slide', compact('slides', 'backgrounds', 'logos'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ]);

        $data = request()->all();
        $slides = Slide::find($data['id']);
        $slides->title = $data['title'];
        $slides->text = $data['text'];
        $slides->save();
        $slides->backgrounds()->detach();
        $slides->backgrounds()->attach($request->backgrounds, ['slide_id' => $slides->id]);
        $slides->logos()->detach();
        $slides->logos()->attach($request->logos, ['slide_id' => $slides->id]);
        return redirect('/slides/1/edit');
    }
}
