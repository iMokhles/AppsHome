{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 07/08/2017--}}
 {{--* Time: 16:08--}}
 {{--*/--}}
<!-- New Password -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                <!-- Log In Form -->
                @if (session('status'))
                    <div class="alert alert-success alert">
                        <h4><i class="fa fa-check-circle"></i> Success</h4> {{ session('status') }}!
                    </div>
                @endif
                <form action="{{route('post_new_password_user_page')}}" method="post" id="form-log-in" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} ">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control input-lg" placeholder="Verify Password">
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <label>
                                <span></span>
                            </label>
                            <small> </small>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                        </div>
                    </div>
                    <div class="form-group">

                    </div>
                </form>
                <div class="text-center">
                    <a href="{{route('login_user_page')}}"><small>Login with your old Password?</small></a>
                </div>
                <!-- END New Password Form -->
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END New Password -->