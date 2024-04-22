<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData(action) {
        $(document).ready(function() {
            var data = {
                action: action,
                id: $("#id").val(),
                nombre: $("#nombre").val(),
                puesto: $("#puesto").val(),
                edad: $("#edad").val(),
                telefono: $("#telefono").val(),
            };

            $.ajax({
                url: 'funcion.php',
                type: 'POST',
                data: data,
                success: function(response) {
                    alert(response);
                    if(response == "Update Successfully"){
                        
                        console.log("La edición fue exitosa");
                    } else if(response == "Delete Successfully"){
                        
                        console.log("La eliminación fue exitosa");
                        $("#" + action).css("display", "none");
                    }
                }
            });
        });
    }
</script>