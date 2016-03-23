<?php

namespace App\Http\Controllers\Api\V1;

use App\Acls\UsersAcl;
use App\Http\Controllers\Controller;
use App\Repositories\UsersRepository;
use App\User;
use App\Validators\UsersValidator;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * @ApiDescription(section="Users", description="Lists paginated Users")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/v1/users")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiParams(name="page", type="integer", nullable=true, description="Pagination page")
     * @ApiParams(name="per_page", type="integer", nullable=true, description="Per page in pagination")
     * @ApiParams(name="name", type="string", nullable=true, description="Filters tasks like %name%")
     * @ApiParams(name="email", type="string", nullable=true, description="Filters tasks like %email%")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample=" {
     *   'total': 1,
     *   'per_page': 15,
     *   'current_page': 1,
     *   'last_page': 1,
     *   'next_page_url': null,
     *   'prev_page_url': null,
     *   'from': 1,
     *   'to': 1,
     *   'data': [
     *     {
     *       'id': 1,
     *       'name': 'Zulfa Juniadi',
     *       'email': 'zulfajuniadi@gmail.com',
     *       'created_at': '2016-03-23 04:06:04',
     *       'updated_at': '2016-03-23 04:06:04'
     *     }
     *   ]
    }")
     */
    public function index()
    {
        return $this->repository->lists();
    }

    /**
     * @ApiDescription(section="Users", description="Create a new user")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/v1/users")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiHeaders(name="Content-Type", type="string", nullable=false, description="application/x-www-form-urlencoded")
     * @ApiParams(name="name", type="string", nullable=false, description="The user's name")
     * @ApiParams(name="password", type="string", nullable=false, description="The user's password")
     * @ApiParams(name="email", type="string", nullable=false, description="The user's email")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *   'name': 'Zulfa Juniadi',
     *   'email': 'zulfajuniadi3@gmail.com',
     *   'updated_at': '2016-03-23 15:01:29',
     *   'created_at': '2016-03-23 15:01:29',
     *   'id': 3
     * }")
     */
    public function store()
    {
        return $this->repository->create();
    }

    /**
     * @ApiDescription(section="Users", description="Displays a user with tasks array")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/v1/users/{user_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiParams(name="user_id", type="integer", nullable=false, description="ID of the user")
     * @ApiReturn(type="object", sample="{
     *   'id': 1,
     *   'name': 'Zulfa Juniadi',
     *   'email': 'zulfajuniadi@gmail.com',
     *   'created_at': '2016-03-23 04:06:04',
     *   'updated_at': '2016-03-23 04:06:04',
     *   'tasks': [
     *     {
     *       'id': 1,
     *       'user_id': 1,
     *       'title': 'Buy some milk',
     *       'is_done': 0,
     *       'created_at': '2016-03-23 14:33:25',
     *       'updated_at': '2016-03-23 14:33:25'
     *     }
     *   ]
     * }")
     */
    public function show(User $users)
    {
        return $users->load('tasks');
    }

    /**
     * @ApiDescription(section="Users", description="Updates an existing user")
     * @ApiMethod(type="PUT")
     * @ApiRoute(name="/api/v1/users/{user_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiHeaders(name="Content-Type", type="string", nullable=false, description="application/x-www-form-urlencoded")
     * @ApiParams(name="user_id", type="integer", nullable=false, description="ID of the user")
     * @ApiParams(name="name", type="string", nullable=true, description="The user's name")
     * @ApiParams(name="password", type="string", nullable=true, description="The user's password")
     * @ApiParams(name="email", type="string", nullable=true, description="The user's email")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *   'id': 1,
     *   'name': 'Jackie Chan',
     *   'email': 'zulfajuniadi@gmail.com',
     *   'created_at': '2016-03-23 04:06:04',
     *   'updated_at': '2016-03-23 15:06:08'
     * }")
     */
    public function update(User $users)
    {
        return $this->repository->update($users);
    }

    /**
     * @ApiDescription(section="Users", description="Deletes a user")
     * @ApiMethod(type="DELETE")
     * @ApiRoute(name="/api/v1/users/{user_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiParams(name="user_id", type="integer", nullable=false, description="ID of the user")
     */
    public function destroy(User $users)
    {
        $this->repository->delete($users);
    }

    public function __construct(UsersRepository $repository, Request $request)
    {
        parent::__construct();
        $this->middleware([
            'acl:' . UsersAcl::class,
            'validate:' . UsersValidator::class,
        ]);
        $this->repository = $repository;
        $this->request = $request;
    }
}
