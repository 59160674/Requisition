<style>
    html,
    body {
        height: 842px;
        width: 595px;
        margin-left: auto;
        margin-right: auto;
    }

    table {
        border-collapse: collapse;
        margin-left: -50px;
        margin-right: auto;
    }

    .phead {
        font-size: 34.0pt;
        font-family: "Angsana New", serif;
        text-align: center;
        font-weight: bold;
    }


    .center {
        text-align: center;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }


    .b-top {
        border-top: 1px solid;
    }

    .b-right {
        border-right: 1px solid;
    }

    .b-left {
        border-left: 1px solid;
    }

    .margin-left {
        margin-left: 5.0in;
        text-indent: .5in;
    }

    td {
        /*            border: 1px solid;*/
        font-size: 16.0pt;
        font-family: "Angsana New", serif;
        padding-bottom: -1em;
    }

    span {
        font-size: 16.0pt;
        font-family: "Angsana New", serif;
        font-weight: bold;
    }

    u {
        padding-bottom: -10px;
        border-bottom: 1px dotted #000;
        text-decoration: none;
    }

    .b-bottom {
        border-bottom: 1px solid;
    }

    .b_bottom_dotted {
        padding-bottom: -10px;
        border-bottom: 1px dotted #000;
        text-decoration: none;
    }

    table.fixed {
        table-layout: fixed;
    }

    table.fixed td {
        overflow: hidden;
    }

</style>
<script type="text/javascript">
            window.onload = function() {
                window.print();
            }

</script>

<body>
    <?php
        foreach($da_pm_id as $pm){
            $lent_id = $pm->lent_id;
            $bor_fullname = $pm->bor_fullname;
            $lent_sum = $pm->lent_sum;
            $pay_status = $pm->pay_status;
            $pat_fullname = $pm->pat_fullname;
            $lent_date = $pm->lent_date;
            $pay_status = $pm->pay_status;
            $lent_sum_pledge = $pm->lent_sum_pledge; 
            $lent_sum_price = $pm->lent_sum_price; 
            $lent_sum = $pm->lent_sum; 
        }
        $name = $this->session->userdata('use_fullname');
    ?>
        <br>
        <p class="center">
            <span class="phead">ใบยืมอุปกรณ์</span>
        </p>

        <p style="margin-left: 5.5in">
            <span>
            <table class="fixed">
                <col width="120px"/>
                <col width="300px" />
                <tr>
                    <td style="padding-left:0em" >
                        <b>
                        เลขที่
                        </b>
                    </td>
                    <td style="text-align:center" class="b_bottom_dotted">
                        <?php
                        echo $lent_id;
                        ?>
                    </td>
                    
                </tr>
            
            </table>
    </span>
        </p>

        <p style="margin-left:5in;">
            <span>
            <table class="fixed">
                <col width="86px"/>
                <col width="200px" />
                <tr>
                    <td style="padding-left:0em" >
                        <b>
                        วันที่ยืม
                        </b>
                    </td>
                    <td style="text-align:center" class="b_bottom_dotted">
                        <?php
                            echo abbreDate2(substr($lent_date,0,10));
                        ?>
                    </td>
                    
                </tr>
            
            </table>
            <br>
   
    </span>
        </p>

        <p><span>
    

    <table class="fixed">
        <col width="35px"  />
        <col width="320px" />
        <col width="85px" />
        <col width="140px"/>
        <tr>
        <td style="padding-left:50px"><b>ชื่อผู้ยืม</b></td>
        <td style="padding-left:1em" class="b_bottom_dotted">
            <b>
                <?php echo $bor_fullname;?>
            </b>
        </td>
        </tr>
        <tr>
        <td style="padding-left:50px;" ><b>ชื่อผู้ป่วย</b></td>
        <td style="padding-left:1em"  class="b_bottom_dotted">
            <b>
                <?php
                echo $pat_fullname;
                
                ?>
            </b>
        </td>
        </tr><tr>
        <td style="padding-left:50px;" ><b>สถานะ</b></td>
        <td style="padding-left:1em"  class="b_bottom_dotted">
            <b>
                <?php
                echo $pay_status;
                
                ?>
            </b>
        </td>
        </tr>
    </table>
    <?php
        
        
    ?>
    </span>
        </p>


        <br>
        <table width="700">
            <thead>
                <tr height="50">

                    <th width="60" class="b-right b-top b-bottom b-left">
                        <span>ลำดับ</span>
                    </th>
                    <th width="400" class="b-right b-top b-bottom ">
                        <span>อุปกรณ์</span>
                    </th>
                    <th class="b-right b-top b-bottom">
                        <span>ค่าบำรุงรักษา</span>
                    </th>
                    <th width="100" class="b-top b-bottom b-right">
                        <span>ค่ามัดจำ</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php  	$index = 0;
        
        foreach($da_table as $tb ) 
        {	
         $index++;		 
        ?>

                <tr>
                    <td class="center b-right  b-left">
                        <?php echo $index; ?>
                    </td>
                    <td style="padding-left:1.5em" class="b-right ">
                        <?php echo $tb->type_code."-".$tb->eq_code." ".$tb->eq_name; ?>
                    </td>
                    <td style="text-align:center" class="b-right ">
                        <?php echo $tb->eq_price; ?>
                    </td>
                    <td style="text-align:center" class="b-right ">
                        <?php echo $tb->eq_pledge; ?>
                    </td>
                    <?php
        }
        for($i=$index+1;$i<=15;$i++)
       {
         ?>

                        <?php
       }
        ?>

                            <tr>
                                <td class="b-top">
                                </td>
                                <td class="b-right pad_bot b-top" style="text-align:right">
                                    <b>รวม &nbsp; </b>
                                </td>
                                <td style="text-align:center" class="b-right b-bottom b-top ">
                                    <?php echo $lent_sum_price; ?>
                                </td>
                                <td style="text-align:center" class="b-right b-bottom b-top ">
                                    <?php echo $lent_sum_pledge; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>

                                </td>
                                <td style="text-align:center">
                                    <b>ค่าใช้จ่ายทั้งหมด &nbsp; </b>
                                </td>
                                <td style="text-align:center" class="b_bottom_dotted">
                                    <?php echo $lent_sum; ?>
                                </td>
                            </tr>
            </tbody>
        </table>
        <br><br><br><br><br>
        <table width="110%">
            <thead>
                <tr>
                    <th width="20%"><b>ผู้รับเงิน &nbsp; </b></th>
                    <th width="25%" class="b_bottom_dotted"></th>
                    <th width="15%"></th>
                    <th width="15%"><b>ผู้จ่ายเงิน &nbsp; </b></th>
                    <th width="25%" class="b_bottom_dotted"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td style="text-align:center">
                        <?php echo $name; ?> </td>
                    <td></td>
                    <td></td>
                    <td style="text-align:center">
                        <?php echo $bor_fullname; ?>
                    </td>
                </tr>
            </tbody>
        </table>

</body>
