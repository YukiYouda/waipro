<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Entry;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Entry $entry)
    {
        return view('messages.index', compact('entry'));
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
     * @param \App\Http\Requests\MessageRequest  $messagerequest
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request, Entry $entry)
    {
        $message = new Message([
            'comment' => $request->comment,
            'recruitment_id' => $entry->recruitment_id,
            'user_id' => $entry->user_id,
        ]);

        try {
            $message->save();
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors('送信でエラーが発生しました');
        }

        return redirect()
            ->route('entries.messages.index', $entry)
            ->with('notice', '送信しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
