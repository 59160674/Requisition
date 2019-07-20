<ol class="breadcrumb">
    <li class=""><a href="<?php echo base_url();?>req/Home">Home</a></li>
    <li class="active"><a href="">Borrow Equipment</a></li>
</ol>
<title>Borrow Equipment</title>

<script type="text/javascript">
    $(document).ready(function() {
        $(".syntex_select2").select2();
        $('.eq_id').select2();
        var running = 2;
        $('#add').click(function() {
            $('#last_form_row').last().before(
                '<tr class="firstformrow">																									' +
                '	<td class="num_table">																									' +
                '	</td>																													' +
                '	<td>                                                                                                                    ' +
                '		<select style="width:100%" class="eq_id" rownumber="' + running + '" name="eq_id[]" data-live-search="true" >       ' +
                '           <option value="0" disabled="" selected="">-- เลือกอุปกรณ์ --</option>                                              ' +
                '                <?php foreach($da_eq as $eq) { ?>                                                                          ' +
                '			<option value="<?php echo $eq->eq_id; ?>"><?php echo $eq->name; ?></option>                                     ' +
                '				 <?php } ?>                                                                                                 ' +
                '		</select>                                                                                                           ' +
                '	</td>                                                                                                                   ' +
                '	<td>                                                                                                                    ' +
                '		<input style="margin-left:115px" type="text" name="eq_price[]" id="eq_price" rownumber="' + running + '" class="eq_price">                    ' +
                '	</td>                                                                                                                   ' +
                '	<td>                                                                                                                    ' +
                '		<input style="margin-left:120px" type="text" rownumber="' + running + '" name="eq_pledge[]" id="eq_pledge" class="eq_pledge">                 ' +
                '	</td>                                                                                                                   ' +
                '	<td style="text-align:center"> 																							' +
                '		<a type="button" name="remove" rownumber="' + running + '" class="btn btn-danger btn_remove">X</a>                  ' +
                '	</td>                                                                                                                   ' +
                '</tr>																														'

            );
            $('td select').select2();
            running++;

            $(".num_table").each(function(index) {
                $(this).html(index + 1);
            });

            $(".eq_id").change(function() {
                var eq_id = $(this).val();
                var id = $(this).attr("rownumber");
                $.ajax({ //start ajax
                    type: "POST",
                    url: "<?php echo base_url();?>req/Borrow_equipment/get_eq_by_id?>",
                    data: {
                        'eq_id': eq_id
                    },
                    dataType: "json",
                    success: function(data) {
                        $('.eq_price[rownumber="' + id + '"]').val(data.eq_price);
                        $('.eq_pledge[rownumber="' + id + '"]').val(data.eq_pledge);
                        $('.eq_id[rownumber="' + id + '"]').val(data.eq_id);
                    }
                }); //end ajax
            });
        });

        $(document).on('click', '.btn_remove', function() {
            var id = $(this).attr("rownumber");
            var ord_total = $('.ord_price[rownumber="' + id + '"]').val();
            $(this).parent().parent().remove();
            ord_total -=
                $(".num_table").each(function(index) {
                    $(this).html(index + 1);
                });
        });
        $(".eq_id").change(function() {
            var eq_id = $(this).val();
            var id = $(this).attr("rownumber");
            $.ajax({ //start ajax
                type: "POST",
                url: "<?php echo base_url();?>req/Borrow_equipment/get_eq_by_id?>",
                data: {
                    'eq_id': eq_id
                },
                dataType: "json",
                success: function(data) {
                    $('.eq_price[rownumber="' + id + '"]').val(data.eq_price);
                    $('.eq_pledge[rownumber="' + id + '"]').val(data.eq_pledge);
                    $('.eq_id[rownumber="' + id + '"]').val(data.eq_id);
                }
            }); //end ajax
        });
    });

