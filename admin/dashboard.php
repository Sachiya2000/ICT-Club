<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Dashboard</title>
<link rel="stylesheet" href="../src/css/dashboard.css">
</head>
<body>

<header>
  <h1>Dashboard</h1>
  <nav>
    <ul>
      <li><a href="#overview">Overview</a></li>
      <li><a href="#analytics">Analytics</a></li>
      <li><a href="#settings">Settings</a></li>
    </ul>
  </nav>
</header>

<main>
  <section id="overview" class="section">
    <div class="card">
      <h2>Users</h2>
      <p>Total: 100</p>
    </div>
    <div class="card">
      <h2>Orders</h2>
      <p>Total: 50</p>
    </div>
  </section>

  <section id="analytics" class="section">
    <h2>Function</h2>
    <div id="chartContainer" class="chart">
        <a href="./event_registration.php" class="Box-btn" id="box-btn" style="padding: 20px 20px;
        background-color: red;">Add Event</a>
        <a href="./register.php" class="Box-btn" id="box-btn" style="padding: 20px 20px;
        background-color: red;">Add Admin</a>
        <a href="./upcoming_Event_view.php" class="Box-btn" id="box-btn" style="padding: 20px 20px;
        background-color: red;">Upcoming List</a>
        <a href="./previouse_Event_View.php" class="Box-btn" id="box-btn" style="padding: 20px 20px;
        background-color: red;">Previous List</a>
    </div>
  </section>

  <section id="settings" class="section">
    <h2>Settings</h2>
    <form>
      <label for="theme">Choose a theme:</label>
      <select id="theme" name="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
      </select>
      <button type="submit">Apply</button>
    </form>
  </section>
</main>

<script src="../src/js/dashboard.js"></script>
</body>
</html>
