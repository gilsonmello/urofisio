<!-- Modal -->
<div class="modal fade" id="course_modal_{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border: none">
                <h3 class="modal-title text-dark text-center w-100">
                    {!! $course['title'] !!}
                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-8">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-dark">
                                    Breve...
                                </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 col-6 col-md-5 col-sm-6">
                                <h5 class="text-dark">Data:</h5>
                            </div>
                            <div class="col-lg-6 col-6 col-md-7 col-sm-6 text-dark">
                                {!! $course['date'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-4">
                        <img class="img-fluid" src="{{$course['bg_image']}}" alt="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-dark m-0">Descrição</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-dark">
                            {!! $course['description'] !!}
                        </h5>
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
