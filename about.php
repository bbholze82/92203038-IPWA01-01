<?php
  $page_title = "Über uns";
  $total_sum_carbon = 0;
?>


<?php include("./assets/templates/html_head.php");?>

<body>

<?php include("./assets/templates/html_navbar.php");?>


<div class="container mt-4">
<div class="row">

<!-- Jumbotron -->
<?php include("./assets/templates/calc_total_sum_carbon.php");?>
<div class="p-5 text-center bg-image rounded-3" style="background-image: url('./assets/static/images/header_image.jpg'); height: 400px;">

    <div class="d-flex justify-content-left align-items-left h-100">
      <div class="text-white">
        <h1 class="mb-3">CO2 emissions in database</h1>
        <h4 class="mb-3"><?php echo $total_sum_carbon;?> million metric tons</h4>
      </div>
    </div>

</div>
<!-- Jumbotron -->

</div><!-- /.row -->
</div><!-- /.container -->


<div class="container mt-4">

<div class="row">

<div class="col-12">

<p>Die Green Foot Foundation ist eine international tätige Non-Profit-Organisation, die sich der Erfassung und Analyse von CO₂-Emissionen widmet, die durch Länder und große Unternehmen weltweit verursacht werden. Unser Ziel ist es, durch Transparenz und fundierte Datenanalyse das Bewusstsein für die Dringlichkeit des Klimawandels zu schärfen und konkrete Maßnahmen zur Reduzierung von Treibhausgasemissionen zu fördern.</p>

<p>Seit unserer Gründung haben wir es uns zur Aufgabe gemacht, eine umfassende Datenbank zu den CO₂-Emissionen aufzubauen, die nicht nur auf öffentlich zugänglichen Informationen basiert, sondern auch durch eigene Forschungsprojekte angereichert wird. Unser Team aus engagierten Wissenschaftlern, Datenanalysten und Umweltexperten arbeitet unermüdlich daran, die komplexen Daten zu sammeln, zu verifizieren und auszuwerten, um ein klares Bild der globalen Emissionstrends zu zeichnen.</p>

<p>Durch unsere Arbeit ermöglichen wir es Regierungen, Unternehmen und der Öffentlichkeit, fundierte Entscheidungen im Kampf gegen den Klimawandel zu treffen. Wir glauben, dass durch den Zugang zu präzisen und aktuellen Daten über CO₂-Emissionen eine Basis für wirksame Klimaschutzmaßnahmen geschaffen wird. Unsere Forschungsergebnisse und Analysen werden regelmäßig in Berichten veröffentlicht und sind für jeden zugänglich, um das Bewusstsein zu erhöhen und zum Handeln zu inspirieren.</p>

<p>Die Green Foot Foundation setzt sich nicht nur für die Datenerfassung ein, sondern engagiert sich auch in Bildungs- und Aufklärungsprojekten, um das Verständnis und das Bewusstsein für die Bedeutung eines nachhaltigen Umgangs mit unseren Ressourcen zu fördern. Wir organisieren Workshops, Seminare und Kampagnen, die darauf abzielen, Wissen zu vermitteln und Gemeinschaften zu motivieren, ihren CO₂-Fußabdruck zu reduzieren.</p>

<p>Unsere Vision ist eine Welt, in der Daten und Wissen als Schlüsselressourcen für den Umweltschutz dienen und in der jede Person, jedes Unternehmen und jede Regierung Verantwortung für die Reduzierung ihrer CO₂-Emissionen übernimmt. Gemeinsam mit unseren Partnern, Spendern und der globalen Gemeinschaft arbeiten wir unermüdlich daran, diese Vision Wirklichkeit werden zu lassen.</p>

<p>Wir laden Sie ein, sich uns anzuschließen, sei es durch eine Spende, die Teilnahme an unseren Projekten oder einfach durch das Teilen unserer Forschungsergebnisse und Berichte. Jeder Schritt zählt auf dem Weg zu einer nachhaltigeren und gerechteren Welt. Erfahren Sie mehr über unsere Arbeit und wie Sie einen Unterschied machen können auf unserer Website. Willkommen bei der Green Foot Foundation - gemeinsam für einen grüneren Planeten.</p>

</div> <!-- /.col -->

</div> <!-- /.row-->

</div> <!-- /.container-->

<?php include("./assets/templates/html_footer.php");?>


<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
