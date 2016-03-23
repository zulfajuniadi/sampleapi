<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Repositories\UsersRepository;
use App\Validators\UsersValidator;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * @ApiDescription(section="Authentication", description="Authenticates a user using email and password. If authentication is successful, the API will return a json object with a token attribute. You must supply the token as a request header 'Authorization' attribute with the format: 'Bearer __token__' for API calls requiring authentication.")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/v1/auth/login")
     * @ApiHeaders(name="Accept", type="string", nullable=false, description="Must be application/json")
     * @ApiParams(name="email", type="string", nullable=false, description="User's email")
     * @ApiParams(name="password", type="string", nullable=false, description="User's password")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{
     *  'token':'eyJ0eXAi...KMxwwexXrY8GdU'
     * }")
     */
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                abort(401, 'Invalid credentials');
            }
        } catch (JWTException $e) {
            abort(500, 'Could not create token');
        }
        return ['token' => $token];
    }

    /**
     * @ApiDescription(section="Authentication", description="Registers a new user")
     * @ApiMethod(type="POST")
     * @ApiRoute(name="/api/v1/auth/register")
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
    public function postRegister()
    {
        return $this->repository->create();
    }

    public function __construct(UsersRepository $repository, Request $request)
    {
        parent::__construct();
        $this->middleware([
            'validate:' . UsersValidator::class,
        ]);
        $this->repository = $repository;
        $this->request = $request;
    }
}
