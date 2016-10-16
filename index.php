 <!DOCTYPE html>

<html> <head> <title>Jhon Inventory | Adriasoft</title> <meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="estilos.css">
<style>
    body {font-family: Arial, Helvetica, sans-serif;
          background-color: #FFF8DC;
          }


    table { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; font-size: 12px; margin: 45px; width: 550px;

    text-align: center; border-collapse: collapse; }


    th { font-size: 13px; font-weight: normal; padding: 8px; background: #b9c9fe; border-top: 4px solid #aabcfe;

    border-bottom: 1px solid #fff; color: #039; }


    td { padding: 8px; background: #e8edff; border-bottom: 1px solid #fff; color: #669; border-top: 1px solid transparent; }


    tr:hover td { background: #d0dafd; color: #339; }


    .editar {color: blue; cursor:pointer;}


    #contenedorForm {margin-left: 45px; font-size:12px;}


    .boton {   color: black; padding: 5px; margin: 10px;

    background-color: #b9c9fe;
    font-weight: bold; }
</style>
<script type="text/javascript" src="functions.js"></script>

</head>

<body>
   <center><h1>Jhon Inventory</h1>
    <table>

        <caption>Contenido nutricional por cada 100 g de alimento.</caption>

        <tr> <th>Alimento</th> <th>Calorías (kCal)</th> <th>Grasas (g)</th>

                <th>Proteína (g)</th> <th>Carbohidratos (g)</th> <th>Opciones</th>

        </tr>

        <tr> <td>Arándano</td> <td>49</td> <td>0.2</td>

                <td>0.4</td> <td>12.7</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

        </tr>

        <tr> <td>Plátano</td> <td>90</td> <td>0.3</td>

                <td>1.0</td> <td>23.5</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

        </tr>

        <tr> <td>Cereza</td> <td>46</td> <td>0.4</td>

                <td>0.9</td> <td>10.9</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

        </tr>

        <tr> <td>Fresa</td> <td>37</td> <td>0.5</td>

                <td>0.8</td> <td>8.3</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

        </tr>

    </table>

<div id="contenedorForm">

</div>

<!----------------------JAVASCRIPT-------------------------------------->

<script>
   var editando=false;


function transformarEnEditable(nodo){

//El nodo recibido es SPAN

if (editando == false) {

    var nodoTd = nodo.parentNode; //Nodo TD

    var nodoTr = nodoTd.parentNode; //Nodo TR

    var nodoContenedorForm = document.getElementById('contenedorForm'); //Nodo DIV

    var nodosEnTr = nodoTr.getElementsByTagName('td');

    var alimento = nodosEnTr[0].textContent; var calorias = nodosEnTr[1].textContent;

    var grasas = nodosEnTr[2].textContent; var proteina = nodosEnTr[3].textContent;

    var carbohidratos = nodosEnTr[4].textContent; var opciones = nodosEnTr[5].textContent;

    var nuevoCodigoHtml = '<td><input type="text" name="alimento" id="alimento" value="'+alimento+'" size="10"></td>'+

                            '<td><input type="text" name="calorias" id="calorias" value="'+calorias+'" size="5"</td>'+

                            '<td><input type="text" name="grasas" id="grasas" value="'+grasas+'" size="5"</td>'+

                            '<td><input type="text" name="proteina" id="proteina" value="'+proteina+'" size="5"</td>'+

                            '<td><input type="text" name="carbohidratos" id="carbohidratos" value="'+carbohidratos+'" size="5"</td> <td>Editando...</td>';


    nodoTr.innerHTML = nuevoCodigoHtml;


    nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+

    '<form name = "formulario" action="http://aprenderaprogramar.com" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+

    '<input class="boton" type = "submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';

    editando = "true";
}

    else {alert ('Solo se puede editar una línea. Recargue la página para poder editar otra');

    }

}


function capturarEnvio(){

var nodoContenedorForm = document.getElementById('contenedorForm'); //Nodo DIV

    nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+

    '<form name = "formulario" action="pagina5.html" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+

    '<input type="hidden" name="alimento" value="'+document.querySelector('#alimento').value+'">'+

    '<input type="hidden" name="calorias" value="'+document.querySelector('#calorias').value+'">'+

    '<input type="hidden" name="grasas" value="'+document.querySelector('#grasas').value+'">'+

    '<input type="hidden" name="proteina" value="'+document.querySelector('#proteina').value+'">'+

    '<input type="hidden" name="carbohidratos" value="'+document.querySelector('#carbohidratos').value+'">'+

    '<input class="boton" type="submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';

    document.formulario.submit();

}


function anular(){

    window.location.reload();
}
</script></center>

</body>

</html>