<h1>Image Paths</h1>
{{-- {{$images}} --}}


{{-- @foreach ($images as $image)
            {{ $image }}
            <br><br>
@endforeach --}}

@foreach ($images as $image)
    
    @if (is_array($image->path))
        @foreach ($image->path as $single_path)
            {{ $single_path }}
            <br>
        @endforeach
    @else
        {{ $image->path }}
    @endif
<br>
@endforeach
