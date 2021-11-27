<?php

namespace App\Http\Controllers;

use App\Consts\EntryConst;
use App\Models\Entry;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class EntryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function store(Recruitment $recruitment)
    {
        $entry = new Entry([
            'recruitment_id' => $recruitment->id,
            'user_id' => auth()->user()->id,
        ]);

        try {
            $entry->save();
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors('エントリーでエラーが発生しました');
        }

        return redirect()
            ->route('recruitments.show', $recruitment)
            ->with('notice', 'エントリーしました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment, Entry $entry)
    {
        $entry->delete();

        return redirect()->route('recruitments.show', $recruitment)
            ->with('notice', 'エントリーを取り消しました');
    }

    public function dashboard()
    {
        $recruitments = Recruitment::whereHas('entries', function ($query){
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('recruitments.entry-dashboard', compact('recruitments'));
    }

    public function approval(Recruitment $recruitment, Entry $entry) {
        $entry->status = EntryConst::STATUS_APPROVAL;
        $entry->save();

        return redirect()->route('entries.messages.index', $entry)
            ->with('notice', 'エントリーを承認しました');
    }

    public function reject(Recruitment $recruitment, Entry $entry) {
        $entry->status = EntryConst::STATUS_REJECT;
        $entry->save();

        return redirect()->route('recruitments.show', $recruitment)
            ->with('notice', 'エントリーを却下しました');
    }
}
