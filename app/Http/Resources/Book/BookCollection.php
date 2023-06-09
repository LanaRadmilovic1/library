<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'books';

    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
