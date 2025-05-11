<div class="card bg-transparent shadow border-0">
    <div class="card-body">
        <div class="landing-content-form-result"></div>
        <form id="landing-content-form">
            @csrf
            <div class="mb-3">
                <label for="landing-main-heading" class="form-label text-capitalize fs-5 text-black">main heading</label>
                <input type="text" class="form-control shadow-none text-black" id="landing-main-heading" name="landing-main-heading">
            </div>
            <div class="mb-3">
                <label for="landing-main-background" class="form-label text-capitalize fs-5 text-black">main background</label>
                <input type="text" class="form-control shadow-none text-black" id="landing-main-background" name="landing-main-background">
            </div>
            <div class="mb-3">
                <label for="landing-meta-content" class="form-label text-capitalize fs-5 text-black">meta content</label>
                <input type="text" class="form-control shadow-none text-black" id="landing-meta-content" name="landing-meta-content">
            </div>
            <div class="mb-3">
                <label for="landing-meta-description" class="form-label text-capitalize fs-5 text-black">meta description</label>
                <textarea type="text" class="form-control shadow-none text-black" id="landing-meta-description" name="landing-meta-description"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>
    </div>
</div>