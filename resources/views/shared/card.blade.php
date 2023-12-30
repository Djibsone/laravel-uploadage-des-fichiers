<div class="col-md-3 mb-4">
    <div class="card carte rounded">
        @if ($image->file_path)
            <div class="p-2 rounded-border">
                <img src="{{ asset('storage/' . $image->file_path) }}" class="card-img-top custom-card-image img-fluid" alt="Image Téléchargée" style="height: 200px; object-fit: cover;">
            </div>
        @endif
        <div class="card-body">
            <h5 class="card-title">
                <p>Titre image</p>
            </h5>
            <p class="text-primary fw-bold">Date de création : {{ $image->created_at->format('Y-m-d') }}</p>
        </div>
    </div>
</div>        