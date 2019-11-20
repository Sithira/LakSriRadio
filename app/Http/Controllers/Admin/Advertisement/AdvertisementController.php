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
        return view('admin.advertisements.index');
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
            'click_url',
            'url',
            'end_date'
        ]);

        $fileURL = $request->file('image')->storePublicly('advst', 's3');

        $input = $request->all();

        $request['url'] = $fileURL;

        Advertisement::create($input);

        flash()->success('Ad added successfully');

        return redirect()->route('advst.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.advertisements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        return view('admin.advertisements.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Advertisement $advertisement
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $this->validate($request, [
            'click_url',
            'end_date'
        ]);

        $advertisement->update($request->all());

        flash()->success('Ad successfully edited.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Advertisement $advertisement
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();

        flash()->success('Ad removed successfully');

        return redirect()->route('advst.index');
    }
}
