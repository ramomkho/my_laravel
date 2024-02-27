<!DOCTYPE html>
<html>
<head>
    <title>POSTING</title>
</head>
<body>
<h1>Product post</h1>
<p></p>
</body>
</html>
<h1> POST</h1>
<ul>
    @foreach($posts as $p)
        <li>{{$p['title']}}:{{$p['content']}}</li>
    @endforeach
</ul>
