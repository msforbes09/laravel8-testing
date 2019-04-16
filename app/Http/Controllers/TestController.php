<?php

namespace App\Http\Controllers;

use App\Events\TestPusherEvent;
use App\Http\Requests\TestMailRequest;
use App\Http\Requests\TestPdfRequest;
use App\ImageModel;
use App\Mail\TestSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;
use PDF;

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

    public function domPDF()
    {
        return view('test.pdf');
    }

    public function pdfGenerate(TestPdfRequest $request)
    {
        $pdf = PDF::loadView('pdf.test', compact('request'))->setPaper('a4', 'landscape');

        return $pdf->stream();
    }

    public function image()
    {
        $image = ImageModel::all()->reverse()->first();

        return view('test.image', compact('image'));
    }

    public function imageUpload(Request $request)
    {
        $request->validate(['image' => 'required|image']);

        $image = $request->file('image');

        $filename = time() . '.' . $image->getClientOriginalName();

        $image = Image::make($image);

        $image->save(public_path(). '/image/' .$filename);

        $image->resize(150, 150);

        $image->save(public_path(). '/thumbnail/'.$filename);

        ImageModel::create([ 'filename' => $filename ]);

        return redirect()->route('test.image')
            ->with('message', 'Your image has been uploaded.');
    }

    public function imagePreview()
    {
        $image = ImageModel::all()->reverse()->first();

        return view('test.image-preview', compact('image'));
    }

    public function pusher()
    {
        return view('test.pusher');
    }

    public function pushMessage(Request $request)
    {
        event(new TestPusherEvent($request->only('message')));

        // dd($request->only('message'));
    }
}
