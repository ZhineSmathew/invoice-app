<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Invoice</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Invoice</h2>
    <form action="{{route('invoice.update',$invoice->id)}}" method="post">
        @csrf
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" name="qty" value="{{ $invoice->qty }}">
            </div>
            <div class="form-group col-md-4">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="{{ $invoice->amount }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $invoice->customer_name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="customer_email">Customer Email</label>
                <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{ $invoice->customer_email }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tax_percentage">Tax Percentage</label>
                <select class="form-control" id="tax_percentage" name="tax_percentage">
                    <option value="0" {{ $invoice->tax_percentage == 0 ? 'selected' : '' }}>0%</option>
                    <option value="5" {{ $invoice->tax_percentage == 5 ? 'selected' : '' }}>5%</option>
                    <option value="12" {{ $invoice->tax_percentage == 12 ? 'selected' : '' }}>12%</option>
                    <option value="18" {{ $invoice->tax_percentage == 18 ? 'selected' : '' }}>18%</option>
                    <option value="28" {{ $invoice->tax_percentage == 28 ? 'selected' : '' }}>28%</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="invoice_date">Invoice Date</label>
                <input type="date" class="form-control" id="invoice_date" name="invoice_date" value="{{ $invoice->invoice_date }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('invoice.view')}}" class="btn btn-warning">Cancel</a>
    </form>
</div>
</body>
</html>
