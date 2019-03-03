@extends('layouts.app')

@section('content')  

<body>
  <div class="well well-lg">
      <h1 style= "color: SteelGrey">Disasters</h1>
    </div>
  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelBlue">
          <tr style="color: blue-grey lighten-4">
             <th>Disaster Id</th>
             <th>Disaster Type</th>
             <th>City</th>
             <th>State</th>
             <th>Country</th>
             <th>Description</th>
           </tr>
         
     </thead>
     @if(count($disaster)>0)
     @foreach($disaster as $dis) 
          <tbody>
          <!--<table class="table table-striped table-bordered table-hover table-condensed">-->
          {{-- @if($stud->timeOut==null) --}}
              <tr>    
              {{-- <!--<th scope="row">{{$awaited_user->waiting_list_no}}</th>--> --}}
              <td><h6>{{$dis->disaster_id}}</h6></td>
              <td><h6>{{$dis->disaster_type}}</h6></td>
              <td><h6>{{$dis->city}}</h6></td>
              <td><h6>{{$dis->state}}</h6></td>
              <td><h6>{{$dis->country}}</h6></td>
              <td><h6>{{$dis->description}}</h6></td>
              </tr>
          </tbody>
  @endforeach
  </table>
  {{$disaster->links()}}
  @else
  <p>No Disasters</p>
  @endif
  {{-- <h4><a href="/admin/disaster/add"><button type="button">Add a new Disaster</a></h4> --}}
    <a href="/admin/disaster/add" class="button" role="button">Add a new Disaster</a>
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
    