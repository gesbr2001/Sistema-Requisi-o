<h3>Separação</h3>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th class="text-center">Prioridade</th>
                <th class="text-center">Status</th>
                <th>Separador / Enviar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($requisicoes as $r): ?>
            <tr>
                <td><strong>#<?= $r->id ?></strong></td>
                <td><?= $r->destino_nome ?></td>
                <td><?= $r->numero_requisicao ?></td>
                <td><?= $r->grupo ?></td>
                <td><?= $r->tipo_requisicao ?></td>
                <td class="text-center">
                    <span class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                        <?= $r->prioridade ?>
                    </span>
                </td>
                <td class="text-center">
                    <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                        <?= strtoupper($r->status) ?>
                    </span>
                </td>
                <td>
                    <form method="post" action="<?= base_url('separacao/enviarConferencia/'.$r->id) ?>" class="d-flex gap-2">
                        <select name="separador" class="form-select form-select-sm" required style="width: 150px; border-radius: 8px;">
                            <option value="">Selecione...</option>
                            <option value="Luciano">Luciano</option>
                            <option value="Kalyne">Kalyne</option>
                            <option value="Bruno Ricardo">Bruno Ricardo</option>
                            <option value="Cristina">Cristina</option>
                            <option value="Michel">Michel</option>
                            <option value="Eduardo">Eduardo</option>
                            <option value="Junior">Junior</option>
                            <option value="Samuel">Samuel</option>
                            <option value="Raline Newton">Raline Newton</option>
                            <option value="Damiana">Damiana</option>
                            <option value="Gilberto">Gilberto</option>
                            <option value="Jerssica">Jerssica</option>
                            <option value="Paula">Paula</option>
                            <option value="Vanessa Monteiro">Vanessa Monteiro</option>
                            <option value="Julio">Julio</option>
                            <option value="Tayse">Tayse</option>
                            <option value="Mateus">Mateus</option>
                            <option value="Vamberto">Vamberto</option>
                            <option value="Paulo">Paulo</option>
                            <option value="Karla">Karla</option>
                            <option value="Emerson">Emerson</option>
                            <option value="Elvis">Elvis</option>
                            <option value="Cresciano">Cresciano</option>
                            <option value="Edson">Edson</option>
                            <option value="Thalys">Thalys</option>
                            <option value="Pedro">Pedro</option>
                            <option value="Edson Silva">Edson Silva</option>
                            <option value="Mateus Henrique">Mateus Henrique</option>
                            <option value="Claudio">Claudio</option>
                            <option value="Creginaldo">Creginaldo</option>
                        </select>
                        <button type="submit" class="btn btn-success btn-sm">
                            Enviar
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
