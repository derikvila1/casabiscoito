<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Inscrição</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        body {
            background-image: url(snow-fundo.png);
            background-repeat: no-repeat;
        }

        #div-principal {
            padding-right: 70px;
            padding-top: 40px;
            padding-left: 70px;
            padding-bottom: 20px;
            margin: 0;
        }

        #div-infos {
            padding-right: 60px;
            padding-left: 60px;
            color: rgb(45, 71, 63);
        }

        #descricao-page-comprovante-text {
            font-size: 15px;
            color: rgb(53, 95, 81);
        }

        #texto-comprovacao {
            color: rgb(73, 110, 98);
            font-size: 15px;
            margin-top: -10px;
        }

        .divider {
            position: relative;
            height: 1px;
        }

        .div-transparent:before {
            position: absolute;
            top: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(106, 202, 138);
        }

        #place-qr {
            border: 1px;
            border-color: chocolate;
            border-style: solid;
            margin-top: 24px;
            width: 130px;
            height: 130px;
            float: right;
        }

        #wrap-all {
            max-width: 800px;
            margin: auto;
            background-color: white;
        }

        #label-espaco-comprovante {
            font-size: 15px;
        }

        #label-data-comprovante {
            font-size: 15px;
        }

        #label-horario-comprovante {
            font-size: 15px;
        }

        #infos-espaco-visitacao {
          
            color: rgb(45, 71, 63);
        }

        #texto-title {
            color: rgb(73, 110, 98);
            font-size: 21px;
            margin-top: 0;
    margin-bottom: 0;
        }
/* 
        #infos-visitante {
            padding-right: 60px;
            padding-top: 30px;
            padding-left: 60px;
        } */

        #label-documento-comprovante {
            font-size: 13px;
            color: rgb(70, 97, 89);
            line-height: 22px;
        }

        #label-nome-comprovante {
            font-size: 15px;
            margin-bottom:0px;
        }

        #label-contato-comprovante {
            font-size: 15px;
        }

        #label-deficiencia-comprovante {
            font-size: 15px;
        }

        #infos-visitante-visitacao {
            color: rgb(45, 71, 63);
        
        }

        #observacoes-importantes {
            padding-right: 60px;
            padding-left: 60px;
          
        }

        #div-importantes-observacoes {
          
            color: rgb(45, 71, 63);
        }

        #label-nome-dependente-comprovante {
            font-size: 15px;

        }

        #label-data-dependente-comprovante {
            font-size: 15px;
        }

        #infos-visitante-dependente-visitacao {
            color: rgb(45, 71, 63);
          
        }

    </style>
</head>

