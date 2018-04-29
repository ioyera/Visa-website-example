@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 17px">Registration form</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="edit&<?php echo Auth::user()->id ?>">
                        {{ csrf_field() }}
                        
                        <h4 style="font-weight: bold; font-size: 22px; color: #3A99C8; margin-left: 15px">Main student information:</h4>
                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>


                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="firstname" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date of birth</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date '))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="nationality" class="form-control" name="nationality" value="{{ old('nationality') }}" required>

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select class="form-control top-buffer-sm" name="gender" id="gender"   required autofocus>
                                    <option> </option>
                                    <option>male</option>
                                    <option>female</option>
                                    
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="city" class="form-control" name="city" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" min="0" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>




                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>

                    <!--  ---------------------------------------------------------------------- -->
                    
                        <h4 style="font-weight: bold; font-size: 22px; color: #3A99C8; margin-left: 15px">Document:</h4>

                    <!--  ---------------------------------------------------------------------- -->
     
                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>





                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <select class="form-control top-buffer-sm" name="type" id="type"   required autofocus>
                                    <option> </option>
                                    <option>Paasport</option>
                                    <option>ID</option>
                                    
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-4 control-label">Number</label>

                            <div class="col-md-6">
                                <input id="number" type="number" min="0" class="form-control" name="number" value="{{ old('number') }}" required>

                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Given Place</label>

                            <div class="col-md-6">
                                <input id="place" type="place" class="form-control" name="place" value="{{ old('number') }}" required>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            

                        <div class="form-group{{ $errors->has('givendate') ? ' has-error' : '' }}">
                            <label for="givendate" class="col-md-4 control-label">Given date</label>

                            <div class="col-md-6">
                                <input id="givendate" type="date" class="form-control" name="givendate" value="{{ old('givendate') }}" required>

                                @if ($errors->has('givendate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('givendate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>

                    <!--  ---------------------------------------------------------------------- -->
                    
                        <h4 style="font-weight: bold; font-size: 22px; color: #3A99C8; margin-left: 15px">School Info:</h4>

                    <!--  ---------------------------------------------------------------------- -->
     
                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>

                        
                        <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                            <label for="school" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                <input id="school" type="school" class="form-control" name="school" value="{{ old('school') }}" required>

                                @if ($errors->has('school'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('score') ? ' has-error' : '' }}">
                            <label for="score" class="col-md-4 control-label">ENT score</label>

                            <div class="col-md-6">
                                <input id="score" type="number" min="0" max="140" class="form-control" name="score" value="{{ old('score') }}" required>

                                @if ($errors->has('score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('score') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('attestatnumber') ? ' has-error' : '' }}">
                            <label for="attestatnumber" class="col-md-4 control-label">Attestat number</label>

                            <div class="col-md-6">
                                <input id="attestatnumber" type="number" min="0" class="form-control" name="attestatnumber" value="{{ old('attestatnumber') }}" required>

                                @if ($errors->has('attestatnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attestatnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('attestatdate') ? ' has-error' : '' }}">
                            <label for="attestatdate" class="col-md-4 control-label">Attestat date</label>

                            <div class="col-md-6">
                                <input id="attestatdate" type="date" class="form-control" name="attestatdate" value="{{ old('attestatdate') }}" required>

                                @if ($errors->has('attestatdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attestatdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('attestattype') ? ' has-error' : '' }}">
                            <label for="attestattype" class="col-md-4 control-label">Attestat type</label>

                            <div class="col-md-6">

                                <select class="form-control top-buffer-sm" name="attestattype" id="attestattype"   required autofocus>
                                    <option> </option>
                                    <option>Regular</option>
                                    <option>with Honors</option>
                                    <option>"Altyn Belgi"</option>
                                    
                                </select>

                                @if ($errors->has('attestattype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attestattype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                            <label for="payment" class="col-md-4 control-label">Payment</label>

                            <div class="col-md-6">

                                <select class="form-control top-buffer-sm" name="payment" id="payment"   required autofocus>
                                    <option> </option>
                                    <option>Grant</option>
                                    <option>SDU grant</option>
                                    <option>Paid</option>
                                    
                                </select>

                                @if ($errors->has('payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('certificatenumber') ? ' has-error' : '' }}">
                            <label for="certificatenumber" class="col-md-4 control-label">Certificate number</label>

                            <div class="col-md-6">
                                <input id="certificatenumber" type="number" min="0" class="form-control" name="certificatenumber" value="{{ old('certificatenumber') }}" required>

                                @if ($errors->has('certificatenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('certificatenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  30px 0"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-left: 35%;">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection