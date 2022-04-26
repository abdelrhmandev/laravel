<table cellpading="5" cellspacing="15" border="0">

    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
 
        <th>Category</th>
        <th>Likes</th>
        <th>Dislikes</th>
        <th>Tags</th>
        <th>Review</th>
        {{-- <th>Users has Reviewed</th> --}}
      </tr>
    </thead>
    <tbody>
        @forelse ($recipes as $recipe)        
      <tr>
        <td>{{ $recipe->id }}</td>
        <td>{{ $recipe->recipe->title }}</td>         
 
        <td>{{ ($recipe->recipe_category->category->title ?? '-') }}</td>

        <td>
          {{ $recipe->likes->count() }}  
        </td>

        <td>
          {{ $recipe->dislikes->count() }}  
        </td>


      <td>
      @foreach ($recipe->tags as $tag)
      <a href="#" class="btn btn-primary">{{$tag->tag->title }}</a>
      @endforeach
  
        </td>
        <td>{{ $recipe->reviews->count() }}</td>

       
        <td>
          {{-- @foreach ($recipe->users_likes as $user)
          <a href="#">{{ $user->name  }}</a>
          @endforeach --}}
          
        </td>

    </tr>
      @empty
      {{  trans('area.no_aras_added') }}
      @endforelse

    </tbody>
  </table>
