<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilingAreaRequest;
use App\Http\Requests\UpdateFilingAreaRequest;
use App\Http\Resources\FilingAreaResource;
use App\Models\FilingArea;

class FilingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FilingAreaResource::collection(FilingArea::all());
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
    public function store(StoreFilingAreaRequest $request)
    {
        $correspondence = FilingArea::create($request->validated());

        return FilingAreaResource::make($correspondence);
    }

    /**
     * Display the specified resource.
     */
    public function show(FilingArea $filingArea)
    {
        return FilingAreaResource::make($filingArea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FilingArea $filingArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilingAreaRequest $request, FilingArea $filingArea)
    {
        $filingArea->update($request->validated());

        return FilingAreaResource::make($filingArea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilingArea $filingArea)
    {
        $filingArea->delete();

        return response()->noContent();
    }
}
