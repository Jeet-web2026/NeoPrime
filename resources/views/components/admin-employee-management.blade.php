<div class="card border-0 shadow">
    <div class="card-body">
        <form id="employee-manage-form">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="employee-position" class="form-label text-capitalize">choose position</label>
                    <select class="form-select shadow-none text-capitalize" name="employee-position">
                        <option value="">Choose Position</option>
                        <option value="Intern">Intern</option>
                        <option value="Associate">Associate</option>
                        <option value="Beginer">Beginer</option>
                        <option value="Mid-level">Mid-level</option>
                        <option value="Senior">Senior</option>
                        <option value="Lead">Lead</option>
                    </select>
                </div>
                <div class="col-md-4 px-2">
                    <label for="employee-start-date" class="form-label text-capitalize">start date</label>
                    <input type="date" class="form-control shadow-none" name="employee-start-date">
                </div>
                <div class="col-md-4">
                    <label for="employee-end-date" class="form-label text-capitalize">end date</label>
                    <input type="date" class="form-control shadow-none" name="employee-end-date">
                </div>
                <div class="col-md-12 my-2">
                    <label for="employee-name" class="form-label text-capitalize">name</label>
                    <input type="text" class="form-control shadow-none" name="employee-name">
                </div>
                <div class="col-md-12">
                    <label for="employee-designation" class="form-label text-capitalize">designation</label>
                    <select class="form-select shadow-none text-capitalize employee-designation" name="employee-designation">
                        
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success px-4 py-2">Save</button>
        </form>
    </div>
</div>