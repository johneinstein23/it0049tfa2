<?= view('layout/header', ['title' => $title]) ?>
<div class="page-heading">
    <div>
        <p class="eyebrow">MySQL table: users</p>
        <h1>User Accounts</h1>
    </div>
    <a class="button" href="<?= base_url('/') ?>">Back to dashboard</a>
</div>
<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Username</th><th>Full Name</th><th>Created At</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['id']) ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= view('layout/footer') ?>
