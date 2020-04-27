<?php

namespace App\Repositories\Backend;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Option;

/**
 * Class OptionRepository.
 */
class OptionRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Option::class;
    }

    public function createOption($data)
    {  
    	if(isset($data['logo'])){
            $data['logo'] = createImages($data['logo']);
        } 
        if(isset($data['slides'])){
            $data['slides'] = createImages($data['slides']);
        }        
    	Option::create($data);  
        return true;
    }

     public function editOption($data)
    {  
    	if(isset($data['logo'])){
            $data['logo'] = createImages($data['logo']);
        } 
        if(isset($data['slides'])){
            $data['slides'] = createImages($data['slides']);
        } 
        return $data;
    }
}
