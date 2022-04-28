<table cellpading="5" cellspacing="15" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
 
        <th>Measurement</th>
 
        {{-- <th>Users has Reviewed</th> --}}
      </tr>
    </thead>
    <tbody>
        @forelse ($nutritions  as $nutrition)        
      <tr>
        <td>{{ $nutrition->id }}</td>
        <td>{{ $nutrition->nutrition->title }}</td>         
 
        <td>{{ $nutrition->nutrition->measurement }}</td>   

  
 
 

 

    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
