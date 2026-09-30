<?= view('layout/header', ['title' => $title]) ?>
<div class="page-heading">
    <div>
        <p class="eyebrow">MySQL table: customers</p>
        <h1>Customer Accounts</h1>
    </div>
    <a class="button" href="<?= base_url('/') ?>">Back to dashboard</a>
</div>
<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Created At</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['id']) ?></td>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone'] ?? '') ?></td>
                <td><?= esc($customer['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= view('layout/footer') ?>
