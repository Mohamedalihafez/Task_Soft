<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AttributeRequest;
use App\Http\Requests\Api\AttributeValueRequest;
use Illuminate\Http\Request;
use App\Models\Entity;
use App\Models\Attribute;
use App\Http\Requests\Api\EntityRequest;
use App\Http\Traits\Json;

class EntityOperatorController extends Controller
{
    use Json;

    public function update(EntityRequest $request)
    {
        $entity = Entity::updateEntity($request);

        return $this->result(200,$entity);
    }

    public function createAttribute(AttributeRequest $request)
    {
        $attribute = Attribute::createAttribute($request);

        return $this->result(200,$attribute);
    }

    public function delete(EntityRequest $request)
    {
        $entity = Entity::deleteEntity($request);

        return $this->result(200,$entity);
    }

    public function get(Request $request)
    {
        $entites = Entity::filter($request->all())->paginate(10);

        return $this->result(200,$entites);
    }

    public function allData(Request $request)
    {
        $entites = Entity::allData($request);

        return $this->result(200,$entites);
    }

        
    public function createAttributeValue(AttributeValueRequest $request)
    {
        $attribute = Attribute::createAttributeValue($request);

        return $this->result(200,$attribute);
    }

}
