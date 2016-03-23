<?php

namespace App\Http\Controllers\Api\V1;

use App\Acls\TasksAcl;
use App\Http\Controllers\Controller;
use App\Repositories\TasksRepository;
use App\Task;
use App\Validators\TasksValidator;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    /**
     * @ApiDescription(section="Tasks", description="Lists paginated User's tasks")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/v1/tasks")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiParams(name="page", type="integer", nullable=true, description="Pagination page")
     * @ApiParams(name="per_page", type="integer", nullable=true, description="Per page in pagination")
     * @ApiParams(name="title", type="string", nullable=true, description="Filters tasks like %title%")
     * @ApiParams(name="is_done", type="boolean", nullable=true, description="Filters tasks by is_done")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *    'total': 1,
     *    'per_page': 15,
     *    'current_page': 1,
     *    'last_page': 1,
     *    'next_page_url': null,
     *    'prev_page_url': null,
     *    'from': 1,
     *    'to': 1,
     *    'data': [
     *      {
     *        'id': 1,
     *        'user_id': 1,
     *        'title': 'Buy some eggs',
     *        'is_done': 0,
     *        'created_at': '2016-03-23 12:46:16',
     *        'updated_at': '2016-03-23 12:46:16'
     *      }
     *    ]
     *  }")
     */
    public function index()
    {
        return $this->repository->lists();
    }

    /**
     * @ApiDescription(section="Tasks", description="Create a new task")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/v1/tasks")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiHeaders(name="Content-Type", type="string", nullable=false, description="application/x-www-form-urlencoded")
     * @ApiParams(name="title", type="string", nullable=false, description="The task title")
     * @ApiParams(name="is_done", type="boolean", nullable=true, description="Whether the task is done")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *    'id': 2,
     *    'user_id': 1,
     *    'title': 'Buy some milk',
     *    'is_done': 1,
     *    'created_at': '2016-03-23 12:46:16',
     *    'updated_at': '2016-03-23 12:46:16'
     *  }")
     */
    public function store()
    {
        return $this->repository->create();
    }

    /**
     * @ApiDescription(section="Tasks", description="Displays a task")
     * @ApiMethod(type="GET")
     * @ApiRoute(name="/api/v1/tasks/{task_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiParams(name="task_id", type="integer", nullable=false, description="ID of the task")
     * @ApiReturn(type="object", sample="{
     *   'id': 4,
     *   'user_id': 1,
     *   'title': 'Buy some bread',
     *   'is_done': 1,
     *   'created_at': '2016-03-23 14:28:42',
     *   'updated_at': '2016-03-23 14:28:42',
     *   'user': {
     *     'id': 1,
     *     'name': 'Zulfa Juniadi',
     *     'email': 'zulfajuniadi@gmail.com',
     *     'created_at': '2016-03-23 04:06:04',
     *     'updated_at': '2016-03-23 04:06:04'
     *   }
     * }")
     */
    public function show(Task $tasks)
    {
        return $tasks->load('user');
    }

    /**
     * @ApiDescription(section="Tasks", description="Updates an existing task")
     * @ApiMethod(type="PUT")
     * @ApiRoute(name="/api/v1/tasks/{task_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiHeaders(name="Content-Type", type="string", nullable=false, description="application/x-www-form-urlencoded")
     * @ApiParams(name="task_id", type="integer", nullable=false, description="ID of the task")
     * @ApiParams(name="title", type="string", nullable=false, description="The task title")
     * @ApiParams(name="is_done", type="boolean", nullable=true, description="Whether the task is done")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *    'id': 2,
     *    'user_id': 1,
     *    'title': 'Buy some milk',
     *    'is_done': 0,
     *    'created_at': '2016-03-23 12:46:16',
     *    'updated_at': '2016-03-23 12:46:16'
     *  }")
     */
    public function update(Task $tasks)
    {
        return $this->repository->update($tasks);
    }

    /**
     * @ApiDescription(section="Tasks", description="Deletes a task")
     * @ApiMethod(type="DELETE")
     * @ApiRoute(name="/api/v1/tasks/{task_id}")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Only accepts application/json")
     * @ApiHeaders(name="Authorization", type="string", nullable=false, description="Token in format Bearer __token__ obtained from login API")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiParams(name="task_id", type="integer", nullable=false, description="ID of the task")
     */
    public function destroy(Task $tasks)
    {
        $this->repository->delete($tasks);
    }

    public function __construct(TasksRepository $repository, Request $request)
    {
        parent::__construct();
        $this->middleware([
            'acl:' . TasksAcl::class,
            'validate:' . TasksValidator::class,
        ]);
        $this->repository = $repository;
        $this->request = $request;
    }
}
