<?php

namespace App\Http\Controllers;

use  App\Mail\NewUserWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
class MailController extends Controller
{
    // public static function sendSignupEmail($name, $email) {
    //     $data = [
    //         'firstname' => $name,
           
    //     ];
    //     Mail::to($email)->send(new SignupEmail($data));
    // }
    // public static function sendSignupEmail($name, $email) {
    //     $data = [
    //         'name' => $name,
    //         'email'=>$email
           
    //     ];
    //     Mail::to($email)->send(New NewUserWelcomeMail($data));
    // }
    public function hai() {
        $data = User::all();

        Mail::send('jk', $data->toArray(),
        function($message){
            $message->to('jithinkjohny3@gmail.com', 'Jk')->subject('Hai Jithin');
        });
    }
}
