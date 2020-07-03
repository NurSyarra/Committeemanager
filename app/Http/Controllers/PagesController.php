<?php

namespace App\Http\Controllers;
use App\faq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use App\POst;
use App\faq;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Committee Manager';
        $post = POst::all();
        return view('pages.index')->with('post', $post);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }


    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['CommitteeApplication', 'CreateEvent']
        );
        return view('pages.services')->with($data);
    }

   
   public function profile(){
        $title = 'Profile';
        return view('pages.organiserprofile')->with('title', $title);
    }

    public function display_education(){
        $post = POst::all();
        return view('pages.category_page')-> with('post', $post);
    }

    public function display_fest(){
        $title = 'fest';
        $post = POst::where('Categories', 'fest' )->get();
        return view('pages.category_page')-> with('post', $post);
    }

    public function display_health(){
        $title = 'fest';
        $post = POst::where('Categories', 'health' )->get();
        return view('pages.category_page')-> with('post', $post);
    }

    public function display_culture(){
        $title = 'fest';
        $post = POst::where('Categories', 'culture' )->get();
        return view('pages.category_page')-> with('post', $post);
    }

    public function display_animals(){
        $title = 'fest';
        $post = POst::where('Categories', 'animals' )->get();
        return view('pages.category_page')-> with('post', $post);
    }

    public function display_community(){
        $title = 'fest';
        $post = POst::where('Categories', 'community' )->get();
        return view('pages.category_page')-> with('post', $post);
    }    

       
}
