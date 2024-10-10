<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CorrespondenceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        // return parent::toArray($request);

        // dd($this);

        return ([
            'id' => $this->id,
            'fileNumber' => $this->fileNumber,
            'subject' => $this->subject,
            'filing_area_id' => $this->filing_area_id,
            'receivedFrom' => $this->receivedFrom,
            'correspondenceDate' => $this->correspondenceDate,
            'dateReceived' => $this->dateReceived,
            'sentDate' => $this->sentDate,
            'comments' => $this->comments,
            'updated_at' => $this->updated_at->diffForHumans(),
            'filing_area' => $this->FilingArea
        ]);

        // return [
        //     'subject' => $this->subject
        // ];
    }
}
