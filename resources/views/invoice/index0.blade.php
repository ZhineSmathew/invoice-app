<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--CSS style-->
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .table-container {
            margin-top: 20px;
        }
        .btn-edit {
            background-color: #17a2b8;
            color: #fff;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 style="text-align:center;">Invoice Details</h2>
    <div class="table-container">
        <table class="table table-striped"><a style="float:right" href="{{route('invoice.create')}}"class="btn btn-primary">Add</a>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Total Amount</th>
                    <th>Tax Percentage</th>
                    <th>Tax Amount</th>
                    <th>Net Amount</th>
                    <th>Customer Name</th>
                    <th>Invoice Date</th>
                    <th>Customer Email</th>
                    <th>Files</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->qty}}</td>
                    <td>{{$data->amount}}</td>
                    <td>{{$data->total_amount}}</td>
                    <td>{{$data->tax_percentage}}</td>
                    <td>{{$data->tax_amount}}</td>
                    <td>{{$data->net_amount}}</td>
                    <td>{{$data->customer_name}}</td>
                    <td>{{$data->invoice_date}}</td>
                    <td>{{$data->customer_email}}</td>
                    <td><img src="{{ url('storage/app/public/uploads/{$data->file_upload}') }}" class="rounded-circle profile-image d-block" alt=" files"></td>
                        <td><a href="{{route('invoice.sendmail',$data->id)}}" class="btn btn-success">Send Email</a>
                        <a href="{{route('invoice.edit',$data->id)}}"class="btn btn-secondary">Edit</a>
                        <a href="{{route('user.details',$data->id)}}" class="btn btn-dark">User Details</a>
                        <a href="{{route('invoice.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
