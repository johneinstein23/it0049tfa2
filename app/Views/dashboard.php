<?= view('layout/header', ['title' => $title]) ?>
<section class="hero">
    <p class="eyebrow">IT0049 Technical Formative Assessment 2</p>
    <h1>From Arrays to a Real Database</h1>
    <p>This POS sample application reads customer and user account records from MySQL through CodeIgniter models.</p>
</section>
<section class="card-grid">
    <a class="card" href="<?= base_url('customers') ?>">
        <span class="card-label">Database table</span>
        <h2>Customer Accounts</h2>
        <p>View records retrieved with <code>CustomerModel::findAll()</code>.</p>
    </a>
    <a class="card" href="<?= base_url('users') ?>">
        <span class="card-label">Database table</span>
        <h2>User Accounts</h2>
        <p>View records retrieved with <code>UserModel::findAll()</code>.</p>
    </a>
</section>
<?= view('layout/footer') ?>
