@include("nav")
<x-navbar />

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $c)
            
            <tr>
                <td>{{$c->user_id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->email}}</td>
                <td><a href="{{url('/user')}}/{{$c->user_id}}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include("footer");