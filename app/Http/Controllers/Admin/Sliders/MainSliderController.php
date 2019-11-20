<?php

namespace App\Http\Controllers\Admin\Sliders;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Http\Request;

class MainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = MainSlider::all();

        return view('admin.sliders.main-slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.main-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "main_text" => "required|min:3",
            "secondary_text" => "min:3|nullable",
            "image" => "required|image"
        ]);

        $url = $request->file('image')->store('sliders', 's3');

        $slider = $request->all();
        $slider['url'] = $url;

        $slider = MainSlider::create($slider);

        flash()->success('New post created with post id: ' . $slider->id);

        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function show(MainSlider $mainSlider)
    {
        return view('admin.sliders.main-slider.show', compact('mainSlider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(MainSlider $mainSlider)
    {
        return view('admin.sliders.main-slider.show', compact('mainSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainSlider $mainSlider)
    {

        $this->validate($request, [
            "main_text" => "required|min:3",
            "secondary_text" => "min:3|nullable"
        ]);

        $mainSlider->update($request->all());

        flash()->success('Slider item updated with id: ' . $mainSlider->id);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainSlider $mainSlider)
    {
        $mainSlider->delete();

        flash()->success('Slider item deleted successfully with id: ' . $mainSlider->id);

        return redirect()->route('sliders.index');
    }
}
