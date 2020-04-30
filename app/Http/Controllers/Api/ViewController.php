<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ViewCollection;
use App\Model\Activity;
use App\Model\Blog;
use App\Model\Goal;
use App\Model\Impression;
use App\Model\Team;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    protected $page, $perpage;
    public function __construct(Request $request)
    {
        $this->page = $request->post('pagination')['page'];
        $this->perpage = $request->post('pagination')['perpage'];
    }

    public function blog()
    {
        $attribute = getModelFields(new Blog());

        $data = Blog::join(
            'users',
            'blogs.userId',
            '=',
            'users.user_id'
        )
            ->join(
                'categories',
                'blogs.categoryId',
                '=',
                'categories.category_id'
            )
            ->select('blogs.*', 'users.name as u_name', 'categories.name as c_name')
            ->paginate($this->perpage, $attribute, 'page', $this->page);

        return new ViewCollection($data);
    }

    public function goal()
    {
        $attribute = getModelFields(new Goal());

        $data = Goal::paginate($this->perpage, $attribute, 'page', $this->page);

        return new ViewCollection($data);
    }

    public function impression()
    {
        $attribute = getModelFields(new Impression());

        $data = Impression::join(
            'majors',
            'impressions.majorId',
            '=',
            'majors.major_id'
        )
            ->select('impressions.*', 'majors.name as m_name')
            ->paginate($this->perpage, $attribute, 'page', $this->page);

        return new ViewCollection($data);
    }

    public function team()
    {
        $attribute = getModelFields(new Team());

        $data = Team::paginate($this->perpage, $attribute, 'page', $this->page);

        return new ViewCollection($data);
    }

    public function activity()
    {
        $attribute = getModelFields(new Activity());

        $data = Activity::paginate($this->perpage, $attribute, 'page', $this->page);

        return new ViewCollection($data);
    }
}
