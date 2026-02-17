<form action="/submit" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <?php if(isset($errors['name'])): ?>
            <span class="error"><?php echo $errors['name']; ?></span>
        <?php endif; ?>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <?php if(isset($errors['email'])): ?>
            <span class="error"><?php echo $errors['email']; ?></span>
        <?php endif; ?>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <?php if(isset($errors['message'])): ?>
            <span class="error"><?php echo $errors['message']; ?></span>
        <?php endif; ?>
    </div>
    <button type="submit">Submit</button>
</form>