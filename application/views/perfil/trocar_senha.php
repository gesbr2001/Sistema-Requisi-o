<div class="mb-4">
    <h2 class="mb-0">
        <?= $titulo ?>
    </h2>
    <p class="text-muted">Não esqueça sua senha!</p>
</div>

<div class="card border-0 shadow-sm mx-auto" style="border-radius: 15px; max-width: 500px;">
    <div class="card-body p-4">
        <?php if ($this->session->flashdata('sucesso')): ?>
            <div class="alert alert-success border-0 shadow-sm mb-4" style="border-radius: 10px;">
                <i class="fas fa-check-circle me-2"></i>
                <?= $this->session->flashdata('sucesso') ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('erro')): ?>
            <div class="alert alert-danger border-0 shadow-sm mb-4" style="border-radius: 10px;">
                <i class="fas fa-exclamation-circle me-2"></i>
                <?= $this->session->flashdata('erro') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('perfil/salvar_senha') ?>" method="post">
            <div class="mb-3">
                <label for="senha_atual" class="form-label fw-bold">Senha Atual</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px;">
                        <i class="fas fa-lock text-muted"></i>
                    </span>
                    <input type="password" class="form-control border-start-0" id="senha_atual" name="senha_atual"
                        required placeholder="Digite a senha atual" style="border-radius: 0 10px 10px 0;">
                </div>
            </div>

            <hr class="my-4 opacity-25">

            <div class="mb-3">
                <label for="nova_senha" class="form-label fw-bold">Nova Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px;">
                        <i class="fas fa-key text-muted"></i>
                    </span>
                    <input type="password" class="form-control border-start-0" id="nova_senha" name="nova_senha"
                        required placeholder="Digite a nova senha" style="border-radius: 0 10px 10px 0;">
                </div>
            </div>

            <div class="mb-4">
                <label for="confirmar_senha" class="form-label fw-bold">Confirmar Nova Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px;">
                        <i class="fas fa-check text-muted"></i>
                    </span>
                    <input type="password" class="form-control border-start-0" id="confirmar_senha"
                        name="confirmar_senha" required placeholder="Confirme a nova senha"
                        style="border-radius: 0 10px 10px 0;">
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2 fw-bold" style="border-radius: 10px;">
                    <i class="fas fa-save me-2"></i> Atualizar Senha
                </button>
            </div>
        </form>
    </div>
</div>