<table cellpading="5" cellspacing="5" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>email</th>
 
  
 
        {{-- <th>Users has Reviewed</th> --}}
      </tr>
    </thead>
    <tbody>
        @forelse ($subrcriptions  as $subrcription)        
      <tr>
        <td>{{ $subrcription->id }}</td>
        <td>{{ $subrcription->email }}</td>         
 
 
    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
