<?php

namespace App\Http\Controllers;

use App\Mail\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function appointment(Request $request)
    {
        $data['name'] = $request->get('name');
        $data['number'] = $request->get('number');
        $data['date'] = $request->get('date');
        $data['department'] = $request->get('department');

        Mail::to('info@mensclinic.kz')->send(new Appointment($data));

        return redirect()->back();
    }
}
