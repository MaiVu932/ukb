<?php
namespace App\Repositories;

use App\Models\Department;
use Illuminate\Support\Facades\DB;

class UserRepository {
    /**
     * @var User
     */

     protected Department $department;

     public function __construct(Department $department)
     {
        $this->department = $department;
     }

     /**
      * create department
      * @param array
      * @return mix
      */
      public function create($info)
      {
        DB::table('departments')->insert($info);  

      }

    

}