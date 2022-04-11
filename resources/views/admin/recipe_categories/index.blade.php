<table cellpading="2">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Recipe Counter</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($recipe_categories as $category)        
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->category->title }}</td> 
        <td>{{ $category->recipe->count() }}</td>

        <td>{{ $category->image }} 
        
        <img src="{{ url('uploads/recipe_categories/rc1.jpg')}}"/>
        </td>

      </tr>
      @empty
      {{  trans('category.no_categorys_added') }}
      @endforelse

    </tbody>
  </table>
