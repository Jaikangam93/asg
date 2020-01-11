<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.head')
</head>

<body>
  @include('partials.header')
  <main>
    <div class="position-relative">
      <!-- Hero for FREE version -->
        @include('hero')
    </div>
      @include('message')
      @include('services')

    <section class="section pb-0 section-components">
      <div class="py-5 bg-secondary">
        <div class="container">
          @include('ourpartner')
        </div>
      </div>
    </section>
    @include('room')
    @include('ourstudentsay')
    <section class="section section-components">
      <div class="container">
        <h3 class="h4 text-success font-weight-bold mb-4">Tabs</h3>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- Tabs with icons -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With icons</small>
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                      <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
              <!-- Menu -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With text</small>
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Messages</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent1">
                    <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                      <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-grid justify-content-between align-items-center mt-lg">
            <div class="col-lg-5">
              <h3 class="h4 text-success font-weight-bold mb-4">Progress bars</h3>
              <div class="progress-wrapper">
                <div class="progress-info">
                  <div class="progress-label">
                    <span>Task completed</span>
                  </div>
                  <div class="progress-percentage">
                    <span>40%</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-default" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                </div>
              </div>
              <div class="progress-wrapper">
                <div class="progress-info">
                  <div class="progress-label">
                    <span>Task completed</span>
                  </div>
                  <div class="progress-percentage">
                    <span>60%</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <h3 class="h4 text-success font-weight-bold mb-5">Pagination</h3>
              <nav aria-label="Page navigation example" class="mb-4">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
              </nav>
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="row row-grid justify-content-between">
            <div class="col-lg-5">
              <h3 class="h4 text-success font-weight-bold mb-5">Navigation Pills</h3>
              <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="true">
                    <span class="nav-link-icon d-block"><i class="ni ni-atom"></i></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-5">
              <h3 class="h4 text-success font-weight-bold mb-5">Labels</h3>
        <span class="badge badge-pill badge-primary text-uppercase">Primary</span>
        <span class="badge badge-pill badge-success text-uppercase">Success</span>
        <span class="badge badge-pill badge-danger text-uppercase">Danger</span>
        <span class="badge badge-pill badge-warning text-uppercase">Warning</span>
        <span class="badge badge-pill badge-info text-uppercase">Info</span>
      </div>
      </div>
      <h3 class="mt-lg mb-4">
        <span>Alerts</span>
      </h3>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
        <span class="alert-inner--text"><strong>Info!</strong> This is an info alert—check it out!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
        <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-support-16"></i></span>
        <span class="alert-inner--text"><strong>Danger!</strong> This is an error alert—check it out!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Typography -->
      <h2 class="mt-lg mb-5">
        <span>Typography</span>
      </h2>
      <h3 class="h4 text-success font-weight-bold">Headings</h3>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 1</small>
        </div>
        <div class="col-sm-9">
          <h1 class="mb-0">Argon Design System</h1>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 2</small>
        </div>
        <div class="col-sm-9">
          <h2 class="mb-0">Argon Design System</h2>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 3</small>
        </div>
        <div class="col-sm-9">
          <h3 class="mb-0">Argon Design System</h3>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 4</small>
        </div>
        <div class="col-sm-9">
          <h4 class="mb-0">Argon Design System</h4>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 5</small>
        </div>
        <div class="col-sm-9">
          <h5 class="mb-0">Argon Design System </h5>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading 6</small>
        </div>
        <div class="col-sm-9">
          <h6 class="mb-0">Argon Design System </h6>
        </div>
      </div>
      <!-- Display titles -->
      <h3 class="h4 text-success font-weight-bold mt-md">Display titles</h3>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Display 1</small>
        </div>
        <div class="col-sm-9">
          <h1 class="display-1 mb-0">Argon Design System</h1>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Display 2</small>
        </div>
        <div class="col-sm-9">
          <h2 class="display-2 mb-0">Argon Design System</h2>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Display 3</small>
        </div>
        <div class="col-sm-9">
          <h3 class="display-3 mb-0">Argon Design System</h3>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Display 4</small>
        </div>
        <div class="col-sm-9">
          <h4 class="display-4 mb-0">Argon Design System</h4>
        </div>
      </div>
      <!-- Specialized titles -->
      <h3 class="h4 text-success font-weight-bold mt-md">Specialized titles</h3>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading</small>
        </div>
        <div class="col-sm-9">
          <h3 class="heading mb-0">Argon Design System</h3>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading title</small>
        </div>
        <div class="col-sm-9">
          <h3 class="heading-title text-warning mb-0">Argon Design System</h3>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Heading seaction</small>
        </div>
        <div class="col-sm-9">
          <div>
            <h2 class="display-3">Header with small subtitle </h2>
            <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
          </div>
        </div>
      </div>
      <!-- Paragraphs -->
      <h3 class="h4 text-success font-weight-bold mt-md">Paragraphs</h3>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Paragraph</small>
        </div>
        <div class="col-sm-9">
          <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Lead text</small>
        </div>
        <div class="col-sm-9">
          <p class="lead">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Quote</small>
        </div>
        <div class="col-sm-9">
          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Muted text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Primary text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-primary">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Info text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-info mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Success text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-success mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Warning text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-warning mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <div class="row py-3 align-items-center">
        <div class="col-sm-3">
          <small class="text-uppercase text-muted font-weight-bold">Danger text</small>
        </div>
        <div class="col-sm-9">
          <p class="text-danger mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
        </div>
      </div>
      <!-- Images -->
      <h2 class="mt-lg mb-5">
        <span>Images</span>
      </h2>
      <div class="row">
        <div class="col-sm-3 col-6">
          <small class="d-block text-uppercase font-weight-bold mb-4">Image</small>
          <img src="./frontend/img/theme/team-1-800x800.jpg" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
        </div>
        <div class="col-sm-3 col-6">
          <small class="d-block text-uppercase font-weight-bold mb-4">Circle Image</small>
          <img src="./frontend/img/theme/team-2-800x800.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 150px;">
        </div>
        <div class="col-sm-3 col-6 mt-5 mt-sm-0">
          <small class="d-block text-uppercase font-weight-bold mb-4">Raised</small>
          <img src="./frontend/img/theme/team-3-800x800.jpg" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">
        </div>
        <div class="col-sm-3 col-6 mt-5 mt-sm-0">
          <small class="d-block text-uppercase font-weight-bold mb-4">Circle Raised</small>
          <img src="./frontend/img/theme/team-4-800x800.jpg" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 150px;">
        </div>
      </div>
      <h2 class="mt-lg mb-5">
        <span>Javascript Components</span>
      </h2>
      <h3 class="h4 text-success font-weight-bold mb-4">Modals</h3>
      <!-- Modals -->
      <div class="row">
        <div class="col-md-4">
          <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">Default</button>
          <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
          <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
              <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-white">Ok, Got it</button>
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-5">
                        <div class="text-muted text-center mb-3">
                          <small>Sign in with</small>
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img alt="image" src="./frontend/img/icons/common/github.svg">
                            </span>
                            <span class="btn-inner--text">Github</span>
                          </a>
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img alt="image" src="./frontend/img/icons/common/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                          <small>Or sign in with credentials</small>
                        </div>
                        <form>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email">
                            </div>
                            <input class="form-control" placeholder="Email" type="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password">
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for="customCheckLogin">
                              <span>Remember me</span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn-primary my-4">Sign in</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Datepicker -->
      <h3 class="h4 text-success font-weight-bold mt-md mb-4">Datepicker</h3>
      <div class="row">
        <div class="col-md-4">
          <small class="d-block text-uppercase font-weight-bold mb-3">Single date</small>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2019">
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-4 mt-md-0">
          <small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
          <div class="input-daterange datepicker row align-items-center">
            <div class="col">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                  </div>
                  <input class="form-control" placeholder="Start date" type="text" value="06/18/2019">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                  </div>
                  <input class="form-control" placeholder="End date" type="text" value="06/22/2019">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tooltips and Popovers -->
      <h3 class="h4 text-success font-weight-bold mt-md mb-4">Tooltips &amp; Popovers</h3>
      <div class="row">
        <div class="col-lg-6">
          <small class="d-block text-uppercase font-weight-bold mb-3">Tooltips</small>
          <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="left" title="Tooltip on left" data-container="body" data-animation="true" data-delay="100">On left</button>
          <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">On top</button>
          <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">On bottom</button>
          <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="right" title="Tooltip on right" data-container="body" data-animation="true">On right</button>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <small class="d-block text-uppercase font-weight-bold mb-3">Popovers</small>
          <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On left</button>
          <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On top</button>
          <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On right</button>
          <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On bottom</button>
        </div>
      </div>
      </div>
    </section>
    <section class="section section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h1 class="text-white font-weight-light">Bootstrap carousel</h1>
            <p class="lead text-white mt-4">Argon Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
            <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white mt-4">See all components</a>
          </div>
          <div class="col-lg-6 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="./frontend/img/theme/img-1-1200x1000.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./frontend/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg section-nucleo-icons pb-250">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">What our student say</h2>
          </div>
        </div>
        <div class="blur--hover">
          <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html">
            <div class="icons-container blur-item mt-5" data-toggle="on-screen">
              <!-- Center -->
              <i class="icon ni ni-diamond"></i>
              <!-- Right 1 -->
              <i class="icon icon-sm ni ni-album-2"></i>
              <i class="icon icon-sm ni ni-app"></i>
              <i class="icon icon-sm ni ni-atom"></i>
              <!-- Right 2 -->
              <i class="icon ni ni-bag-17"></i>
              <i class="icon ni ni-bell-55"></i>
              <i class="icon ni ni-credit-card"></i>
              <!-- Left 1 -->
              <i class="icon icon-sm ni ni-briefcase-24"></i>
              <i class="icon icon-sm ni ni-building"></i>
              <i class="icon icon-sm ni ni-button-play"></i>
              <!-- Left 2 -->
              <i class="icon ni ni-calendar-grid-58"></i>
              <i class="icon ni ni-camera-compact"></i>
              <i class="icon ni ni-chart-bar-32"></i>
            </div>
            <span class="blur-hidden h5 text-success">Explore all to see what our student say </span>
          </a>
        </div>
      </div>
    </section>

    <section class="section section-lg section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row row-grid justify-content-between align-items-center">
          <div class="col-lg-6">
            <h3 class="display-3 text-white">A beautiful Design System<span class="text-white">completed with examples</span></h3>
            <p class="lead text-white">The Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 Design System.</p>
            <div class="btn-wrapper">
              <a href="./examples/login.html" class="btn btn-success">Login Page</a>
              <a href="./examples/register.html" class="btn btn-white">Register Page</a>
            </div>
          </div>
          <div class="col-lg-5 mb-lg-auto">
            <div class="transform-perspective-right">
              <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-5">
                  <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
                  <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img alt="image" src="./frontend/img/icons/common/github.svg">
                      </span>
                      <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img alt="image" src="./frontend/img/icons/common/google.svg">
                      </span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form>
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckLogin2" type="checkbox">
                      <label class="custom-control-label" for="customCheckLogin2">
                        <span>Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Do you love this awesome <span class="text-success">Design System for Bootstrap 4?</span></h2>
            <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <div class="btn-wrapper">
              <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
              <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-default">Download PSD/Sketch</a>
            </div>
            <div class="text-center">
              <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
              <div class="row justify-content-center">
                <div class="col-lg-2 col-4">
                  <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.creative-tim.com/product/vue-argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.sketchapp.com/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Sketch - Digital design toolkit">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid ">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://www.adobe.com/products/photoshop.html" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Adobe Photoshop - Software for digital images manipulation">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid ">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] Angular - One framework. Mobile &amp; desktop">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid ">
                  </a>
                </div>
                <div class="col-lg-2 col-4">
                  <a href=" https://angularjs.org/" target="_blank" data-toggle="tooltip" data-original-title="[Coming Soon] React - A JavaScript library for building user interfaces">
                    <img alt="image" src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-3">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')

</body>

</html>