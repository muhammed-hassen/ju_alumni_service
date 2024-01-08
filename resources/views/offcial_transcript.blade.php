<style>
    .container{
        background-color: rgb(200, 200, 200);
        padding: 0em;
        margin-bottom: 1em;
    }
    labels{
      background-color:royalblue;
      
      font-size: 12px;
    }
</style>
@extends('layout.app')
@section('content')

<div class="container col-md-8 offset-md-2 mt-5">
  @include('inc.messages');
<div class="card card-info ">
    <div class="card-header bg-primary text-white justify-content-end  ">
      <h3 class="card-title text-center ">Offcial Transcript Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{route ('send.request')}}" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <fieldset>
          <legend >Personl Informtion</legend>
          <hr class="mt-0">
          <!-- 1st row-->
          <div class="row">

            <!-- First nme-->
            <div class="form-group  col-md-4 ml-0 ">
              <div class="row ">
                <label for="inputfname" class=" col-md-4 col-form-label " style="font-size: 15px; padding:0; margin:0;">First Name</label>
                <div class="col-md-8 pl-0  ">
                  <input type="text" class="form-control " name="firstname" id="inputfname" placeholder="First Name" value="{{old ('firstname')}}">
                  @error('firstname')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                  
                </div>
              </div>
            </div>
             <!-- Father nme-->
             <div class="form-group  col-md-4 ml-0">
              <div class="row ">
                <label for="fathername" class=" col-md-4 col-form-label  " style="font-weight:400; font-size:15px; padding:0;">Father Name</label>
                <div class="col-md-8 pl-0">
                  <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Fther Name" value="{{old ('fathername')}}">
                  @error('fathername')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                  
                </div>
              </div>
            </div>
            <!-- Lst Nme -->
            <div class="form-group col-md-4 ml-0">
              <div class="row">
                <label for="inputlname3" class="col-md-4 col-form-label "style="font-size: 15px; padding:0;">Last Name</label>
                <div class="col-md-8 pl-0">
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
            <div class="form-group col-md-4 ml-0">
              <div class="row">
                <label for="idnumber" class="col-md-4 col-form-label" style="font-weight:400;  font-size:15px; padding:0;">Id Number</label>
                <div class="col-md-8 pl-0">
                  <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="Id Number" value="{{old ('idnumber')}}">
                  @error('idnumber')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
             <!-- mobile umber -->
             <div class="form-group col-md-4 ml-0">
              <div class="row">
                <label for="mobilenumber" class="col-md-4 col-form-label" style="font-weight:400; font-size:15px; padding:0;">Mobile Number</label>
                <div class="col-md-8 pl-0">
                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile No" value="{{old ('mobilenumber')}}">
                  @error('mobilenumber')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
            
            <!-- Gmil -->
            <div class="form-group col-md-4 ">
              <div class="row">
                <label for="email" class="col-md-4 col-form-label " style="font-weight:400; font-size:15px; padding:0;">Email address</label>
                <div class="col-md-8 pl-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{old ('gmail')}}">
                  @error('email')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <!-- en row-->
        </fieldset>
        <fieldset>
          <legend>Educational Informtion</legend>
          <hr class="mt-0">
          <!-- 1st row -->
          <div class="row">

             <!-- Admission type -->
             <div class="form-group col-md-12 ">
              <div class="row ">
                <label for="admissiontype" class=" col-form-label p-1" style="font-weight:400; font-size:15px; padding:1px;">Addmission Type: </label>
                <div class="p-1">
                  <input type="radio" name="admissiontype" value="regular" class="ml-2" /> Regular 
                  <input type="radio" name="admissiontype" value="eveninig" class="ml-2"/> Evening
                  <input type="radio" name="admissiontype" value="summer"  class="ml-2"/>Summer
                  <input type="radio" name="admissiontype" value="distance"  class="ml-2"/> Distance
                  <input type="radio" name="admissiontype" value="weekend"  class="ml-2"/>Weekend
                  @error('admissiontype')
                  <div class="text-danger"> {{$message}} </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>

          <div class="row">
              <!-- Degree type -->
              <div class="form-group col-md-12 ">
                <div class="row ">
                  <label for="degreetype" class=" col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">Degree Type: </label>
                  <div class="p-1">
                    <input type="radio" name="degreetype" value="diploma" class="ml-2" /> Diploma 
                    <input type="radio" name="degreetype" value="degree" class="ml-2"/> Degree
                    <input type="radio" name="degreetype" value="masters"  class="ml-2"/>Master's
                    <input type="radio" name="degreetype" value="phd"  class="ml-2"/> PhD
                    <input type="radio" name="degreetype" value="cerficate"  class="ml-2"/>Sp.Cerficate
                    @error('degreetype')
                    <div class="text-danger"> {{$message}} </div>
                    @enderror
                  </div>
                </div>
              </div>
          </div>
            <!-- 2nd row-->
            <div class="row">
                <!-- College type -->
                <div class="form-group col-md-6 ">
                  <div class="row ">
                    <label for="college" class="col-md-4 col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">College : </label>
                    <div class="col-md-8 p-1">
                      <select id="college" name="college" size="1">
                        <option value="" selected="selected">-- Select College --</option>
                        </select>
                      @error('college')
                      <div class="text-danger"> {{$message}} </div>
                      @enderror
                    </div>
                  </div>
                </div>
                 <!-- Deprtment type -->
                 <div class="form-group col-md-6 ">
                  <div class="row ">
                    <label for="department" class="col-md-4 col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">Department : </label>
                    <div class="col-md-8 p-1">
                      <select id="department" name="department" size="1">
                        <option value="" selected="selected">-- Select Department --</option>
                        </select>
                      @error('department')
                      <div class="text-danger"> {{$message}} </div>
                      @enderror
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
               <!-- Student  Status -->
               <div class="form-group col-md-6 ">
                <div class="row ">
                  <label for="studentstatus" class=" col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">Student Status: </label>
                  <div class="p-1">
                    <input type="radio" name="studentstatus" value="inactive" class="ml-2" /> Inactive 
                    <input type="radio" name="studentstatus" value="graduate" class="ml-2"/> Graduate
                    
                    @error('studentstatus')
                    <div class="text-danger"> {{$message}} </div>
                    @enderror
                  </div>
                </div>
              </div>
               <!-- Order  type -->
               <div class="form-group col-md-6 ">
                <div class="row ">
                  <label for="ordertype" class=" col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">Order Type: </label>
                  <div class="p-1">
                    <input type="radio" name="ordertype" value="local" class="ml-5" /> Local 
                    <input type="radio" name="ordertype" value="international" class="ml-2"/> International
                    
                    @error('ordertype')
                    <div class="text-danger"> {{$message}} </div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
     
          
            <!-- -->
         
        </fieldset>
        <fieldset>
          <legend>Sent To</legend>
          <hr class="mt-0">

          <div class="row">
             <!-- nme of institution -->
            <div class="form-group col-md-4 ml-0">
              <div class="row">
                <label for="institute" class="col-md-4 col-form-label" style="font-weight:400; font-size:15px; padding:0;">Name of Institute </label>
                <div class="col-md-8 pl-0  ">
                  <input type="text" class="form-control" id="institute" name="institute" placeholder="name of institution" value="{{old ('institute')}}">
                  @error('institute')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
            <!-- address of institution -->
            <div class="form-group col-md-4 ml-0">
              <div class="row">
                <label for="addressinstitute" class="col-md-4 col-form-label" style="font-weight:400; font-size:15px; padding:0;">Address of Institute </label>
                <div class="col-md-8 pl-0 ">
                  <textarea name="addressinstitute" class="form-control" id ="addressinstitute" cols="30" rows="5" placeholder="Delivery Address" ">
                  {{old ('adressinstitute')}}
                  </textarea>
                  @error('addressinstitute')
                  <span class="text-danger"> {{$message}}</span>
                  @enderror
                </div>
              </div>
            </div>
            <!-- Mailing agent -->
            <div class="form-group col-md-4 ">
              <div class="row ">
                <label for="mailingagent" class="col-md-4 col-form-label p-1" style="font-weight:400; font-size:15px; padding:0;">Mailing agent : </label>
                <div class="col-md-8 p-1">
                  <select id="mailingagent" name="mailingagent" >
                    <option value="" selected="selected">--Select Mailing Ag..</option>
                    <option value="normal" >Normal</option>
                    <option value="dhl" >DHL</option>
                    <option value="ems" >EMS</option>
                    </select>
                  @error('mailingagent')
                  <div class="text-danger"> {{$message}} </div>
                  @enderror
                </div>
              </div>
            </div>

          </div>
          <div class="row">
             

          </div>

        
        </fieldset>

      </div>
       
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
        
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
</div>

<script>

var collegeInfo = {
"Natural Science" : ["English","Maths" ],

"Social Science":  ["Geography", "civics","history" ],

};
  window.onload = function () {
    //alert("welcom");
//todo: Get all input html elements from the DOM
const collegeSelection = document.querySelector("#college"),
deptSelection = document.querySelector("#department");
deptSelection.disabled = true; // remove all options bar first

for (let college in collegeInfo) {
  //alert(college);
  collegeSelection.options[collegeSelection.options.length] =
  new Option(
    college
    );
}

  //Todo: College Changed
  collegeSelection.onchange = (e) => {
  deptSelection.disabled = false;

  // todo: Clear all options from Department Selection
  deptSelection.length = 1; // remove all options bar first

  // if (e.target.selectedIndex < 1) return; // done
  // todo: Load departments by looping over collegeInfo
  for (let dept in collegeInfo[e.target.value]) {
    //alert(collegeInfo[e.target.value][dept]);
  deptSelection.options[deptSelection.options.length] =
  new Option(
    collegeInfo[e.target.value][dept]
  );
  }
  };
  }


</script>
@endsection
