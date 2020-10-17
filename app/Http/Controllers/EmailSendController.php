<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;

class EmailSendController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendToEmail(Request $request)
    {
        $phone = $request->input('phone');
        $name = $request->input('name');
        $city = $request->input('city');

        $subject = 'Новая заявка';
        $body = "Имя: <b>{$name}</b><br>Телефон: <b>{$phone}</b><br>";
        if ($city) {
            $body .= "Город: <b>{$city}</b><br>";
        }

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@idetox-shop.kz>' . "\r\n";

        mail("azamat.taijan@gmail.com", $subject,$body, $headers);
        return back()->with('status', 'success');
    }
}
