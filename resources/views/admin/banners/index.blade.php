<table cellpading="0" cellspacing="2" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($banners as $banner)        
      <tr>
        <td>{{ $banner->id }}
        
        
          @if($banner->image)  
          <img width="80" height="80" src="{{ asset('storage/'.$banner->image) }}">
          @endif  
  
          

        </td>
        <td>{{ $banner->banner->title }}</td>
        <td>{{ $banner->banner->description }}</td>         
    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
