<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form id="our-services-add">
            @csrf
            <div class="result-our-services"></div>
            <div class="mb-3">
                <label for="services-icon" class="form-label text-black text-capitalize">Icon</label>
                <input type="text" class="form-control shadow-none text-black" id="services-icon" name="services-icon">
            </div>
            <div class="mb-3">
                <label for="services-name" class="form-label text-black text-capitalize">Service name</label>
                <input type="text" class="form-control shadow-none text-black" id="services-name" name="services-name">
            </div>
            <div class="mb-3">
                <label for="services-image" class="form-label text-black text-capitalize">Service image</label>
                <input type="text" class="form-control shadow-none text-black" id="services-image" name="services-image">
            </div>
            <div class="mb-3">
                <label for="services-description" class="form-label text-black text-capitalize">Description</label>
                <textarea name="services-description" id="services-description" class="form-control shadow-none text-black"></textarea>
            </div>
            <button type="submit" class="btn btn-success text-capitalize px-4 py-2">Submit</button>
        </form>
    </div>
</div>