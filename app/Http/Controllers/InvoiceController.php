<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Mail\Invoicemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
   
    public function index()
    {
        //$datas = invoice::all();
        $datas = invoice::latest()->get();
        //dd ($datas);
        return view('invoice.index',compact('datas'));
    }

   
    public function create()
    {
        return view('invoice.create');
    }

   
    public function store(Request $request)
   
    {
        
        return $request->all();
        $validatedData = $request->validate([
        'qty' => 'required|integer',
        'amount' => 'required|numeric',
        'customer_name' => 'required|string',
        'invoice_date' => 'required|date',
        'customer_email' => 'required|email',
        'tax_percentage' => 'required|numeric',
        'file_upload' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $totalAmount = $request->qty + $request->amount;
        $taxPercentage = $request->tax_percentage;
        $taxAmount = ($totalAmount * $taxPercentage) / 100;
        $netAmount = $totalAmount + $taxAmount;

        $alldata = Invoice::create([
            'qty' => request('qty'),
            'amount' => request('amount'),
            'total_amount' => $totalAmount,
            'tax_percentage' => request('tax_percentage'),
            'tax_amount' => $taxAmount,
            'net_amount' => $netAmount,
            'invoice_date' => request('invoice_date'),
            'customer_name' => request('customer_name'),
            'customer_email' => $request->customer_email,
            'file_upload' => $request->file_upload, 
        ]);
//Here I use the file upload section, but it is not working because the error occurs in getClientOriginalName().
        $file = $request->file_upload;
        //dd($file);
        $name = $file->getClientOriginalName();
        //dd($name);
        // The 'uploads' directory is created in 'storage/app/public' to store uploaded images
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        
        return redirect()->route('invoice.view');
    }


    public function sendmail($id)
    {
        //mail send 
        $alldata = invoice::find($id);
        //dd ($alldata->customer_email);
        Mail::to($alldata->customer_email)->send(new Invoicemail($alldata));
        return redirect()->route('invoice.view');   
    }

    
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        //dd($invoice);
        return view('invoice.edit',compact('invoice'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'qty' => 'required|integer',
            'amount' => 'required|numeric',
            'customer_name' => 'required|string',
            'invoice_date' => 'required|date',
            'customer_email' => 'required|email',
            'tax_percentage' => 'required|numeric',
            //'file_upload' => 'required|image|mimes:jpeg,png,jpg,gif'
            ]);
       // dd ($request->all());
        Invoice::find($id)->update([

            'qty' => request('qty'),
            'amount' => request('amount'),
            'tax_percentage' => request('tax_percentage'),
            'invoice_date' => request('invoice_date'),
            'customer_name' => request('customer_name'),
            'customer_email' => request('customer_email'),
            //'file_upload' => request(file_upload),
        ]);
        return redirect()->route('invoice.view');
    }

    
    public function destroy($id)
    {
        Invoice::destroy($id);
        return redirect()->route('invoice.view');
        
    }
}
