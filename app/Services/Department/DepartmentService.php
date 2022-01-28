<?php

namespace App\Services;

use App\Models\Department;
use App\Repositories\UserRepository;
use App\Repositories\Department\DepartmentRepository;

class UserService
{
    /**
     * @var $userRepository
     */
    protected UserRepository $userRepository;
    protected Department $departmentRopository;

    /**
     * UserService Constructor
     * @param UserRepository $userRepository
     */
    public function __construct(Department $departmentRopository)
    {
        $this->departmentRopository = $departmentRopository;
    }

    public function create($info)
    {                                                   
        $state = $this->departmentRopository->create($info);
        return $state;
    }

    public function show($data)
    {
            return $this->departmentRopository->show($data);
    }

}
