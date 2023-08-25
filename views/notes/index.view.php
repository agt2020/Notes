<?php require(base_path('views/partials/head.php')); ?>
<?php require(base_path('views/partials/nav.php')); ?>
<?php require(base_path('views/partials/header.php')); ?>

<main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <ul>
                        <?php foreach($notes AS $note) : ?>
                                <li>
                                        <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>">
                                                <?= htmlspecialchars($note['body']) ?>
                                        </a>
                                </li>
                        <?php endforeach; ?>
                </ul>

                <p class="mt-6">
                        <a href="/notes/note-create" class="text-blue-500 hover:underline">Create Note</a>
                </p>
        </div>
</main>

<?php require(base_path('views/partials/footer.php')); ?>