<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\monthly;
use App\weekly;
use App\g12;
use App\branch;
use App\sectiona;
use App\sectionb;
use App\sectionc;
use App\sectiond;
use App\sectione;
use App\cg12;
use App\cdownloads;
use App\UploadCategory;
use App\event;
use App\Zone;
Use Auth;
Use Session;
use Storage;

class SaveController extends Controller
{
    public function saveMonthly(Request $r)
	{
	
	$this->validate($r, [
		'month' => 'required',
		'year' => 'required',
		'branch' => 'required',
		'adults' => 'required',
		'children' => 'required',
		'total' => 'required',
		'newmembers' => 'required',
		'tithers' => 'required',
		'councilm' => 'required',
		'speciala' => 'required',
		'cspeciala' => 'required',
		'branchp' => 'required',
		'cbranchp' => 'required',
		'cmf' => 'required',
		'cwf' => 'required',
		'cyf' => 'required',
		'rcd' => 'required',
		'newcells' => 'required',
		'totalnc' => 'required',
	
	]);

	
	Sectiona::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'adults' => $r->adults,
		'children' => $r->children,
		'total' => $r->total
		
	]);
	
	Sectionb::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'newmembers' => $r->newmembers,
		'tithers' => $r->tithers
	]);
	
	Sectionc::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'councilm' => $r->councilm,
		'speciala' => $r->speciala,
		'cspeciala' => $r->cspeciala,
		'branchp' => $r->branchp,
		'cbranchp' => $r->cbranchp
	]);
	
	Sectiond::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'cmf' => $r->cmf,
		'cwf' => $r->cwf,
		'cyf' => $r->cyf,
		'rcd' => $r->rcd
	]);
	
	Sectione::create([
	    'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'newcells' => $r->newcells,
		'totalnc' => $r->totalnc
	]); 
	
	
	
	//Session::flash('success', 'Report submitted successfully.');
	//return redirect()->back();
	return redirect('/monthly')->with('success', 'Report Submitted Successfully');
	}
	
	
	public function saveWeekly(Request $r)
	{
		
		
	$this->validate($r, [
	
		'branch' => 'required',
		'week' => 'required',
		'month' => 'required',
		'year' => 'required',
		'event' =>  'required',
		'men' =>  'required',
		'women' =>  'required',
		'children' => 'required',
		'total' =>  'required',
		'preacher' =>  'required'
	
	]);
	
		
	Weekly::create([
		'user_id' => Auth::id(),
		'branch' => $r->branch,
		'week' => $r->week,
		'month' => $r->month,
		'year' => $r->year,
		'event' => $r->event,
		'men' => $r->men,
		'women' => $r->women,
		'children' => $r->children,
		'total' => $r->total,
		'preacher' => $r->preacher,
		
		]);
		
		//Session::flash('success', 'Report submitted successfully.');
	//return redirect()->back();
	return redirect('/weekly')->with('success', 'Report Submitted Successfully');
	}
	
	
	
	public function saveG12(Request $r)
	{
	
 $this->validate($r, [
 
		'branch' => 'required',
		'month' => 'required',
		'year' => 'required',
		'week' => 'required',
		'attendance' => 'required',
	
	]);	
	
		
	G12::create([
		'user_id' => Auth::id(),
		'branch' => $r->branch,
		'month' => $r->month,
		'year' => $r->year,
		'week' => $r->week,
		'attendance' => $r->attendance,
		]);
		
	//Session::flash('success', 'Report submitted successfully.');
	//return redirect()->back();
	return redirect('/gtwelve')->with('success', 'Report Submitted Successfully');
	}
	
	public function createG12(Request $r)
	{
	
 $this->validate($r, [
 
		'country' => 'required',
		'state' => 'required',
		'city' => 'required',
		'name' => 'required',
		'address' => 'required',
		'name' => 'required',
		'branch' => 'required',
	
	]);	
	
		
	Cg12::create([
		'user_id' => Auth::id(),
		'country' => $r->country,
		'state' => $r->state,
		'city' => $r->city,
		'name' => $r->name,
		'address' => $r->address,
		'branch' => $r->branch
		]);
		
		//Session::flash('success', 'G12 created successfully.');
	//return redirect()->back();
	return redirect('/cgtwelve')->with('success', 'G12 Created Successfully');
	}
	
	public function saveBranch(Request $r)
	{
	
 $this->validate($r, [
 
		'country' => 'required',
		'state' => 'required',
		'city' => 'required',
		'zone' => 'required',
		'name' => 'required',
		'address' => 'required',
		'name' => 'required',
	
	]);	
	
	if(auth::check()){
	 $auth= auth::id();	
	} else {

		$auth= 1;
	}
		
	Branch::create([
		'user_id' => $auth,
		'country' => $r->country,
		'state' => $r->state,
		'city' => $r->city,
		'zone' => $r->zone,
		'name' => $r->name,
		'address' => $r->address,
		]);
		
		Session::flash('success', 'Branch created successfully.');
		return redirect()->back();
	
	}
	
	
	public function saveEvent(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'description' => 'required',
		'month' => 'required',
		'year' => 'required',
		'branch' => 'required',
	
	]);	
	
		
	Event::create([
		'user_id' => Auth::id(),
		'name' => $r->name,
		'description' => $r->description,
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		]);
		
		//Session::flash('success', 'Event created successfully.');
	//return redirect()->back();
	return redirect('/cevent')->with('success', 'Event Created Successfully');
	}


