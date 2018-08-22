<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\User;

class PagesController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function dashboard(){
		if (auth::check()) {
        return view('pages.dashboard');
		} else {
			return view('pages.login');
		}
    } 

    public function monthly(){
        if (auth::check()) {
			
      return view('pages.monthly');
		
		} else {
			return view('pages.login');
		}
    } 

    public function weekly(){
        if (auth::check()) {
			
      return view('pages.weekly');
		
		} else {
			return view('pages.login');
		}
    } 

    public function gtwelve(){
        if (auth::check()) {
			
     return view('pages.gtwelve');
		
		} else {
			return view('pages.login');
		}
    } 

    public function downloads(){
        if (auth::check()) {
			
     return view('pages.downloads');
		
		} else {
			return view('pages.login');
		}
    }

    public function cbranch(){
      $user= User::first();
      if(empty($user)){
      return view('pages.cbranch');	
      }
          if (auth::check()) {
          return view('pages.cbranch');
      } else {
        return view('pages.login');
      }
    } 

    public function cgtwelve(){
        if (auth::check()) {
			
      return view('pages.cgtwelve');
		
		} else {
			return view('pages.login');
		}
    } 

    public function cevent(){
        if (auth::check()) {
			
       return view('pages.cevent');
		
		} else {
			return view('pages.login');
		}
    } 

    public function cpastor(){
       if (auth::check()) {
			
       return view('pages.cpastor');
		
		} else {
			return view('pages.login');
		}
    } 

    public function cpreacher(){
        if (auth::check()) {
			
       return view('pages.cpreacher');
		
		} else {
			return view('pages.login');
		}
    } 

    public function cuser(){
		$user= User::first();
		if(empty($user)){
		return view('pages.cuser');	
		}
        if (auth::check()) {
        return view('pages.cuser');
		} else {
			return view('pages.login');
		}
    } 

    public function cdownloads(){
		
		if (auth::check()) {
			
        return view('pages.cdownloads');
		
		} else {
			return view('pages.login');
		}
		
    }
    
    public function viewr(){
		
    if (auth::check()) {
      
        return view('pages.viewr');
    
    } else {
      return view('pages.login');
    }
    }

    public function czone(){
  
      $user= User::first();
      if(empty($user)){
      return view('pages.czone');	
      }
          if (auth::check()) {
          return view('pages.czone');
      } else {
        return view('pages.login');
      }
    }
}
