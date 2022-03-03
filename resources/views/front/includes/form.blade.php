{{-- <div class="row no-bg" edbox data-box-header="INSCREVA-SE" data-box-target=".dif-1">

    <a target="_blank" title="Pré-inscrição" class="btn">Inscrever</a>
    <div class="modal dif-1">
        <div class="col-lg-6">
            <div class="become-teacher__form">
                <div class="become-teacher__form-top">
                    <h2 class="become-teacher__form-title">
                        Faça sua matricula.
                    </h2><!-- /.become-teacher__form-title -->
                </div><!-- /.become-teacher__top -->
                <form action="{{ route('facuMatricula') }}" method="post" autocomplete="off"
                    class="become-teacher__form-content">
                    @csrf


                    <div class="form-group">
                        <input type="text" id="name" name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Nome Completo" required>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-mail"
                            required>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="tel" id="cell" name="cell"
                            class="form-control {{ $errors->has('cell') ? 'is-invalid' : '' }}" placeholder="Telefone"
                            required>
                        @if ($errors->has('cell'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cell') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" id="course" name="course"
                            class="form-control {{ $errors->has('course') ? 'is-invalid' : '' }}"
                            value="{{ $bacha->titleSecond }} em 48 meses" placeholder="Assunto" required>
                        @if ($errors->has('course'))
                            <div class="invalid-feedback">
                                {{ $errors->first('course') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3"
                            placeholder="Mensagem"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn contact-one__btn thm-btn">Enviar
                            Mensagem</button>
                    </div>

                </form>
                <div class="result text-center"></div><!-- /.result -->
            </div><!-- /.become-teacher__form -->
        </div><!-- /.col-lg-6 -->
    </div>
</div> --}}

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">The Hr Platform</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">

            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    {{-- <i class="fas fa-user prefix grey-text"></i> --}}
                    <label data-error="wrong" data-success="right" for="form34">Your name</label>
                    <input type="text" id="form34" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name">
                </div>

                <div class="md-form mb-5">
                    {{-- <i class="fas fa-envelope prefix grey-text"></i> --}}
                    <label data-error="wrong" data-success="right" for="form29">Your email</label>
                    <input type="email" id="form29" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="E-mail">

                </div>

                <div class="md-form mb-5">
                    {{-- <i class="fas fa-envelope prefix grey-text"></i> --}}
                    <label data-error="wrong" data-success="right" for="form29">Your phone</label>
                    <input type="tel" id="form29"  class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}" placeholder="Phone">

                </div>




                <div class="md-form">
                    {{-- <i class="fas fa-pencil prefix grey-text"></i> --}}
                    <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4" placeholder="Message"></textarea>

                </div>

                <div class="md-form mb-5 for-curri">
                    <p class="text-upload">Send your resume</p>
                    <label data-error="wrong" data-success="right" for="form32"><i class="fas fa-upload"></i></label>
                    <input type="file" id="form32" class="form-control {{ $errors->has('file') ? 'is-invalid' : '' }}">
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
        </form>
        </div>
    </div>
</div>
<a href="" target="_blank" class="z-btn z-btn-white" data-toggle="modal" data-target="#modalContactForm">envie seu curriculo</a>
{{-- <div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">
        envie seu curriculo</a>
</div> --}}
