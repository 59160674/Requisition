<script type="text/javascript">
    $(document).ready(function () {
        $(".syntex_select2").select2();
    });

    function insert_eq() {
        var check_frm = validate_form_element("frm_add_form");
        if (check_frm == true) { //start if
            var eq_code = ("00" + $("#eq_code").val()).slice(-3);
            var eq_name = $("#eq_name").val();
            var eq_type = $("#eq_type :selected").val();
            var eq_unit = $("#eq_unit").val();
            var eq_price = $("#eq_price").val();
            var eq_pledge = $("#eq_pledge").val();
            $('#modal_add_eq').modal('toggle');
            $.skylo('start');
            $.skylo('set', 75);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>req/Equipment/add_eq",
                data: {
                    'eq_code': eq_code,
                    'eq_name': eq_name,
                    'eq_type': eq_type,
                    'eq_unit': eq_unit,
                    'eq_price': eq_price,
                    'eq_pledge': eq_pledge
                },
                success: function (data) {
                    console.log(data);
                    alert(data);
                    if (data == "false") { //start if
                        error_alert_cds('ทำรายการไม่สำเร็จ!! ', 'ข้อมูลอุปกรณ์มีในระบบแล้ว!');
                        $.skylo('set', 0);
                    } else {
                        success_alert_cds('ทำการเพิ่มข้อมูลสำเร็จ!');
                        $.skylo('end');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } //end if
                }
            });
        }
    }

    function delete_eq(id) {
        var eq_id = id;
        bootbox.confirm({
            message: "<h2><B>คุณต้องการลบข้อมูลนี้หรือไม่  ?</B></h2>",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> ยกเลิก',
                    className: 'btn-inverse'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> ยืนยัน',
                    className: 'btn-primary'
                }
            },
            callback: function (result) {
                if (result) {
                    $.skylo('start');
                    $.skylo('set', 75);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>req/Equipment/eq_delete",
                        data: {
                            'eq_id': eq_id
                        },
                        success: function (data) {
                            $.skylo('end');
                            setTimeout(function () {
                                location.reload();
                            }, 500);

                            new PNotify({
                                title: 'การลบข้อมูล',
                                text: 'คุณลบข้อมูลนี้สำเร็จ !!',
                                type: 'success',
                                icon: 'ti ti-check',
                                animate_speed: 'fast',
                                styling: 'fontawesome',
                                delay: 1000
                            });
                        }
                    });
                }
            }
        });
    }

    function eq_edit(eq_id) {
        var eq_id = eq_id;
        $.ajax({ //start ajax
            type: "POST",
            url: "<?php echo base_url();?>req/Equipment/get_eq_by_id",
            data: {
                'eq_id': eq_id
            },
            dataType: "json",
            success: function (data) {
                $("#eq_id_edit").val(data.eq_id);
                $("#eq_code_edit").val(data.eq_code);
                $("#eq_name_edit").val(data.eq_name);
                $("#eq_type_edit").val(data.eq_type_id).change();
                $("#eq_unit_edit").val(data.eq_unit);
                $("#eq_price_edit").val(data.eq_price);
                $("#eq_pledge_edit").val(data.eq_pledge);
            }
        }); //end ajax
    } //End fn

    function update_eq() {
        var check_frm = validate_form_element("frm_edit_form");
        if (check_frm == true) { //start if
            var eq_id_edit = $("#eq_id_edit").val();
            var eq_code_edit = ("00" + $("#eq_code_edit").val()).slice(-3);
            var eq_name_edit = $("#eq_name_edit").val();
            var eq_type_edit = $("#eq_type_edit :selected").val();
            var eq_unit_edit = $("#eq_unit_edit").val();
            var eq_price_edit = $("#eq_price_edit").val();
            var eq_pledge_edit = $("#eq_pledge_edit").val();
            $('#edit_eq').modal('toggle');
            $.skylo('start');
            $.skylo('set', 75);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>req/Equipment/eq_update",
                data: {
                    'eq_id_edit': eq_id_edit,
                    'eq_code_edit': eq_code_edit,
                    'eq_id_edit': eq_id_edit,
                    'eq_name_edit': eq_name_edit,
                    'eq_type_edit': eq_type_edit,
                    'eq_unit_edit': eq_unit_edit,
                    'eq_price_edit': eq_price_edit,
                    'eq_pledge_edit': eq_pledge_edit
                },
                success: function (data) {
                    console.log(data);
                    if (data == '1') { //start if
                        error_alert_cds('ทำรายการไม่สำเร็จ!! ', 'ข้อมูลอุปกรณ์มีในระบบแล้ว!');
                        $.skylo('set', 0);
                    } else {
                        success_alert_cds('ทำการแก้ไขข้อมูลสำเร็จ!');
                        $.skylo('end');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } //end if
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                }
            });
        }
    } //end fn
</script>
<ol class="breadcrumb">
    <li class=""><a href="<?php echo base_url();?>req/Home">Home</a></li>
    <li class="active"><a href="">Equipment</a></li>
</ol>
<title>Equipment</title>

