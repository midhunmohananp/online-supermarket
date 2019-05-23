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
            "ajax": base_url+'get-sale-report',
            "bPaginate":true,
            "bProcessing": true,
            "pageLength": 5,
            "columns": [
            { mData: 'first_name' } ,
            { mData: 'email' },
            { mData: 'phone' },
            { mData: 'invoice_ID' },
            { mData: 'date_created' },
            { mData: 'total_amount' },
            { mData: 'discount_amount' },
            { mData: 'net_amount' },
            { mData: 'status' },
            { mData: 'payed_amount' },
            { mData: 'balance_amount' },
            { mData: 'date_created' },
            { mData: 'invoice_ID',
              mRender: function (data, type, full) {
                    return '<a href="'+base_url+'/customer-edit/'+data+'"><button class="btn btn-sm btn-primary">Edit</button></a>';
                  }
            }
            ] 	        	
		    });
        // $('#saleReportList').dataTable({});
        $(document).on('click', '#btnSearch', function () {
	        // $('#saleReportList').ajax.reload();
	        saleReportTable.ajax.reload();
	    });
	    

});
  