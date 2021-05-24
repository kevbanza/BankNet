<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;  margin-top:100px; font-size:1.3em">
    <h1>WELCOME TO BANKNET</h1>
    <h3>Register</h3>
    <form action="/register" method="post">
        <input type="text" name="title" placeholder="Name">
        <input type="password" name="content" placeholder="Password">
        {{csrf_field()}}
        <button type="submit">Submit</button>
    </form>
</body>
</html>
