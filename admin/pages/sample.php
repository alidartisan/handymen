<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Settings</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <input type="hidden" name="" class="hid" value="<?=$_GET['id']?>">

    <div class="row">
        <div class="col-xxl-3 col-lg-4 pd">
        </div>
        <!-- end col -->

        <div class="col-xxl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Setting</h5>
                    <form method="post" id="update_profile">
                        <div class="card border shadow-none mb-5">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                            01
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="card-title">General Info</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="gen-info-name-input">Full Name</label>
                                                <input type="text" class="form-control fullname"
                                                    id="gen-info-name-input" placeholder="Enter Name">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="gen-info-designation-input">Father
                                                    Name</label>
                                                <input type="text" class="form-control fname"
                                                    id="gen-info-designation-input" placeholder="Enter Designation">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="gen-info-description-input">Address</label>
                                        <textarea class="form-control address" placeholder="Enter Description"
                                            id="gen-info-description-input" rows="3"></textarea>
                                    </div>

                                    <div class="form-check mb-3" data-bs-toggle="collapse"
                                        data-bs-target="#collapseChangePassword" aria-expanded="false"
                                        aria-controls="collapseChangePassword">
                                        <input type="checkbox" class="form-check-input" id="gen-info-change-password">
                                        <label class="form-check-label" for="gen-info-change-password">Change
                                            passowrd?</label>
                                    </div>

                                    <div class="collapse" id="collapseChangePassword">
                                        <div class="card border shadow-none card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="current-password-input" class="form-label">Current
                                                            password</label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Enter Current password"
                                                            id="current-password-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="new-password-input" class="form-label">New
                                                            password</label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Enter New password" id="new-password-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="confirm-password-input" class="form-label">Confirm
                                                            password</label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Enter Confirm password"
                                                            id="confirm-password-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border shadow-none mb-5">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm">
                                                    <div
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        02
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="card-title">Contact Info</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="contact-info-email-input">E-mail :</label>
                                                <input type="email" class="form-control email" id="contact-info-email-input"
                                                    placeholder="Enter Email">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-md-0">
                                                        <label for="contact-info-website-input"
                                                            class="form-label">Website</label>
                                                        <input type="url" class="form-control"
                                                            placeholder="Enter website url"
                                                            id="contact-info-website-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-md-0">
                                                        <label for="contact-info-location-input"
                                                            class="form-label">Phone</label>
                                                        <input type="url" class="form-control phone"
                                                            placeholder="Enter Address"
                                                            id="contact-info-location-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->

                                    <div class="card border shadow-none">
                                        <div class="card-header d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm">
                                                    <div
                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                        03
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="card-title">Experience</h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label
                                                            for="workexperience-designation-input">Designation</label>
                                                        <input type="text" class="form-control"
                                                            id="workexperience-designation-input"
                                                            placeholder="Enter Designation title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="workexperience-companyname-input">Company
                                                            name</label>
                                                        <input type="text" class="form-control"
                                                            id="workexperience-companyname-input"
                                                            placeholder="Enter Company name">
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <label>Years</label>
                                                <input type="hidden" class="form-control flatpickr-input"
                                                    id="datepicker-range"><input class="form-control form-control input"
                                                    placeholder="" tabindex="0" type="text" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-sm">Submit</button>
                                    </div>
                    </form>
                    <!-- end form -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>