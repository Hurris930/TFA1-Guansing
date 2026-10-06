<section class="page-banner section-pad-sm">
    <div class="container">
        <span class="eyebrow">Employee directory</span>
        <h1>Administrator Profile</h1>
        <p>The designated administrator for the Guansing IT Solutions task portal.</p>
    </div>
</section>

<section class="section-pad section-surface">
    <div class="container profile-wrap">
        <?php if ($user !== null): ?>
            <article class="profile-card">
                <div class="profile-identity">
                    <div class="avatar" aria-hidden="true">HG</div>
                    <div>
                        <span class="status-dot"><i></i> Active administrator</span>
                        <h2><?= esc($user['full_name']) ?></h2>
                        <p>IT Systems Administrator</p>
                    </div>
                </div>

                <dl class="profile-details">
                    <div>
                        <dt>Username</dt>
                        <dd><?= esc($user['username']) ?></dd>
                    </div>
                    <div>
                        <dt>Full name</dt>
                        <dd><?= esc($user['full_name']) ?></dd>
                    </div>
                    <div>
                        <dt>Email</dt>
                        <dd><a href="mailto:<?= esc($user['email']) ?>"><?= esc($user['email']) ?></a></dd>
                    </div>
                    <div>
                        <dt>Created date</dt>
                        <dd><?= esc(date('F j, Y g:i A', strtotime($user['created_at']))) ?></dd>
                    </div>
                </dl>
            </article>
        <?php else: ?>
            <div class="empty-state">
                <h2>Profile unavailable</h2>
                <p>No demo user was found in the users table.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

