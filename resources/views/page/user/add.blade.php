@extends('.layout.main')
@section('title')
Add User
@endsection
@section('judul')
Add User
@endsection
@section('nav')
  Add User
@endsection
@section('content')
<x-card>
  @slot('content')
  <form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Nama : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
        placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Email : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
        placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Password : </label>
      <input type="password" class="form-control" id="exampleFormControlInput1" name="password"
        placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="select2SinglePlaceholder">Jabatan :</label><br>
      <select class="select2 form-control" name="jabatan_id" id="select2SinglePlaceholder">
        @foreach($jabatan as $jabatan)
          <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
  </form>
  @endslot
</x-card>
@endsection