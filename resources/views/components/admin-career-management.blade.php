<div class="card border-0 shadow">
    <div class="card-body">
        <form id="career-vacancy">
            @csrf
            <div class="mb-3">
                <label for="designation-name" class="form-label text-capitalize">designation name</label>
                <input type="text" class="form-control shadow-none" id="designation-name" name="designation-name">
            </div>
            <div class="mb-3">
                <label for="salary-range" class="form-label text-capitalize">salary range</label>
                <input type="text" class="form-control shadow-none" id="salary-range" name="salary-range">
            </div>
            <div class="mb-3">
                <label for="start-date" class="form-label text-capitalize">start date</label>
                <input type="date" class="form-control shadow-none" id="start-date" name="start-date">
            </div>
            <div class="mb-3">
                <label for="role-requirements" class="form-label text-capitalize">role requirements</label>
                <textarea class="form-control shadow-none" id="role-requirements" name="role-requirements" style="height: 100px;"></textarea>
            </div>
            <div class="mb-3">
                <label for="job-description" class="form-label text-capitalize">job description</label>
                <textarea class="form-control shadow-none" id="job-description" name="job-description" style="height: 100px;"></textarea>
            </div>
            <button type="submit" class="btn btn-success px-4 py-2">Save</button>
        </form>
    </div>
</div>