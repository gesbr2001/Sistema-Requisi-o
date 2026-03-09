<div class="mb-4">
    <h2>
        <?= $titulo ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('configuracao') ?>">Configurações</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('configuracao/' . $tipo) ?>">
                    <?= ucfirst($tipo) ?>
                </a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $titulo ?>
            </li>
        </ol>
    </nav>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 15px; max-width: 600px;">
    <div class="card-body p-4">
        <form action="<?= base_url('configuracao/' . $prefixo . '_salvar') ?>" method="post">
            <input type="hidden" name="id" value="<?= isset($item) ? $item->id : '' ?>">

            <div class="mb-4">
                <label for="nome" class="form-label font-weight-bold">Nome / Descrição</label>
                <input type="text" class="form-control form-control-lg" id="nome" name="nome"
                    value="<?= isset($item) ? $item->$campo_nome : '' ?>" required placeholder="Digite o nome..."
                    style="border-radius: 10px;">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4 py-2" style="border-radius: 10px;">
                    <i class="fas fa-save me-2"></i> Salvar Alterações
                </button>
                <a href="<?= base_url('configuracao/' . $tipo) ?>" class="btn btn-light px-4 py-2"
                    style="border-radius: 10px;">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>