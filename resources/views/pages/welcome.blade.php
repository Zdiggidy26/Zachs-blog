@extends('main')

@section('title' , '| Hompage')

  
  @section('content')
      <div class="row">
            <div class="col-md-12">
            <div class="jumbotron">
            <h1>Welcome to my blog</h1>
            <p class="lead">Thank you so much for visiting! This is my test website for Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
              </div>
            </div>
        </div> <!--End of header .row--> 
         <div class="row">
           <div class="col-md-8">
              <div class= "post">
                  <h3>Post Title</h3>
                  <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis doloribus, saepe laudantium odio voluptatem iusto amet numquam minima optio quasi ratione sed obcaecati esse quidem illo corrupti veritatis possimus ad...</p>
                  <a href="#" class="btn btn-primary">Read More</a>
               </div>

               <hr>

               <div class= "post">
                  <h3>Post Title</h3>
                  <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis doloribus, saepe laudantium odio voluptatem iusto amet numquam minima optio quasi ratione sed obcaecati esse quidem illo corrupti veritatis possimus ad...</p>
                  <a href="#" class="btn btn-primary">Read More</a>
               </div>

               <hr>

               <div class= "post">
                  <h3>Post Title</h3>
                  <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis doloribus, saepe laudantium odio voluptatem iusto amet numquam minima optio quasi ratione sed obcaecati esse quidem illo corrupti veritatis possimus ad...</p>
                  <a href="#" class="btn btn-primary">Read More</a>
               </div>

               <hr>

               <div class= "post">
                  <h3>Post Title</h3>
                  <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis doloribus, saepe laudantium odio voluptatem iusto amet numquam minima optio quasi ratione sed obcaecati esse quidem illo corrupti veritatis possimus ad...</p>
                  <a href="#" class="btn btn-primary">Read More</a>
               </div>



          </div>

          <div class="col-md-3 col-md-offset-1">
          <h2> Sidebar </h2>
          </div>
         </div>
  @stop

