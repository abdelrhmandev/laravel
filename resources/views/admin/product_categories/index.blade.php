<table cellpading="2">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Recipes</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($recipe_categories as $category)        
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->category->title }}
   
        </td> 
        <td>{{ $category->recipes->count() }}</td>

        <td>           
          @if($category->image)
            <img src="{{  Storage::url($category->image) }}" width="50" height="50">
          @else
            Not Available
          @endif
        </td>

      </tr>
      @empty
      {{  trans('category.no_categorys_added') }}
      @endforelse

    </tbody>
  </table>
