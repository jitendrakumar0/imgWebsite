<?php 

	$root = base_url();

?>

</section>

</section>
<script type="text/javascript">
$(document).ready(function() {
    $('#allUser').DataTable();
});

$(document).ready(function() {
    $('#allUser1').DataTable();
});
</script>
<script src="<?php echo $root; ?>web_root/admin_root/js/vendor.js"></script>

<script src="<?php echo $root; ?>web_root/admin_root/js/ui.js"></script>

<script src="<?php echo $root; ?>web_root/admin_root/js/app.js"></script>

<script src="<?php echo $root; ?>web_root/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo $root; ?>web_root/admin_root/js/bootstrap.min.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> 	 
 
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script> 	
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


 <script>

	function ValidateAlpha(evt)

    {

        var keyCode = (evt.which) ? evt.which : evt.keyCode

        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 10  && keyCode != 32)

         

        return false;

            return true;

    }

function isNumberKey(evt){  <!--Function to accept only numeric values-->

    //var e = evt || window.event;

	var charCode = (evt.which) ? evt.which : evt.keyCode

    if (charCode != 46 && charCode > 31 

	&& (charCode < 48 || charCode > 57))

        return false;

        return true;

	}

 function deleteMsg(){

	   $('#message-box').css("display","none");

 }

  $('#message-box').delay(3000).fadeOut(400);

   $("#payroll_loader").css("display", "none");  

</script> 

<script>

	function confirm_box(){

		var result = confirm("Want to Continue?");

		if (result) {

			return true;

		}

		else{

			return false;

		}

	}	

</script>

<script language="javascript">
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        $('#date').datepicker({
            minDate: today,
            changeMonth: true,
            changeYear: true
        });
    </script>
 </body>

</html>