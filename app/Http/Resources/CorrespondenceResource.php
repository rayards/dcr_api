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
        return parent::toArray($request);

        // return json_encode([
        //     'id' => $this->id,
        //     'fileNumber' => $this->fileNumber,
        //     'subject' => $this->subject,
        //     'filing_area_id' => $this->file_area_id,
        //     'receivedFrom' => $this->receivedFrom,
        //     'correspondenceDate' => $this->correspondenceDate,
        //     'dateReceived' => $this->dateReceived,
        //     'comments' => $this->comments
        // ]);

        // return [
        //     'subject' => $this->subject
        // ];
    }
}
