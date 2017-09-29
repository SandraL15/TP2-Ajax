function AfficherLesFormation(numero)
            {
                $.ajax
                (
                        {
                           type:'get',
                           url:"index.php/CtrlAccueil/afficherLesFormations",
                           data:"numero="+numero,
                           success:function(data)
                           {
                               $('#divAct').empty();
                               $('#divAct').append(data);
                           },
                           error:function()
                           {
                              alert("impossible de récupérer les activites de la formation"); 
                           }
                        }
                );
            }

       function AfficherAgents(numero)
            {
                $.ajax
                (
                        {
                           type:'get',
                           url:"index.php/CtrlAccueil/afficherLesAgents",
                           data:"numeroFormation="+numero,
                           success:function(data)
                           {
                               $('#divAgents').empty();
                               $('#divAgents').append(data);
                           },
                           error:function()
                           {
                              alert("impossible de récupérer les agents de la formation"); 
                           }
                        }
                );
            }     