<?php

require __DIR__.'/../Models/doughModel.php';

$doughs= Doughs::readAll();
//<form> //Forlmulalire de création de cake
//     ///Selectionner creme
//     ///
//     <select name="dough"> //$_POST['dough'] = $dough->id
//       foreach($doughs as $dough) {
//         <option value="$dough['id']">$dough['base']</option> //value est déjà défini
//       }
//     </select>
//     <input type="text" name="creme">  // le client qui définit la valeur (value)
 //</form>



require __DIR__.'/../Views/doughs/browse.php';
