@extends('layouts.app')

@section('content')  

  

<body>
  <div class="well well-lg">
      <h1 style= "color: SteelGrey">Relief Centres</h1>
  </div>
  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-2">
             <th>Relief Centre Id</th>
             <th>Point Of Contact</th>
             <th>Contact No</th>
             <th>Email_id</th>
             <th>Address Line 1</th>
             <th>Address Line 2</th>
             <th>Address Line 3</th>
             <th>City</th>
             <th>State</th>
             <th>Country</th>
             <th>Postal Code</th>
           </tr>
         
     </thead>
     @if(count($relief_centre)>0)
     @foreach($relief_centre as $r_centre) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$r_centre->relief_centre_id}}</h6></td>
              <td><h6>{{$r_centre->poc}}</h6></td>
              <td><h6>{{$r_centre->contact_no}}</h6></td>
              <td><h6>{{$r_centre->email_id}}</h6></td>
              <td><h6>{{$r_centre->address_line_1}}</h6></td>
              <td><h6>{{$r_centre->address_line_2}}</h6></td>
              <td><h6>{{$r_centre->address_line_3}}</h6></td>
              <td><h6>{{$r_centre->city}}</h6></td>
              <td><h6>{{$r_centre->state}}</h6></td>
              <td><h6>{{$r_centre->country}}</h6></td>
              <td><h6>{{$r_centre->postal_code}}</h6></td>
              <td><a href="/admin/ReliefCentre/{{$r_centre->relief_centre_id}}" class="button" role="button">View</a></td>
              </tr>
          </tbody>
  @endforeach
  </table>
  {{$relief_centre->links()}}
  @else
  <p>No Relief Centres</p>
  @endif
  <h4><a href="/admin/ReliefCentre/add" class="button" role="button">Add New Relief Centre</a></h4>

  </body>

</body>
</html>


<script>
        $(".nav li").on("click", function() {
          $(".nav li").removeClass("active");
          $(this).addClass("active");
        });
    
    </script>
@endsection