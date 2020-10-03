<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Tema_NA
 * @since Tema NA 1.0
 */
?>

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1

header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Neuróticos Anónimos <?php wp_title(); ?></title>

	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="google-site-verification" content="4G1w5eSA-ueIIFBPGh9Cl5IanvX4iDLxN-YsPJoQE3U" />


	<!-- Marcado JSON-LD generado por el Asistente para el marcado de datos estructurados de Google. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Movimiento Buena Voluntad 24 de Neuróticos Anónimos",
  "image" : "https://www.neuroticosanonimosbvoax.org.mx/wp-content/themes/temana/img/LogoNA.png",
  "telephone" : "+5219515130280",
  "email" : "bv24hrsnaoaxaca@gmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Margarita Maza de Juárez 218",
    "addressLocality" : "Oaxaca de Juárez, Oaxaca",
    "addressRegion" : "Oaxaca",
    "addressCountry" : "México",
    "postalCode" : "68000"
  },
  "openingHoursSpecification" : {
    "@type" : "OpeningHoursSpecification",
    "dayOfWeek" : {
      "@type" : "DayOfWeek",
      "name" : "24 horas"
    },
    "opens" : "Inserta una fecha/hora válida con formato ISO 8601 aquí. Ejemplos: 2015-07-27 o 2015-07-27T15:30"
  }
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125046925-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125046925-1');
</script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<base href="<?= get_site_url() ?>">


	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>
