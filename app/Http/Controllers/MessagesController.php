<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\SMS;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store($id, Request $request) {
    	$data = $request->validate(['content' => 'required']);
    	$discussion = Discussion::findOrFail($id);

    	$discussion->addMessage($data);
    	$numbers = $discussion
    		->participants
    			->where('owner_type', 'App\Tutor')
    				->map
    				->owner
    					->flatten()
    					->pluck('phone_number')
    					->all();

    	$api = new SMS(false, false, 'ZUaoa1xeJBk-L0UoEGWAdQRR91vWept3OYKfXyt2ED');

		$numbers = [243903726598];
		$sender = 'RUBANGO APP';
		$message = "Ecole: XXXX; Concerne: YYYY; Contenu: " . $data['content'];

		$response = $api->sendSms($numbers, $message, $sender);
		// dd($response);

    	return redirect()->back();
    }
}
