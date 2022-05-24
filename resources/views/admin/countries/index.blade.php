<h1>
  <a target="_new" href="{{ URL::asset('public/flags/eg.svg') }}">Click</a>
  </h1>

<br/>

{{  public_path() }}

 
<table cellpading="2" class="d-none">
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
        <br/>
    </tr>
    @empty
        {{  trans('city.no_cities_added') }}
    @endforelse
    </tbody>
</table>