<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\EntityRequest;
use App\Http\Traits\Json;
use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    use Json;

    public function create(EntityRequest $request)
    {
        $entity = Entity::createEntity($request);

        return $this->result(200,$entity);
    }

    public function update(EntityRequest $request)
    {
        $entity = Entity::updateEntity($request);

        return $this->result(200,$entity);
    }

    public function delete(EntityRequest $request)
    {
        $entity = Entity::deleteEntity($request);

        return $this->result(200,$entity);
    }

    public function get(EntityRequest $request)
    {
        $entity = Entity::getEntity($request);

        return $this->result(200,$entity);
    }

    
    public function all(Request $request)
    {
        $entites = Entity::filter($request->all())->paginate(10);

        return $this->result(200,$entites);
    }
}
