<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 400px;
        }
        h1 {
            color: #333;
        }
        .user-details {
            text-align: left;
            margin-top: 20px;
        }
        .user-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Details</h1>
        <div class="user-details">
            <p><strong>Name:</strong> {{ $viewuser->customer_name}}</p>
            <p><strong>Email:</strong> {{$viewuser->customer_email}}</p>
            <p><strong>Company:</strong> {{$viewuser->showdetails->comany_name}}</p>
            <p><strong>Location:</strong> {{$viewuser->showdetails->company_location}}</p>
        </div>
    </div>
</body>
</html>
