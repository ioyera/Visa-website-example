@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default">
          <div class="panel-heading">  <h4 >User Profile</h4></div>
           <div class="panel-body">


            <form action="store" method="post" role="form" id="newUserForm" name="newUserForm">
  
            {{ csrf_field() }}
            <div class="box box-info">
        
              <div class="box-body">
                <div class="col-sm-12">
                  


<!-- <div style="color:#999;" >click here to change profile image</div> -->
                <!--Upload Image Js And Css--> 
                     
                  </div>
                  <br>
              <!-- /input-group -->
                </div>


              <div class="col-md-12">
                

                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <h4 name="name" id="name" type="text" style="margin-left: 10px; color: rgb(9,27,41);">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h4>
                  </div>

                  <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>



                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Date of birth:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> date}}</p>
                        </div>
                  </div>

                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Nationality:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> nationality}}</p>
                        </div>
                  </div>
                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Gender:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> gender}}</p>
                        </div>
                  </div>

                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">City:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> city}}</p>
                        </div>
                  </div>

                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Address:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> address}}</p>
                        </div>
                  </div>

                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Email address:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> email}}</p>
                        </div>
                  </div>

                  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Phone number:</label>
                        
                        <div class="col-md-6">
                             <p name="role">{{ Auth::user()-> phone}}</p>
                        </div>
                  </div>



<div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">
            

                  


              </div>
            
              </div>
              </div>

              </form>

          </div>
          <!-- /.box -->

        </div>
        
      




            
    </div> 
    </div>
       
</div>  

@endsection
