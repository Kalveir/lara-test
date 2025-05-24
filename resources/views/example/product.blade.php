@extends('.layout.main')
@section('title')
    Ini tittle
@endsection
@section('judul')
    Ini judul
@endsection
@section('content')
    <x-card>
        @slot('button')
            <a href="{{ route('product.add') }}">
                <button class="btn icon icon-left btn-outline-primary">
                    <i class="fas fa-plus"></i><span> Tambah</span>
                </button>
            </a>
        @endslot

        @slot('content')
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover table-striped" id="dataTableHover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $prdk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $prdk->name }}</td>
                                <td>{{ optional($prdk->category)->name }}</td>
                                <td>
                                    <div class="d-flex center-content-between">
                                        <form action="{{ route('product.edit', $prdk->id) }}">
                                            @csrf
                                            <button class="btn icon icon-left btn-outline-warning">
                                                <i data-feather="edit"></i></button>
                                        </form>
                                        <form action="{{ route('product.delete', $prdk->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="deleteAlert(this)" class="btn icon icon-left btn-outline-danger"><i
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
