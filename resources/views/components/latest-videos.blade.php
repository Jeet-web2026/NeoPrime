<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form id="latest-videos-add">
            @csrf
            <div class="latest-videos-add-result"></div>
            <div class="mb-3">
                <label for="video-link" class="form-label text-capitalize text-black">video link</label>
                <input type="text" class="form-control shadow-none text-black" id="video-link" name="video-link">
            </div>
            <div class="mb-3">
                <label for="video-image" class="form-label text-capitalize text-black">video image</label>
                <input type="text" class="form-control shadow-none text-black" id="video-image" name="video-image">
            </div>
            <div class="mb-3">
                <label for="video-content" class="form-label text-capitalize text-black">video content</label>
                <input type="text" class="form-control shadow-none text-black" id="video-content" name="video-content">
            </div>
            <button type="submit" class="btn btn-success shadow-none border-0">Submit</button>
        </form>
    </div>
</div>