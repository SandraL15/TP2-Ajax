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
                    $('#affAg').show
                         (
                                function()
                                    {
                                        afficherLesAgents($(this).val());
                                    }
                           );                     
               }
           );
           
        </script>
        
    </head>
    <body>
        <h1>Les Activites</h1>
        
        <div id="divAg"></div>
        <select id="affAg">
            <?php
           foreach($lesAgents as $ag)
            {
            echo "<p>".$ag->nom." - ".$ag->prenom."</p>";
            }
            ?>
            
        </select>
        
        <div id="divAg"></div>
        
    </body>
</html>
