{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 07/08/2017--}}
 {{--* Time: 16:08--}}
 {{--*/--}}
<!-- Sign Up -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                <!-- Sign Up Form -->
                <form action="{{route('post_register_user_page')}}" method="post" id="form-sign-up" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Full name">
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
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
                            <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="terms" name="terms"><span></span>
                            </label>
                            <a href="#modal-terms" data-toggle="modal" class="terms"><small>View Terms</small></a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                        </div>
                    </div>
                </form>
                <!-- END Sign Up Form -->
            </div>
        </div>
    </div>
</section>
<!-- END Sign Up -->