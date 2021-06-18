<?php

include 'classes/includes.php';

class VisitView extends VisitModel {


    private $userId;

    public function __construct($userId) {
        $this->userId = $userId;
    }

    public function showVisits() {

        $results = $this->getClientVisits($this->userId);

        if (empty($results)) {
            echo "<h2>Brak zarezerwowanych wizyt</h2>";
        } else {
            echo '<table><tr><th>ID<th>Nazwa<th>Data<th>Typ wizyty<th>Komentarz lekarza';
            foreach ($results as $visit) {
                echo '<tr><td>' . $visit['ID'] . '<td>' . $visit['name'] . '<td>' . $visit['date'] . '<td>' . $visit['type'] . '<td>' . $visit['comment'];
            }
            echo '</table>';
        }
    }


}