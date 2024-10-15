<?php

foreach($arbeiten as $arbeit) {

  $html .= snippet('arbeit', ['arbeit' => $arbeit], true);

}

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);