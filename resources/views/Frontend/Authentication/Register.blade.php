{{-- include css and others --}}
@include('Frontend.Layout.LayoutPartials.LayoutLinks')

<body style="background-color: #c9e8c9;">
  <div class="container">
    <form style="width: 50%; margin-left: 25%; background: #ffffff; padding: 5%; margin-top: 5%;">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="ConfirmPassword" placeholder="Password" required>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button style="margin-top: 1%;" type="submit" class="btn btn-outline-info  btn-block">Signin</button>
    </form>
  </div>

</body>


{{-- include js and others --}}
@include('Frontend.Layout.LayoutPartials.LayoutScripts')
