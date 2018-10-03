<div id="gallery0" style="margin:0px auto; display:none;">
    @for($i = 0; $i < 11; $i++)
        <a href="{{ request()->root() }}}">
            <img alt=""
                 src="images/gallery/main/{{$i}}.jpg"
                 data-image="images/gallery/main/{{$i}}.jpg"
                 data-description=""
                 style="display:none">
        </a>
    @endfor
</div>