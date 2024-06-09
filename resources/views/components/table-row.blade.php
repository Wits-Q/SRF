

<tr class="row m-0" style="width: 100%!important;">
    <td class="col-12 border-0 p-0">
        <td class="col w-1/5 px-4 py-2 text-center align-middle">
            <div class="flex justify-center items-center">
                @if ($atendimento['prioridade'] == 'alta')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <circle cx="10" cy="10" r="8" />
                    </svg>
                @elseif ($atendimento['prioridade'] == 'media')
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <circle cx="10" cy="10" r="8" />
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                        <circle cx="10" cy="10" r="8" />
                    </svg>
                @endif
            </div>
        </td>

        <td class=" name col w-1/5 px-4 py-2 text-center align-middle">
            {{ $atendimento['nome'] }}
        </td>
        <td class="col w-1/5 px-4 py-2 text-center align-middle">
            {{ $atendimento['cartao_sus'] }}
        </td>
        <td class=" date col w-1/5 px-4 py-2 text-center align-middle">
             {{ date('d/m/Y', strtotime($atendimento['data_cadastro'])) }}
        </td>
        <td id="atendimento-{{ $atendimento['id'] }}" class="col cursor-pointer w-1/5 px-4 py-2 text-center align-middle" onclick="toggleDetails({{ $atendimento['id'] }})">
            <div class="flex justify-center items-center">
                <!-- Substitua 'caminho/para/seu/icone.svg' pelo caminho do seu ícone baixado -->
                <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0,0,256,256" fill="#186f65">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                    </g>
                    <g fill="#186f65" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="translate(0.002,0.002) scale(4,4)">
                            <g id="Layer_1" font-family="Inter, apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, &quot;Fira Sans&quot;, Roboto, Oxygen, Ubuntu, &quot;Droid Sans&quot;, Arial, sans-serif" font-weight="400" font-size="16" text-anchor="start"></g>
                            <g id="icon">
                                <g>
                                    <g>
                                        <path d="M50.888,23.419h-37.776c-2.815,0 -5.106,-2.168 -5.106,-4.832c0,-2.665 2.291,-4.833 5.106,-4.833h37.776c2.815,0 5.105,2.168 5.105,4.833c0.001,2.664 -2.289,4.832 -5.105,4.832zM13.112,15.754c-1.713,0 -3.106,1.271 -3.106,2.833c0,1.562 1.394,2.832 3.106,2.832h37.776c1.712,0 3.105,-1.271 3.105,-2.832c0,-1.561 -1.394,-2.833 -3.105,-2.833z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M45.96,36.832h-32.848c-2.815,0 -5.106,-2.168 -5.106,-4.832c0,-2.664 2.291,-4.832 5.106,-4.832h32.848c2.815,0 5.106,2.168 5.106,4.832c0,2.664 -2.29,4.832 -5.106,4.832zM13.112,29.168c-1.713,0 -3.106,1.271 -3.106,2.832c0,1.561 1.394,2.832 3.106,2.832h32.848c1.713,0 3.106,-1.271 3.106,-2.832c0,-1.561 -1.394,-2.832 -3.106,-2.832z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M40.212,50.245h-27.1c-2.815,0 -5.106,-2.168 -5.106,-4.832c0,-2.664 2.291,-4.832 5.106,-4.832h27.101c2.815,0 5.105,2.168 5.105,4.832c0,2.664 -2.29,4.832 -5.106,4.832zM13.112,42.581c-1.713,0 -3.106,1.271 -3.106,2.832c0,1.561 1.394,2.832 3.106,2.832h27.101c1.712,0 3.105,-1.271 3.105,-2.832c0,-1.561 -1.394,-2.832 -3.105,-2.832z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <!-- Detalhes adicionais (inicialmente ocultos) -->
            <div id="details_{{ $atendimento['id'] }}" class="hidden mt-2">
                
            </div>
        </td>
    </td>
    <td class="col-12  w-100 border-0 p-0 d-none " id="detalhes-{{$atendimento['id']}}">  
        <table class="w-100" >
            <tbody>
                
                <hr class="m-0 mb-2">
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>

                            <h6>Informações:</h6>
                            <div class="row">
                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">Sexo: {{$atendimento['sexo']}} </p>
                                    <p class="m-0">Data de Nascimento: {{ date('d/m/Y', strtotime($atendimento['data_nascimento'])) }} </p>
                                    <p class="m-0">Endereço: {{$atendimento['endereco']}} </p>    
                                </div>

                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">Contato: {{$atendimento['contato']}} </p>
                                    <p class="m-0">Data de Cadastro: {{ date('d/m/Y', strtotime($atendimento['data_cadastro'])) }} </p>
                                    <p class="m-0">Responsável pelo cadastro: {{$atendimento['responsavel']}} </p>
                                </div>
                            </div>
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>
                
                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>

                            <h6>Unidade Básica de Saúde:</h6>
                            <div class="row">
                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">Nome da UBS: {{$atendimento['ubs']}}</p>  
                                </div>

                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">ACS responsável: {{$atendimento['acs']}}</p>
                                </div>
                            </div>
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>

                            <h6>Condições de Saúde:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">Diagnóstico clínico: {{$atendimento['diagnostico']}}</p>  
                                    <p class="m-0" style="max-width: 90%;">Comorbidades associadas: {{$atendimento['comorbidades']}}</p>  
                                </div>
                            </div>
                            
                            <div class="row">

                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">Última internação: {{ date('d/m/Y', strtotime($atendimento['ultima_internacao'])) }}</p>
                                </div>

                                <div class="col-6 d-flex flex-column">
                                    <p class="m-0">Médico responsável: {{$atendimento['medico_responsavel']}}</p>
                                </div>
                            </div>
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Motivos que levou o paciente a procurar o serviço de saúde:</h6>
                            <div >
                                <div>
                                    @if($atendimento['dor'])
                                        Dor: {!! $atendimento['dor_descricao'] !!}
                                    @endif

                                    @if($atendimento['incapacidade'])
                                        Incapacidade: {!! $atendimento['incapacidade_descricao'] !!}
                                    @endif

                                    @if($atendimento['osteomusculares'])
                                        Osteomusculares: {!! $atendimento['osteomusculares_descricao'] !!}
                                    @endif

                                    @if($atendimento['neurologicas'])
                                        Neurológicas: {!! $atendimento['neurologicas_descricao'] !!}
                                    @endif

                                    @if($atendimento['uroginecologicas'])
                                        Uroginecológicas: {!! $atendimento['uroginecologicas_descricao'] !!}
                                    @endif

                                    @if($atendimento['cardiovasculares'])
                                        Cardiovasculares: {!! $atendimento['cardiovasculares_descricao'] !!}
                                    @endif

                                    @if($atendimento['respiratorias'])
                                        Respiratórias: {!! $atendimento['respiratorias_descricao'] !!}
                                    @endif

                                    @if($atendimento['oncologicas'])
                                        Oncológicas: {!! $atendimento['oncologicas_descricao'] !!}
                                    @endif

                                    @if($atendimento['pediatria'])
                                        Pediatria: {!! $atendimento['pediatria_descricao'] !!}
                                    @endif

                                    @if($atendimento['multiplas'])
                                        Múltiplas: {!! $atendimento['multiplas_descricao'] !!}
                                    @endif
    
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Queixa do paciente:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;"> {{$atendimento['queixa']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Principais achados do Exame Físico:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['achados_exame_fisico']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Testes padronizados realizados:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['testes_padronizados']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Condição funcional do paciente:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['condicao_funcional']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Fatores ambientais e pessoais Primário:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['fatores_ambientais']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Diagnóstico Fisioterapêutico Primário:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['diagnostico_fisioterapeutico']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Atividades ou grupos operativos dos quais o usuário participa:</h6>
                            <div >
                                <div>
                                    <p class="m-0">{{str_replace('_', ' ', $atendimento['atividades'])}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Atividades ou grupos operativos dos quais o usuário participou:</h6>
                            <div >
                                <div>
                                    <p class="m-0">{{str_replace('_', ' ', $atendimento['atividades_passadas'])}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Sessão exclusiva para atenção secundária:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">Condição funcional atual do paciente: {{$atendimento['funcional_condicao']}}</p>  
                                    <p class="m-0" style="max-width: 90%;">Tratamento ofertado: {{$atendimento['tratamento_ofertado']}}</p>  
                                    <p class="m-0" style="max-width: 90%;">Evolução funcional do usuário desde o início: {{$atendimento['evolucao_funcional']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Número de sessões realizadas:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{str_replace('_', ' ', $atendimento['sessoes'])}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Assiduidade do paciente:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{str_replace('_', ' ', $atendimento['assiduidade'])}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Fatores ambientais e pessoais Secundários:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['ambientais_pessoais']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Diagnóstico Fisioterapêutico Secundário:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;"> {{$atendimento['diagnostico_fisio']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Critérios para alta fisioterapêutica do setor secundário:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['criterios']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-2 mb-2">
                    </td>
                </tr>

                
                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <div>
                            <h6>Justificativa para contrarreferência para a APS:</h6>
                            <div >
                                <div>
                                    <p class="m-0" style="max-width: 90%;">{{$atendimento['justificativa']}}</p>  
                                </div>
                            </div>   
                        </div>
                    </td>                
                </tr>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-4 mb-2">
                    </td>
                </tr>

                <td class=" icon col w-1/5 px-4 py-2 text-right align-middle">
                    <button type="button" class="text-white font-bold py-2 px-4 rounded shadow-md" 
                    style="background-color: #186f65;" data-toggle="modal" 
                    data-target="#modaleditar" onclick="resgatarDados('{{json_encode($atendimento)}}')">Editar
                </button>
                </td>

                <form action="{{ route('encaminhar') }}" method="post">
                    @csrf
                    <td class="col w-1/5 px-4 py-2 text-right align-middle">
                        <div class="flex justify-end items-center">
                            <input type="hidden" name="atendimento_id" value="{{ $atendimento['atendimento_id'] }}">
                            
                            <select name="encaminhamento" class=" icon cursor-pointer mr-2 border border-gray-300 bg-white text-#186f65 hover:text-green-800 font-bold py-2 px-5 rounded-lg shadow-lg" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); margin-right: 10px;">
                                <option value="Primário">Primário</option>
                                
                                <option value="Secundário">Secundário</option>
                            </select>
                            
                            <button type="submit" class=" icon bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-2 rounded-lg shadow-lg" style="background-color: #186f65; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">Encaminhar
                            </button>
                        </div>
                    </td>
                </form>

                <tr class="row">
                    <td class="col-2"></td>
                    <td class="col">
                        <hr class="m-12 mb-8">
                    </td>
                </tr>

            </tbody>
        </table>
    </td>


</tr>



<style>

    /* Customização para navegadores baseados no WebKit */
    ::-webkit-scrollbar {
        width: 10px;  /* Largura do scrollbar vertical */
        height: 10px; /* Altura do scrollbar horizontal */
    }

    ::-webkit-scrollbar-thumb {
        background: #ccc;  /* Cor cinza clara para o thumb */
        border-radius: 8px; /* Borda levemente arredondada */
        border: 0px solid transparent; /* Espaço ao redor do thumb */
        background-clip: content-box; /* Ajusta a cor do thumb para não sobrepor o espaço */
    }

    ::-webkit-scrollbar-track {
        background: transparent; /* Torna o track invisível */
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #aaa; /* Cor um pouco mais escura ao passar o mouse */
    }

    /* Customização para Firefox */
    body {
        scrollbar-width: thin; /* Define o scrollbar como fino */
        scrollbar-color: #888 transparent; /* Cor do thumb e track */
    }

    /* Adicione margens ou padding no conteúdo para reduzir o tamanho visual */
    .container {
        padding: 10px; /* Ajuste conforme necessário */
        margin: 10px;  /* Ajuste conforme necessário */
    }

    .icon:hover {
    animation: jump 0.3s ease;
    }

    /* Adicione esta parte no seu arquivo CSS ou na seção de estilo do seu HTML */
    .custom-select:hover {
        background-color: #f0f0f0; /* Cor de fundo cinza sutil */
    }

    @keyframes jump {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
        100% {
            transform: translateY(0);
        }
    }


</style>




