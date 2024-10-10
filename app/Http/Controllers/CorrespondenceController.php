<?php

namespace App\Http\Controllers;

use App\Models\Correspondence;
use App\Http\Resources\CorrespondenceResource;
use App\Http\Requests\StoreCorrespondenceRequest;
use App\Http\Requests\UpdateCorrespondenceRequest;

class CorrespondenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CorrespondenceResource::collection(Correspondence::with('FilingArea')->latest('updated_at')->get());
        // Below code implements pagination but still requires per_page variable from frontend to use in paginate method
        // return CorrespondenceResource::collection(Correspondence::latest()->paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCorrespondenceRequest $request)
    {
        $correspondence = Correspondence::create($request->validated());

        return CorrespondenceResource::make($correspondence);
    }

    /**
     * Display the specified resource.
     */
    public function show(Correspondence $correspondence)
    {
        return CorrespondenceResource::make($correspondence);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Correspondence $correspondence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorrespondenceRequest $request, Correspondence $correspondence)
    {
        $correspondence->update($request->validated());

        return CorrespondenceResource::make($correspondence);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Correspondence $correspondence)
    {
        $correspondence->delete();

        return response()->noContent();
    }
}
