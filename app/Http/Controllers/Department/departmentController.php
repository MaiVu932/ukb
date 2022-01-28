<?php

namespace App\Http\Controllers;

use App\Services\Department\DepartementService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    private DepartementService $userService;

    /**
     * UserController Constructor
     * @param UserService $userService
     */
    public function __construct(DepartementService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * index function
     * 
     * @param Request $request
     */
    public function index(Request $request)
    {
        $users = $this->userService->getUsers();
        if($request->wantsJson()) {
            return $this->responseSuccess($users, 'get users list successfully');
        }
        return $this->responseSuccess($users, 'get users list successfully');

    }

    public function getList(Request $request)
    {
        $getList = $this->userService->getList();
        if($request->wantsJson()) {
            return $this->responseSuccess($getList, 'get users list successfully');
        }
        return $getList;
    }

    public function login(Request $request)
    {
        $code = '08d4800021';
        $pass = '1234';
        $user = $this->userService->checkInfoLogin($code, $pass);
       
        if($request->wantsJson()) {
            return $this->responseSuccess($user, 'login successfully');
        }
        return $user;
    }

    
}
