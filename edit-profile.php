<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>

<header id="main-header" style="margin-top: 88px;" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center">
          <h3><i class="fa fa-gear"></i> Dashboard</h3>
        </div>
        <div class="col-md-9">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item px-2">
            <a href="index.html" class="nav-link active">Dashboard</a>
          </li>
          <li class="list-inline-item px-2">
            <a href="posts.html" class="nav-link">Announcements</a>
          </li>
          <li class="list-inline-item px-2">
            <a href="categories.html" class="nav-link">Courses</a>
          </li>
          <!--<li class="list-inline-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>-->
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="supervisor-profile.html" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
            <i class="fa fa-lock"></i> Change Password
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-danger btn-block">
            <i class="fa fa-remove"></i> Delete Account
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- PROFILE EDIT -->
  <section id="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" value="Brad Traversy">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" value="test@test.com">
                </div>
                <div class="form-group">
                  <label for="body">Bio</label>
                  <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel aliquam a commodi eligendi, esse quos perspiciatis, quas aliquid voluptates iure. Voluptatibus nisi iste voluptatum maxime dicta quisquam, nihil id!</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h3>Your Avatar</h3>
          <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Edit Image</button>
          <button class="btn btn-danger btn-block">Delete Image</button>
        </div>
      </div>
    </div>
  </section>


<?php include 'footer.php'; ?>