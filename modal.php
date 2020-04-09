<div class="modal fade" id="login_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
		<ul class="nav nav-pills nav-justified" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="pill" href="#register">Registration</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="pill" href="#login">Login</a>
			</li>
		</ul>

	  <!-- Tab panes -->
		<div class="tab-content">
			<div id="register" class="tab-pane active">
			  <h3 class="text-center">Registration</h3>
			    <form autocomplete="off">
					<div class="group">
					  <input type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Name</label>
					</div>
					<div class="group">
					  <input type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Email</label>
					</div>
					<div class="group">
					  <input type="password" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Password</label>
					</div>
					<div class="group">
					  <input type="number" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Number</label>
					</div>
					<div class="btn-box">
					  <button class="btn btn-submit" type="submit">Register</button>
					  <button class="btn btn-cancel" type="reset">cancel</button>
					</div>
				</form>
			</div>
			<div id="login" class="tab-pane fade">
				<h3 class="text-center">Login</h3>
				<form>
					<div class="group">
					  <input type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Email</label>
					</div>
					<div class="group">
					  <input type="password" required="required"/><span class="highlight"></span><span class="bar"></span>
					  <label>Password</label>
					</div>
					<a class="text-warning" id="forgot_link" href="#" data-toggle="modal" data-target="#forgot_pass">Forgot Password?</a>
					<div class="btn-box">
					  <button class="btn btn-submit" type="submit">Login</button>
					  <button class="btn btn-cancel" type="reset">cancel</button>
					</div>
				</form>
			</div>
		</div>
      </div>
	</div>
  </div>
</div>


<div class="modal fade" id="forgot_pass">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body user_sec">
        <h3 class="text-center">Forgot Password</h3>
		<form autocomplete="off">
			<div class="row">
				<div class="col-sm-12 col-12">
					<div class="form-group">
						<input class="form-control form-control-lg" placeholder="Email ID" required id="forgot_email" name="forgot-email" type="email">
					</div>
				</div>
			</div>
			<div class="px-1">
				<button type="submit" class="btn btn-dark col-12">CONTINUE</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>