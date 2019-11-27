<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $booking = Customer::all();
        return view('layouts.pages.customer',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        // store data
        $customer = new Customer();
        $customer->name=request('customer.name');
        $customer->phone=request('customer.phone');
        $customer->email=request('customer.email');
        $customer->person=request('customer.person');
        $customer->date=request('customer.date');
        $customer->arrivingtime=request('customer.arrivingtime');
        $customer->leavingtime=request('customer.leavingtime');
        $customer->table=request('customer.table');
        $customer->status=false;
        $customer->save();


        // redirect
       
        return  "success";

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
        //dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requ
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class CustomerController extends Controller
{
    /**
est  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    { 
        //dd($id);
        $booking = Customer::find($id);
        $booking->status = true;
        $booking ->save();
        return redirect()->route('customer.index');
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
    public function checktable(){
        $customers = Customer::all();
        $Tables = Table::all();
        $info =[$customers,$Tables];
        return $info;
    }

     public function cancel($id)
    { 
        //dd($id);
        $booking = Customer::find($id);
        $booking->status = false;
        $booking ->save();
        return redirect()->route('customer.index');
    }
    public function mail(Request $request)
    {

        $name = array(
            'name'  =>$request->name,
            'email'  =>$request->email,

            'phone'  =>$request->phone,

            'date'  =>$request->date,

            'arrivingtime'  =>$request->arrivingtime,

            'leavingtime'  =>$request->eavingtime,
            'table'  =>$request->table
        );

        Mail::to('khinwinkhaing825@gmail.com')->send(new SendMail($name));
        return back()->with('success','Thanks');
    }

    public function report(){
        $reports = Customer::all();
        return view('layouts.pages.report',compact('reports'));
    }
    public function monthly(){
        $customers = Customer::all();
        return $customers;

    }
 
}
