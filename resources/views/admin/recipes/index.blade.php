<table cellpading="0" cellspacing="2" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Descripton</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($recipes as $recipe)        
      <tr>
        <td>{{ $recipe->id }}</td>
        <td>{{ $recipe->recipe->title }}</td>         
        <td>{{ $recipe->recipe->description }}</td>
        <td>{{ ($recipe->recipe_category->category->title) }}</td>
         
        </td> 
    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
