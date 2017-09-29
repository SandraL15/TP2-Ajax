<html>
    <head>
        <title>Les Activites</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript">
           $
           (
                function()
                {
                    $('#radioForm').click
                         (
                                function()
                                    {
                                        AfficherLesFormations();
                                    }
                           );                     
               }
           );
           
        </script>
        
    </head>
    <body>
        <h1>Les Activites</h1>
        
        <div id="divAct"></div>
        <select id="radioForm">
            <?php
            foreach($lesFormations as $form)
            {
                echo"<input name='".$form->code."'>".$form->intitule."/>";
            }
            
            ?>
            
        </select>
        
        <div id="divForm"></div>
        
    </body>
</html>
