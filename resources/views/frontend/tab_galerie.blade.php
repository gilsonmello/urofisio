<div id="gallery1" style="margin:0px auto; display:none;">
    @for($i = 0; $i < 4; $i++)
        <a href="{{ request()->root() }}}">
            <img alt=""
                 src="images/gallery/services/{{$i}}.jpg"
                 data-image="images/gallery/services/{{$i}}.jpg"
                 data-description=""
                 style="display:none">
        </a>
    @endfor
</div>