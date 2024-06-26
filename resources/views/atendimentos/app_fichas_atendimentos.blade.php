<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center text-header-color">
            {{ __('Fichas do Paciente') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4"></h1>

        <!-- Tabela para listar as fichas de atendimento -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr class="text-header-color">
                            <th scope="col" class="w-1/5 px-20 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                            <th scope="col" class="w-1/5 px-20 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo de Atenção</th>
                            <th scope="col" class="w-1/5 px-20 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fichas as $ficha)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ \Carbon\Carbon::parse($ficha->created_at)->format('d/m/Y') }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $ficha->tipo_ficha }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <button class=" icon bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="background-color: #186f65; box-shadow: 0px 6px 6px -3px rgba(0,0,0,0.5);" data-toggle="modal" data-target="#viewFichaModal{{ $ficha->id }}">
                                    Visualizar
                                </button>
                                <!-- Modals for viewing details -->
                                <div class="modal fade" id="viewFichaModal{{ $ficha->id }}" tabindex="-1" role="dialog" aria-labelledby="viewFichaModalLabel{{ $ficha->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewFichaModalLabel{{ $ficha->id }}">Ficha de Atendimento</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-start">
                                                @if($ficha->tipo_ficha == 'Primário')
                                                    <!-- Campos para atenção primária -->
                                                    <p><strong>Tipo de Ficha:</strong> Primário</p>
                                                    <p><strong>Motivos:</strong></p>
                                                    <ul>
                                                        @foreach($ficha->motivoDescricoes as $motivoDescricao)
                                                            @if($motivoDescricao->descricao)
                                                                <li>{{ $motivoDescricao->motivo }}: {{ $motivoDescricao->descricao }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <p><strong>Queixa:</strong> {{ $ficha->queixa ?? 'N/A' }}</p>
                                                    <p><strong>Achados do Exame Físico:</strong> {{ $ficha->achados_exame_fisico ?? 'N/A' }}</p>
                                                    <p><strong>Testes Padronizados:</strong> {{ $ficha->testes_padronizados ?? 'N/A' }}</p>
                                                    <p><strong>Condição Funcional:</strong> {{ $ficha->condicao_funcional ?? 'N/A' }}</p>
                                                    <p><strong>Fatores Ambientais e Pessoais:</strong> {{ $ficha->fatores_ambientais ?? 'N/A' }}</p>
                                                    <p><strong>Diagnóstico Fisioterapêutico:</strong> {{ $ficha->diagnostico_fisioterapeutico ?? 'N/A' }}</p>
                                                    <p><strong>Atividades:</strong>
                                                        @php
                                                            $atividades = json_decode($ficha->atividades, true);
                                                        @endphp
                                                        {{ is_array($atividades) ? implode(', ', $atividades) : 'N/A' }}
                                                    </p>
                                                    <p><strong>Atividades Passadas:</strong>
                                                        @php
                                                            $atividades_passadas = json_decode($ficha->atividades_passadas, true);
                                                        @endphp
                                                        {{ is_array($atividades_passadas) ? implode(', ', $atividades_passadas) : 'N/A' }}
                                                    </p>
                                                @elseif($ficha->tipo_ficha == 'Secundário')
                                                    <!-- Campos para atenção secundária -->
                                                    <p><strong>Tipo de Ficha:</strong> Secundário</p>
                                                    <p><strong>Condição Funcional:</strong> {{ $ficha->funcional_condicao ?? 'N/A' }}</p>
                                                    <p><strong>Tratamento Ofertado:</strong> {{ $ficha->tratamento_ofertado ?? 'N/A' }}</p>
                                                    <p><strong>Evolução Funcional:</strong> {{ $ficha->evolucao_funcional ?? 'N/A' }}</p>
                                                    <p><strong>Sessões:</strong> {{ is_array($ficha->sessoes) ? implode(', ', $ficha->sessoes) : 'N/A' }}</p>
                                                    <p><strong>Assiduidade:</strong> {{ $ficha->assiduidade ?? 'N/A' }}</p>
                                                    <p><strong>Fatores Ambientais e Pessoais:</strong> {{ $ficha->ambientais_pessoais ?? 'N/A' }}</p>
                                                    <p><strong>Diagnóstico Fisioterapêutico:</strong> {{ $ficha->diagnostico_fisio ?? 'N/A' }}</p>
                                                    <p><strong>Critérios:</strong> {{ $ficha->criterios ?? 'N/A' }}</p>
                                                    <p><strong>Justificativa:</strong> {{ $ficha->justificativa ?? 'N/A' }}</p>
                                                @endif
                                                <p><strong>Criado em:</strong> {{ $ficha->created_at }}</p>
                                                <p><strong>Atualizado em:</strong> {{ $ficha->updated_at }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class=" icon bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg" style="background-color: #ef4444; box-shadow: 0px 6px 6px -3px rgba(0,0,0,0.5);" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
