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

            