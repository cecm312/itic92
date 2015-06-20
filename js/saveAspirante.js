$(function(){
    $(document).on("click",".btnPrint",function(){
        swal({
            title: "Deseas Imprimilo?",
            text: "Deseas imprimir la solicitud",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, Imprimirlo!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
          },
          function(){
                openWindows("printAspirant.php",data);
                swal("Impreso!", "Tu documento fue impreso.", "success");
                
          });
    });
})

var openWindows=function(url,params){
    var get="";
    $.each(params,function(index,value){
        get+=index+"="+value+"&";
    });
    window.open(url+"?"+get, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes");
}