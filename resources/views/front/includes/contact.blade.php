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
            <form action="{{ url('contact') }}">
                {{ csrf_field() }}

                @if (count($errors) > 0)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Fill in the data correctly!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sent with success!</strong> {{ $message }}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>OOOOPS!</strong> {{ $message }}
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="form34">Your name</label>
                    <input type="text" id="form34" name="name" class="form-control" placeholder="Name">
                </div>

                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="form29">Your email</label>
                    <input type="email" id="form29" name="email" class="form-control" placeholder="E-mail">

                </div>

                <div class="md-form mb-5">
                    <label data-error="wrong" data-success="right" for="form29">Your phone</label>
                    <input type="tel" id="form29" name="phone"  class="form-control" placeholder="Phone">

                </div>

                <div class="md-form">
                    <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    <textarea type="text" id="form8" name="message" class="md-textarea form-control" rows="4" placeholder="Message"></textarea>

                </div>

                <div class="md-form mb-5 for-curri">
                    <p class="text-upload">Send your resume</p>
                    <label data-error="wrong" data-success="right" for="form32"><i class="fas fa-upload"></i></label>
                    <input type="file" id="form32" name="file[]" class="form-control">
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-unique">Send <i class="fas fa-paper-plane-o"></i></button>
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
