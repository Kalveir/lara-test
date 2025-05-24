@extends('.layout.main')
@section('title')
Alert & Button
@endsection
@section('judul')
Alerts & Buttons
@endsection
@section('nav')
Alert & Button
@endsection
@section('content')
<div class="row">
  {{-- alert --}}
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5>Alert</h5>
      </div>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-light alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
    </div>
  </div>
  {{-- button --}}
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5>Outline Icon</h5>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-icon btn-outline-primary"><i data-feather="thumbs-up"></i></button>
        <button type="button" class="btn btn-icon btn-outline-secondary"><i data-feather="camera"></i></button>
        <button type="button" class="btn btn-icon btn-outline-success"><i data-feather="check-circle"></i></button>
        <button type="button" class="btn btn-icon btn-outline-danger"><i data-feather="slash"></i></button>
        <button type="button" class="btn btn-icon btn-outline-warning"><i data-feather="alert-triangle"></i></button>
        <button type="button" class="btn btn-icon btn-outline-info"><i data-feather="info"></i></button>
      </div>
      <div class="card-header">
        <h5>Outline Icon Buttons</h5>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-outline-primary"><i class="mr-2" data-feather="thumbs-up"></i>Primary</button>
        <button type="button" class="btn btn-outline-secondary"><i class="mr-2" data-feather="camera"></i>Secondary</button>
        <button type="button" class="btn btn-outline-success"><i class="mr-2" data-feather="check-circle"></i>Success</button>
        <button type="button" class="btn btn-outline-danger"><i class="mr-2" data-feather="slash"></i>Danger</button>
        <button type="button" class="btn btn-outline-warning"><i class="mr-2" data-feather="alert-triangle"></i>Warning</button>
        <button type="button" class="btn btn-outline-info"><i class="mr-2" data-feather="info"></i>Info</button>
      </div>
      <div class="card-header">
        <h5>Basic Outline Dropdown Button</h5>
      </div>
      <div class="card-body">
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
        <div class="btn-group mb-2 mr-2">
          <button class="btn  btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#!">Action</a>
            <a class="dropdown-item" href="#!">Another action</a>
            <a class="dropdown-item" href="#!">Something else here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5>Outline Icon Buttons</h5>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-outline-primary"><i class="mr-2" data-feather="thumbs-up"></i>Primary</button>
        <button type="button" class="btn btn-outline-secondary"><i class="mr-2" data-feather="camera"></i>Secondary</button>
        <button type="button" class="btn btn-outline-success"><i class="mr-2" data-feather="check-circle"></i>Success</button>
        <button type="button" class="btn btn-outline-danger"><i class="mr-2" data-feather="slash"></i>Danger</button>
        <button type="button" class="btn btn-outline-warning"><i class="mr-2" data-feather="alert-triangle"></i>Warning</button>
        <button type="button" class="btn btn-outline-info"><i class="mr-2" data-feather="info"></i>Info</button>
      </div>
    </div>
  </div>
</div>

@endsection