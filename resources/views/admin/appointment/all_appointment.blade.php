@extends('admin.home')

@section('admin_content')

<div class="container">
    <h6>All Appointment</h6>
      <hr class="mt-0 mb-4">
      
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th style="width: 5%;" scope="col">Serial No.</th>
            
            <th style="width: 10%;"scope="col">Patient Name</th>
            <th style="width: 10%;"scope="col">Doctor Name</th>
            <th style="width: 10%;"scope="col">Phone</th>
            <th style="width: 14%;"scope="col">Message</th>
            <th style="width: 10%;"scope="col">Date</th>
            <th style="width: 10%;"scope="col">Status</th>
            <th style="width: 10%;"scope="col">Approved</th>
            <th style="width: 11%;"scope="col">Cancel</th>

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
                <form action="{{url('/approved/'.$appointment->id)}}" method="POST">
                    @csrf
                    <button class="btn btn-success" type="submit" >Approved </button>
                  </form>
            </td>
            <td>
              <form action="{{url('/cancelled/'.$appointment->id)}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to remove appointment')">Cancel </button>
              </form>
            </td>
          </tr>
         
        </tbody>
        @endforeach
      </table>
  </div>
@endsection
