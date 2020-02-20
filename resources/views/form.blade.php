<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form action=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/send" method="post">
        {{ csrf_field() }}
        <input type="text" name="email">
        <button>Send</button>
    </form> 
    @if(isset($request))
        {{ $request->email }}
    @endif
</body>
</html>