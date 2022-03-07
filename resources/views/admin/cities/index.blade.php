<table cellpading="2">
    <thead>
      <tr>
        <td>#</td>
        <td>Title</td>
        <td>Slug</td>
        <td>Country</td>
      </tr>
    </thead>
    <tbody>
    @forelse ($cities as $city)
    <tr>
        <td>{{  $city->id }}</td>
        <td>{{  $city->city_info->title }} </td>
        <td>{{  $city->city_info->slug }} </td>
        <td>{{  $city->country->{'title_'.app()->getLocale() } }}</td>
    </tr>
    @empty
        {{  trans('city.no_cities_added') }}
    @endforelse
    </tbody>
</table>