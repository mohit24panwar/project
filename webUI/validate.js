<script type="text/javascript">            
function Validate()
     {
		if(document.getElementById("DocumentType").value == "")
   		{
   		 alert("Please select a Document Type"); // prompt user
      		document.getElementById("DocumentType").focus(); //set focus back to control
      		return false;
   		}
     }
</script>
