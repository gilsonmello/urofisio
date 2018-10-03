<!-- Modal -->
<div class="modal fade" id="service_modal_{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark text-center w-100">
                    {!! $service['title'] !!}
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-fluid" src="{{$service['bg_image']}}" alt="">
                    </div>

                    <div class="col-lg-9">
                        <h4 class="text-dark">
                            {!! $service['description'] !!}
                        </h4>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>
    </div>
</div>
