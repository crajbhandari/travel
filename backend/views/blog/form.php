<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Edit </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                        <li class="breadcrumb-item active">Add / Edit</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="#">
                        <div class="form-group">
                            <label>Title</label>
                            <input id="" name="post[]" type="text" class="form-control">
                        </div>
                       <div class="form-group">
                          <label>Author</label>
                          <input id="" name="post[]" type="text" class="form-control">
                       </div>
                       <div class="form-group">
                          <label>Visibility</label>
                          <select class="form-control">
                             <option disabled>Select</option>
                             <option>on</option>
                             <option>off</option>
                          </select>
                       </div>
                       <div class="form-group">
                          <label>Description</label>
                             <textarea id="elm1" name="area"></textarea>
                       </div>
                     <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="customFile">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
