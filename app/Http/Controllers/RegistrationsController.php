<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationsController extends Controller
{
    public function index(){
    	$data = Registration :: where('status', 1)->paginate(4);
    	return view('registration', compact('data'));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){
        
    	$this -> validate($request, [
            'name' => 'required',
            'date' => 'required',
            'occassion' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'phone' => 'required',
            'email' =>'required',
            'address' => 'required',
        ]);

    	Registration::Create([
    		'name' => request('name'),
    		'date' => request('date'),
    		'occassion' => request('occassion'),
    		'check_in' => request('check_in'),
    		'check_out' => request('check_out'),
    		'phone_no' => request('phone'),
    		'email' => request('email'),
    		'address' => request('address'),
    	]);
    	\Session::flash('create', 'Data Stored Successfully!');
    	return redirect('/admin/registrations');
    }

    public function edit( $id ){
    	$data = Registration :: find( $id );
    	return view('edit', compact('data'));
    }

    public function update( $id, Request $request){
        $data = Registration::find($id);
        $data -> name = request('name');
        $data -> date = request('date');
        $data -> occassion = request('occassion');
        $data -> check_in = request('check_in');
        $data -> check_out = request('check_out');
        $data -> phone_no = request('phone');
        $data -> email = request('email');
        $data -> address = request('address');

        $data -> save();

        \Session :: flash('update','Updated Successfully!');
        return redirect('admin/registrations');
    }
    public function delete($id){
    	$data = Registration :: find($id);
    	$data -> status = 0;
    	$data -> save();
    	\Session :: flash('delete','Deleted successfully');
        return redirect('admin/registrations');
    }
}
