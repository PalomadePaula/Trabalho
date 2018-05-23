<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    include_once ('header.php');
  ?>
</head>
<style type="text/css">
	* { margin:0; padding:0;}
	#slide { width: 650px; overflow: hidden; height: 300px; margin: 50px auto; box-shadow: 0 0 8px #000;position: relative;}
	#slide img {position: absolute;z-index: 1; display: none; left: 0;}
	#slide p {z-index:2;position: absolute; bottom: 0; left: 0; width: 100%; padding: 10px; font-family: Arial; font-size: 14px; background: rgba(0,0,0,0.7);  color: #fff;}
</style>

<body class = "back-register">
  <nav class="navbar navbar-inverse">
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"><i class="fa fa-address-book"></i>  Voltar</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="jumbotron">
    <div class="container">
        <h1 class = "titulo2">Perfil Profissional</h1>
        <p class = "texto2">Formações</p>
    </div>
  </div>


  <div backgroud-color: "black">
    <figure id="slide">
      <img src="http://localhost:80/paloma_perfilprofissional/img/cont.jpg" alt="Contabilidade">
      <img src="http://localhost:80/paloma_perfilprofissional/img/analise.jpg" alt="Análise e Desenvolvimento de Sistemas">
      <img src="http://localhost:80/paloma_perfilprofissional/img/foto.jpg" alt="Fotografia">
      <img src="http://localhost:80/paloma_perfilprofissional/img/rh.jpg" alt="Recursos Humanos">
      <img src="http://localhost:80/paloma_perfilprofissional/img/ingles.jpg" alt="Inglês">
      <img src="http://localhost:80/paloma_perfilprofissional/img/filmes.jpg" alt="Filmes e Séries">
    </figure>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#slide img:eq(0)").addClass("ativo").show();
        var texto = $(".ativo").attr("alt");
        $("#slide").prepend("<p>"+texto+"</p>");
        setInterval(slide,3000);
        function slide(){
          if($(".ativo").next().size()){
            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
          }else{
            $(".ativo").fadeOut().removeClass("ativo");
            $("#slide img:eq(0)").fadeIn().addClass("ativo");
          }         
          var texto = $(".ativo").attr("alt");
          $("#slide p").hide().html(texto).delay(500).fadeIn();
        }
      });
    </script>
  </div>

  <div align = "center">     
    <div class="container breadcrumb">
        <h1 class = "titulo2">Técnica em Contabilidade</h1>
        <p class = "texto2">Instituição de Ensino: Etec Dr. Geraldo José Rodrigues Alckmin<br>
        Carreira ligada ao setor administrativo, lidando com rotinas do departamento fiscal, como lançamentos de notas fiscais de entrada, saída, prestação de serviços e conhecimento de transporte, cálculos de impostos das entidades enquadradas nos regimes de apuração Simples Nacional, Lucro Presumido e Lucro Real, efetuando também a entrega de obrigações acessórias, como SPED EFD Contribuições (PIS/COFINS), SPED EFD ICMS/IPI, EFD Reinf,  SEDIF, DCTF, GIA, DIRF e DEFIS. Responsável também por algumas rotinas do departamento contábil, como lançamentos contábeis diários, elaboração de relatórios contábeis, como Balancete de Verificação e Balanço Patrimonial.<br></p>
    </div>
  </div>
  <div align = "center">     
    <div class="container breadcrumb">
        <h1 class = "titulo2">Análise e Desenvolvimento de Sistemas</h1>
        <p class = "texto2">Instituição de Ensino: Faculdade de Tecnologia de Taubaté<br>
        Curso voltado para desenvolver, analisar, projetar, implementar e atualizar sistemas de informação para diversos setores de atividades, utilizando linguagens de programação e os ambientes operacionais. <br></p>
    </div>
  </div>
  <div align = "center">     
    <div class="container breadcrumb">
        <h1 class = "titulo2">Curso Básico em Recursos Humanos<br></h1>
        <p class = "texto2">Instituição de Ensino: Escola Municipal do Trabalho Prédio VIII - Taubaté<br>
        Elaboração de cálculos trabalhistas, folha de pagamento, obrigações acessórias, como RAIS, CAGED e e-Social, arquivamento de documentos comprobatórios de cumprimento das obrigações trabalhistas e previdenciárias e registro e anotações na Carteira de Trabalho e Previdência Social – CTPS.<br></p>
    </div>
  </div>
  <div align = "center">     
    <div class="container breadcrumb">
        <h1 class = "titulo2">Formação em Inglês</h1>
        <p class = "texto2">Instituição de Ensino: Escola de Idiomas Wizard <br>
        Compreenção em nível intermediário da língua, como conversação, leitura e escrita.<br></p>
    </div>
  </div>

  <br><br><br>

  <div class="jumbotron">
    <div class="container">
        <h1 class = "titulo2">Hobbies</h1>
        <p class = "texto2">Nas horas vagas, exerce trabalhos como fotógrafa, assiste filmes e séries.</p>
    </div>
  </div>
  
  <?php
    include_once ('js.php');   
  ?>

</body>

</html>