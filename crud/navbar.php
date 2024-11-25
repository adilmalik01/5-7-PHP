<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f9;
  color: #333;
}

header {
  background-color: #333;
  padding: 10px 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  align-items: center;
}

.navbar-logo {
  color: #fff;
  font-size: 24px;
  text-decoration: none;
  font-weight: bold;
}

.navbar-links {
  list-style-type: none;
  display: flex;
  gap: 20px;
}

.navbar-link {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  padding: 8px 15px;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.navbar-link:hover {
  background-color: #575757;
}

</style>


<header>
    <nav class="navbar">
      <div class="navbar-container">
        <a href="#" class="navbar-logo">CRUD App</a>
        <ul class="navbar-links">
          <li><a href="./create.php" class="navbar-link">Create</a></li>
          <li><a href="./index.php" class="navbar-link">Read</a></li>
          <li><a href="#update" class="navbar-link">Update</a></li>
          <li><a href="#delete" class="navbar-link">Delete</a></li>
        </ul>
      </div>
    </nav>
  </header>