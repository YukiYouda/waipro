<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\Recruitment;
use App\Consts\EntryConst;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Recruitment $recruitment)
    {
        $entry = new Entry([
            'recruitment_id' => $recruitment->id,
            'user_id' => auth()->user()->id,
        ]);

        $entry->save();

        return $entry;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment, Entry $entry)
    {
        $entry->delete();
    }

    public function dashboard()
    {
        $recruitments = Recruitment::whereHas('entries', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return $recruitments;
    }

    public function approval(Recruitment $recruitment, Entry $entry)
    {
        $entry->status = EntryConst::STATUS_APPROVAL;
        $entry->save();

        return $entry;
    }

    public function reject(Recruitment $recruitment, Entry $entry)
    {
        $entry->status = EntryConst::STATUS_REJECT;
        $entry->save();

        return $entry; 
    }
}
