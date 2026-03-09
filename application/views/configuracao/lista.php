<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>
            <?= $titulo ?>
        </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('configuracao') ?>">Configurações</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $titulo ?>
                </li>
            </ol>
        </nav>
    </div>
    <a href="<?= base_url('configuracao/' . $prefixo . '_novo') ?>" class="btn btn-primary shadow-sm"
        style="border-radius: 10px;">
        <i class="fas fa-plus me-2"></i> Adicionar <?= $prefixo ?>
    </a>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 15px;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3" style="width: 80px;">ID</th>
                        <th class="py-3">Nome</th>
                        <th class="px-4 py-3 text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($itens)): ?>
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <i class="fas fa-info-circle fa-2x mb-3 d-block"></i>
                                Nenhum item encontrado.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($itens as $item): ?>
                            <tr>
                                <td class="px-4 py-3 text-muted">#
                                    <?= $item->id ?>
                                </td>
                                <td class="py-3"><strong>
                                        <?= $item->$campo_nome ?>
                                    </strong></td>
                                <td class="px-4 py-3 text-end">
                                    <a href="<?= base_url('configuracao/' . $prefixo . '_editar/' . $item->id) ?>"
                                        class="btn btn-sm btn-outline-primary border-0 me-2" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('configuracao/' . $prefixo . '_deletar/' . $item->id) ?>"
                                        class="btn btn-sm btn-outline-danger border-0" title="Excluir"
                                        onclick="return confirm('Tem certeza que deseja excluir este item?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>