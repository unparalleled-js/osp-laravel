<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">
                    Register
                </h4>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
               
            </div>
            <div class="modal-body">
                <form action="{{ url('register') }}" class="form-horizontal" id="formRegister" method="POST" role="form">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name">
                            Name
                        </label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" id="name" type="text">
                                <small class="help-block">
                                </small>
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="email">
                            E-Mail Address
                        </label>
                        <div class="col-md-12">
                            <input class="form-control" name="email" type="email" id="email">
                                <small class="help-block">
                                </small>
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="password">
                            Password
                        </label>
                        <div class="col-md-12">
                            <input class="form-control" name="password" id="password" type="password">
                                <small class="help-block">
                                </small>
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="confirm_password">
                            Confirm Password
                        </label>
                        <div class="col-md-12">
                            <input class="form-control" name="password_confirmation" id="confirm_password" type="password">
                            </input>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label" for="agree">
                            <input name="agree" type="checkbox" id="agree">
                            I agree to the Open <a href="#" target="_blank">Source Privacy Policy</a> and <a href="#" target="_blank">Terms of Service</a>.
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button class="btn btn-primary" type="submit">
                                Register
                            </button>
                        </div>
                    </div>

                    <br>

                    <p class="text-center">
                        {{__('Have an account?') }}
                        <a href="#" class="login">
                            {{__('Sign in')}}
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>