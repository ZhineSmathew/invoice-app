<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add Datepicker plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Add jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>
<h2 style="text-align:center;">Add new invoice details!</h2>
<div class="container mt-5">
    <form action="{{route('invoice.store')}}" method="post"  id="invoiceform" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="qty">Total Quantity Count</label>
                <input type="text" class="form-control" id="qty" name="qty" placeholder="" >
            </div>
            <div class="form-group col-md-4">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="taxPercentage">Tax Percentage</label>
                <select class="form-control" id="taxPercentage" name="tax_percentage">
                    <option value="1"></option>
                    <option value="0">0%</option>
                    <option value="5">5%</option>
                    <option value="12">12%</option>
                    <option value="18">18%</option>
                    <option value="28">28%</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="customerName">Enter Name</label>
                <input type="text" class="form-control" id="customerName" name="customer_name" >
            </div>
            <div class="form-group col-md-6">
                <label for="invoiceDate">Invoice Date</label>
                <input type="text" class="form-control datepicker" id="invoiceDate" name="invoice_date" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fileUpload">File Upload (Max 3 MB, JPG, PNG, PDF)</label>
                <input class="form-control-file" id="fileUpload" type="file" name="file_upload" accept=".jpg, .png, .pdf">
            </div>
            <div class="form-group col-md-6">
                <label for="customerEmail">Your Email</label>
                <input type="email" class="form-control" id="customerEmail" name="customer_email" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('invoice.view')}}" class="btn btn-info">Home</a>
    </form> 
</div>

<script>
    $(document).ready(function() {
            $("#invoiceform").validate({
                rules: {
                    qty: "required",
                    amount: "required",
                    tax_percentage: "required",
                    customer_name: "required",
                    invoice_date: "required",
                    customer_email: "required",
                    file_upload: "required",
                },
                messages: {
                    qty: "Quantity is required",
                    amount: "Total Amount is required",
                    tax_percentage: "tax percentage  is required",
                    customer_name: "name is required",
                    invoice_date: " invoice date is required",
                    customer_email: "email is required",
                    file_upload: "file is required",
                }
            });
        });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
</script>
</body>
</html>
