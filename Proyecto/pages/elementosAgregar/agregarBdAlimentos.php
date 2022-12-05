<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agregar actividad</title>

<link href="estilos.css" rel="stylesheet" type="text/css" />

<script language="javascript" src="/uadyDAW/Proyecto/app/agregarBaseDatos.js"></script>
<script language="javascript">
</script>
</head>

<body">
<h1 class="titulo">Agregar un alimento a la base de datos</h1>
<form id="formulario" name="formulario" method="post" action="">
  <table>
    <tr>
      <td>Nombre del alimento</td>
      <td><input type="text" name="nombre" id="nombre" /></td>
    </tr>
    <tr>
      <td>Cantidad del alimento a usar como referencia:</td>
      <td><input type="text" name="cantidad" id="cantidad" /></td>
      <td>
        <select name="unidadAlimento" id="unidadAlimento">
                    <option value="g">g</option>
                    <option value="Kg">Kg</option>
                    <option value="L">L</option>
                    <option value="mL">mL</option>

        </select>
      </td>
    </tr>
    <tr>
      <td>Cantidad de calorias que aporta esta cantidad</td>
      <td><input type="text" name="calorias" id="calorias" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="button" name="agregar" id="agregar" value="Agregar" />
      <input type="button" name="cerrar" id="cerrar" value="Cerrar" /></td>
    </tr>
  </table>
</form>
</body>
</html>