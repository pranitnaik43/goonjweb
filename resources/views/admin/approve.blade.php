@extends('layouts.app')

@section('content')

  <div class="page-container">
      <div class="well well-lg">
      <h1 style= "color: SteelGray">Unapproved Users</h1>
      </div>
  <table class="table table-striped table-bordered table-hover table-condensed">
      <thead style= "color: SteelGray">
          <tr style="color: blue-grey lighten-4">
             <th>Waiting_list_no</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Contact No</th>
             <th>Email</th>
         </tr>
         
     </thead>
     @if(count($awaited_users)>0)
     @foreach($awaited_users as $awaited_user) 
          <tbody>
            <tr>    
              <td><h6>{{$awaited_user->waiting_list_no}}</h6></td>
              <td><h6>{{$awaited_user->first_name}}</h6></td>
              <td><h6>{{$awaited_user->last_name}}</h6></td>
              <td><h6>{{$awaited_user->contact_no}}</h6></td>
              <td><h6>{{$awaited_user->email}}</h6></td>
              {{-- <td><h6><a href="/admin/approve/{{$awaited_user->waiting_list_no}}"><button type="button">View</a></h6></td> --}}
                <td><a href="/admin/approve/{{$awaited_user->waiting_list_no}}" class="button">View<a></td>
            </tr>
          </tbody>
  @endforeach
  </table>
  {{$awaited_users->links()}}
  @else
  <p>No Unapproved Users</p>
  @endif
</div>

@endsection

