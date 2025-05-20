<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form id="blog-form-add">
            @csrf
            <div class="blog-add-form-result"></div>
            <div class="mb-3">
                <label for="blog-tittle" class="form-label text-capitalize text-black">blogs tittle</label>
                <input type="text" class="form-control text-black shadow-none" id="blog-tittle" name="blog-tittle">
            </div>
            <div class="mb-3">
                <label for="blog-description" class="form-label text-capitalize text-black">blog description</label>
                <textarea class="form-control text-black shadow-none" id="blog-description" name="blog-description"></textarea>
            </div>
            <div class="mb-3">
                <label for="blog-image" class="form-label text-capitalize text-black">blog image</label>
                <input type="text" class="form-control text-black shadow-none" id="blog-image" name="blog-image">
            </div>
            <button type="submit" class="btn btn-success shadow-none border-0">Submit</button>
        </form>
    </div>
</div>