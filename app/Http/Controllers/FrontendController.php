<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CareerModule\Application;
use App\Models\CareerModule\Openning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Models\Test;

class FrontendController extends Controller
{
	public function store(Request $request)
	{
		Test::create($request->only('data'));
		return back()->with('success', 'Posted');
	}

}