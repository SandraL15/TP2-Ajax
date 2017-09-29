 <?php 
    foreach($lesFormation as $form){
        echo"<input id='lol' onclick='AfficherAgents(this.value)' name='rdoForm' type='radio' value='".$form->code."'>".$form->intitule."</br>";
    }
         
