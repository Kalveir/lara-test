<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        @if(!empty($button))
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          {{ $button }}
        </div>
      @endif
        <div class="card-body">
          {{ $content }}
        </div>
    </div>
</div>