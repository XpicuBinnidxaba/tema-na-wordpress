<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="footer">
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-3 menu">

      <h3>Acerca de neuróticos anónimos</h3>
      <ul>
        <li><a href="#">Misión, visión y valores</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Aviso de privacidad</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
      </ul>
    </div>
    <div class="col-xs-6 col-sm-3 menu">
      <h3>Servicios</h3>
      <ul>
        <li><a href="#">Casa Hogar</a></li>
        <li><a href="#">Visitas a domicilio</a></li>
        <li><a href="#">Neur-A-Teen</a></li>
        <li><a href="#">Juntas en sala</a></li>
        <li><a href="#">Visitas a domicilio</a></li>
      </ul>
    </div>
    <div class="col-xs-6 col-sm-3 menu">
      <h3>Grupos</h3>
      <ul>
        <li><a href="#">B. V. Margarita Maza</a></li>
        <li><a href="#">Villa de la Buena Voluntad</a></li>
        <li><a href="#">B. V. Ampliación</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
        <li><a href="#">Contáctanos</a></li>
      </ul>
    </div>

    <div class="col-xs-6 col-sm-3 menu">
      <h3>¿NECESITAS AYUDA?</h3>
      <ul>
        <li><a href="#"><i class="fas fa-2x fa-envelope"></i> &nbsp;&nbsp;&nbsp;CONTÁCTANOS</a></li>
        <li><a href="#"><i class="fas fa-phone fa-2x"></i>	&nbsp;&nbsp;&nbsp;LLÁMANOS</a></li>
        <li><a href="#" data-toggle="modal" data-target="#winUbicanos"><i class="fas fa-2x fa-map-marker-alt"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UBÍCANOS</a></li>

      </ul>
    </div>
  </div>
</div>
</div>

<div class="footer datosContacto">
<div class="container text-center">
  Oficina Intergrupal, Calle Margarita Maza de Juarez 218, Colonia Centro, Oaxaca<br />
  Teléfono +52 951 51 3 02 80<br />
  grupobvoaxaca@hotmail.com<br />
  <?= date("Y") ?>
</div>
</div>


<div class="modal modal-na fade" id="winUbicanos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <div class="col-xs-12 col-sm-8 barraDer">
          <button type="button" class="close visible-xs" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4>UBICA TU GRUPO</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7628.074386956956!2d-96.72122559999998!3d17.07083330000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1518751179044" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-xs-12 col-sm-4">
          <button type="button" class="close hidden-xs" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4>CONTÁCTANOS</h4>
          <br /><br />
          <form onsubmit="javascript: return false;">
            <div class="form-group">
              <label for="txtNombre">NOMBRE COMPLETO: </label>
              <input type="text" class="form-control" id="txtNombre" name="txtNombre" />
            </div>
            <div class="form-group">
              <label for="txtCorreo">CORREO ELECTRÓNICO: </label>
              <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" />
            </div>
            <div class="form-group">
              <label for="txtComentarios">COMENTARIOS: </label>
              <textarea id="txtComentarios" name="txtComentarios" class="form-control" rows="8"></textarea>
            </div>

            <div class="text-right">
              <button class="btn btn-lg btn-naranja">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>
