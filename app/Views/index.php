<section class="page-banner section-pad-sm">
    <div class="container page-banner-grid">
        <div>
            <span class="eyebrow">Operations overview</span>
            <h1>Task List</h1>
            <p>Every assigned task, organized by task date in ascending order.</p>
        </div>
        <div class="metric-card">
            <span>Total records</span>
            <strong><?= esc(count($tasks)) ?></strong>
        </div>
    </div>
</section>

<section class="section-pad section-surface">
    <div class="container">
        <?php if ($tasks !== []): ?>
            <div class="table-shell">
                <table>
                    <caption class="sr-only">All tasks ordered by task date</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Task date</th>
                            <th scope="col">Created date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $task): ?>
                            <?php $statusClass = $task['status'] === 'completed' ? 'status--completed' : 'status--pending'; ?>
                            <tr>
                                <td data-label="ID">#<?= esc($task['id']) ?></td>
                                <td data-label="Title"><strong><?= esc($task['title']) ?></strong></td>
                                <td data-label="Status"><span class="status-badge <?= $statusClass ?>"><?= esc(ucfirst($task['status'])) ?></span></td>
                                <td data-label="Task date"><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                                <td data-label="Created date"><?= esc(date('M j, Y g:i A', strtotime($task['created_at']))) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h2>No tasks available</h2>
                <p>Add task records to the database, then refresh this page.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

