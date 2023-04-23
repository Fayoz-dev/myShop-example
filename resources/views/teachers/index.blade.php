<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>

  
   <div class="container mt-3 mb-2">

      <div style="display: flex; justify-content:space-between; padding: 10px;">
   
         <h2>Teachers</h2>
         <div class="col-lg-2">
            <a href="{{route('teachers.create')}}" class="btn btn-primary">Create</a>
         </div>
   
      </div>

      <table class="table table-striped table-dark">
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Name</th>
             <th scope="col">Address</th>
             <th scope="col">Phone</th>
             <th scope="col">Email</th>
             <th scope="col">Created at</th>
             <th scope="col">Button</th>
           </tr>
         </thead>
         <tbody>
            @foreach($teachers as $teacher)
           <tr>
             <th scope="row">{{$teacher->id}}</th>
             <td>{{$teacher->name}}</td>
             <td>{{$teacher->addres}}</td>
             <td>{{$teacher->phone}}</td>
             <td>{{$teacher->email}}</td>
             <td>{{$teacher->created_at}}</td>
             <td>
               
              <a href="{{route('teachers.show' , $teacher -> name)}}"  class="btn btn-info btn-sm">View</a>
               <a href="{{route('teachers.edit' , $teacher -> id)}}" class="btn btn-primary btn-sm">Edit</a>
               <form  class="mt-1" action="{{route('teachers.destroy', $teacher -> id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')"> Delete</button>
               </form>
               
             </td>
           </tr>
           @endforeach
           
         </tbody>
       </table>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>-