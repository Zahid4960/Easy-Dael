{{-- admin navbar --}}
	<div class="wrapper">
		{{-- for navbar brand(Easy Deal) --}}
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ route('AdminIndex') }}">Easy Deal Admin</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
         {{-- for hame --}}
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="{{ route('FrontendIndex') }}">Visit Main Site<span class="sr-only">(current)</span></a>
				      </li>
							{{-- for all products--}}
							<li class="nav-item">
				        <a class="nav-link" href="{{ route('FrontendProducts') }}">Products</a>
				      </li>
							{{-- for contact --}}
							<li class="nav-item">
								<a class="nav-link" href="{{ route('FrontendContact') }}">Contact</a>
							</li>
							<!--
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#">Disabled</a>
				      </li>
						-->
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search for products" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				    </form>
						<ul class="navbar-nav ">
							{{-- for Signin --}}
							<li class="nav-item">
								<a class="nav-link" href="">SignIn</a>
							</li>
							{{-- for Signout --}}
							<li class="nav-item">
								<a class="nav-link" href="">SignOut</a>
							</li>
							{{-- for register --}}
							<li class="nav-item">
								<a class="nav-link" href="">Register</a>
							</li>
						</ul>

				 </div>
			</div>
		</nav>
	</div>
{{-- end admin navbar --}}
