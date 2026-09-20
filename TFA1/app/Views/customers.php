<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyPOS | Customer Accounts</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body class="customersPage">
    <header class="navbar">
        <a href="<?= base_url('/') ?>" class="navbarBrand">
            My<span>POS</span>
        </a>

        <nav class="navbarLinks">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/about') ?>">About</a>
            <a href="<?= base_url('/customers') ?>" class="active">Customer Accounts</a>
            <a href="<?= base_url('/users') ?>">User Accounts</a>
        </nav>
    </header>

    <main class="customersMain">
        <div class="customersContainer">
            <div class="customersHeader">
                <div class="customersHeading">
                    <p class="customersLabel">CUSTOMERS</p>

                    <h1 class="customersTitle">
                        Customer <span>Accounts</span>
                    </h1>

                    <p class="customersDescription">
                        View the list of registered customers in the system.
                    </p>
                </div>

                <div class="customersGraphic">
                    <div class="customersGraphicIcon">♟</div>

                    <div class="customersGraphicLine"></div>

                    <p>
                        Valued<br>
                        Customers<br>
                        Stronger<br>
                        Business.
                    </p>
                </div>
            </div>

            <div class="customersTableContainer">
                <table class="customersTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($customers as $index => $customer): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td class="customersName"><?= esc($customer['full_name']) ?></td>
                                <td><?= esc($customer['email']) ?></td>
                                <td><?= esc($customer['phone']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="customersFooter">
                <div class="customersFooterBrand">
                    <p>My<span>POS</span></p>
                    <div class="customersFooterLine"></div>
                    <span>Simple Sales. Stronger Business.</span>
                </div>

                <div class="customersFooterInfo">
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