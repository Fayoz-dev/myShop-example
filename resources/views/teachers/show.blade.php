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
         
               <h2>Show sahifasi</h2>
               <div class="col-lg-2">
                  <a href="{{route('teachers.index')}}" class="btn btn-primary">Back</a>
               </div>
         
            </div>
      

         <div class="form">
         
            <table class="table table-striped table-dark">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Name</th>
                   <th scope="col">Address</th>
                   <th scope="col">Phone</th>
                   <th scope="col">Email</th>
                   <th scope="col">Created at</th>
                   
                 </tr>
               </thead>
               <tbody>
                  
                 <tr>
                   <th scope="row">{{$teacher->id}}</th>
                   <td>{{$teacher->name}}</td>
                   <td>{{$teacher->addres}}</td>
                   <td>{{$teacher->phone}}</td>
                   <td>{{$teacher->email}}</td>
                   <td>{{$teacher->created_at}}</td>
                   
                 </tr>
                 
                 
               </tbody>
             </table>
      
         </div>

      </div>
      <div class="col-lg-2"></div>
    
       
   </div>

</body>
</html>