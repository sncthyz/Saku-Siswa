<?php

namespace App\Http\Controllers;

use App\Mail\Maill;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
public function Mail(Request $request){
$request->validate([
'email'=>'required',
'subject' => 'required',
'pesan'=>'required'
]);

Mail::raw($request->pesan, function($message) use ($request) {
$message->to(config('mail.from.address'))
->subject($request->subject);
});

return back()->with('sukses', 'berhasil');

}
}
