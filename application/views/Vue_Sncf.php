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
                       $('#lstAct').change
                                (
                                    function()
                                    {
                                        AfficherLesFormation($(this).val());
                                    });
                       
                    });
                                         
        </script>
        
    </head>
    <body>
        <h1>Les Activites</h1>
        <select id="lstAct">
            <?php
            foreach($lesActivites as $act)
            {
                echo"<option value='".$act->numero."'>".$act->libelle."</option>";
            }
            
            ?>
            
        </select>
        
        <div id="divAct"></div>
      
    </body>
</html>
