<?php

namespace App\Http\Controllers;


class PagesController extends Controller{
   
    public function getIndex() {
        return view('pages.welcome');
   }
    public function getAbout() {
        $first = 'Zachari';
        $last = 'Reynolds';

        $fullname = $first . " " . $last;
        $email = 'Reynoldszachari@gmail.com';
        $data =[];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('about')->withData($data);
    }
    public function getContact() {
        return view('pages.contact');
        
    }
    
}
 