<style>
    .container{
        background-color: rgb(200, 200, 200);
        padding: 2em;
        margin: 2em;
    }
</style>
@extends('layout.app')
@section('content')

<div class="container col-md-10 offset-md-1 mt-5">
<div class="card card-info ">
    <div class="card-header bg-primary text-white justify-content-end  ">
      <h3 class="card-title text-center ">Offcial Transcript Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{route ('send.request')}}">
      @csrf
      <div class="card-body">
        <fieldset>
          <legend>Personl Informtion</legend>
          <hr>
          <!-- 1st row-->
          <div class="row">

            <!-- First nme-->
            <div class="form-group  col-sm-6 ">
              <div class="row">
                <label for="inputfname" class=" col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstname" id="inputfname" placeholder="First Name" value="{{old ('firstname')}}">
                  @error('firstname')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                  
                </div>
              </div>
            </div>
            <!-- Lst Nme -->
            <div class="form-group col-sm-6 ">
              <div class="row">
                <label for="inputlname3" class="col-sm-4 col-form-label ">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lastname" id="inputlname3" placeholder="Last Name" value="{{ old('lastname')}}">
                  @error('lastname')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                  
                </div>
              </div>
            </div>
          </div>
          <!-- 2nd row-->
          <div class="row">
            <!-- Iumber -->
            <div class="form-group col-sm-6">
              <div class="row">
                <label for="inputInumber3" class="col-sm-4 col-form-label">Id Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputInumber3" placeholder="Id Number">
                </div>
              </div>
            </div>
            
            <!-- Gmil -->
            <div class="form-group col-sm-6 ">
              <div class="row">
                <label for="inputlname3" class="col-sm-4 col-form-label ">Email address</label>
                <div class="col-sm-8">
                  <input type="gmail" class="form-control" name="gmail" id="inputlname3" placeholder="email">
                  <div class="text-danger">error</div>
                </div>
              </div>
            </div>
          </div>
          <!-- en row-->
        </fieldset>
        <fieldset>
          <legend>Educational Informtion</legend>
          <hr>
          <!-- 1st row -->
          <div class="row">
            <!-- First nme-->
            <div class="form-group  col-sm-6 ">
              <div class="row">
                <label for="inputfname3" class=" col-sm-4 col-form-label">Eduction</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstname1" id="inputfname3" placeholder="First Name">
                  @error('firstname')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
            <!-- -->
            
            <!-- First nme-->
            <div class="form-group  col-sm-6 ">
              <div class="row">
                <label for="inputfname3" class=" col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstname2" id="inputfname3" placeholder="First Name">
                  @error('firstname')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                  
                </div>
              </div>
            </div>
            <!-- -->
            

          </div>
        </fieldset>

        
       
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Sign in</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
        <button > <a href="dashboard " class="">/dashbord</a></button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</div>
@endsection