 <?php 
    foreach($lesFormation as $form){
        echo"<input id='lol' name='rdoForm' type='radio' value='".$form->code."'>".$form->intitule."</br>";
    }
         
