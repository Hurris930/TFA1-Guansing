<section class="hero section-pad">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">IT operations workspace</span>
            <h1>Focused work for a reliable digital day.</h1>
            <p>Welcome to the Guansing IT Solutions internal portal. Review the priorities scheduled for today and keep essential technology work moving.</p>
            <a class="button-link" href="<?= base_url('/tasks') ?>">View complete task list <span aria-hidden="true">&rarr;</span></a>
        </div>

        <aside class="date-card" aria-label="Today's task summary">
            <svg class="line-icon" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 3v3M17 3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v14H4V6a1 1 0 0 1 1-1Z"/>
            </svg>
            <span>Asia/Manila</span>
            <strong><?= esc($todayLabel) ?></strong>
            <p><b><?= esc(count($tasks)) ?></b> <?= count($tasks) === 1 ? 'task' : 'tasks' ?> scheduled today</p>
        </aside>
    </div>
</section>

<section class="section-pad section-surface">
    <div class="container">
        <div class="section-heading">
            <div>
                <span class="eyebrow">Daily queue</span>
                <h2>Today's tasks</h2>
            </div>
            <span class="date-chip"><?= esc($today) ?></span>
        </div>

        <?php if ($tasks !== []): ?>
            <div class="task-grid">
                <?php foreach ($tasks as $task): ?>
                    <?php $statusClass = $task['status'] === 'completed' ? 'status--completed' : 'status--pending'; ?>
                    <article class="task-card">
                        <div class="task-card-top">
                            <span class="task-id">Task #<?= esc($task['id']) ?></span>
                            <span class="status-badge <?= $statusClass ?>"><?= esc(ucfirst($task['status'])) ?></span>
                        </div>
                        <h3><?= esc($task['title']) ?></h3>
                        <div class="task-meta">
                            <span>Scheduled <?= esc(date('M j, Y', strtotime($task['task_date']))) ?></span>
                            <span>Created <?= esc(date('M j, Y', strtotime($task['created_at']))) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <svg class="line-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M9 11l2 2 4-4M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"/>
                </svg>
                <h3>No tasks scheduled for today</h3>
                <p>The daily queue is clear. Visit the complete task list to review upcoming work.</p>
                <a class="text-link" href="<?= base_url('/tasks') ?>">Open task list</a>
            </div>
        <?php endif; ?>
    </div>
</section>

