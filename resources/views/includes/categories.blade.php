<div class="btn-group mb-4 shadow" role="group" aria-label="Basic outlined example">
    @foreach($categories as $category)
        <a href="{{route('getPostsByCategory', $category->slug)}}"
           class="btn btn-outline-secondary">
            {{$category->title}}
        </a>
    @endforeach
</div>
