<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .text-right { text-align: right; }
    </style>
</head>
<body>
    <h1 style=" text-align: center; color:black;">Invoice Pembayaran</h1>
    <p style="font-size: 13px; color: #444; margin-top: 20px;">
        Downloaded on <?= date('Y-m-d H:i:s') ?>
    </p>

     <table width="100%" cellspacing="0" cellpadding="8" style="border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f5f7fa; color: #667eea;">
                <th style="border: 1px solid #ddd;">No</th>
                <th style="border: 1px solid #ddd;">Produk</th>
                <th style="border: 1px solid #ddd;">Qty</th>
                <th style="border: 1px solid #ddd;">Harga</th>
                <th style="border: 1px solid #ddd;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($items as $item): ?>
            <tr>
                <td style="border: 1px solid #ddd;"><?= $no++ ?></td>
                <td style="border: 1px solid #ddd;"><?= esc($item['name']) ?></td>
                <td style="border: 1px solid #ddd;"><?= $item['qty'] ?></td>
                <td style="border: 1px solid #ddd;">Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
                <td style="border: 1px solid #ddd;">Rp <?= number_format($item['subtotal'], 0, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" style="text-align: right; border: 1px solid #ddd;"><strong>Total</strong></td>
                <td style="border: 1px solid #ddd;"><strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: center; margin-top: 30px; font-size: 14px;">
        Terima kasih telah berbelanja!
    </p>
</body>
</html>
