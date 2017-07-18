<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
{!! Form::open(["method"=>"post", "url"=>"testing/login"]) !!}
<input type="text" name="username">
<input type="password" name="password">
<input type="submit" name="submit">
{!! Form::close() !!}
</body>
</html>