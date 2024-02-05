<div class="page-container">
    <section id="categores">
      <h1 class="heading">Categoriass </h1>
        <ul id="container-categores">
            @foreach (\App\Enums\CategoresType::cases() as $category)
                <li><a href=" {{ route('music.categores.category', $category->value)}}" wire:navigate>
                        <img src="{{ asset('assets/'. $category->typeIndex()['cover']) }}" alt="{{ $category->typeIndex()['title'] }}">
                    <h3>{{$category->typeIndex()['title']}}</h3>  
                </a></li>
            @endforeach
        </ul>
    </section>
</div>
