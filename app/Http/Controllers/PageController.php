<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Turnover';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    } 
    public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
     public function services(){
         $data = array(
             'title' => 'Services',
             'services'=>['Employee Turnover','Income Turnover','Annual Recuring Revenue','Monthly Recurring Revenue']
         );
        return view('pages.services')->with($data);
    }

}
