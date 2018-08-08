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
use App\event;
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
	
	
	
	Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
	
	}
	
	
	public function saveWeekly(Request $r)
	{
		
		
	$this->validate($r, [
	
		'branch' => 'required',
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
		'month' => $r->month,
		'year' => $r->year,
		'event' => $r->event,
		'men' => $r->men,
		'women' => $r->women,
		'children' => $r->children,
		'total' => $r->total,
		'preacher' => $r->preacher,
		
		]);
		
		Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
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
		
		Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
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
		
		Session::flash('success', 'G12 created successfully.');
	return redirect()->back();
	
	}
	
	public function saveBranch(Request $r)
	{
	
 $this->validate($r, [
 
		'country' => 'required',
		'state' => 'required',
		'city' => 'required',
		'name' => 'required',
		'address' => 'required',
		'name' => 'required',
	
	]);	
	
		
	Branch::create([
		'user_id' => Auth::id(),
		'country' => $r->country,
		'state' => $r->state,
		'city' => $r->city,
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
		
		Session::flash('success', 'Event created successfully.');
	return redirect()->back();
	
	}
	
	
	public function createDownload(Request $r)
	{
	
 $this->validate($r, [
 
		'name' => 'required',
		'description' => 'required',
		'month' => 'required',
		'year' => 'required',
		'url' => 'required',
	
	]);	
	
		
	Cdownloads::create([
		'user_id' => Auth::id(),
		'name' => $r->name,
		'description' => $r->description,
		'month' => $r->month,
		'year' => $r->year,
		'url' => $r->url,
		]);
		
		Session::flash('success', 'Download created successfully.');
	return redirect()->back();
	
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

		
}
