<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Protocolo</title>
    <style>
        body { font-family: sans-serif; font-size: 11px; color: #333; line-height: 1.4; }
        .header { position: relative; margin-bottom: 30px; border-bottom: 2px solid #0d6efd; padding-bottom: 15px; min-height: 80px; }
        .header-logo { position: absolute; top: 0; left: 0; max-height: 60px; }
        .header-content { text-align: right; }
        .header h1 { margin: 0; color: #1a1a1a; font-size: 22px; text-transform: uppercase; }
        .header p { margin: 2px 0; color: #666; font-size: 10px; }
        
        .section-title { background: #f8f9fa; padding: 6px 10px; font-weight: bold; border-left: 4px solid #0d6efd; margin: 15px 0 10px 0; text-transform: uppercase; font-size: 10px; color: #0d6efd; }
        
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #eee; padding: 8px; text-align: left; }
        th { background: #fcfcfc; font-weight: bold; }
        
        .row { width: 100%; clear: both; }
        .col { width: 48%; float: left; margin-bottom: 20px; }
        .col-right { width: 48%; float: right; margin-bottom: 20px; }
        
        .metrics-grid { margin-bottom: 30px; }
        .metric-card { width: 23%; float: left; border: 1px solid #eee; padding: 10px; margin-right: 1.5%; border-radius: 5px; }
        .metric-card h6 { margin: 0 0 5px 0; color: #666; font-size: 9px; text-transform: uppercase; }
        .metric-card div { font-size: 18px; font-weight: bold; color: #0d6efd; }
        
        .chart-container { text-align: center; margin: 20px 0; }
        .chart-img { max-width: 100%; height: auto; max-height: 250px; }
        
        .footer { position: fixed; bottom: 0; width: 100%; text-align: center; color: #999; font-size: 9px; border-top: 1px solid #eee; padding-top: 5px; }
        
        .page-break { page-break-after: always; }
        .clear { clear: both; }
    </style>
</head>
<body>
    <?php 
        $path = 'assets/logo_unifarma.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    <div class="header">
        <img src="<?= $base64 ?>" class="header-logo">
        <div class="header-content">
            <h1>Relatório de Protocolo</h1>
            <p>Período: <?= date('d/m/Y', strtotime($start_date)) ?> a <?= date('d/m/Y', strtotime($end_date)) ?></p>
            <p>Gerado em: <?= date('d/m/Y H:i:s') ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="section-title">Resumo por Tipo</div>
            <table>
                <thead>
                    <tr><th>Tipo</th><th>Total</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($by_type as $t): ?>
                        <tr><td><?= $t->label ?></td><td><?= $t->value ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-right">
            <div class="section-title">Status</div>
            <table>
                <thead>
                    <tr><th>Status</th><th>Total</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($by_delivery_status as $s): ?>
                        <tr><td><?= $s->label ?></td><td><?= $s->value ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="clear"></div>
    </div>

    <div class="section-title">Distribuição por Grupo</div>
    <div class="row">
        <div class="col">
            <div class="chart-container" style="margin: 0; text-align: left;">
                <?php if ($chart_group): ?>
                    <img src="<?= $chart_group ?>" class="chart-img">
                <?php else: ?>
                    <p style="color: #999;">Gráfico não disponível</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-right">
            <table>
                <thead>
                    <tr><th>Grupo</th><th>Total</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($by_group as $g): ?>
                        <tr><td><?= $g->label ?></td><td><?= $g->value ?></td></tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="clear"></div>
    </div>

    <div class="page-break"></div>

    <div class="section-title">Top 10 Separadores</div>
    <table>
        <thead>
            <tr><th>Separador</th><th>Quantidade</th></tr>
        </thead>
        <tbody>
            <?php foreach (array_slice($by_separator, 0, 10) as $s): ?>
                <tr><td><?= $s->label ?></td><td><?= $s->value ?></td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="section-title">Top 10 Conferentes</div>
    <table>
        <thead>
            <tr><th>Conferente</th><th>Quantidade</th></tr>
        </thead>
        <tbody>
            <?php foreach (array_slice($by_conferente, 0, 10) as $c): ?>
                <tr><td><?= $c->label ?></td><td><?= $c->value ?></td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="section-title">Top 10 Motoristas</div>
    <table>
        <thead>
            <tr><th>Motorista</th><th>Quantidade</th></tr>
        </thead>
        <tbody>
            <?php foreach (array_slice($by_driver, 0, 10) as $d): ?>
                <tr><td><?= $d->label ?></td><td><?= $d->value ?></td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        Relatório Gerado pelo Sistema de Protocolo
    </div>
</body>
</html>
