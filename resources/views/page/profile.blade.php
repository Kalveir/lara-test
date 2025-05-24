@extends('.layout.main')
@section('title')
Profile
@endsection
@section('judul')
Profile
@endsection
@section('content')
<x-card>
  @slot('content')
  <form action="{{ route('profile.update',$profile->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="class="pc-head-link dropdown-toggle arrow-none mr-0"  href="#" aria-expanded="false"">
      <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
    </div>
    <br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
        placeholder="Nama" value="{{ $profile->name }}" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email: </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
        placeholder="Email" value="{{ $profile->email }}" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Password</label><small><strong> *optional</strong></small>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="password"
        placeholder="Password" value="" >
    </div>
    
    <button type="submit" class="btn btn-outline-primary">Save</button>
  </form>
  @endslot
</x-card>
@endsection