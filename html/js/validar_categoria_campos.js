$(document).ready(function(){

    const expresiones = {
        
        Nombre_Categoria: /^[a-zA-Z\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        Detalle_Categoria: /^[a-zA-Z\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        
       
    };

    function ValidarVacios(txt){
        if(txt.length == 0) return true;
        else return false;
    }

    function MostrarMsgBox(titulo, descripcion, icono){
        Swal.fire({
            title: titulo,
            text: descripcion,
            icon: icono,
            background: '#B8B7C9',
            confirmButtonText: 'OK'
        });
    }

    function ValidarFechaActual(FNac){
        var f = new Date;
        console.log(f);

        var mes = (f.getMonth() + 1).toString();

        var dia = f.getDate().toString();
        dia = "0" + dia;

        var fechaActual= f.getFullYear().toString() + "-" + mes + "-" + dia;
        console.log(fechaActual);

        if(FNac < fechaActual) return true;
        else return false;
    }

  $(".btn-inicio").click(function(){

        var a = $("[vali=Nombre_Categoria]").val();

        if(ValidarVacios($("[vali=Nombre_Categoria]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        if(ValidarVacios($("[vali=Detalle_Categoria]").val())) {
            MostrarMsgBox('Espacios vacios', 'Revisa la informacion', 'error');
            return false;
        }

        

        
        
        var Nombre_Categoria= expresiones.Nombre_Categoria.test($("[vali=Nombre_Categoria]").val());
      //  var Detalle_Categoria= expresiones.Detalle_Categoria.test($("[vali=detCategoria]").val());

       

        if(!Nombre_Categoria) {
            MostrarMsgBox('Nombre de producto Invalido', 'No se permiten caracteres especiales mas que el guion y guion bajo', 'error');
            return false;
        }


     
    });  
});