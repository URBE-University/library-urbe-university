<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Document;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('website.home', [
            'newsletters' => Newsletter::take(4)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function databases()
    {
        return view('website.databases');
    }

    public function newsletters()
    {
        return view('website.newsletters', [
            'newsletters' => Newsletter::take(3)->orderBy('created_at', 'desc')->paginate(12),
        ]);
    }

    public function docs()
    {
        return view('website.training-and-docs', [
            'documents' => Document::orderBy('created_at', 'desc')->get(),
            'urls' => Url::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function about()
    {
        return view('website.about');
    }
    
    public function inClassResources()
    {
    	return view('website.in-class-resources');
    }
}
