@extends('.layout.main')
@section('title')
    Add Role
@endsection
@section('judul')
    Add Role
@endsection
@section('nav')
    Add Role
@endsection
@section('content')
    <x-card>
        @slot('content')
            <form action="{{ route('jabatan.store') }}" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Nama Jabatan : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="select2Multiple">Hak Akses</label><br>
                    <select class="select2-multiple form-control" name="akses[]" multiple="multiple" id="select2Multiple">
                        @foreach ($permission as $ps)
                            <option value={{ $ps->id }}>{{ $ps->name }}</option>
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
