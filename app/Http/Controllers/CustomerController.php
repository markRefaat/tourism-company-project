<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin,admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    //index for showing all customers show() for specifed customer.
        $customers = Customer::all();
        $date = strtotime(date('Y-m-d'));
        $datebefore15days = date('Y-m-d', strtotime('-15 days', $date));
        $counts = [];
        $counts['ongoingPaymentsCount'] = Order::where('date', '>=', $datebefore15days)->where('status',0)->count();
        $counts['latePaymentsCount'] = Order::where('date', '<', $datebefore15days)->count();
        $counts['customersCount'] = Customer::count();
        return view('customers.allcustomers', compact('customers', 'counts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ongoingpayments()
    {    //index for showing all customers show() for specifed customer.

        $date = strtotime(date('Y-m-d'));
        $datebefore15days = date('Y-m-d', strtotime('-15 days', $date));
        $counts = [];
        $counts['ongoingPaymentsCount'] = Order::where('date', '>=', $datebefore15days)->where('status',0)->count();
        $counts['latePaymentsCount'] = Order::where('date', '<', $datebefore15days)->count();
        $counts['customersCount'] = Customer::count();

        $ongoingOrders = Order::where('date', '>=', $datebefore15days)->where('status',0)->with('customer')->get();
        return view('customers.ongoingpayments', compact('ongoingOrders', 'counts'));
    }

    public function latepayments()
    {    //index for showing all customers show() for specifed customer.

        $date = strtotime(date('Y-m-d'));
        $datebefore15days = date('Y-m-d', strtotime('-15 days', $date));
        $counts = [];
        $counts['ongoingPaymentsCount'] = Order::where('date', '>=', $datebefore15days)->count();
        $counts['latePaymentsCount'] = Order::where('date', '<', $datebefore15days)->count();
        $counts['customersCount'] = Customer::count();

        $lateOrders = Order::where('date', '<', $datebefore15days)->with('customer')->get();
        return view('customers.latepayments', compact('lateOrders', 'counts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | min:3',
            'phone' => 'required | numeric | digits:11',
            'email' => 'email  | unique:customers',
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->note = "";
        $customer->totalcredit = 0;
        $customer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $customer = Customer::find($id);
        $order = Order::where('customer_id',$customer->id)->where('status','0')->get();
        $expenses = Receipt::where('receiptable_id',$customer->id)->where('receiptable_type','App\Customer')->where('type','expense')->get();
        $revenues = Receipt::where('receiptable_id',$customer->id)->where('receiptable_type','App\Customer')->where('type','revenue')->get();
        return view('customers.customerprofile', compact('customer','order','expenses','revenues'));
    }

    public function updatenote($id)
    {
        $customer = Customer::find($id);
        if (isset($_REQUEST['note'])) {
            $customer->note = $_REQUEST['note'];
            $customer->save();
        }
        return back()->with('status', 'Note Updated!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.editcustomer', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        if ($request->email == $customer->email) {
            $this->validate($request, [
                'name' => 'required | min:3',
                'phone' => 'required | numeric',
            ]);

            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email = $request->email;

            $customer->save();
            return redirect('allcustomers');
        } else {
            $this->validate($request, [
                'name' => 'required | min:3',
                'phone' => 'required | numeric',
                'email' => 'email  | unique:customers',
            ]);

            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email = $request->email;

            $customer->save();
            return redirect('allcustomers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
