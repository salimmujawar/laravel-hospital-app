@include('user.header')
<div class="container-fluid min-vh-100">
    <table class="table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Cancel Appointment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{$appointment->doctor}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->message}}</td>
                <td>{{$appointment->status}}</td>
                <td><a onclick="return confirm('Are you sure?');" class="btn btn-danger" href="{{url('cancel_appointment', $appointment->id)}}">Cancel</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('user.footer')