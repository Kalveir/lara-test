@extends('.layout.main')
@section('title')
    User
@endsection
@section('judul')
    User
@endsection
@section('nav')
    User
@endsection
@section('content')
    <x-card>
        @slot('button')
            <a href="{{ route('user.create') }}">
                <button class="btn icon icon-left btn-outline-primary">
                    <i class="fas fa-plus"></i><span> Tambah</span>
                </button>
            </a>
        @endslot

        @slot('content')
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $usr)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $usr->name }}</td>
                                <td>{{ $usr->email }}</td>
                                <td>{{ optional($usr->roles->first())->name }}</td>
                                <td>
                                    <div class="d-flex center-content-between">
                                        <form action="{{ route('user.edit', $usr->id) }}">
                                            @csrf
                                            <button class="btn icon icon-left btn-outline-warning">
                                                <i data-feather="edit"></i></button>
                                        </form>
                                        <form action="{{ route('user.delete', $usr->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="deleteAlert(this)" class="btn icon icon-left btn-outline-danger">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endslot
    </x-card>
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
