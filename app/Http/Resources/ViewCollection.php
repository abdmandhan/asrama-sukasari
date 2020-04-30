<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ViewCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'data' => $this->collection,
        // ];
    }

    public function withResponse($request, $response)
    {
        $data = $response->getData(true);
        unset($data['links']);
        $page = $data['meta']['current_page'];
        $pages = $data['meta']['last_page'];
        $perpage = (int) $data['meta']['per_page'];
        $total = $data['meta']['total'];
        $sort = "asc";
        $field = @$request->post('sort')['field'] ? $request->post('sort')['field'] : 'blog_id';
        $data['meta'] = compact('page', 'pages', 'perpage', 'total', 'sort', 'field');
        $response->setData($data);
    }
}
