$(document).ready(function(e){
  $(".btn").removeClass('disabled');
  //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
        	$('#txtStartDate').val(start.format('MMMM D, YYYY'));
        	$('#txtEndDate').val(start.format('MMMM D, YYYY'));
        	$('#lblStartDate').html(end.format('MMMM D, YYYY'));
        	$('#lblEndDate').html(end.format('MMMM D, YYYY'));
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );
        var saleReportTable = $("#saleReportList").DataTable({
	        	//  "processing": true,
		        // "serverSide": true,
		        // "ajax": {
		        //     "url":  base_url+'get-sale-report',
		        //     "dataType": "jsonp"
		        // }
		        "ajax": base_url+'get-sale-report',
		        "bPaginate":true,
				"bProcessing": true,
				"pageLength": 5,
				"columns": [
				{ mData: 'invoice_ID' } ,
				{ mData: 'store_Id' },
				{ mData: 'shop_ID' }
				]
	        	
		    });
        // $('#saleReportList').dataTable({});
        $(document).on('click', '#btnSearch', function () {
	        // $('#saleReportList').ajax.reload();
	        saleReportTable.ajax.reload();
	    });
	    

});

