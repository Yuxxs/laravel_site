<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
    public function messageForm()
    {
        return view('messageForm');
    }
    public function save(Request $request){
        $data = $request->input();
        $text = $data['text'];
        $message = new Message();
        $message->text=$text;
        $message->save();
        return redirect(route('messageForm'));
    }
}
