<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestMailRequest;
use App\Mail\TestSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');        
    }

    public function mail()
    {
        return view ('test.mail');
    }

    public function sendMail(TestMailRequest $request)
    {
        Mail::to($request->address)
            ->queue(new TestSender($request->all()));

        return redirect()->route('test.mail')
            ->with('message', 'Currently sending your email');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function destroy($id)
    {
        //
    }
}
