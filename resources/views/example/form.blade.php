@extends('.layout.main')
@section('title')
    Form
@endsection
@section('judul')
    Forms
@endsection
@section('nav')
    Forms
@endsection
@section('content')
    <x-card>
        @slot('content')
            <div class="form-group col-md-6">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <small>Your password must be between 8 and 30 characters.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleSelect1">Select</label>
                <select class="form-control" id="exampleSelect1">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleTextarea">Textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            {{-- filepond --}}
            <div class="form-group col-md-6">
                <label><h4><strong>Upload Berkas :</strong></h4></label>
                <br>
                <input type="file"
                    name="file_penetapan[]"
                    multiple
                    accept=".pdf, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .jpeg, .jpg, .png, .rtf"
                />
            </div>
        @endslot
    </x-card>
{{-- script filepond --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // FilePond.registerPlugin(FilePondPluginFileValidateSize);
        // Get all file input references
        const inputs = document.querySelectorAll('input[type="file"]');

        // Create a FilePond instance for each file input
        inputs.forEach(input => {
            FilePond.create(input, {
                maxFileSize: '7MB', // Ukuran maksimum file
                labelIdle: 'Drag and drop files here or <span class="filepond--label-action"><u>Browse</u></span><br><br><small>Max file size: 7MB<small>',
                storeAsFile: true,
            });
        });
    });
</script>
@endsection
