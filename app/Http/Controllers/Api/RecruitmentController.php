<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Http\Requests\RecruitmentRequest;
use App\Models\Category;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $params = $request->query();
        // $recruitments = Recruitment::search($params)->openData()
        //     ->with(['user', 'category'])->latest()->paginate(5);

        // $category = $request->category;
        // $recruitments->appends(compact('category'));

        // $categories = Category::all();
        // return ["recruitments" => $recruitments, "categories" => $categories];

        $recruitments = Recruitment::latest()->get();
        $recruitments->load('user', 'category');

        return  $recruitments;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecruitmentRequest $request)
    {
        $recruitment = new Recruitment($request->all());
        $recruitment->user_id = $request->user()->id;
        $recruitment->save();
        return $recruitment;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        $recruitment->load('user', 'category');
        return $recruitment;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RecruitmentRequest $request, Recruitment $recruitment)
    {
        $recruitment->fill($request->all());
        $recruitment->save();

        return $recruitment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();
    }

    public function dashboard()
    {
        $recruitments = Recruitment::latest()
            ->load('entries', 'user', 'category')
            ->MyRecruitment()
            ->paginate(5);

        return $recruitments;
    }
}
