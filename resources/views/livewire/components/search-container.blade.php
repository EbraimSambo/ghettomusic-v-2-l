<section x-show="showModal" id="search-container">
    <button class="close-search" @click="showModal = false">
    <span class="bi-arrow-left-circle"></span>
        Voltar
    </button>
    <div class="container">
        <div class="top-search">
            <x-app.logo-app />
            <form>
                <input type="text" value="{{request('search')}}" placeholder="Pesqusiar por musicas...">
                <button type="buttom"><i class="bi-search"></i></button>
            </form>
       </div>
    </div>
</section>

