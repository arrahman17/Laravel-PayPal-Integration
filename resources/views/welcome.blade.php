<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
<div class="container mt-5 text-center">
    <div class="container">

        @if ($message = Session::get('Success'))
            <div class="alert alert-success alert-block alert-dismissible alertDismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('Ausfall'))
            <div class="alert alert-danger alert-block alert-dismissible alertDismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        <span> Hey ! you want to pay with paypal</span>
      <a href="paypal/checkout/26804">
          Pay Now
      </a>
    </div>
</div>
</body>

</html>
