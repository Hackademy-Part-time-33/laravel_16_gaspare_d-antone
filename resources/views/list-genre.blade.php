<x-main>
    <div class="container mt-5">

        <ul class="list-group">
            @foreach ($data as $item )
            <li class="list-group-item"><a href="#">{{ $item['title']}}</a></li>
                
            @endforeach
          
          </ul>
    </div>
</x-main>