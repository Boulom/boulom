<?php

$this->form_validation->set_rules('idClient', 'idClient', 'required');
$this->form_validation->set_rules('Date_Arrivee', 'Date_Arrivee', 'required');
$this->form_validation->set_rules('Date_Depart', 'Date_Depart', 'required');
$this->form_validation->set_rules('Nb_Personnes', 'Nb_Personnes', 'required');
$this->form_validation->set_rules('Menage', 'Menage', 'required');
?>