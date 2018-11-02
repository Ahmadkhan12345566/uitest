<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ui test</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>

        .circle {
            display:inline-block;
            width: 30px;
            height: 30px;
            position: absolute;
            background:#EC2F00;
            left:0;
            right:0;
            margin:0 auto;
            border-radius: 100%;
            top:-13px;
        }
        .triangle_right {
            width         : 0;
            height        : 0;
            border-top  : 15px solid transparent;
            border-bottom  : 15px solid transparent;
            border-left : 15px solid #F3F3F3;
            position: absolute;
            top: 47%;
            left: 0px;
        }


        .triangle_left {
            width         : 0;
            height        : 0;
            border-top  : 15px solid transparent;
            border-bottom  : 15px solid transparent;
            border-right : 15px solid #F3F3F3;
            position: absolute;
            top: 47%;
            right: 0px;
        }


        .triangle_up {
            width         : 0;
            height        : 0;
            border-left  : 15px solid transparent;
            border-right  : 15px solid transparent;
            border-bottom : 15px solid #F3F3F3;
            position: absolute;
            left: 47%;
            bottom: 0px;
        }

        .fst-row{
            background: white;
            border-right:4px solid #F3F3F3;
        }

        .fst-row:hover {
            cursor: pointer;
            top: -9px;
            background-color: transparent;

        }
       .backbox{
           background-color: black;
       }

        .fst-row:hover h4{
            color: #EC2F00;
            background-color: transparent;

        }
        .fst-row:hover button{
            background-color: #EC2F00;
        }

    </style>

</head>
<body style="background: #F3F3F3" >
<div class="container " style="margin-top:30px;">
    <div class="row ">
        <div class="col-md-3 text-center fst-row" style="border-top:2px solid #EC2F00;  border-right:4px solid #F3F3F3;">
            <div class="test">
                <div class="circle"></div>
            </div>
            <h4 class="mt-4"> CCC CCC CCC CCCC</h4>
            <div class="card-body">
            <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>
            </div>
            <button type="button" class="btn btn-sm m-md-4 btn-default">Sign up </button>
        </div>
        <div class="col-md-3 text-center fst-row" style="border-top:2px solid #EC2F00;">
            <div class="test">
                <div class="circle"></div>
            </div>
            <h4 class="mt-4"> CCC CCC CCC CCCC</h4>
            <div class="card-body">
                <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>
            </div>
            <button type="button" class="btn btn-sm m-md-4 btn-default">Sign up </button>
        </div>
        <div class="col-md-3 text-center fst-row" style="border-top:2px solid #EC2F00;">
            <div class="test">
                <div class="circle"></div>
            </div>
            <h4 class="mt-4"> CCC CCC CCC CCCC</h4>
            <div class="card-body">
                <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>
            </div>
            <button type="button" class="btn btn-sm m-md-4">Sign up </button>
        </div>
        <div class="col-md-3 text-center fst-row" style="border-top:2px solid #EC2F00;">
            <div class="test">
                <div class="circle"></div>
            </div>
            <h4 class="mt-4"> CCC CCC CCC CCCC</h4>
            <div class="card-body">
                <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>
            </div>
            <button type="button" class="btn btn-sm m-md-4">Sign up </button>
        </div>

    </div>
    <div class="row" style="margin-top: 30px;margin-bottom: 30px">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 backbox " >
                    <div class="triangle_up">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <h3 class="mt-4"> CCC CCC CCC CCCC</h3>
                    <div >
                        <p><b>Quickly build an effective pricing</b></p>
                        <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>
                    </div>
                </div>

                <div class="col-md-4 backbox">
                    <div class="triangle_right">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <h3 class="mt-4"> CCC CCC CCC CCCC</h3>

                        <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>

                </div>
                <div class="col-md-4 backbox">
                    <div class="triangle_left">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <h3 class="mt-4"> CCC CCC CCC CCCC</h3>
                    <p style="text-align: justify">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built wit</p>

                </div>
            </div>
        </div>
        <div class="col-md-3 " style="background-color: #EC2F00;" >
            <h1 class="mt-4" style="color: white"> CCC CCC CCC CCCC</h1>
            <div class="card-body">
                <p style="color:white;">Quickly build an effective pricing table for your potential customers with  </p>
            </div>
            <button type="button" class="btn btn-default btn-block" style="margin-right: 20px">Sign up </button>

        </div>

        </div>


</div>
</body>
</html>