public function createZone(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
	
	]);	
	
	if(auth::check()){
		$auth= auth::id();	
	   } else {
   
		   $auth= 1;
	   }
	
	Zone::create([
		'user_id' => $auth,
		'name' => $r->name,
		'country' => $r->country,
		]);
		
	//Session::flash('success', 'Zone created successfully.');
	//return redirect()->back();
	return redirect('/czone')->with('success', 'Zone created successfully');

	}


	public function editZone(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
		'old' => 'required',
	
	]);	
	
	$zone= Zone::where('name', $r->old)->where('country', $r->country)->first()		
	->update([
		'name' => $r->name,
		]);
		
	//Session::flash('success', 'Zone edited successfully.');
	//return redirect()->back();
	return redirect('/czone')->with('success', 'Zone Edited Successfully');
	}


	public function editBranch(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
		'branch' => 'required',
		'city'=> 'required',
		'address'=> 'required',
		'state'=> 'required',
		'zone'=> 'required',
	]);	
	
	$branch= Branch::where('id', $r->branch)->first()		
	->update([
		'name' => $r->name,
		'city'=> $r->city,
		'address'=>$r->address,
		'state'=> $r->state,
		'zone'=> $r->zone,
		]);
		
		//Session::flash('success', 'Branch edited successfully.');
	    //return redirect()->back();
		return redirect('/cbranch')->with('success', 'Branch Edited Successfully');
	}


	public function editDownload(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'category' => 'required',
		'month' => 'required',
		'year'=> 'required',
		'description' => 'required',
		'url' => 'required',
		'upload' => 'required',
		
	]);	
	
	$upload= Cdownloads::where('id', $r->upload)->first()		
	->update([
		'name' => $r->name,
		'category'=> $r->category,
		'month'=>$r->month,
		'year'=> $r->year,
		'description'=> $r->description,
		'url'=> $r->url,
		]);
		
		//Session::flash('success', 'Upload edited successfully.');
	    //return redirect()->back();
		return redirect('/cdownloads')->with('success', 'Upload Edited Successfully');
	}

	public function deleteDownload(Request $r)
	{
	
 $this->validate($r, [
 
		'upload' => 'required',
		
	]);	
	
	$upload= Cdownloads::where('id', $r->upload)->first()		
	->delete();
		
		//Session::flash('success', 'Upload deleted successfully.');
	    //return redirect()->back();
		return redirect('/cdownloads')->with('success', 'Upload Deleted Successfully');
	}


	public function deleteBranch(Request $r)
	{
	
 $this->validate($r, [
 
		'country' => 'required',
		'branch' => 'required',
		
	]);	
	
	$zone= Branch::where('id', $r->branch)->first()		
	->delete();
		
		Session::flash('success', 'Branch deleted successfully.');
	    return redirect()->back();
	}

	public function deleteZone(Request $r)
	{
	
 	$this->validate($r, [
 
		'country' => 'required',
		'zone' => 'required',
		
	]);	
	
	$zone= Zone::where('name', $r->zone)->first()		
	->delete();
		
		Session::flash('success', 'Zone deleted successfully.');
	    return redirect()->back();
	
	}


	public function deleteEvent(Request $r)
	{
	
 	$this->validate($r, [
 
		'country' => 'required',
		'event' => 'required',
		
	]);	
	
	$event= Event::where('id', $r->event)->first()		
	->delete();
		
		Session::flash('success', 'Event deleted successfully.');
	    return redirect()->back();
	
	}

	public function deleteG12(Request $r)
	{
	
 	$this->validate($r, [
 
		'country' => 'required',
		'g12' => 'required',
		
	]);	
	
	$g12= Cg12::where('id', $r->g12)->first()		
	->delete();
		
		Session::flash('success', 'G12 deleted successfully.');
	    return redirect()->back();
	
	}

	public function deleteUser(Request $r)
	{
	
 	$this->validate($r, [
 
		'country' => 'required',
		'user' => 'required',
		
	]);	
	
	$g12= User::where('id', $r->user)->first()		
	->delete();
		
		Session::flash('success', 'User deleted successfully.');
	    return redirect()->back();
	
	}


	public function deleteCategory(Request $r)
	{
	
 $this->validate($r, [
 
		'category' => 'required',
		
	]);	
	
	$category= UploadCategory::where('id', $r->category)->first()		
	->delete();
		
		//Session::flash('success', 'Category deleted successfully.');
	    //return redirect()->back();
		return redirect('/cdownloads')->with('success', 'Category Deleted Successfully');
	}


	public function editG12(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
		'branch' => 'required',
		'city'=> 'required',
		'address'=> 'required',
		'state'=> 'required',
		'old'=> 'required',
		'g12'=> 'required',
	]);	
	
	$branch= Cg12::where('id', $r->g12)->first()		
	->update([
		'name' => $r->name,
		'city'=> $r->city,
		'address'=>$r->address,
		'state'=> $r->state,
		'branch'=> $r->branch,
		]);
		
		//Session::flash('success', 'G12 edited successfully.');
	    //return redirect()->back();
		return redirect('/cgtwelve')->with('success', 'G12 Edited Successfully');
	}


	public function editUser(Request $r)
	{
	
	 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
		'branch' => 'required',
		'user'=> 'required',
		'role'=> 'required',
		'mobile'=> 'required',
		'email'=> 'required',
		'username'=> 'required',
	]);	
	
	$user= User::where('id', $r->user)->first()		
	->update([
		'name' => $r->name,
		'username'=> $r->username,
		'role'=>$r->role,
		'mobile'=> $r->mobile,
		'branch'=> $r->branch,
		'email'=> $r->email,
		]);
		
		//Session::flash('success', 'User edited successfully.');
	    //return redirect()->back();
		return redirect('/cuser')->with('success', 'User Edited Successfully');
	}





	public function editEvent(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'country' => 'required',
		'branch' => 'required',
		'old' => 'required',
		'event' => 'required',
		'description'=> 'required',
		'month'=> 'required',
		'year'=> 'required',
	]);	
	
	$event= Event::where('id', $r->event)->first()		
	->update([
		'name' => $r->name,
		'description'=> $r->description,
		'branch'=>$r->branch,
		'year'=> $r->year,
		'month'=> $r->month,
		]);
		
		//Session::flash('success', 'Event edited successfully.');
	    //return redirect()->back();
		return redirect('/cevent')->with('success', 'Event Edited Successfully');
	}
	
	
	
	
	public function createDownload(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'category' => 'required',
		'description' => 'required',
		'month' => 'required',
		'year' => 'required',
		'url' => 'required',
	
	]);	
	
		
	Cdownloads::create([
		'user_id' => Auth::id(),
		'name' => $r->name,
		'category' => $r->category,
		'description' => $r->description,
		'month' => $r->month,
		'year' => $r->year,
		'url' => $r->url,
		]);
		
		//Session::flash('success', 'Download created successfully.');
	//return redirect()->back();
	return redirect('/cdownloads')->with('success', 'Download Created Successfully');
	}


	public function createCategory(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
	
	]);	
	
		
	UploadCategory::create([
		'name' => $r->name,
		]);
		
		//Session::flash('success', 'Category created successfully.');
	//return redirect()->back();
	return redirect('/cdownloads')->with('success', 'Category Created Successfully');
	}
	
	
	public function uploadFile(Request $request)
	{
		
		// This class process an uploaded image and returns a valid URL
		
		
			$file= $request->fl;
		
		
		
			$ext = $file->extension();
			
			//  we save file in files folder
			
			$link = $file->store('public/files');
		
		
		
	// If every thing goes well, we return a valid URL.
	
	return response(['URL'=>asset(Storage::url($link)), 'link'=>$link, 'ext' => $ext]);
		
		
	}
	
