<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<!-- Optional theme -->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body> 
{{View::make('header') }}

@yield('content')
{{View::make('footer') }}
 
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px; 
    }
    .footerr{
        padding-top:300px;
    }
    img.slider-img{
        height:400px !important 
    }
    .custom-product{
        height:600px;
    }
    .trending-image{
        height:400px;

    }
    .trening-item{
        float:left;
        width:20%;}
    
    .trending-wrapper{
        margin:30px; 
       /* margin-left:200px; */

        padding-bottom:50px;
        /* margin-right:100px; */

    }
    .trending-wrapper, .row2 h3{
        text-align:center;
        font-family: 'Montserrat', sans-serif;
        padding-top:40px;
    }
    .fortxt  h3{
    font-family: 'Roboto Condensed', sans-serif;
    }
    .detail-img{
        height: 400px;
    }
    .log-header{
        height:10px;
        margin:0;
    }
    .cart-list-devider{
        border-bottom:1px solid #ccc;
        margin-bottom:20px;
         padding-bottom:20px;
    }
    .row2 h3{
        text-align:center;

    }
    /* .row0{
        margin-top:100px;
    } */

    #desc h2,h3,h4{
        font-family: 'Crimson Text', serif;

    }
    .list-text{
        font-family: 'Crimson Text', serif;
        padding-top:165px;
    }
    #bttn{
        padding-top:170px;
    }
    #btnorder{
        margin-right:50%;
        margin-left:50%;
    }
</style>
</html> 