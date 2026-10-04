<!-- users.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyPOS | User Accounts</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body class="usersPage">
    <header class="navbar">
        <a href="<?= base_url('/') ?>" class="navbarBrand">
            My<span>POS</span>
        </a>

        <nav class="navbarLinks">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/about') ?>">About</a>
            <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
            <a href="<?= base_url('/users') ?>" class="active">User Accounts</a>
        </nav>
    </header>

    <main class="usersMain">
        <div class="usersContainer">
            <div class="usersHeader">
                <div class="usersHeading">
                    <p class="usersLabel">USERS</p>

                    <h1 class="usersTitle">
                        User <span>Accounts</span>
                    </h1>

                    <p class="usersDescription">
                        View the list of registered staff accounts in the system.
                    </p>
                </div>

                <div class="usersGraphic">
                    <div class="usersGraphicIcon">♟</div>

                    <div class="usersGraphicLine"></div>

                    <p>
                        Great Team.<br>
                        Better Service.<br>
                        Stronger<br>
                        Business.
                    </p>
                </div>
            </div>

            <div class="usersTableContainer">
                <table class="usersTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $index => $user): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td class="usersUsername"><?= esc($user['username']) ?></td>
                                <td><?= esc($user['full_name']) ?></td>
                                <td>
                                     <span class="usersRole">
                                        <?= esc($user['created_at']) ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="usersFooter">
                <div class="usersFooterBrand">
                    <p>My<span>POS</span></p>

                    <div class="usersFooterLine"></div>

                    <span>Simple Sales. Stronger Business.</span>
                </div>

                <div class="usersFooterInfo">
                    <span>Hurris Guansong</span>
                    <span>|</span>
                    <span>TC32</span>
                    <span>|</span>
                    <span>BSITCST</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>