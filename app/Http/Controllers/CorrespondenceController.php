<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correspondence;
use App\Models\CorrespondenceInfo;
use App\Http\Resources\CorrespondenceResource;
use App\Http\Requests\StoreCorrespondenceRequest;
use App\Http\Requests\UpdateCorrespondenceRequest;
use App\Http\Resources\CorrespondenceInfoResource;
use App\Models\CorrespondenceDepartmentHistory;

class CorrespondenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CorrespondenceInfoResource::collection(CorrespondenceInfo::all());
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

        $correspondence_history = CorrespondenceDepartmentHistory::create([
            'correspondence_id' => $correspondence->id,
            'department_id' => $correspondence->creator_department_id,
            'start_date' => $correspondence->date_received,
        ]);

        return CorrespondenceResource::make($correspondence);
    }

    /**
     * Display the specified resource.
     */
    public function show(CorrespondenceInfo $correspondence)
    {
        return CorrespondenceInfoResource::make($correspondence);
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


        CorrespondenceDepartmentHistory::where('correspondence_id', $correspondence->id)->where('department_id', $correspondence->creator_department_id)->update(['end_date' => $request->date_sent]);


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

    /**
     * Change the flagged status of the resource.
     */
    public function flag(Correspondence $correspondence, Request $request)
    {
        dd($request);

        // $correspondence->update(['flagged' => $flagged]);

        // return CorrespondenceResource::make($correspondence);
        return $flagged;
    }
}
