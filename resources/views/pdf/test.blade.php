<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello Bulma!</title>
</head>

<body>
    <h1>{{ ucwords($request->title) }}</h1>

    <p>{{ $request->content }}</p>
</body>
</html>
