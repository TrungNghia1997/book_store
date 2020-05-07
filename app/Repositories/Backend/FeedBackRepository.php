<?php

namespace App\Repositories\Backend;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Feedback;

/**
 * Class FeedBackRepository.
 */
class FeedBackRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return FeedBack::class;
    }
    
    public function getList()
    {
    	return $this->orderBy('created_at','DESC')->paginate(10);
    }
}
