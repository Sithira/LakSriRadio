<?php

namespace App\Http\Controllers\Admin\Advertisement;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::all();

        return view('admin.advertisements.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'click_url' => 'required|url',
            'end_date' => 'required|date',
            'image' => 'required|image'
        ]);

        $fileURL = $request->file('image')->storePublicly('advst', 's3');

        $input = $request->all();

        $input['url'] = $fileURL;

        Advertisement::create($input);

        flash()->success('Ad added successfully');

        return redirect()->route('adverts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advert
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advert)
    {
        return view('admin.advertisements.show', compact('advert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advert)
    {
        return view('admin.advertisements.edit', compact('advert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Advertisement $advert
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Advertisement $advert)
    {
        $this->validate($request, [
            'click_url',
            'end_date'
        ]);

        $advert->update($request->all());

        flash()->success('Ad successfully edited.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Advertisement $advert
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Advertisement $advert)
    {
        $advert->delete();

        flash()->success('Ad removed successfully');

        return redirect()->route('adverts.index');
    }
}
