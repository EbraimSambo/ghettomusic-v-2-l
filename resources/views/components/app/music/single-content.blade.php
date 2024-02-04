@props(['music'])
<div id="container">
    <div id="container-desc">
        <div id="content">
            <x-app.music.cover-single :cover="$music" />
            <livewire:components.music.legend-conter :music="$music" />
        </div>

        <div class="tops">
           <div class="container">
              <div class="cover">
                
              </div>

           </div>

        </div>
    </div>

</div>    