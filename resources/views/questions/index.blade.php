@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 50px; overflow: auto;">
    <h2 style="float: left;">Questions</h2>
    <form class="form-inline my-2 my-lg-0 float-right" action="" method="POST">
        
      <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
      
      <button class="btn btn-primary mr-2"style="padding:10px;" type="submit"><i class="fas fa-search"></i></button>
    
      <a class="btn btn-outline-primary my-2 my-sm-0" href="create">Ask Questions</a>
    </form>

</div>
        @foreach ($allquestion as $ques)
        <div class='container border' style='margin-top: 20px;'>
        <a href="#" style="color: black;"><h2 class='mt-2'>{{$ques->Title}}</h2></a>
        <p style='font-size:18px;color:grey;font-family:fontawesome;' class='mt-3'>{{$ques->Description}}<br>
           @php 

         $badge=$ques->Tags;
                $b=explode(",",$badge);
                @endphp
                @foreach ($b as $value)
        <a href="#"><span class='badge badge-primary'>{{$value}}</span></a> &nbsp
            @endforeach
            
           
        </p>
        <p> <a href =''>Ritik Kumar</a>    asked on September 27,2018</p>
       <p>
                
                <span><i class='far fa-thumbs-up'></i>
                4</span> &nbsp &nbsp
        
                <span><i class='far fa-thumbs-down'></i>
                0 </span>&nbsp &nbsp
                <span><i class='far fa-comments'></i>
                10 answers</span>
            </p>
            </div>
            @endforeach


@endsection
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">