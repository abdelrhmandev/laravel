<table cellpading="2">
    <thead>
      <tr>
        <td>#</td>
        <td>Title</td>
        <td>Cities Counter</td>
      </tr>
    </thead>
    <tbody>
    @forelse ($countries as $country)
    <tr>
        <td>{{  $country->id }}</td>
        <td>{{  $country->{'title_'.app()->getLocale() } }}</td>
        <td>{{  $country->city->count() }}</td>

        <a href="{{ asset('storage/flags/'.strtolower($country->code).'.svg') }}">{{ $country->code}}</a>
        <br/>
    </tr>
    @empty
        {{  trans('city.no_cities_added') }}
    @endforelse
    </tbody>
</table>