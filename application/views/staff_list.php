<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class=" col-sm-12 col-md-12 col-lg-12">
            <div class='text-center marTop'>
                <div class="card card-info">
                    <?php if (isset($_SESSION["delete_staff"])): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?php echo $_SESSION["delete_staff"]; ?>
                    </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION["select_staff"])): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?php echo $_SESSION["select_staff"]; ?>
                    </div>
                    <?php endif ?>
                    <div class="card-header">
                        <h3 class="card-title text-left">Staff List</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Full Name</th>
                                        <th>Email/Mobile</th>
                                        <th>DOB</th>
                                        <th>Designation</th>
                                        <th>College Name</th>
                                        <th>Total Experience</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form name='selectForm' action='' method='post'>
                                        <?php $count = 1; foreach( $STAFF as $value ){ ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $value->first_name.' '.$value->last_name; ?></td>
                                            <td><?php echo $value->email_id.' / '.$value->phone_no; ?></td>
                                            <td><?php echo $value->dob; ?></td>
                                            <td><?php echo $value->designation; ?></td>
                                            <td><?php echo $value->exp_college; ?></td>
                                            <td><?php echo $value->doe.' Year'; ?></td>
                                            <td><?php if($value->staff_status == 0){ ?><span  class='btn btn-sm btn-info'>Applied</span><?php }else{ ?><span class='btn btn-sm btn-success'>Selected</span><?php } ?></td>
                                            <td><input type='hidden' name='personal_id[]' id='personal_id' value='<?php echo $value->personal_id; ?>' id='select_status'
                                                    class='form-control check-ctrl' required/>
                                                <input type='checkbox' name='staff_status[]' value='1' class='form-control check-ctrl' required/> 
                                                    <button class='btn btn-sm btn-info' id='sendStatus' name='select_status'><i class='fa fa-eye'></i></button></td>
                                        </tr>
                                        <?php } ?>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 card-footer ">
                        <?php  if($_SESSION['roll_type_id'] == '0' && $_SESSION['username'] == 'developer'){  ?>
                        <div class="form-inline col-lg-1 float-right">
                            <button type="submit" class="btn btn-sm btn-primary" name="staff_status">Submit</button>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
$("#selectForm").click(function (){
             var personl_id = $("#personl_id").val();
             var status = $("#select_status[type='checkbox']").val();
             alert(personl_id+' '+status);
            if (status == 1) {
                $.ajax({
                    type: "POST",
                    url: "Staff_list/getSelect",
                    data: {
                        "personl_id": personl_id, 'staff_status': status
                    },
                    success: function(data) {
                        console.log(data);
                        
                    }
                });
            } else {
                $("#error").text("Database error.."); /*css({ "background-image" "none" }*/
            }
        });
</script>