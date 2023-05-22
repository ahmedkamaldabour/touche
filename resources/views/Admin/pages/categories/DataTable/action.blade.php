<a href="{{ route('category.show' , $category->id) }}"
   class="btn btn-secondary btn-sm ">Show</a>
<div class='m-1'></div>

<a href="{{ route('category.edit' , $category->id) }}"
   class="btn btn-primary btn-sm ">Edit</a>
<div class='m-1'></div>

<form action="{{ route('category.destroy' , $category->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm">Delete</button>
</form>

