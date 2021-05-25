@extends('theme3')

@section('content')

<section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 style="margin-left: 500px">MY PROFILE</h2><br>
        
      </div>
      

      <div class="row">
    <table style="margin-left: 200px" class="table table-borderless" style="width:500px;">
  <tr>
      <td>
      <h5 class="resume-title"> Name : </h5>
      <td>  <h5 class="resume-title">{{ $var['name'] }} </h5></td>
      </td>
       
  </tr>
  <tr>
    <td>
    <h5 class="resume-title">Email :</h5>
    </td>
    <td> <h5 class="resume-title">{{ $var['email'] }}</td>
</tr>

  <tr>
      <td>
      <h5 class="resume-title">Address :</h5>
      </td>
      <td> <h5 class="resume-title">{{ $var['address'] }}</td>
  </tr>
  <tr>
      <td>
      <h5 class="resume-title">Pincode :</h5>
      </td>
      <td> <h5 class="resume-title">{{ $var['pincode'] }}</td>
  </tr>
  
<tr>
  <td><a class="btn btn-dark" href={{"/editprofile/".$var['id']}}>EDIT</a></td>
  
</tr>
  </table>
     
          </div>
        

    </div>
  </section><!-- End Team Section -->

  @endsection