@include("nav");

<div class="container">
<form action="{{url('/')}}/add" method="post">
    @csrf
    <!-- <pre>
        {{print_r($errors->all())}};
    </pre> -->

  <x-input name="name" type="text" label="Enter Your Name" />
  <x-input name="email" type="email" label="Enter Your Email" />
  <x-input name="password" type="password" label="Password" />
  <x-input name="password_confirmation" type="password" label="Confirm Password" />
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@include("footer");
