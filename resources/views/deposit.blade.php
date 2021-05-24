
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body style="text-align: center; margin-top:100px; font-size:1.3em">
<h1>BankNet</h1>
<h3>Money Deposit</h3>
<form action="/deposit" method="post">
    <input type="number" name="amount" placeholder="Amount">
    {{csrf_field()}}
    <button type="submit">Confirm</button>
</form>
<br>
<a href="/account">Get your Balance</a><br>
<a href="/account/withdraw">Do a Withdraw</a><br>
<br><br>
<a href="/logout">Log out</a><br>
</body>
</html>