<body>
    <div id="wrap-all">
        <center style="padding-top: 16px">
            <button type="button" onclick="imprimir()">Imprimir comprovante</button>
        </center>
        <div style="display:flex" id="div-principal" align=center>
            <div>
                <img src="https://eventos.cultura.am.gov.br/logo-christmas.png" width="130px" style="margin-top: -30px;">
                <img src="https://eventos.cultura.am.gov.br/logo-1.png" width="75px" style="margin-top: -30px;">
                <div style="margin: auto; text-align: center;">
                    <img src="https://eventos.cultura.am.gov.br/subtitle.png" width="330px" style="text-align: center;">
                </div>
            </div>
                
            <div>
                <h1 class="ui header" style="color: rgb(60, 145, 202); font-size: 14px;">COMPROVANTE DE INSCRIÇÃO</h1>
                <h1 class="ui header" style="color: rgb(60, 145, 202); font-size: 14px;">ESTAÇÃO CASA DO BISCOITO</h1>

                {{-- <p id="descricao-page-comprovante-text" style="color: rgb(60, 145, 202);"></p>
                <h1 class="ui header" id="texto-comprovacao"></h1> --}}

                <h1 class="ui header" id="texto-comprovacao">Inscrição realizada para
                    {{$row->horario_visitacao_data}} -  {{$row->horario_visitacao_hora_inicio}} 
                </h1>
                {{-- <h1 class="ui header" id="texto-comprovacao">
                    Importante! Chegar com antecedência na estação, <br> neste horário: 
                <b>{{$row->horario_visitacao_hora_chegada_estacao}}</b>  
                </h1> --}}
                
                <h1 class="ui header" id="texto-comprovacao">Endereço: Rua José Clemente - 564, esquina com a Rua Barroso
                </h1>
            </div>
        </div>

        {{-- <div id="div-infos">
            <div class="divider div-transparent"></div>
            <div id="infos-espaco-visitacao">
                {{-- <h1 class="ui header" id="texto-title">Informações do Evento</h1> 
                <div class="divider div-transparent" style="padding-bottom: 10px;"></div>
                {{-- <p id="label-espaco-comprovante"><b>Título:</b> {{ $event->name }}</p>
                <p id="label-espaco-comprovante"><b>Local:</b> {{ $place->name }}</p>
                <p id="label-horario-comprovante"><b>Data:</b> {{ $DataEspecifica->format('d/m/Y \à\s H\hi\m\i\n') }}
                </p>
                {{-- <p id="label-espaco-comprovante"><b>Descrição: </b>{{ $event->information }}</p> 
            </div>
        </div> --}}

        {{-- <div id="div-infos">
            <div class="divider div-transparent"></div>
        </div> --}}

        <div id="infos-visitante">
            <h1 class="ui header" id="texto-title">Informações do Inscrito</h1>
            <div class="divider div-transparent"></div>


            <div style="display: flex">

          
                <div id="infos-visitante-visitacao">
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->nome_completo }}</b> </p>
                    <p id="label-documento-comprovante"><b>Deficiência: {{ $visitante_cadastrato->nome_deficiencia ?? ''}}</b> </p>
            
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{ $visitante_cadastrato->dependente_data_nascimento ?? ''}}</b> </p>
            
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente2_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{ $visitante_cadastrato->dependente2_data_nascimento ?? ''}}</b> </p>
            
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente3_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{ $visitante_cadastrato->dependente3_data_nascimento ?? ''}}</b> </p>
                
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente4_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{ $visitante_cadastrato->dependente4_data_nascimento ?? ''}}</b> </p>
                </div>

                <div style="margin-left:255px">
                    <img style="margin-left:40px"  src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl='{{$code}}'">
                    
                    <div style="max-width: 320px;">
                        
                        <p id="descricao-page-comprovante-text"
                            style="margin-left:50px; font-size: 13px important!;">Salve este
                            comprovante, você vai precisar apresentar (impresso ou na tela do celular) na entrada do evento
                            junto com o documento de
                            identificação cadastrado.</p>
                    </div>
                </div>
             </div>

        </div>



        
        <div id="observacoes-importantes">
            <h1 class="ui header" id="texto-title">INFORMAÇÕES AO VISITANTE</h1>
            <div class="divider div-transparent"></div>
            <div id="div-importantes-observacoes">
                <b>
                 

                    <p id="label-documento-comprovante"> ● É necessário chegar com 20 minutos de antecedência no local citado acima;</p>


                    <p id="label-documento-comprovante"> ● A entrada do público será feita no horário marcado do agendamento. Não haverá tolerância no horário de chegada. 
                        Após o tempo expirado, será necessário realizar novo agendamento;</p>

                    <p id="label-documento-comprovante"> ● O comprovante de agendamento só é válido para o dia e horário presentes no mesmo, não sendo permitido a 
                        utilização dele em dias e horários diferentes;</p>

                    <p id="label-documento-comprovante"> ● Eu AUTORIZO a Secretaria de Estado de Cultura e Economia Criativa do Amazonas a utilizar a imagem do menor feita 
                        para o passaporte de Natal, assim como as demais imagens capturadas durante a visita, em todo e 
                        qualquer material entre imagens de vídeo, fotos e voz. A presente autorização é concedida a título gratuito, abrangendo o uso da imagem 
                        acima mencionada, das seguintes formas: folhetos em geral, anúncios em revistas,  jornais e TV; sites e portais; e redes sociais 
                        (facebook, instagram, twitter, youtube e demais plataformas digitais de streaming e compartilhamento de dados).</p>

                    <h1 class="ui header" id="texto-title">ATENÇÃO:</h1>
                    <p id="label-documento-comprovante"> ● Informamos que o espaço desenvolverá atividades voltadas para o público de 1 a 5 anos, como
                            oficinas, brincadeiras e apresentações artísticas. Durante 50 minutos as crianças serão acompanhadas
                            pelos recreadores nas atividades e o responsável pelo menor, deverá permanecer no espaço durante
                            a realização da ação. </p>
                    
                    
            </div>
        </div>
    </div>

    <script>
        function imprimir(){
            window.print();
        }
    </script>
</body>

</html>
