<?php

namespace App\Repositories\Backend;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Author;

/**
 * Class AuthorRepository.
 */
class AuthorRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Author::class;
    }

    public function getList()
    {
        return $this->orderBy('created_at','DESC')->paginate(9);
    }
    
    public function createAuthor($data)
    {  
    	if(isset($data['image_author'])){
            $data['image_author'] = createImages($data['image_author']);
        }              
    	Author::create($data);  
        return true;
    }

     public function editAuthor($data)
    {  
    	if(isset($data['image_author'])){
            $data['image_author'] = createImages($data['image_author']);
        }         
        return $data;
    }
}
