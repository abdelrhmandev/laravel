<table cellpading="2">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($areas as $area)        
      <tr>
        <td>{{ $area->id }}</td>
        <td>{{ $area->area_info->title }}</td>
        <td>{{ $area->city->city_info->title }}</td>
        <td>{{ $area->city->country->{'title_'.app()->getLocale() } }}</td>    
      </tr>
      @empty
      {{  trans('area.no_areas_added') }}
      @endforelse

    </tbody>
  </table>