public function allDownloads()
	
	{
	
	$downloads = Cdownloads::get();
	
	$all = array();
	
	 foreach ($downloads as $download):
		
		 array_push($all, $download); 
		
	 endforeach;
	 
	 return $all;
	
	}


	public function allCategories()
	
	{
	
	$categories = UploadCategory::get();
	
	$all = array();
	
	 foreach ($categories as $category):
		
		 array_push($all, $category); 
		
	 endforeach;
	 
	 return $all;
	
	}

	public function allUsers()
	
	{
	
	$users = User::get();
	
	$all = array();
	
	 foreach ($users as $user):
		
		 array_push($all, $user); 
		
	 endforeach;
	 
	 return $all;
	
	}

	public function countryZones($country)
	
	{
	
	$zones = Zone::where('country', $country)->get();
	
	$all = array();
	
	 foreach ($zones as $zone):
		
		 array_push($all, $zone); 
		
	 endforeach;
	 
	 return $all;
	
	}


	public function branchEvents($branch)
	
	{
	
	$events = Event::where('branch', $branch)->get();
	
	$all = array();
	
	 foreach ($events as $event):
		
		 array_push($all, $event); 
		
	 endforeach;
	 
	 return $all;
	
	}

	public function categoryUploads($category)
	
	{
	
	$uploads = Cdownloads::where('category', $category)->get();
	
	$all = array();
	
	 foreach ($uploads as $upload):
		
		 array_push($all, $upload); 
		
	 endforeach;
	 
	 return $all;
	
	}


	public function branchG12s($branch)
	
	{
	
	$G12s = Cg12::where('branch', $branch)->get();
	
	$all = array();
	
	 foreach ($G12s as $G12):
		
		 array_push($all, $G12); 
		
	 endforeach;
	 
	 return $all;
	
	}

	public function countryBranches($country)
	
	{
	
	$branches = Branch::where('country', $country)->get();
	
	$all = array();
	
	 foreach ($branches as $branch):
		
		 array_push($all, $branch); 
		
	 endforeach;
	 
	 return $all;
	
	}

		
}
