<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
   
   <div class="container">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">

         <div class="container mt-3 mb-2">

            <div style="display: flex; justify-content:space-between; padding: 10px;">
         
               <h2>This is Edit Page</h2>
               <div class="col-lg-2">
                  <a href="{{route('teachers.index')}}" class="btn btn-primary">Back</a>
               </div>
         
            </div>
      

         <div class="form">
         
            <form action="{{route('teachers.update', $teacher->id)}}" method="POST" class="mt-3">
               @csrf
               @method('PUT')
               <div class="form-group">
                  <label for="">name</label>
                  <input type="text" class="form-control" name="name" value="{{$teacher -> name}}">
               </div>
               <div class="form-group">
                  <label for="">Adress</label>
                  <input type="text" class="form-control" name="addres" value="{{$teacher -> addres}}">
               </div>
               <div class="form-group">
                  <label for="">Phone</label>
                  <input type="number" class="form-control" name="phone" value="{{$teacher -> phone}}">
               </div>
   
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="email" value="{{$teacher -> email}}">
               </div>
               <div class="form-group mt-3">
                  <input type="submit" value="Send" class="btn btn-primary">
               </div>
            </form>
         </div>

      </div>
      <div class="col-lg-2"></div>
    
       
   </div>

</body>
</html>