</script>
<div data-widget-group="group">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading panel_table_iserl">
                <i class="ti ti-receipt"></i>
                <font color="#FFFFFF">
                    <b>&nbsp;ขอยืมอุปกรณ์ </b>
                </font>
            </div>
            <div class="panel-body">
                <form class="grid-form" method="POST" action="<?php echo base_url();?>req/Borrow_equipment/add_bor" id="frm_add_form">
                    <fieldset>
                        <legend>
                            <font size="4">ข้อมูลผู้ยืม</font>
                        </legend>
                        <div data-row-span="12">
                            <div data-field-span="6">
                                <font size="2"><b>ชื่อ - นามสกุล</b></font>
                                <input type="text" name="bor_fullname" id="bor_fullname">
                            </div>
                            <div data-field-span="3">
                                <font size="2"><b>อายุ</b></font>
                                <input type="text" name="bor_age" id="bor_age">
                            </div>
                            <div data-field-span="3">
                                <font size="2"><b>ความสัมพันธ์กับผู้ป่วย</b></font>
                                <input type="text" name="bor_relation" id="bor_relation">
                            </div>
                        </div>
                        <div data-row-span="12">
                            <div data-field-span="3">
                                <font size="2"><b>เลขที่บัตรประจำตัวประชาชน</b></font>
                                <input type="text" name="bor_idennumber" id="bor_idennumber">
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>บ้านเลขที่</b></font>
                                <input type="text" name="bor_house_number" id="bor_house_number">
                            </div>
                            <div data-field-span="1">
                                <font size="2"><b>หมู่</b></font>
                                <input type="text" name="bor_village" id="bor_village">
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>ตำบล</b></font><br>
                                <select style="width: 190px;" name="bor_sub_district_id" id="bor_sub_district_id" class="syntex_select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกตำบล --</option>
                                    <?php foreach($da_di as $di) { ?>                                                                          
                			         <option value="<?php echo $di->id; ?>"><?php echo $di->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>อำเภอ</b></font>
                                <select style="width: 190px;" name="bor_district_id" id="bor_district_id" class="syntex_select2 select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกอำเภอ --</option>
                                    <?php foreach($da_am as $am) { ?>                                                                          
                			         <option value="<?php echo $am->id; ?>"><?php echo $am->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>จังหวัด</b></font>
                                <select style="width: 190px;" name="bor_province_id" id="bor_province_id" class="syntex_select2 select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกจังหวัด --</option>
                                    <?php foreach($da_po as $po) { ?>                                                                          
                			         <option value="<?php echo $po->id; ?>"><?php echo $po->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div data-row-span="12">
                            <div data-field-span="12">
                                <font size="2"><b>เบอร์ที่ติดต่อได้</b></font>
                                <input type="text" name="bor_phone" id="bor_phone">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <font size="4">ข้อมูลผู้ป่วย</font>
                        </legend>
                        <div data-row-span="12">
                            <div data-field-span="6">
                                <font size="2"><b>ชื่อ - นามสกุล</b></font>
                                <input type="text" name="pat_fullname" id="pat_fullname">
                            </div>
                            <div data-field-span="3">
                                <font size="2"><b>อายุ</b></font>
                                <input type="text" name="pat_age" id="pat_age">
                            </div>
                            <div data-field-span="3">
                                <font size="2"><b>โรค</b></font>
                                <input type="text" name="pat_sick" id="pat_sick">
                            </div>
                        </div>
                        <div data-row-span="12">
                            <div data-field-span="3">
                                <font size="2"><b>เลขที่บัตรประจำตัวประชาชน</b></font>
                                <input type="text" name="pat_idennumber" id="pat_idennumber">
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>บ้านเลขที่</b></font>
                                <input type="text" name="pat_house_number" id="pat_house_number">
                            </div>
                            <div data-field-span="1">
                                <font size="2"><b>หมู่</b></font>
                                <input type="text" name="pat_village" id="pat_village">
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>ตำบล</b></font><br>
                                <select style="width: 190px;" name="pat_sub_district_id" id="pat_sub_district_id" class="syntex_select2 select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกตำบล --</option>
                                    <?php foreach($da_di as $di) { ?>                                                                          
                			         <option value="<?php echo $di->id; ?>"><?php echo $di->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>อำเภอ</b></font>
                                <select style="width: 190px;" name="pat_district_id" id="pat_district_id" class="syntex_select2 select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกอำเภอ --</option>
                                    <?php foreach($da_am as $am) { ?>                                                                          
                			         <option value="<?php echo $am->id; ?>"><?php echo $am->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div data-field-span="2">
                                <font size="2"><b>จังหวัด</b></font>
                                <select style="width: 190px;" name="pat_province_id" id="pat_province_id" class="syntex_select2 select2" data-live-search="true" class="form-control">
                                    <option value="0" disabled="" selected="">-- เลือกจังหวัด --</option>
                                    <?php foreach($da_po as $po) { ?>                                                                          
                			         <option value="<?php echo $po->id; ?>"><?php echo $po->name_th; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <br>
                    </fieldset>
                    <br>
                    <div class="col-md-12">
                        <table class="table table-striped m-n" cellspacing="0" width="100%">
                            <thead>
                                <th align="center" width="5%">ลำดับ</th>
                                <th width="25%">ชื่ออุปกรณ์</th>
                                <th width="20%">ค่าบำรุงรักษา</th>
                                <th width="20%">ค่ามัดจำ</th>
                                <th width="10%">ดำเนินการ</th>
                            </thead>
                            <tbody>
                                <tr class="firstformrow">
                                    <td class="num_table">1
                                    </td>
                                    <td >
                                        <select style="width:100%" class="eq_id" rownumber="1" name="eq_id[]" data-live-search="true">   
                                           <option value="0" disabled="" selected="">-- เลือกอุปกรณ์ --</option>
                                                <?php foreach($da_eq as $eq) { ?>
                                            <option value="<?php echo $eq->eq_id; ?>"><?php echo $eq->type_code."-".$eq->name; ?></option>
                                                 <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input style="margin-left:115px" type="text" name="eq_price[]" id="eq_price" rownumber="1" class="eq_price">
                                    </td>
                                    <td>
                                        <input style="margin-left:120px" type="text" rownumber="1" name="eq_pledge[]" id="eq_pledge" class="eq_pledge">
                                    </td>
                                    <td style="text-align:center">
                                        <a type="button" name="remove" rownumber="1" class="btn btn-danger btn_remove">X</a>
                                    </td>
                                </tr>
                                <tr id="last_form_row">
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <td><button type="button" name="add" id="add" class="btn btn-success add_row">+</button></td>
                    </div>
                    <div class="pull-right">
                        <div>
                            <button class="btn btn-success" >บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
