<h1>Viewing Record: {{$record->id}} | {{$record->title}}</h1>

<a href="/crud/items"><<< Return</a>
<br> 
   
<table>
    <tr>
      <th>Title</th>
      <th></th>
      <th>Excerpt</th>
      <th>Description</th>
    </tr>
    <tr>
      <td>{{$record->title}}</td>
      <td><img style="width:240px;" src='{{$record->path}}'></td>
      <td>{{$record->excerpt}}</td>
      <td>{{$record->body}}</td>
    </tr>
  </table>