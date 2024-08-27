<h1>View All Records</h1>

<a href="/"><<< Return</a>
<br> 
<a href="/crud/create">Create New Record >>></a>
   
<h2>All Fish</h2>
<table>
    <tr>
      <th>Title</th>
      <th></th>
      <th>Excerpt</th>
    </tr>
    @foreach ($records as $record)
    <tr>
      <td>
        <a href="/crud/{{$record->id}}/{{$record->slug}}">{{$record->title}}</a>
      </td>
    </form>
      <td><img style="width:180px;" src="{{ asset('storage/' . $record->path) }}"></td>
      <td>{{$record->excerpt}}</td>
      <td>
        <form action="/crud/{{$record->id}}/edit" method="post">
          @method('get') 
          @csrf
        <button type="submit">Edit</button>
      </form>
    </td>
      <td>
        <form action="/crud/delete/{{$record->id}}" method="post">
          @method('delete') 
          @csrf
        <button type="submit">Delete</button>
      </form>
    </td>
    </tr>
    @endforeach
  </table>


{{--   <h2>All Plants</h2>

  </table> --}}