@extends('.layout.main')
@section('title')
Ini tittle
@endsection
@section('judul')
Add Product
@endsection
@section('content')
<x-card>
  @slot('content')
  <form action="{{ route('product.save') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Product Name : </label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
        placeholder="Product Name" required>
    </div>
    <div class="form-group">
      <label for="sexampleFormControlInput1">Category :</label>
      <select class="select2-single-placeholder form-control" name="category_id" id="select2SinglePlaceholder" required>
        @foreach ($category as $ctg)
            <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-outline-primary">Save</button>
  </form>
  @endslot
</x-card>
@endsection