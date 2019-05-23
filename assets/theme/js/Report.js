var customer_ID;
var date_from;
var date_to;
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
        $(document).on('click', '#btnSearch', function () {
          date_from = $('#txtStartDate').val();
          date_to = $('#txtEndDate').val();
          customer_ID = $('#txtCustomerID').val();
	        saleReportTable.ajax.reload();
	    });
        var saleReportTable = $("#saleReportList").DataTable({
            "ajax": {
              "url": base_url+'get-sale-report',
              "type": "POST",
              "data": {
                  "customer_ID": $('#txtCustomerID').val(),
                  "date_from": $('#txtStartDate').val(),
                  "date_to": $('#txtEndDate').val()
              }
            },
            "bPaginate":true,
            "bProcessing": true,
            "pageLength": 10,
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
            ],
            "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            totalAmount = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            pageTotalAmount = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            totalDiscount = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            pageTotalDiscount = api
                .column( 6, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            total = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            pageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
           
            pageTotalPaid = api
                .column( 9, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            totalPaid = api
                .column( 9 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
             totalBalance = api
                .column( 10 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 ); 
            pageTotalBalance = api
                .column( 10, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            $( api.column( 5 ).footer() ).html(
                '₹'+pageTotalAmount +' ( ₹'+ totalAmount +' total)'
            );
            $( api.column( 6 ).footer() ).html(
                '₹'+pageTotalDiscount +' ( ₹'+ totalDiscount +' total)'
            );
            $( api.column( 7 ).footer() ).html(
                '₹'+pageTotal +' ( ₹'+ total +' total)'
            );
            $( api.column( 9 ).footer() ).html(
                '₹'+pageTotalPaid +' ( ₹'+ totalPaid +' total)'
            );
            $( api.column( 10 ).footer() ).html(
                '₹'+pageTotalBalance +' ( ₹'+ totalBalance +' total)'
            );
        }             
        });
	    

});
  