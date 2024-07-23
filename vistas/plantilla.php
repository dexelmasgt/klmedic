<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="vistas/img/plantilla/favicon.png" type="image/x-icon">
  <title>KL Shop by KreatifLab</title>

  <!--=========================
  PLUGINS DE CSS
  ==========================-->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Esto se lo agregamos -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
  <!-- DataTables -->  
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- FONT AWESOME NUEVO -->
  <script src="https://kit.fontawesome.com/d5c709dd6e.js" crossorigin="anonymous"></script>
  <!-- Sweet Alert 2 -->
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">
  <!-- IONICONS NUEVO -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!--=========================
  PLUGINS DE JAVASCRIPT
  ==========================-->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="vistas/plugins/jszip/jszip.min.js"></script>
  <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Sweet Alert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>

</head>

<!--=========================
CUERPO DEL DOCUMENTO
==========================-->
<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
<!-- Site wrapper  login-page -->

  
<?php
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
  //Inicia el Div del wrapper  
  echo '<div class="wrapper">';  
      //Incluimos la navbar superior 
      include "modulos/navbar.php"; 

      //Incluimos el menu de la izquierda 
      include "modulos/sidebar.php";

      //Como estamos trabajando con URLs amigables, validamos al cargar si viene una variable ruta en el GET y luego comparamos
      //lo que trae para seleccionar el contenido a mostrar.
      if(isset($_GET["ruta"])){
        if ($_GET["ruta"]=="dashboard" ||
            $_GET["ruta"]=="usuarios" ||
            $_GET["ruta"]=="categorias" ||
            $_GET["ruta"]=="productos" ||
            $_GET["ruta"]=="clientes" ||
            $_GET["ruta"]=="ventas" ||
            $_GET["ruta"]=="pos1" ||
            $_GET["ruta"]=="ver-ventas" ||
            $_GET["ruta"]=="reportes-ventas" ||
            $_GET["ruta"]=="rentas" ||
            $_GET["ruta"]=="nueva-renta" ||
            $_GET["ruta"]=="ver-rentas" ||
            $_GET["ruta"]=="reportes-rentas" ||
            $_GET["ruta"]=="cotizaciones" ||
            $_GET["ruta"]=="nueva-cotizacion" ||
            $_GET["ruta"]=="ver-cotizaciones" ||
            $_GET["ruta"]=="reportes-cotizaciones" ||
            $_GET["ruta"]=="despachos" ||
            $_GET["ruta"]=="nueva-despacho" ||
            $_GET["ruta"]=="ver-despachos" ||
            $_GET["ruta"]=="reportes-despachos" ||
            $_GET["ruta"]=="agenda" ||
            $_GET["ruta"]=="galeria" ||
            $_GET["ruta"]=="mensajes" ||
            $_GET["ruta"]=="bandeja-de-entrada" ||
            $_GET["ruta"]=="nuevo-mensaje" ||
            $_GET["ruta"]=="documentos" ||
            $_GET["ruta"]=="facturas" ||
            $_GET["ruta"]=="tickets" ||
            $_GET["ruta"]=="vales" ||
            $_GET["ruta"]=="configuracion" ||
            $_GET["ruta"]=="empresa" ||
            $_GET["ruta"]=="acerca-de" ||
            $_GET["ruta"]=="salir") {
          //Incluimos la página del dashboard
          include "modulos/".$_GET["ruta"].".php";
        }else {
          include "modulos/404.php";
        }
      }else {
        include "modulos/dashboard.php";
      }
      
      

      //Incluimos el footer
      include "modulos/footer.php"; 
  echo '</div>';
  // fin del wrapper
}else {
  include "modulos/login.php";
} 
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- AdminLTE for demo purposes 
<script src="vistas/dist/js/demo.js"></script> -->

<script src="vistas/js/plantilla.js"></script>
<script>
  /* DATA TABLE */
  $(function () {
    $("#DTCBotones").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DTCBotones_wrapper .col-md-6:eq(0)');
    $('#DTSBotones').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "decimal":        ""
    });
  });

  
</script>


</body>
</html>