<h3>Novo Protocolo</h3>

<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url('protocolo/salvar') ?>">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Locais Solicitantes</label>
                    <select name="destino_id" class="form-select" required>
                        <option value="">Selecione um local</option>
                        <?php foreach($destinos as $d): ?>
                            <option value="<?= $d->id ?>"><?= $d->locais_solicitantes ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Grupo</label>
                    <select name="grupo" class="form-select" required>
                        <option value="ATENÇÃO BASICA">ATENÇÃO BASICA</option>
                        <option value="HOSPITALAR">HOSPITALAR</option>
                        <option value="ESPECIALIZADA">ESPECIALIZADA</option>
                        <option value="EXTRA">EXTRA</option>
                        <option value="ESTRATEGICO">ESTRATEGICO</option>
                        <option value="ODONTO">ODONTO</option>
                        <option value="NUTRICAO">NUTRICAO</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label">Tipo</label>
                    <select name="tipo_requisicao" class="form-select" required>
                        <option value="INSULINA">INSULINA</option>
                        <option value="MEDICAMENTO">MEDICAMENTO</option>
                        <option value="MMH">MMH</option>
                        <option value="CONTROLADO">CONTROLADO</option>
                        <option value="CURATIVO ESPECIAL">CURATIVO ESPECIAL</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Número da Requisição</label>
                    <input type="text" name="numero_requisicao" class="form-control" placeholder="Principal" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Centro de Custo</label>
                    <select name="centro_custo" class="form-select" required>
                        <option value="CAF">CAF</option>
                        <option value="ITENS CRITICOS">ITENS CRITICOS</option>
                        <option value="ODONTO">ODONTO</option>
                        <option value="DEMANJA JUDICIAL">DEMANJA JUDICIAL</option>
                        <option value="NUTRICÇÃO">NUTRICÇÃO</option>
                        <option value="DST AIDS">DST AIDS</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Entrega / Status</label>
                    <select name="entrega_status" class="form-select" required>
                        <option value="QUINZENAL">QUINZENAL</option>
                        <option value="PEDIDO MENSAL">PEDIDO MENSAL</option>
                        <option value="PEDIDO SEMANAL">PEDIDO SEMANAL</option>
                        <option value="EXTRA">EXTRA</option>
                        <option value="PERMUTA">PERMUTA</option>
                        <option value="DOACAO">DOACAO</option>
                        <option value="EMPRESTIMO">EMPRESTIMO</option>
                        <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label class="form-label">Observações</label>
                    <textarea name="observacao_protocolo" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar Requisição</button>
                <a href="<?= base_url('protocolo') ?>" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>
