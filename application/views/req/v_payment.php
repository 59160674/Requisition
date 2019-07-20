<ol class="breadcrumb">
    <li class=""><a href="<?php echo base_url();?>req/Home">Home</a></li>
    <li class="active"><a href="">Payment</a></li>
</ol>
<title>Payment</title>
<script>
    function payment(lent_id) {
        var lent_id = lent_id;
        $.skylo('start');
        $.skylo('set', 75);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>req/Payment/payment_status",
            data: {
                'lent_id': lent_id
            },
            success: function(data) {
                $.skylo('end');
                setTimeout(function() {
                    location.reload();
                }, 500);
            }
        });
    }

</script>
<div data-widget-group="group">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading panel_table_iserl">
                <i class="fa fa-money"></i>
                <font color="#FFFFFF">
                    <b>&nbsp; ชำระเงิน </b>
                </font>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading panel_table_iserl">
                            <h2>ตารางข้อมูลการชำระเงิน</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body no-padding">
                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center" width="15%">เลขที่ใบยืม</th>
                                        <th style="text-align:center" width="20%">ชื่อผู้ยืม</th>
                                        <th style="text-align:center" width="15%">ค่าใช้จ่ายทั้งหมด</th>
                                        <th style="text-align:center" width="15%">สถานะ</th>
                                        <th style="text-align:center" width="20%">ดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($da_pm as $pm){ ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align:center">
                                                <?php echo $pm->lent_id; ?>
                                            </td>
                                            <td>
                                                <?php echo $pm->bor_fullname; ?>
                                            </td>
                                            <td style="text-align:center">
                                                <?php echo $pm->lent_sum; ?>
                                            </td>
                                            <?php if($pm->pay_status == "ชำระแล้ว"){?>
                                            <td style="text-align:center">
                                                <font color="#00ff00">
                                                    <?php echo $pm->pay_status; ?>
                                                </font>
                                            </td>
                                            <?php }elseif($pm->pay_status == "ค้างชำระ"){ ?>
                                            <td style="text-align:center">
                                                <font color="#ff6600">
                                                    <?php echo $pm->pay_status; ?>
                                                </font>
                                            </td>
                                            <?php }elseif($pm->pay_status == "ยกเลิกค่าใช้จ่าย"){ ?>
                                            <td style="text-align:center">
                                                <font color="#808080">
                                                    <?php echo $pm->pay_status; ?>
                                                </font>
                                            </td>
                                            <?php } ?>
                                            <td>
                                                <center>
                                                    <a class="btn btn-success" title="ชำระเงิน" onclick="payment(<?php echo $pm->lent_id; ?>)">ชำระเงิน</a>&nbsp;
                                                    <a class="btn btn-default ti ti-printer" title="พิมพ์ใบเสร็จ" 
                                                       href="<?php echo base_url('req/Payment/print_bill/'.$pm->lent_id);?>"></a>
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
