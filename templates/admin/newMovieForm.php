<?php
require_once __DIR__ . '/../_header.php';
?>

<h1>Create new movie</h1>

<form
        action = "index.php"
        methop = "GET"
>
    <input type="hidden" name="action" value="createNewMovie">

    <p>
        Title:
        <input name="title" id="title">

    <p>
        Price:
        <input name="price" id="price">

    <p>
        <input type="submit" value="Submit">

</form>

<?php
require_once __DIR__ . '/../_footer.php';
?>