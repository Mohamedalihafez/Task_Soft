<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Http\Requests\Api\AttributeRequest;
use App\Http\Traits\Json;

class AttributeController extends Controller
{
    use Json;

    public function create(AttributeRequest $request)
    {
        $attribute = Attribute::createAttribute($request);

        return $this->result(200,$attribute);
    }

    public function update(AttributeRequest $request)
    {
        $attribute = Attribute::updateAttribute($request);

        return $this->result(200,$attribute);
    }

    public function delete(AttributeRequest $request)
    {
        $attribute = Attribute::deleteAttribute($request);

        return $this->result(200,$attribute);
    }

    public function get(AttributeRequest $request)
    {
        $attribute = Attribute::getAttributeData($request);

        return $this->result(200,$attribute);
    }

    
    public function all(Request $request)
    {
        $entites = Attribute::filter($request->all())->paginate(10);

        return $this->result(200,$entites);
    }
}
