<div class="container">
    <h2>Categorias</h2>
    <ul class="ul-sidebar">
        @foreach (\App\Enums\CategoresType::cases() as $category)
            <li><a href=" {{ route('home')}} " wire:navigate>
                <span @class(['p-4', $category->covers(), ]) ></span>
                <span>{{$category->value}}</span>  
            </a></li>
        @endforeach
    </ul>
</div>