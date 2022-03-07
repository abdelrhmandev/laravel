<table cellpading="2" cellspacing="2" border="2">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Area</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($districts as $district)        
      <tr>
        <td>{{ $district->id }}</td>
        <td>{{ $district->district_info->title }}</td>        
        <td>{{ $district->area->area_info->title }}</td>
        <td>{{ $district->area->city->city_info->title }}</td>
        <td>{{ $district->area->city->country->{'title_'.app()->getLocale() } }}</td>
        
    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
