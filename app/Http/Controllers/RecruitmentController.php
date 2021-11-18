<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecruitmentRequest;
use App\Models\Recruitment;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if (Auth::check()) {
            $params = $request->query();
            $recruitments = Recruitment::search($params)->openData()
                ->with(['user', 'category'])->latest()->paginate(5);

            $category = $request->category;
            $recruitments->appends(compact('category'));

            $categories = Category::all();

            return view('recruitments.index', compact('recruitments', 'categories'));
        } else {
            return view('welcome');
        }
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
        $entry = '';
        $entries = [];

        $entry = $recruitment->entries()
            ->where('user_id', auth()->user()->id)->first();

        if (Auth::check() && auth()->user()->id == $recruitment->user_id) {
            $entries = $recruitment->entries()->with('user')->get();
        }

        return view('recruitments.show', compact('recruitment', 'entry', 'entries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        $categories = Category::all();
        return view('recruitments.edit', compact('recruitment', 'categories'));
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
        if (auth()->user()->id != $recruitment->user->id) {
            return redirect()->route('recruitments.show', $recruitment)
                ->withErrors('自分の募集情報以外は更新できません');
        } else {
            $recruitment->fill($request->all());

            try {
                $recruitment->save();
            } catch (\Exception $e) {
                return back()->withInput()
                    ->withErrors('募集情報更新処理でエラーが発生しました');
            }
            return redirect()->route('recruitments.show', $recruitment)
                ->with('notice', '募集情報を更新しました');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        if (auth()->user()->id != $recruitment->user->id) {
            return redirect()->route('recruitments.show', $recruitment)
                ->withErrors('自分の募集情報以外は削除できません');
        } else {
            
            try {
                $recruitment->delete();
            } catch (\Exception $e) {
                return back()->withInput()
                    ->withErrors('募集情報削除処理でエラーが発生しました');
            }
            return redirect()->route('recruitments.index')
                ->with('notice', '募集情報を削除しました');
        }
    }

    public function dashboard()
    {
        $recruitments = Recruitment::latest()
            ->with('entries')
            ->MyRecruitment()
            ->paginate(5);
        
        return view('auth.recruitment-dashboard', compact('recruitments'));
    }
}
