<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Impressão de Protocolo
        <?= $r->id ?>
    </title>
    <link rel="icon" href="<?= base_url('assets/favicon_logo.png') ?>" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <style>
        @page {
            margin: 0;
            size: 80mm auto;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            width: 66mm;
            margin: 0 auto;
            padding: 2mm 0;
            font-size: 14px;
            color: #000;
            line-height: 1.3;
        }

        .text-center {
            text-align: center;
        }

        .bold {
            font-weight: 800;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .dashed-line {
            border-bottom: 2px dashed #000;
            margin: 8px 0;
        }

        .header {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .info-row {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }

        .label {
            font-weight: 800;
        }

        .priority-box {
            border: 3px solid #000;
            padding: 8px;
            margin: 10px 0;
            font-size: 20px;
            text-align: center;
        }

        .barcode-container {
            margin-top: 10px;
            text-align: center;
        }

        #barcode {
            max-width: 100%;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="no-print"
        style="background: #f8f9fa; padding: 10px; text-align: center; border-bottom: 1px solid #ddd; margin-bottom: 20px;">
        <button onclick="window.print()"
            style="padding: 10px 20px; cursor: pointer; background: #28a745; color: white; border: none; border-radius: 5px; font-weight: bold;">
            IMPRIMIR AGORA
        </button>
    </div>

    <div class="text-center bold header uppercase">Requisição de Protocolo</div>
    <div class="text-center" style="font-size: 10px;">Gerado em:
        <?= date('d/m/Y H:i:s') ?>
    </div>

    <div class="dashed-line"></div>

    <div class="priority-box bold uppercase">
        Prioridade:
        <?= $r->prioridade ?>
    </div>

    <div class="info-row">
        <span class="label">Requisicao:</span>
        <span>
            <?= $r->numero_requisicao ?>
        </span>
    </div>

    <div class="dashed-line"></div>

    <div style="margin-bottom: 10px;">
        <div class="label uppercase">Local Solicitante:</div>
        <div class="uppercase" style="font-size: 14px; margin-top: 2px;">
            <?= $r->destino_nome ?>
        </div>
    </div>

    <div class="info-row">
        <span class="label">Tipo:</span>
        <span class="uppercase">
            <?= $r->tipo_requisicao ?>
        </span>
    </div>
    <div class="info-row">
        <span class="label">Grupo:</span>
        <span class="uppercase">
            <?= $r->grupo ?>
        </span>
    </div>

    <?php if (!empty($r->observacao)): ?>
        <div class="dashed-line"></div>
        <div class="label uppercase">Observação:</div>
        <div style="font-size: 11px; margin-top: 2px;">
            <?= $r->observacao ?>
        </div>
    <?php endif; ?>

    <div class="dashed-line"></div>

    <div class="barcode-container">
        <svg id="barcode"></svg>
    </div>

    <div class="dashed-line"></div>
    <div class="text-center" style="font-size: 9px; margin-top: 5px;">Sistema de Protocolo - Gabriel Estrela</div>

    <script>
        JsBarcode("#barcode", "<?= $r->numero_requisicao ?>", {
            format: "CODE128",
            width: 1.8,
            height: 60,
            displayValue: true,
            fontSize: 16,
            fontOptions: "bold",
            margin: 0
        });

        // Auto print and close if no-print button wasn't clicked within 1s
        window.onload = function () {
            // Descomente abaixo se quiser que abra o diálogo de impressão automaticamente
            // window.print();
        };
    </script>
</body>

</html>