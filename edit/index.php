<div style="padding: 20px;">
    <link rel="stylesheet" href="pico.min.css">
    <form action="controllers/update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="title">Title:</label>
        <br>
        <input value="<?php echo $_GET['title']; ?>" type="text" name="title" id="title">
        <br><br>
        <label for="description">Description:</label>
        <br>
        <textarea name="description" id="description"><?php echo $_GET['description']; ?>
    </textarea>
        <br><br>
        <label for="date">Date:</label>
        <br>
        <input value="<?php echo $_GET['init_date']; ?>" value="" type="date" name="init_date" id="init_date">
        <br><br>
        <label for="cost">Cost:</label>
        <br>
        <input value="<?php echo $_GET['cost']; ?>" value="" type="number" name="cost" id="cost">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>