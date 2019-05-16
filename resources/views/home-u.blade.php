@extends('layouts.user')

@section('content')
<html>
	<head>
		<title>Home</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
					<div class = "container">
			</div>
		</div>
	</body>
@endsection