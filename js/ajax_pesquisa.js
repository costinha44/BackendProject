 function mostraPaises() {
       var tabela="";
       $.ajax({
            url: 'pesquisa.php',
            type: 'GET',
            dataType: 'json',
            success: function(dados) {
                tabela='<table id="dados"><thead><tr><th>Nome</th><th>Continente</th><th>Região</th><th>População</th></tr></thead><tbody>';
                for(var pos=0,tamanho=dados.length;pos<tamanho;pos++) {
                    tabela+='<tr data-codigo='+dados[pos].cod_modelo+'>';
                    tabela+='<td>'+dados[pos].modelo+'</td>';
                    tabela+='</tr>';
                }
//                console.log(dados[0].nome);                
//                dados.forEach(function(elemento) {
//                    tabela+="<p>"+elemento.nome+"</p>";
//                });
                tabela+='</tbody></table>';
                $("#pesquisa").html(tabela);
            },
            error: function(jqXHR, textStatus, errorThrown) {				
              $("#pesquisa").text("Erro !"+textStatus+errorThrown);
            }
       });
   } 
    $("#clickM").on("click",function() {
        $.ajax({
            url: 'pesquisa.php',
            type: 'GET',
            dataType: 'json',
            success: function(dados) {
                for(var pos=0,tamanho=dados.length;pos<tamanho;pos++) {
                    var valor_marca=$("#clickM").val();
                    if(dados[pos].cod_marca===valor_marca){
                            $("insertMOD").html(dados[pos].modelo);
                            $("insertMOD").val()=dados[pos].cod_modelo;
                    }else{
                        $("#pesquisa").html('erro');
                    }
                        
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {				
              $("#pesquisa").text("Erro !"+textStatus+errorThrown);
            }
       });
       mostraPaises();
    });