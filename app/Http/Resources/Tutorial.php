<?php

namespace Anpu\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tutorial extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'oid'            => $this->oid,
            'url'           => $this->url,
            'title'         => $this->title,
            'subtitle'      => $this->subtitle,
            'image'         => $this->image,
            'videoId'       => $this->videoId,
            'intro'         => $this->intro,
            'article'       => $this->article,
            'published'     => $this->published,
            'featured'      => $this->featured,
            'attachement'   => $this->attachement,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
            ];
    }
}
