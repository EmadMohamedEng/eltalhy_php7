<ul id="{{"category_id_$category_id"}}" class="gallery list-unstyled">
  @foreach($photos as $photo)
  <li class="category_{{$photo->category->id}}" data-src="{{url($photo->photo_path)}}">
      <a href="#">
      <img class="lazy" data-original="{{url($photo->photo_path)}}" />
      <p>{{$photo->title}}</p>
      </a>
  </li>
  @endforeach
</ul>

