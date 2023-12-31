<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container pt-5">
    <table  id="example"><a style="float:right" href="{{route('invoice.create')}}"class="btn btn-primary">Add</a>
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
                        <td><a href="{{route('invoice.sendmail',$data->id)}}" class="btn btn-success btn-sm btn-block">Send Email</a>
                        <a href="{{route('invoice.edit',$data->id)}}"class="btn btn-secondary btn-sm btn-block">Edit</a>
                        <a href="{{route('user.details',$data->id)}}" class="btn btn-dark btn-sm btn-block">User Details</a>
                        <a href="{{route('invoice.delete',$data->id)}}" class="btn btn-danger btn-sm btn-block">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    //new DataTable('#example');
    $(document).ready( function () {
    $('#example').DataTable(
        
    );
    } );
    
</script>
</html>