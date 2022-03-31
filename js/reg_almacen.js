//crea una nueva variable y recupera el valor recogido en form_reg_alm.php por id


function validar(){
    var des=document.getElementById("des_almacen").value;
    if(des.length==0||des==null){
        alert("[Error] el campo no puede estar vacio...");
        return false;
    }
    //puedo ponerle mas else if(){} y en ellos validar las demas cosas 
    //..
    //mw retorna un verdadero si ese if noo se cumple
    return true;

}