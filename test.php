<script src="js/jquery.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<link href="css/jquery.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>



<script>


$(document).ready(function() {
    $('#example').DataTable( {
	ajax: '2500.txt',
	scrollY: 300,
        dom: 'Bfrtip',
        buttons: [
            "extend":'excel',
	    "text":'Export to Excel',
	    "className":"btn btn-primary",
	    //"columns":":not(:last-child)",
        ]
    });
});


</script>

<table id="example"  style="width:100%">
<thead>
<tr> 
<th>ID</th> <th>First name</th> <th>Last name</th> <th>ZIP / Post code</th> 
</tr> 
</thead> 
</table>


