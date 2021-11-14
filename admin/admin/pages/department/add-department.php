<?php include 'header.php';?>
            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Department</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Add Department</h6>
                                <a href="department-list.html" class="ms-text-primary  ">Department List</a>
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Doctor Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Doctor Name"  required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Department Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Department Name"  required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label>Department Head</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="Enter Department Head Name"  required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Status</label>
                                            <ul class="ms-list d-flex">
                                                <li class="ms-list-item pl-0">
                                                    <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="statusExample" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Active </span>
                                                </li>
                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="statusExample" value="" checked="">
                                                    <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Inactive </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Reminder Modal -->
        <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Remind me about</label>
                                <textarea class="form-control" name="reminder"></textarea>
                            </div>
                            <div class="ms-form-group">
                                <span class="ms-option-name fs-14">Repeat Daily</span>
                                <label class="ms-switch float-right">
                                <input type="checkbox">
                                <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-form-group">
                                        <select class="form-control" name="reminder-time">
                                            <option value="">12:00 pm</option>
                                            <option value="">1:00 pm</option>
                                            <option value="">2:00 pm</option>
                                            <option value="">3:00 pm</option>
                                            <option value="">4:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Notes Modal -->
        <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="ms-form-group">
                                <label>Note Title</label>
                                <input type="text" class="form-control" name="note-title" value="">
                            </div>
                            <div class="ms-form-group">
                                <label>Note Description</label>
                                <textarea class="form-control" name="note-description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="../../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/perfect-scrollbar.js"> </script>
        <script src="../../assets/js/jquery-ui.min.js"> </script>
        <!-- Global Required Scripts End -->
        <!-- Page Specific Scripts Start -->
        <script src="../../assets/js/slick.min.js"> </script>
        <script src="../../assets/js/moment.js"> </script>
        <script src="../../assets/js/jquery.webticker.min.js"> </script>
        <!-- Page Specific Scripts Finish -->
        <!-- Mednalytics core JavaScript -->
        <script src="../../assets/js/framework.js"></script>
        <!-- Settings -->
        <script src="../../assets/js/settings.js"></script>
    </body>

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/department/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Mar 2020 11:49:00 GMT -->
</html>
