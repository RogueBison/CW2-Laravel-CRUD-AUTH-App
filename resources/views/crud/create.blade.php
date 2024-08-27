<h2>Add a New Item</h2>

<a href="/crud/items"><<< Return</a>
<br /> 
<br /> 

<form action="{{url("/crud/items")}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" name="title"><br>
    <label for="slug">Slug:</label><br>
    <input type="text" name="slug"><br>
    <label for="excerpt">Excerpt:</label><br>
    <textarea type="text" name="excerpt"></textarea><br>
    <label for="body">Description:</label><br>
    <textarea type="text" name="body"></textarea><br>
    <br />
    <input type="file" name="upload">
    <br />
    <br />
    <input type="submit" value="Create">
</form>
