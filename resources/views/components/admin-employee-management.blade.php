<div class="card border-0 shadow">
    <div class="card-body">
        <form id="employee-manage-form">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12 status-employee-manage-form"></div>
                <div class="col-md-6">
                    <label for="employee-position" class="form-label text-capitalize">choose position</label>
                    <select class="form-select shadow-none text-capitalize" name="employee-position">
                        <option value="">Choose Position</option>
                        <option value="1">Intern</option>
                        <option value="2">Associate</option>
                        <option value="3">Beginer</option>
                        <option value="4">Mid-level</option>
                        <option value="5">Senior</option>
                        <option value="6">Lead</option>
                        <option value="7">Manager</option>
                    </select>
                </div>
                <div class="col-md-6 ps-2">
                    <label for="employee-start-date" class="form-label text-capitalize">start date</label>
                    <input type="date" class="form-control shadow-none" name="employee-start-date">
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
                    <input type="number" class="form-control shadow-none" name="employee-age">
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
                <h5 class="text-capitalize mt-2">professional details</h5>
                <div class="col-md-12 my-2">
                    <label for="employee-joining-date" class="form-label text-capitalize">joining date</label>
                    <input type="date" class="form-control shadow-none" name="employee-joining-date">
                </div>
                <div class="col-md-6 pe-1 mt-2">
                    <label for="employee-prevoius-employeer" class="form-label text-capitalize">prevoius employeer name</label>
                    <input type="text" class="form-control shadow-none" name="employee-prevoius-employeer">
                </div>
                <div class="col-md-6 ps-1 mt-2">
                    <label for="employee-last-withdrawn-salary" class="form-label text-capitalize">last withdrawn salary</label>
                    <input type="text" class="form-control shadow-none" name="employee-last-withdrawn-salary">
                </div>
                <div class="col-md-6 pe-1 mt-2">
                    <label for="employee-prevoius-designation" class="form-label text-capitalize">prevoius designation</label>
                    <input type="text" class="form-control shadow-none" name="employee-prevoius-designation">
                </div>
                <div class="col-md-6 ps-1 mt-2">
                    <label for="employee-last-location" class="form-label text-capitalize">location</label>
                    <input type="text" class="form-control shadow-none" name="employee-last-location">
                </div>
                <div class="col-md-12 mt-2">
                    <label for="employee-last-years-of-working" class="form-label text-capitalize">years of working</label>
                    <input type="text" class="form-control shadow-none" name="employee-last-years-of-working">
                </div>
                <div class="col-md-12 mt-2">
                    <label for="employee-profile" class="form-label text-capitalize">profile</label>
                    <input type="text" class="form-control shadow-none" name="employee-profile">
                </div>
            </div>
            <button type="submit" class="btn btn-success px-4 py-2">Save</button>
        </form>
    </div>
</div>