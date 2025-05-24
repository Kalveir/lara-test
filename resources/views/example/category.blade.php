@extends('.layout.main')
@section('title')
    Kategori
@endsection
@section('judul')
    Kategori
@endsection
@section('nav')
    Kategori
@endsection
@section('content')
    <x-card>
        @slot('button')
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#input_modal">
                <i class="fas fa-plus"></i><span> Tambah</span>
            </button>
        @endslot

        @slot('content')
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $ctg)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ctg->name }}</td>
                                <td>
                                    <div class="d-flex center-content-between">
                                        <button class="btn icon icon-left btn-outline-warning"data-toggle="modal"
                                            data-target="#update_modal{{ $ctg->id }}"><i data-feather="edit"></i></button>
                                        <form action="{{ route('category.destroy', $ctg->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="deleteAlert(this)" class="btn icon icon-left btn-outline-danger"><i
                                                    data-feather="trash-2"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            <div class="modal" id="update_modal{{ $ctg->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Header Modal -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Category</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Body Modal -->
                                        <div class="modal-body">
                                            <!-- Form Input -->
                                            <form action="{{ route('category.update', $ctg->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="nama">Nama Category: </label>
                                                    <input type="text" name="name" value="{{ $ctg->name }}"
                                                        id="name" class="form-control" placeholder="Masukkan Nama Category"
                                                        required>

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
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endslot
    </x-card>
    <div class="modal" id="input_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Header Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Body Modal -->
                <div class="modal-body">
                    <!-- Form Input -->
                    <form action="{{ route('category.add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Category</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Masukkan Category" required>
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
