<div class="card bg-transparent border-0 shadow">
    <div class="card-body">
        <div class="result-services-description"></div>
        <form id="all-services-add">
            @csrf
            <div class="mb-3">
                <label for="service-name" class="form-label text-capitalize">servives name</label>
                <select class="form-select shadow-none text-capitalize" id="service-name" name="service-name">
                
                </select>
            </div>
            <div class="mb-3">
                <label for="service-description" class="form-label text-capitalize">service description</label>
                <textarea class="form-control shadow-none" id="service-description" name="service-description" style="height: 100px;"></textarea>
            </div>
            <button type="submit" class="btn btn-success border-0 shadow-none px-4 py-2">Submit</button>
        </form>
    </div>
</div>