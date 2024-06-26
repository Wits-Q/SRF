
  <div class="modal fade" id="modalNovoPaciente" tabindex="-1" role="dialog" aria-labelledby="modalNovoPacienteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="min-width: 62%;" role="document"> <!-- Definindo uma largura mínima de 90% -->
            <div class="modal-content">
                <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                  
                <div class="py-4 mb-6 border-2 border-gray-300 shadow-md mx-auto" style="background-color: #186f65; max-width: 670px; margin-top: 20px;">
                    <h1 class="text-2xl font-bold text-center text-white">Cadastro de Pacientes</h1>
                </div>

                <div class="max-w-4xl mx-auto py-8 px-4">
                  <form action="{{route('SalvarDados')}}" method="post">
                      @csrf

                      <!-- ///////////////////////////////////////////////////////////////////////////////////-->

                      <!-- Dados Básicos-->
                      
                      <!-- 1º tópico: Informações -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-2">Informações</h2>
                        
                        <div class="grid grid-cols-2 gap-4">
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="nome">Nome:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nome" id="nome" type="text" placeholder="Digite seu nome">
                          </div>
                          <div class="mb-4">
                              <label class="block text-sm font-bold" for="idade">Idade:</label>
                              <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="idade" id="idade" type="text" placeholder="Digite sua idade">
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold">Sexo:</label>
                            <div class="flex">
                              <label class="inline-flex items-center mr-4">
                                <input type="radio" class="form-radio h-5 w-5 text-blue-500" name="sexo" value="masculino" onfocus="this.blur()">
                                <span class="ml-2">Masculino</span>
                              </label>
                              <label class="inline-flex items-center">
                                <input type="radio" class="form-radio h-5 w-5 text-pink-500" name="sexo" value="feminino" onfocus="this.blur()">
                                <span class="ml-2">Feminino</span>
                              </label>
                            </div>
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="contato">Contato:</label>
                            <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline input-field" name="contato" id="contato" type="number" inputmode="numeric" pattern="[0-9]*" placeholder="Digite seu contato">
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="data_nascimento">Data de Nascimento:</label>
                            <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="data_nascimento" id="data-nascimento" type="date" placeholder="DD/MM/AAAA" required>
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="cartao_sus">Número de Cartão SUS:</label>
                            <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline input-field"  name="cartao_sus" id="cartao-sus" type="number" placeholder="Digite o número do cartão SUS" required>
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="endereco">Endereço:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="endereco" id="endereco" type="text" placeholder="Digite seu endereço">
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="data_cadastro">Data de Cadastro:</label>
                            <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="data_cadastro" id="data-cadastro" type="date" placeholder="DD/MM/AAAA" required>
                          </div>
                        
                        
                        </div>
                        
                      </div>
                      
                      <!-- 2º tópico: Unidade Básica de Saúde -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-2">Unidade Básica de Saúde</h2>
                        <div class="grid grid-cols-2 gap-4">
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="ubs">Nome da UBS:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ubs" id="ubs" type="text" placeholder="Digite o nome da UBS">
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="acs">ACS responsável:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="acs" id="acs" type="text" placeholder="Digite o nome do ACS responsável">
                          </div>
                        </div>
                      </div>
                      
                      <!-- 3º tópico: Condições de Saúde -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-2">Condições de Saúde</h2>
                        <div class="grid grid-cols-2 gap-4">
                          <div class="mb-6">
                            <label class="block text-sm font-bold" for="diagnostico">Diagnóstico Clínico:</label>
                            <textarea class="shadow appearance-none border rounded w-full h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="diagnostico" id="diagnostico" placeholder="Digite o diagnóstico clínico"></textarea>
                          </div>
                          <div class="mb-6">
                            <label class="block text-sm font-bold" for="comorbidades">Comorbidades associadas:</label>
                            <textarea class="shadow appearance-none border rounded w-full h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="comorbidades" id="comorbidades" placeholder="Digite as comorbidades associadas"></textarea>
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="ultima_internacao">Última internação:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ultima_internacao" id="ultima-internacao" type="date" placeholder="DD/MM/AAAA">
                          </div>
                          <div class="mb-4">
                            <label class="block text-sm font-bold" for="medico_responsavel">Médico responsável:</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="medico_responsavel" id="medico-responsavel" type="text" placeholder="Digite o nome do médico responsável">
                          </div>
                        </div>
                      </div>
                      
                      <!-- 4º tópico: Nível de prioridade -->
                      <div class="mb-6 border-b border-gray-300">
                        <h2 class="text-lg font-bold mb-2">Nível de Prioridade</h2>
                        <div class="flex mb-4">
                          <label class="inline-flex items-center mr-4">
                            <input type="radio" class="form-radio h-5 w-5 text-red-500" name="prioridade" value="alta" onfocus="this.blur()">
                            <span class="ml-2 font-bold text-red-500">Alta Prioridade</span>
                          </label>
                          <label class="inline-flex items-center mr-4">
                            <input type="radio" class="form-radio h-5 w-5 text-yellow-500" name="prioridade" value="media" onfocus="this.blur()">
                            <span class="ml-2 font-bold text-yellow-500">Média Prioridade</span>
                          </label>
                          <label class="inline-flex items-center">
                            <input type="radio" class="form-radio h-5 w-5 text-green-500" name="prioridade" value="baixa" onfocus="this.blur()">
                            <span class="ml-2 font-bold text-green-500">Baixa Prioridade</span>
                          </label>
                        </div>
                      </div>

                      <!-- 5º tópico: Atenção Primária -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-2">Sessão exclusiva para atenção primária</h2>
                        <div class="mb-4">
                          <label class="block text-sm font-bold mb-4">Motivos que levaram o paciente a procurar o serviço de saúde:</label>
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="grid grid-cols-1 gap-4">
                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="dor" onchange="toggleField(this)" data-target="dor" onfocus="this.blur()">
                                <span class="ml-2">Dor</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="dor" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>
                              
                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md " name="motivos[]" value="incapacidade" onchange="toggleField(this)" data-target="avds" onfocus="this.blur()">
                                <span class="ml-2">Incapacidade de realizar AVDS</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="avds" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>
                              
                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="osteomusculares" onchange="toggleField(this)" data-target="osteomusculares" onfocus="this.blur()">
                                <span class="ml-2">Condições osteomusculares</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="osteomusculares" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>
                              
                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="neurologicas" onchange="toggleField(this)" data-target="neurologicas" onfocus="this.blur()">
                                <span class="ml-2">Condições neurológicas</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="neurologicas" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="uroginecologicas" onchange="toggleField(this)" data-target="uroginecologicas" onfocus="this.blur()">
                                <span class="ml-2">Condições uroginecológicas</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="uroginecologicas" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="cardiovasculares" onchange="toggleField(this)" data-target="cardiovasculares" onfocus="this.blur()">
                                <span class="ml-2">Condições cardiovasculares</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="cardiovasculares" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="respiratorias" onchange="toggleField(this)" data-target="respiratorias" onfocus="this.blur()">
                                <span class="ml-2">Condições respiratórias</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="respiratorias" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="oncologicas" onchange="toggleField(this)" data-target="oncologicas" onfocus="this.blur()">
                                <span class="ml-2">Condições oncológicas</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="oncologicas" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="pediatria" onchange="toggleField(this)" data-target="pediatria" onfocus="this.blur()">
                                <span class="ml-2">Pediatria</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="pediatria" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>

                              <label for="motivos" class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="motivos[]" value="multiplas" onchange="toggleField(this)" data-target="deficiencias" onfocus="this.blur()">
                                <span class="ml-2">Deficiências múltiplas</span>
                              </label>
                              <label for="motivos-descricao" class="hidden"></label>
                                <textarea name="motivos-descricao[]" id="deficiencias" class="hidden shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y" placeholder="Explique o motivo"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- 6º tópico: Avaliação Fisioterapêutica -->
                      <div class="border-b border-gray-300 mb-6">
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="queixa">Queixa do paciente:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="queixa" id="queixa" placeholder="Digite a queixa do paciente"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="achados_exame_fisico">Principais achados do Exame Físico:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="achados_exame_fisico" id="achados-exame-fisico" placeholder="Digite os achados do exame físico"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="testes_padronizados">Testes padronizados realizados:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="testes_padronizados" id="testes-padronizados" placeholder="Digite os testes realizados"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="condicao_funcional">Condição funcional do paciente:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="condicao_funcional" id="condicao-funcional" placeholder="Digite a condição funcional do paciente"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="fatores_ambientais">Fatores ambientais e pessoais:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="fatores_ambientais" id="fatores-ambientais" placeholder="Digite os fatores ambientais e pessoais"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="diagnostico_fisioterapeutico">Diagnóstico Fisioterapêutico:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="diagnostico_fisioterapeutico" id="diagnostico-fisioterapeutico" placeholder="Digite o diagnóstico fisioterapêutico"></textarea>
                        </div>
                      </div>

                      <!-- 7º tópico: Atividades ou grupos operativos -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-4">Atividades ou grupos operativos dos quais o usuário participa:</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="grid grid-cols-1 gap-4">
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades" value="Mova_se" onfocus="this.blur()">
                              <span class="ml-2">Grupo de caminhada MOVA-SE</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades" value="Menos_dor_mais_saude" onfocus="this.blur()">
                              <span class="ml-2">Grupo de dor crônica Menos dor mais saúde</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades" value="Peso_saudavel" onfocus="this.blur()">
                              <span class="ml-2">Grupo funcional peso saudável</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades" value="Geracao_esporte" onfocus="this.blur()">
                              <span class="ml-2">Geração Esporte</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades" value="NDA" onfocus="this.blur()">
                              <span class="ml-2">Não participa de nenhuma atividade ou grupo</span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- 8º tópico: Atividades ou grupos operativos dos quais o usuário já participou -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-4">Atividades ou grupos operativos dos quais o usuário já participou:</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="grid grid-cols-1 gap-4">
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades_passadas" value="Mova_se_RA" onfocus="this.blur()">
                              <span class="ml-2">Grupo de caminhada MOVA-SE</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades_passadas" value="Mais_saude_RA" onfocus="this.blur()">
                              <span class="ml-2">Grupo de dor crônica Menos dor mais saúde</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades_passadas" value="Peso_saudavel_RA" onfocus="this.blur()">
                              <span class="ml-2">Grupo funcional peso saudável</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades_passadas" value="Geracao_esporte_RA" onfocus="this.blur()">
                              <span class="ml-2">Geração Esporte</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="atividades_passadas" value="NDA_RA" onfocus="this.blur()">
                              <span class="ml-2">Nunca participou das atividades ou grupos acima</span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- ///////////////////////////////////////////////////////////////////////////////////-->

                      <!-- 5º tópico: Atenção Secundária -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="text-lg font-bold mb-2">Sessão exclusiva para atenção secundária</h2>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="condicao_funcional">Condição funcional atual do paciente:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="funcional_condicao" id="condicao-funcional" placeholder="Digite a condição funcional do paciente"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="tratamento_ofertado">Tratamento ofertado:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tratamento_ofertado" id="fatores-ambientais" placeholder="Digite os fatores ambientais e pessoais"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="evolucao_funcional">Evolução funcional do usuário desde o início:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="evolucao_funcional" id="diagnostico-fisioterapeutico" placeholder="Digite o diagnóstico fisioterapêutico"></textarea>
                        </div>
                      </div>

                      <!-- 6º tópico: Sessões Realizadas -->
                      <div class="border-b border-gray-300 mb-6">
                        <h2 class="block text-sm font-bold">Número de sessões realizadas:</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="grid grid-cols-1 gap-4">
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="sessoes" value="Menos_de_10" onfocus="this.blur()">
                              <span class="ml-2">Menos de 10</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="sessoes" value="10_à_20" onfocus="this.blur()">
                              <span class="ml-2">10-20</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="sessoes" value="20_à_30" onfocus="this.blur()">
                              <span class="ml-2">20-30</span>
                            </label>
                            
                            <label class="flex items-center">
                              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-500 shadow-md" name="sessoes" value="Mais_de_30" onfocus="this.blur()">
                              <span class="ml-2">Mais de 30</span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- 7º tópico: Assiduidade do paciente -->
                      <div class="mb-4">
                          <label class="block text-sm font-bold">Assiduidade do paciente:</label>
                          <div class="flex">
                            <label class="inline-flex items-center mr-4">
                              <input type="radio" class="form-radio h-5 w-5 text-blue-500" name="assiduidade" value="assiduo" onfocus="this.blur()">
                              <span class="ml-2">Assíduo</span>
                            </label>
                            <label class="inline-flex items-center">
                              <input type="radio" class="form-radio h-5 w-5 text-blue-500" name="assiduidade" value="nao_assiduo" onfocus="this.blur()">
                              <span class="ml-2">Não assíduo</span>
                            </label>
                          </div>
                        </div>

                      <!-- 8º tópico: Fatores Ambientais e Pessoais -->

                      <div class="border-b border-gray-300 mb-6">
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="ambientais_pessoais">Fatores ambientais e pessoais:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ambientais_pessoais" id="fatores-ambientais-pessoais" placeholder="Digite os fatores ambientais e pessoais"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="diagnostico_fisioterapeutico">Diagnóstico fisioterapêutico:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="diagnostico_fisio" id="diagnostico-fisioterapeutico" placeholder="Digite o diagnóstico fisioterapêutico"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="criterios">Critérios para alta fisioterapêutica do setor secundário:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="criterios" id="criterios" placeholder="Digite os critérios para alta fisioterapêutica"></textarea>
                        </div>
                        <div class="mb-6">
                          <label class="block text-sm font-bold" for="justificativa">Justificativa para contrarreferência para a APS:</label>
                          <textarea class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="justificativa" id="justificativa" placeholder="Digite a justificativa da contrarreferência para a APS"></textarea>
                        </div>
                      </div>

                      <!-- ///////////////////////////////////////////////////////////////////////////////////-->

                      <!-- Botões de salvar e cancelar -->
                      <div class="flex justify-end mt-4">
                        <button type="button" id="btnCancelar" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg mr-4" style="background-color: #ef4444; box-shadow: 0px 6px 6px -3px rgba(0,0,0,0.5);">Cancelar</button>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg shadow-lg" style="background-color: #186f65; box-shadow: 0px 6px 6px -3px rgba(0,0,0,0.5);">Salvar</button>
                      </div>
                    </form>
                </div>
              </div>
          </div>
      </div>
  </div> <!-- Fechamento da div max-w-4xl -->

  <style>

  /* Estilos para o campo de entrada */
  .input-field {
    /* Adicione seus estilos personalizados aqui, se necessário */
  }

  /* Ocultar as setinhas de aumento e redução */
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  input[type=number] {
    -moz-appearance: textfield; /* Firefox */
  }

  </style>

  <script>
    // Adicionando um evento de clique ao botão "Cancelar"
    document.getElementById('btnCancelar').addEventListener('click', function() {
      // Oculta o modal
      document.getElementById('modalNovoPaciente').style.display = 'none';
      // Remove o backdrop
      var backdrop = document.querySelector('.modal-backdrop');
      if (backdrop) {
        console.log(backdrop)
        // backdrop.classList.remove
        const body=document.getElementById('app-body');
        body.classList.remove('modal-open');
        body.removeChild(backdrop);
      }
      
    });

    function toggleField(checkbox) {
      var target = document.getElementById(checkbox.dataset.target);
      target.classList.toggle("hidden");
    }

    function toggleDetails(atendimentoId) {
        console.log(atendimentoId)
        const details = document.getElementById(`detalhes-${atendimentoId}`);
        details.classList.toggle('d-none')
    }

    // Função para permitir apenas números em um campo de entrada
function allowOnlyNumbers(inputElement) {
    inputElement.addEventListener('keydown', function (event) {
        // Permitir teclas especiais como backspace, delete, setas de navegação, etc.
        if (event.key === 'Backspace' || event.key === 'Delete' || event.key === 'ArrowLeft' || event.key === 'ArrowRight' || event.key === 'Tab') {
            return; // Permitir a tecla
        }

        // Verificar se a tecla pressionada é um número
        if (isNaN(parseInt(event.key))) {
            event.preventDefault(); // Impedir a entrada
        }
    });
  }
    // Aplicar a funcionalidade a todos os campos que precisam aceitar apenas números
    const idadeInput = document.getElementById('idade');
    allowOnlyNumbers(idadeInput);

    const contatoInput = document.getElementById('contato');
    allowOnlyNumbers(contatoInput);

    const cartaoSusInput = document.getElementById('cartao_sus');
    allowOnlyNumbers(cartaoSusInput);

  </script>

