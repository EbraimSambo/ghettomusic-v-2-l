@props(['music','similars'])
<div id="container">
    <div id="container-desc">
        <div id="content">
            <x-app.music.cover-single :cover="$music" />
            <livewire:components.music.legend-counter :music="$music" />
        </div>

        <x-app.music.top :datas="$similars" />
    </div>
</div>    