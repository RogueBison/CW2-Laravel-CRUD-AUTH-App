<h2>Edit an Item</h2>

<a href="/crud/items"><<< Return</a>
<br /> 
<br /> 

<form action='{{url("/crud/$id")}}' method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="title">Title:</label><br>
    <input type="text" name="title" value="{{$title}}"><br>
    <label for="slug">Slug:</label><br>
    <input type="text" name="slug" value="{{$slug}}"><br>
    <label for="excerpt">Excerpt:</label><br>
    <textarea type="text" name="excerpt">{{$excerpt}}</textarea><br>
    <label for="body">Description:</label><br>
    <textarea type="text" name="body">{{$body}}></textarea><br>
    <br />
    <input type="file" name="upload">
    <br />
    <br />
    <input type="submit" value="Update">
</form>