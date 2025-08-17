<h2>Form for launching a new planet</h2>
<form action="/planets" method="POST">
    @csrf

    <label for="name">Title:</label>
    <input type="text" id="name" name="name" required>

    <label for="solar_system">Solar system:</label>
    <input type="text" id="solar_system" name="solar_system" required>

    <button type="submit">Launch</button>
</form>
