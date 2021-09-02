<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'company' => $this->company ? $this->company->name : '',
        'fname'=>$this->fname,
        'lname'=>$this->lname,
        'email'=>$this->email,
        'phone'=>$this->phone,

        ];
    }
}
