<ol class="breadcrumb">
    <li class=""><a href="<?php echo base_url();?>req/Home">Home</a></li>
<!--    <li class="active"><a href="">Dashboard</a></li>-->
</ol>
<title>Home</title>
<div class="container-fluid">
    <div class="col-xs-12">
        <div class="panel panel-midnightblue" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
            <div class="panel-heading">
                <span class="ti ti-menu-alt "></span> &nbsp; เมนู
            </div>
            <div class="panel-body" style="display: block;">
                <table class="table table-striped m-n">
                     <div class="row">
                        <div class="col-sm-6">
                            <a href="<?php echo base_url();?>req/Borrow_equipment">
                                <div class="info-tile " style="color:green visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <span class="tile-icon" style="margin-bottom:10px"><i class="ti ti-receipt"></i></span>
                                    <div class="tile-body" style="font-size:25px"><span>ขอยืมอุปกรณ์</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo base_url();?>req/Return_equipment">
                                <div class="info-tile" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <span class="tile-icon" style="margin-bottom:10px"><i class="ti ti-share-alt"></i></span>
                                    <div class="tile-body" style="font-size:25px"><span>ขอคืนอุปกรณ์</span></div>
                                    <div class="tile-footer" style="color : red"><span>ปิดปรับปรุงชั่วคราว</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php echo base_url();?>req/Equipment">
                                <div class="info-tile " style="color:green visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <span class="tile-icon" style="margin-bottom:10px"><i class="ti ti-package"></i></span>
                                    <div class="tile-body" style="font-size:25px"><span>จัดการอุปกรณ์</span></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo base_url();?>req/Payment">
                                <div class="info-tile" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <span class="tile-icon" style="margin-bottom:10px"><i class="fa fa-money"></i></span>
                                    <div class="tile-body" style="font-size:25px"><span>ชำระเงิน</span></div>
                                </div>
                            </a>
                        </div>
                     <div class="col-sm-4">
                            <a href="<?php echo base_url();?>req/Repair">
                                <div class="info-tile" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <span class="tile-icon" style="margin-bottom:10px"><i class="fa fa-wrench"></i></span>
                                    <div class="tile-body" style="font-size:25px"><span>แจ้งซ่อม</span></div>
                                    <div class="tile-footer" style="color : red"><span>ปิดปรับปรุงชั่วคราว</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
    
    <?php if($this->session->userdata('use_level') == 1 || $this->session->userdata('use_level') == 2){ ?>
    <div class="col-xs-12">
        <div class="panel panel-midnightblue" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
            <div class="panel-heading">
                <h2><i class="ti ti-settings">  การตั้งค่า</i></h2>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <a href="<?php echo base_url();?>req/User">
                        <div class="info-tile" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                            <span class="tile-icon" style="margin-bottom:10px"><i class="ti ti-user"></i></span>
                            <div class="tile-body" style="font-size:25px"><span>เพิ่มเจ้าหน้าที่</span></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="disabled">
                        <div class="info-tile " style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                            <span class="tile-icon " style="margin-bottom:10px"><i class="ti ti-id-badge"></i></span>
                            <div class="tile-body" style="font-size:25px"><span>จำกัดสิทธิ์</span></div>
                            <div class="tile-footer" style="color : red"><span>ปิดปรับปรุงชั่วคราว</span></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
