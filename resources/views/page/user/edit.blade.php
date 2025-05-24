@extends('.layout.main')
@section('title')
Edit User
@endsection
@section('judul')
Edit User
@endsection
@section('nav')
  Edit User
@endsection
@section('content')
<x-card>
  @slot('content')
  <form action="{{ route('user.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Nama : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
        value="{{ $user->name }}" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Email : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
        value="{{ $user->email }}" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlInput1">Password : </label>
      <small><strong>*optional</strong></small>
      <input type="password" class="form-control" id="exampleFormControlInput1" name="password"
        placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="select2SinglePlaceholder">Jabatan :</label><br>
      <select class="select2 form-control" name="jabatan_id" id="select2SinglePlaceholder">
        @foreach ($jabatan as $jabatan)
        <option value="{{ $jabatan->id }}"
            {{ $user->hasRole($jabatan->name) == $jabatan->id ? 'selected' : '' }}>
            {{ $jabatan->name }}
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