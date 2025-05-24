@extends('.layout.main')
@section('title')
    Role & Permission
@endsection
@section('judul')
    Role & Permission
@endsection
@section('nav')
    Role & Permission
@endsection
@section('content')
    <x-card>
        @slot('content')
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#Role" role="tab"
                        aria-controls="Role" aria-selected="true">Role</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#Permission" role="tab"
                        aria-controls="Permission" aria-selected="false">Permission</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-tabs-four-tabContent">
                {{-- Role --}}
                <div class="tab-pane fade show active" id="Role" role="tabpanel"
                    aria-labelledby="custom-tabs-four-home-tab">
                    <div class="card-header">
                        <a href="{{ route('jabatan.create') }}">
                            <button class="btn icon icon-left btn-outline-primary">
                                <i class="fas fa-plus"></i><span> Tambah</span>
                            </button>
                        </a>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatan as $jbt)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jbt->name }}</td>
                                        <td>
                                            <div class="d-flex center-content-between">
                                                <form action="{{ route('jabatan.edit', $jbt->id) }}">
                                                    @csrf
                                                    <button class="btn icon icon-left btn-outline-warning">
                                                        <i data-feather="edit"></i></button>
                                                </form>
                                                <form action="{{ route('jabatan.delete', $jbt->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="deleteAlert(this)"
                                                        class="btn icon icon-left btn-outline-danger"><i
                                                            data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Permission --}}
                <div class="tab-pane fade" id="Permission" role="tabpanel" aria-labelledby="Permission-tab">
                    <div class="card-header">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#input_modal">
                            <i class="fas fa-plus"></i><span> Tambah</span>
                        </button>
                    </div>

                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover2">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permission as $prm)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $prm->name }}</td>
                                        <td>
                                            <div class="d-flex center-content-between">
                                                <button class="btn icon icon-left btn-outline-warning"data-toggle="modal"
                                                    data-target="#update_modal{{ $prm->id }}"><i
                                                        data-feather="edit"></i></button>
                                                <form action="{{ route('akses.destroy', $prm->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="deleteAlert(this)"
                                                        class="btn icon icon-left btn-outline-danger"><i
                                                            data-feather="trash-2"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal" id="update_modal{{ $prm->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Header Modal -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Permission</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Body Modal -->
                                                <div class="modal-body">
                                                    <!-- Form Input -->
                                                    <form action="{{ route('akses.update', $prm->id) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="nama">Nama Permission: </label>
                                                            <input type="text" name="name" value="{{ $prm->name }}"
                                                                id="name" class="form-control"
                                                                placeholder="Masukkan Permission" required>

                                                        </div>
                                                </div>

                                                <!-- Footer Modal -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endslot
    </x-card>
    <div class="modal" id="input_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Permission</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Body Modal -->
                <div class="modal-body">
                    <!-- Form Input -->
                    <form action="{{ route('akses.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama permission</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Masukkan Permission" required>
                        </div>
                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteAlert(button) {
            event.preventDefault();
            alertify.confirm("", "Yakin ingin menghapus ?",
                function() {
                    button.closest('form').submit();
                },
                function() {
                    console.log('')
                }
            );
        }
    </script>
@endsection
