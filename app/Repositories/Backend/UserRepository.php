<?php

namespace App\Repositories\Backend;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\User;
use Hash;
//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return User::class;
    }

    public function getList()
    {
        return $this->orderBy('created_at','DESC')->paginate(8); 
    }

      public function addUser(array $data, $id = NULL)
    {
        if (isset($data['avatar'])) {
            $file = $data['avatar'];
            //kiem tra file anh ton tai hay chua 
            $fileName = $file->getClientOriginalName();
            // public_path : lay dg dan vat ly
            if(file_exists(public_path()."/upload/".$fileName)){
                $fileName = str_random('5').$fileName;//thay ten khi trc do da co anh ten nay
            }

            //move file to folder upload in public
            $file->move('upload', $fileName);
            $data['avatar'] = '/upload/'.$fileName;
        } else {
            unset($data['avatar']);
        }
            
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        if ($id) {
            $user = self::getById($id);
            return $user->update($data);
        }        
        return self::create($data);
    }

}
