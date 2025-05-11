<div class="card border-0">
    <div class="card-body px-0">
        <form id="what-we-offer">
            @csrf
            <div class="what-we-offer-result"></div>
            <div class="mb-3">
                <label for="service-name" class="form-label text-black text-capitalize">Service Name</label>
                <input type="text" class="form-control shadow-none text-black" id="service-name" name="service-name">
            </div>
            <div class="mb-3">
                <label for="service-related-image" class="form-label text-black text-capitalize">Service Related Image</label>
                <input type="text" class="form-control shadow-none text-black" id="service-related-image" name="service-related-image">
            </div>
            <button type="submit" class="btn btn-success border-0 shadow-none">Submit</button>
        </form>
    </div>
</div>