<!doctype html>
<html lang="en">
<head>
    <title>Test</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div>
    {!! $post->renderBlocks() !!}
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
