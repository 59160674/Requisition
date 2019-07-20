		/* 	
		* confirm_delete_cds
		* @Description	แสดงหน้าต่างยืนยันการลบข้อมูล
		* @Input	string
		* @Output	แสดงหน้าต่างยืนยันการลบข้อมูล
		* @Author	Sita puchanee 59160451
		* @Create Date	2561-09-20
		* @Last Update	2561-10-13
		*/
function confirm_delete_cds(str){
	var cds_swal = swal({
			title: str,
			icon: "warning",
			buttons: {
				cancel: {
				text: "ยกเลิก",
				value: null,
				visible: true,
				className: "btn-inverse",
				closeModal: true,
			  },
			  confirm: {
				text: "ตกลง",
				value: true,
				visible: true,
				className: "btn-primary",
				closeModal: true
			  }
			},
			})
	return cds_swal;
}//end fn confirm_delete_cds

		/* 	
		* error_alert_cds
		* @Description	แสดงหน้าต่างแจ้งข้อผิดพลาด
		* @Input	string
		* @Output	แสดงหน้าต่างแจ้งข้อผิดพลาด
		* @Author	Sita puchanee 59160451
		* @Create Date	2561-09-20
		* @Last Update	2561-11-08
		*/
function error_alert_cds(str='',str2=''){
	var cds_swal = new PNotify({
													title: str,
													text: str2,
													type: 'error',
													icon: 'ti ti-close',
													animate_speed: 'fast',
													styling: 'fontawesome',
													delay: 3000
												});
				
	return cds_swal;
}//end fn error_alert_cds

		/* 	
		* success_alert_cds
		* @Description	แสดงหน้าต่างแจ้งกระทำการสำเร็จ
		* @Input	string
		* @Output	แสดงหน้าต่างแจ้งกระทำการสำเร็จ
		* @Author	Sita puchanee 59160451
		* @Create Date	2561-09-20
		* @Last Update	2561-11-08
		*/
function success_alert_cds(str='',str2=''){
	var cds_swal = new PNotify({
													title: str,
													text: str2,
													type: 'success',
													icon: 'ti ti-check',
													animate_speed: 'fast',
													styling: 'fontawesome',
													delay: 3000
												});
	return cds_swal;
}//end fn success_alert_cds