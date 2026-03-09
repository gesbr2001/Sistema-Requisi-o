<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Gestão de Usuários</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('configuracao') ?>">Configurações</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuários</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex gap-3 align-items-center">
        <form method="get" class="d-flex gap-2">
            <input type="text" name="busca" class="form-control form-control-sm" placeholder="Pesquisar..."
                value="<?= $busca ?? '' ?>" style="width: 200px; border-radius: 10px;">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fas fa-search"></i>
            </button>
            <?php if (!empty($busca)): ?>
                <a href="<?= base_url('configuracao/usuarios') ?>"
                    class="btn btn-outline-secondary btn-sm border-0">Limpar</a>
            <?php endif; ?>
        </form>

        <a href="<?= base_url('configuracao/usuario_novo') ?>" class="btn btn-primary shadow-sm"
            style="border-radius: 10px;">
            <i class="fas fa-plus me-2"></i> Novo Usuário
        </a>
    </div>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 15px;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3" style="width: 80px;">ID</th>
                        <th class="py-3">Usuário</th>
                        <th class="py-3 text-center">Perfil</th>
                        <th class="py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($usuarios)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">
                                <i class="fas fa-info-circle fa-2x mb-3 d-block"></i>
                                Nenhum usuário encontrado.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($usuarios as $u): ?>
                            <tr>
                                <td class="px-4 py-3 text-muted">#
                                    <?= $u->id ?>
                                </td>
                                <td class="py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold">
                                                <?= $u->nome ?>
                                            </div>
                                            <div class="small text-muted">
                                                <?= $u->email ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 text-center">
                                    <span class="badge bg-light text-dark border fw-normal py-2 px-3">
                                        <?= ucfirst(str_replace('_', ' ', $u->perfil)) ?>
                                    </span>
                                </td>
                                <td class="py-3 text-center">
                                    <?php if ($u->status == 1): ?>
                                        <span class="badge bg-success py-2 px-3">Ativado</span>
                                    <?php else: ?>
                                        <span class="badge bg-danger py-2 px-3">Desativado</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3 text-end">
                                    <a href="<?= base_url('configuracao/usuario_editar/' . $u->id) ?>"
                                        class="btn btn-sm btn-outline-primary border-0 me-1" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <?php if ($u->status == 1): ?>
                                        <a href="<?= base_url('configuracao/usuario_status/' . $u->id . '/0') ?>"
                                            class="btn btn-sm btn-outline-danger border-0" title="Desativar"
                                            onclick="return confirm('Deseja realmente desativar este usuário?')">
                                            <i class="fas fa-user-slash"></i>
                    </div>
                <?php else: ?>
                    <a href="<?= base_url('configuracao/usuario_status/' . $u->id . '/1') ?>"
                        class="btn btn-sm btn-outline-success border-0" title="Ativar">
                        <i class="fas fa-user-check"></i>
                    </a>
                <?php endif; ?>
                </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
        </table>
    </div>
</div>
</div>