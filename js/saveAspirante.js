$(function(){
    $(document).on("click",".btnPrint",function(){
        swal({
            title: "Deseas Imprimilo?",
            text: "Deseas imprimir la solicitud",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, Imprimirlo!",
            closeOnConfirm: false
          },
          function(){
            swal("Impreso!", "Tu documento fue impreso.", "success");
          });
    });
})