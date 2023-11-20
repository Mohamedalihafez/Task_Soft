<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserRequest;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Http\Traits\Json;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    use Json;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function create(UserRequest $request)
    {
        $user = User::createUser($request);

        return $this->result(200,$user);
    }

    public function update(UserRequest $request)
    {
        $user = User::updateUser($request);

        return $this->result(200,$user);
    }

    public function delete(UserRequest $request)
    {
        $user = User::deleteUser($request);

        return $this->result(200,$user);
    }

    public function get(UserRequest $request)
    {
        $user = User::getUser($request);

        return $this->result(200,$user);
    }

    public function all(Request $request)
    {
        $users = User::filter($request->all())->paginate(20);

        return $this->result(200,$users);
    }
}
