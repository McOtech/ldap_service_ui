<?php 
 namespace Paudel\App\routes;

 class Login {

 }
?>

<div class="row">

  <!-- Blog Post Content Column -->
  <div class="col-lg-8">

    <!-- Blog Post -->

    <!-- Title -->
    <h1 class="text-center">Login</h1>

    <hr>

    <!-- Comments Form -->
    <div class="well">
      <!-- <h4>Leave a Comment:</h4> -->
      <form role="form">
        <div class="form-group">
          <div class="form-row">
            <div class="col-lg-6">
              <label for="regno">Registration Number</label>
              <input type="text" name="regno" id="regno" class="form-control" aria-describedby="regnohelp"
                placeholder="regno">
              <small id="regnohelp" class="form-text text-muted">Please provide a valid registration number.</small>
            </div>
            <div class="col-lg-6">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" aria-describedby="emailhelp"
                placeholder="example@gmail.com">
              <small id="emailhelp" class="form-text text-muted">Please provide a valid email address.</small>
            </div>
          </div>

          <div class="form-row">
            <div class="col-lg-12">
              <label for="mobile">Mobile</label>
              <input type="tel" name="mobile" id="mobile" class="form-control" aria-describedby="mobilehelp"
                placeholder="0712345689">
              <small id="mobilehelp" class="form-text text-muted">Please provide a functional mobile contact.</small>
            </div>
          </div>

          <div class="form-row">
            <div class="col-lg-6">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-lg-6">
              <label for="password_confirmation">Password Confirmation</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
          </div>
        </div>

        <!-- <div class="form-group">
          <textarea class="form-control" rows="3"></textarea>
        </div> -->
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem !important;">Signin</button>
      </form>
    </div>

    <!-- Author -->
    <div class="row">
      <div class="col-md-6"><a href="#">Forgot Pasword?</a></div>
      <div class="col-md-6 text-right">Don't have an account? <a href="#">Create Account</a></div>
    </div>
  </div>

  <!-- Blog Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
      <h4>Blog Search</h4>
      <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
      <h4>Blog Categories</h4>
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled">
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="list-unstyled">
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
            <li><a href="#">Category Name</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
      <h4>Side Widget Well</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium
        odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

  </div>

</div>
<!-- /.row -->