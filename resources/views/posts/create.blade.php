<div>
   <h2>create Page</h2>

   <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
   
      @csrf
      <div>
         <label>title</label>
         <input type="text" name="title" value="{{old('title')}}">
         @error('title'){{$message}}@enderror
      </div>

   
          
      

      <div>
         <label>body</label>
         <input type="text" name="body">
         @error('body'){{$message}}@enderror
      </div>

      <div>
         <label>category id</label>
         <input type="text" name="category_id">
      </div>

      <div>
         <label>image</label>
         <input type="file" name="image">
      </div>

      <div>
         <label>slug</label>
         <input type="text" name="slug">
      </div>
      <div class="form-group mt-3">
         <input type="submit" value="Send" class="btn btn-primary">
      </div>
   
   
   </form>


</div>