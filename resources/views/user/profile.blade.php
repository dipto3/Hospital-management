@extends('user.master')

@section('content')




<section  style="background-color: #f4f5f7;">
    <button  style="margin-left:45%;margin-top:1%;" type="button" class="btn btn-dark">User Information</button>
              <div class="container">
                <div class="card-body p-4">
                  <h6>User Name</h6>
                  <p class="text-muted">{{Session::get('name')}}</p>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{Session::get('email')}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted">{{Session::get('phone')}}</p>
                    </div>
                  </div>
                  
                  
                 
                 
                </div>
              </div>
              <div class="container">
                <h6>All Appointment</h6>
                  <hr class="mt-0 mb-4">
                  
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Cancel</th>

                      </tr>
                    </thead>
                    @foreach($appointments as $appointment)
                    <tbody>
                      <tr>
                        <th scope="row">{{$appointment->id}}</th>
                        <td>{{$appointment->name}}</td>
                        <td>{{$appointment->doctor}}</td>
                        <td>{{$appointment->phone}}</td>
                        <td>{{$appointment->message}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->status}}</td>
                        <td>
                          <form action="{{url('/cancel-appointment/'.$appointment->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to remove appointment')">Cancel </button>
                          </form>
                        </td>
                      </tr>
                     
                    </tbody>
                    @endforeach
                  </table>
              </div>
        
  </section>
@endsection