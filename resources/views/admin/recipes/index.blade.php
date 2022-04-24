<table cellpading="0" cellspacing="2" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        {{-- <th>Descripton</th> --}}
        <th>Category</th>
        <th>Likes</th>
        <th>Review</th>

        <th>Tags</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($recipes as $recipe)        
      <tr>
        <td>{{ $recipe->id }}</td>
        <td>{{ $recipe->recipe->title }}</td>         
        {{-- <td>{{ $recipe->recipe->description }}</td> --}}
        <td>{{ ($recipe->recipe_category->category->title) }}</td>

        <td>{{ $recipe->likes->count() }}
    


          @foreach ($recipe->users_likes as $vv)
          <a href="#" class="btn btn-primary">{{$vv->users_likes->uuusulikes->name }}</a>
          @endforeach


      @foreach ($recipe->tags as $tag)
      <a href="#" class="btn btn-primary">{{$tag->tag->title }}</a>
      @endforeach


 

        
          
        </td>
        <td>{{ $recipe->reviews->count() }}</td>

        </td> 
    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
