<h3>Editar Requisição #<?= $requisicao->id ?></h3>

<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url('protocolo/atualizar/'.$requisicao->id) ?>">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Locais Solicitantes</label>
                    <select name="destino_id" class="form-select" required>
                        <?php foreach($destinos as $d): ?>
                            <option value="<?= $d->id ?>" <?= $d->id == $requisicao->destino_id ? 'selected' : '' ?>>
                                <?= $d->locais_solicitantes ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Grupo</label>
                    <select name="grupo" class="form-select" required>
                        <?php 
                        $grupos = ['ATENÇÃO BASICA', 'HOSPITALAR', 'ESPECIALIZADA', 'EXTRA', 'ESTRATEGICO', 'ODONTO', 'NUTRICAO'];
                        foreach($grupos as $g): ?>
                            <option value="<?= $g ?>" <?= $g == $requisicao->grupo ? 'selected' : '' ?>><?= $g ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Tipo</label>
                    <select name="tipo_requisicao" class="form-select" required>
                        <?php 
                        $tipos = ['INSULINA', 'MEDICAMENTO', 'MMH', 'CONTROLADO', 'CURATIVO ESPECIAL'];
                        foreach($tipos as $t): ?>
                            <option value="<?= $t ?>" <?= $t == $requisicao->tipo_requisicao ? 'selected' : '' ?>><?= $t ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Número da Requisição</label>
                    <input type="text" name="numero_requisicao" class="form-control" value="<?= $requisicao->numero_requisicao ?>" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Centro de Custo</label>
                    <select name="centro_custo" class="form-select" required>
                        <?php 
                        $centros = ['CAF', 'ITENS CRITICOS', 'ODONTO', 'DEMANJA JUDICIAL', 'NUTRICÇÃO', 'DST AIDS'];
                        foreach($centros as $c): ?>
                            <option value="<?= $c ?>" <?= $c == $requisicao->centro_custo ? 'selected' : '' ?>><?= $c ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Entrega / Status</label>
                    <select name="entrega_status" class="form-select" required>
                        <?php 
                        $status_entrega = ['QUINZENAL', 'PEDIDO MENSAL', 'PEDIDO SEMANAL', 'EXTRA', 'PERMUTA', 'DOACAO', 'EMPRESTIMO', 'TRANSFERENCIA'];
                        foreach($status_entrega as $se): ?>
                            <option value="<?= $se ?>" <?= $se == $requisicao->status_protocolo ? 'selected' : '' ?>><?= $se ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label class="form-label">Observações</label>
                    <textarea name="observacao_protocolo" class="form-control" rows="3"><?= $requisicao->observacao_protocolo ?></textarea>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="<?= base_url('protocolo') ?>" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>
