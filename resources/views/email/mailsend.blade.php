<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="float:center" >Your Invoice details</h2>
    <p style="float:center" >Here we attach your invoice deatils!</p>
    <table>
        <thead>
            <tr>
                <th>Invoice Date</th>
                <th>Tax percentage</th>
                <th>Tax Amount</th>
                <th>Invoice Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->invoice_date}}</td>
                <td>{{$user->tax_percentage}}</td>
                <td>{{$user->tax_amount}}</td>
                <td>{{$user->net_amount}}</td>
            </tr>
        </tbody>
    </table>


</body>
</html>