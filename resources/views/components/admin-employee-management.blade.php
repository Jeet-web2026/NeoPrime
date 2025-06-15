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
                        <option value="Manager">Manager</option>
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
                    <label for="employee-designation" class="form-label text-capitalize">designation</label>
                    <select class="form-select shadow-none text-capitalize employee-designation" name="employee-designation">
                        <option value="">Choose Designation</option>
                        @foreach($workingDesignation as $designation)
                        <option value="{{ $designation->designation }}">{{ $designation->designation }}</option>
                        @endforeach
                    </select>
                </div>
                <h5 class="text-capitalize mt-2">personal details</h5>
                <div class="col-md-12 my-2">
                    <label for="employee-name" class="form-label text-capitalize">name</label>
                    <input type="text" class="form-control shadow-none" name="employee-name">
                </div>
                <div class="col-md-6 pe-1">
                    <label for="employee-contact-number" class="form-label text-capitalize">contact number</label>
                    <input type="number" class="form-control shadow-none" name="employee-contact-number">
                </div>
                <div class="col-md-6 ps-1">
                    <label for="employee-email-id" class="form-label text-capitalize">email id</label>
                    <input type="email" class="form-control shadow-none" name="employee-email-id">
                </div>
                <div class="col-md-6 pe-1 mt-2">
                    <label for="employee-age" class="form-label text-capitalize">age</label>
                    <input type="text" class="form-control shadow-none" name="employee-age">
                </div>
                <div class="col-md-6 ps-1 mt-2">
                    <label for="employee-country" class="form-label text-capitalize">contry</label>
                    <select class="form-select shadow-none text-capitalize employee-country" name="employee-country">      
                    </select>
                </div>
                <div class="col-md-12 my-2">
                    <label for="employee-city" class="form-label text-capitalize">city</label>
                    <select class="form-select shadow-none text-capitalize employee-city" name="employee-city">                        
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success px-4 py-2">Save</button>
        </form>
    </div>
</div>