<div data-widget-group="group">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading panel_table_iserl">
                <i class="ti ti-package"></i>
                <font color="#FFFFFF">
                    <b>&nbsp; จัดการอุปกรณ์ </b>
                </font>
            </div>
            <div class="panel-body">
                <div class="col-md-2"></div>
                <div class="col-md-12">
                    <div class="col-md-4" style="margin-bottom: 10px;">
                        <a class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal_add_eq">
                            <i class="ti ti-plus" style="color:white"></i> เพิ่มอุปกรณ์
                        </a>
                    </div>
                </div>
                <br><br>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel_table_iserl">
                            <h2>ตารางข้อมูลอุปกรณ์</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center" align="center" width="5%">ลำดับ</th>
                                        <th style="text-align:center" width="15%">รหัสอุปกรณ์</th>
                                        <th style="text-align:center">ชื่ออุปกรณ์</th>
                                        <th style="text-align:center" width="15%">ประเภทอุปกรณ์</th>
                                        <th style="text-align:center" width="10%">ค่าบำรุงรักษา</th>
                                        <th style="text-align:center" width="10%">ค่ามัดจำ</th>
                                        <th style="text-align:center" width="15%">สถานะ</th>
                                        <th style="text-align:center" width="10%">ดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 0; 
                                        foreach($da_eq as $eq){ $index++; ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align:center">
                                            <?php echo $index ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php echo $eq->type_code."-".$eq->eq_code; ?>
                                        </td>
                                        <td>
                                            <?php echo $eq->eq_name; ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php echo $eq->eq_type; ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php echo $eq->eq_price; ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php echo $eq->eq_pledge; ?>
                                        </td>
                                        <?php if($eq->status_name == "พร้อมใช้งาน"){?>
                                        <td style="text-align:center">
                                            <font color="#2ECC40">
                                                <?php echo $eq->status_name; ?>
                                            </font>
                                        </td>
                                        <?php }elseif($eq->status_name == "ถูกยืม"){ ?>
                                        <td style="text-align:center">
                                            <font color="#FF851B">
                                                <?php echo $eq->status_name; ?>
                                            </font>
                                        </td>
                                        <?php }else{ ?>
                                        <td style="text-align:center">
                                            <font color="#FF4136">
                                                <?php echo $eq->status_name; ?>
                                            </font>
                                        </td>
                                        <?php } ?>
                                        <td>
                                            <center>
                                                <a class="btn btn-warning" title="แก้ไขอุปกรณ์" data-toggle="modal"
                                                    data-target="#edit_eq" onclick="eq_edit(<?php echo $eq->eq_id; ?>)">
                                                    <i class="ti ti-pencil"></i>
                                                </a>&nbsp;
                                                <a class="btn btn-danger" title="ลบอุปกรณ์" data-toggle="modal"
                                                    data-target="#delete_eq"
                                                    onclick="delete_eq(<?php echo $eq->eq_id; ?>)">
                                                    <i class="ti ti-close"></i>
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php  }  ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_add_eq" name="modal_add_eq" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title" id="modal-title">เพิ่มอุปกรณ์</div>
            </div>
            <div class="modal-body">
                <form id="frm_add_form" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">รหัสอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="รหัสอุปกรณ์" id="eq_code"
                                name="eq_code" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ชื่ออุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ชื่ออุปกรณ์" id="eq_name"
                                name="eq_name" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">หน่วยอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="หน่วยอุปกรณ์" id="eq_unit"
                                name="eq_unit" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ค่าบำรุงรักษา <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ค่าบำรุงรักษาอุปกรณ์" id="eq_price"
                                name="eq_price" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ค่ามัดจำ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ค่ามัดจำ" id="eq_pledge"
                                name="eq_pledge" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ประเภทอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <select class="form-control" placeholder="เลือกประเภท" id="eq_type">
                                <option value="">======เลือกประเภท======</option>
                                <?php 
                                    foreach($da_op as $key => $op)
                                    { 
                                    echo "<option value=".$op->type_id.">".$op->type_name."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-inverse btn pull-left" data-dismiss="modal">ยกเลิก</a>
                        <a onclick="insert_eq()" data-toggle="modal" class="btn btn-primary">บันทึก</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="edit_eq" name="edit_eq" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title" id="modal-title">แก้ไขอุปกรณ์</div>
            </div>
            <div class="modal-body">
                <form id="frm_edit_form" class="form-horizontal">
                    <input type="hidden" id="eq_id_edit">
                    <div class="form-group">
                        <input type="hidden" id="eq_id_edit" name="eq_id_edit" value="">
                        <label class="col-md-3 control-label">รหัสอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="รหัสอุปกรณ์" id="eq_code_edit"
                                name="eq_code_edit" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ชื่ออุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ชื่ออุปกรณ์" id="eq_name_edit"
                                name="eq_name_edit" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">หน่วยอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="หน่วยอุปกรณ์" id="eq_unit_edit"
                                name="eq_unit_edit" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ค่าบำรุงรักษา <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ค่าบำรุงรักษาอุปกรณ์"
                                id="eq_price_edit" name="eq_price_edit" validate>
                        </div>
                        <br><br>
                        <label class="col-md-3 control-label">ค่ามัดจำ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="ค่ามัดจำ" id="eq_pledge_edit"
                                name="eq_pledge_edit" validate>
                        </div>
                        <br><br>

                        <label class="col-md-3 control-label">ประเภทอุปกรณ์ <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <select class="form-control" placeholder="เลือกประเภท" id="eq_type_edit">
                                <option value="">======เลือกประเภท======</option>
                                <?php 
                                    foreach($da_op as $key => $op)
                                    { 
                                    echo "<option value=".$op->type_id.">".$op->type_name."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-inverse btn pull-left" data-dismiss="modal">ยกเลิก</a>
                        <a onclick="update_eq()" class=" btn btn-primary btn pull-right">บันทึก</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>