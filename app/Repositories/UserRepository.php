<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\Academic;
use Illuminate\Support\Facades\DB;


class UserRepository {
    /**
     * @var User
     */

     protected User $user;

     public function __construct(User $user)
     {
        $this->user = $user;
     }

     public function users()
     {
         return [
             ['id' => 1, 'name' => 'Quoc'],
             ['id' => 2, 'name' => 'Mai'],
             ['id' => 3, 'name' => 'Hoa'],
         ];
     }

     
    public function getList()
    {
        return Academic::find(2);
        // return ['id' => '1', 'name' => 'Mai Vu'];
    }




    public function findUserByCode($code)
    {
        // $user = DB::select('SELECT * FROM users WHERE code = ?', [$code]);
        $user = DB::table('users')
                ->whereExists('code', '=', '123');
        return $user;
    }

    public function checkInfoLogin($code, $password)
    {
        $user = DB::select('SELECT * FROM users 
                            WHERE code = ? AND password = ?', 
                            [$code, $password]);
        return $user;
    }

}