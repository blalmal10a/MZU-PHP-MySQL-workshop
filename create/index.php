<link rel="stylesheet" href="pico.min.css">
<div style="padding: 20px;">
    <form action="/controllers/store.php" method="post">
        <label for="title">Title:</label>
        <br>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="description">Description:</label>
        <br>
        <textarea name="description" id="description"></textarea>
        <br><br>
        <label for="date">Date:</label>
        <br>
        <input type="date" name="init_date" id="init_date">
        <br><br>
        <label for="cost">Cost:</label>
        <br>
        <input type="number" name="cost" id="cost">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>