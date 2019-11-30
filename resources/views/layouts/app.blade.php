<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .konten{
                text-align: center;
            }
h2{
	color : orange;
	font-family:sf sports night;
	font-size:70px;
    margin : 40px;
}

h3{
	
	color : orange;
	font-family:sf sports night;
	font-size:40px;
}

h4{
	
	color : orange;
	font-family:sf sports night;
	font-size:20px;
}

table{
	border: 1px solid black; 
	background-color:white;
}

.menu{
	position : relative;
	background-color: red;
	width:101%;
	left:-8px;
}
 
.menu ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
}
 
.menu > ul > li {
	float: left;
}
	
.menu li a {
	display: inline-block;
	font-family:sf sports night;
	font-size:20px;
	color: white;
	text-align: center;
	padding: 15px 210px;
	text-decoration: none;
}
 
.menu li a:hover{
	background-color: brown;
}

.box{
	position: relative;
	width:310px;
	border:5px dotted black;
	margin : 27px;
}

.img{
	padding : 5px;
}

.img img{
	width : 100%;
	height : 250px; 
}

.imgTitle{
	font-family : arial;
	font-size : 20px;
}


.bg{
	position: relative;;
	left : 0px;
	width : 100%;
	height : auto;
	background-color:grey;
    padding-bottom: 20px;
}

.isi{
	font-family:sf sports night;
	font-size : 2vw;
}
.form-group{
    width : 1200px;
}

.welcome{
    padding : 15%;
	font-family:sf sports night;
	font-size : 3vw;
}

.sosmed{
	position : relative;
	font-family:sf sports night;
	font-size : 10px;
	background : white;
	width : 100%;
	border-top : 5px dashed black;
    
}

.fb, .line, .ig{
	padding : 30px;
    position: relative;
}

.footer{
    border : 0px;
}

.fb img, .line img, .ig img{
	width : 40px;
	height : 40px;
}

        </style>
    </head>
    <body>
        @include('inc.header')
        @include('inc.message')
        @yield('content')
        @include('inc.footer')
    </body>
</html>
