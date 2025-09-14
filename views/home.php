    <?php include 'views/partials/pageHead.php'; ?>
    <?php include 'views/partials/navbar.php'; ?>
    <!-- Customize the body below -->
      <h1>Book List</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?php echo htmlspecialchars($book['title']) . ' by ' . htmlspecialchars($book['author']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>