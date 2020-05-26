<?php

namespace App\Http\Controllers;

use App\models\Chat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Chat $chats)
    {
        //$this->authorize('index',$chats);
        $chats = Auth::user()->chats()->first();
        if ($chats)
         {
             $chats = $chats->paginate(5);
             return view('backoffice.chatDashboard.manage',['collection'=>$chats]);
            }
        return view('backoffice.chatDashboard.manage',['collection'=>$chats]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCustomer(Chat $chats)
    {
        //$this->authorize('indexCustomer',$chats);
        $chats = Auth::user()->chats()->first();
        if ($chats)
         {
             $chats = $chats->paginate(5);
             return view('backoffice.chatDashboard.manage',['collection'=>$chats]);
            }
        return view('backoffice.chatDashboard.manage',['collection'=>$chats]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat,Request $request)
    {
        $i = $request->id;
        $message = $chat->find($i)->users()->orderBy('pivot_created_at','desc')->get();
        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        $id = $request->id;
        return view('backoffice.chatDashboard.chat',['item'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, User $user)
    {
        //
        $users = $user->forService()
        ->where('service.id','=',7)
        ->where('active','=','1')
        ->get();
        return view('backoffice.chatDashboard.start',['users'=>$users]);
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function store(Chat $chat,Request $request)
    {
        $request->validate(['subject'=>'required|string|max:255']);
        $chat->subject = $request->subject;
        $chat->save();
        $chat->users()->attach([Auth::user()->id,$request->id_user], ['body' => 'START']);
        return redirect(route("chatView",$chat->id));
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat,Request $request)
    {
       //$this->authorize('destroy',$chat);
        $request->validate(['id'=>'required|integer']);
        $chat = $chat->find($request->id);
        $chat->users()->detach();
        $chat->delete();
        return redirect(route('chatIndex'));
    }
}
