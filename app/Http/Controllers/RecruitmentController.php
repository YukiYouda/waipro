<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruitmentRequest;
use App\Models\Recruitment;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('recruitments.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RecruitmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecruitmentRequest $request)
    {
        $recruitment = new Recruitment($request->all());
        $recruitment->user_id = $request->user()->id;

        try {
            $recruitment->save();
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors('募集情報登録処理でエラーが発生しました');
        }

        return redirect()
            ->route('recruitments.show', $recruitment)
            ->with('notice', '募集情報を登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        return view('recruitments.show', compact('recruitment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RecruitmentRequest  $request
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(RecruitmentRequest $request, Recruitment $recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        //
    }
}
