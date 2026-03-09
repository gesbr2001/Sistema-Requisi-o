<div class="mb-4">
    <h2 class="mb-0">
        <?= $titulo ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('configuracao') ?>">Configurações</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('configuracao/usuarios') ?>">Usuários</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $titulo ?>
            </li>
        </ol>
    </nav>
</div>

<div class="card border-0 shadow-sm mx-auto" style="border-radius: 15px; max-width: 700px;">
    <div class="card-body p-4">
        <form action="<?= base_url('configuracao/usuario_salvar') ?>" method="post">
            <input type="hidden" name="id" value="<?= isset($usuario) ? $usuario->id : '' ?>">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label fw-bold">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                        value="<?= isset($usuario) ? $usuario->nome : '' ?>" required placeholder="Ex: João Silva"
                        style="border-radius: 10px;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label fw-bold">E-mail (Login)</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?= isset($usuario) ? $usuario->email : '' ?>" required placeholder="exemplo@unifarma"
                        style="border-radius: 10px;">
                </div>
            </div>

            <div class="mb-4">
                <label for="perfil" class="form-label fw-bold">Perfil de Acesso</label>
                <select class="form-select" id="perfil" name="perfil" required style="border-radius: 10px;">
                    <option value="" disabled <?= !isset($usuario) ? 'selected' : '' ?>>Selecione um perfil...</option>
                    <option value="admin" <?= (isset($usuario) && $usuario->perfil == 'admin') ? 'selected' : '' ?>>
                        Administrador</option>
                    <option value="separador" <?= (isset($usuario) && $usuario->perfil == 'separador') ? 'selected' : '' ?>>Separador</option>
                    <option value="conferidor" <?= (isset($usuario) && $usuario->perfil == 'conferidor') ? 'selected' : '' ?>>Conferidor</option>
                    <option value="expedicao" <?= (isset($usuario) && $usuario->perfil == 'expedicao') ? 'selected' : '' ?>>Expedição</option>
                    <option value="farmaceutico_empresa" <?= (isset($usuario) && $usuario->perfil == 'farmaceutico_empresa') ? 'selected' : '' ?>>Farmacêutico (Empresa)</option>
                    <option value="farmaceutico_cliente" <?= (isset($usuario) && $usuario->perfil == 'farmaceutico_cliente') ? 'selected' : '' ?>>Farmacêutico (Cliente)</option>
                </select>
            </div>

            <?php if (!isset($usuario)): ?>
                <div class="alert alert-info border-0 shadow-sm mb-4" style="border-radius: 10px;">
                    <i class="fas fa-info-circle me-2"></i>
                    A senha padrão para novos usuários é <strong>123456</strong>.
                </div>
            <?php endif; ?>

            <div class="d-flex gap-2 justify-content-end">
                <a href="<?= base_url('configuracao/usuarios') ?>" class="btn btn-light px-4"
                    style="border-radius: 10px;">Cancelar</a>
                <button type="submit" class="btn btn-primary px-4" style="border-radius: 10px;">
                    <i class="fas fa-save me-2"></i>
                    <?= isset($usuario) ? 'Salvar Alterações' : 'Criar Usuário' ?>
                </button>
            </div>
        </form>
    </div>
</div>