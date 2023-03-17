<!DOCTYPE html>
<html>
  <head>
    <title>Page 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        background-color: #0c0c0c;
        color: white;
        font-family: sans-serif;
      }

      body.light-mode {
        background-color: white;
        color: black;
      }

      h1 {
        text-align: center;
        font-size: 2rem;
        margin-top: 2rem;
      }

      form {
        max-width: 400px;
        margin: 0 auto;
      }

      input[type="text"],
      textarea {
        display: block;
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: none;
        border-radius: 0.25rem;
        background-color: #1f1f1f;
        color: white;
        font-size: 1rem;
        font-family: inherit;
      }

      textarea {
        height: 6rem;
        resize: vertical;
      }

      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 0.5rem;
        background-color: #00bfff;
        color: white;
        border: none;
        border-radius: 0.25rem;
        font-size: 1.2rem;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #0080ff;
      }

      .mode-button {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        padding: 0.5rem;
        background-color: #00bfff;
        color: white;
        border: none;
        border-radius: 0.25rem;
        font-size: 1rem;
        cursor: pointer;
      }

	h4 {
		text-align: center;
        font-size: 15px;
	}

	p {
		text-align: center;
        font-size: 10px;
		color: #FFFFFF
	}

	a {
		color: #FFFFFF
	}

    </style>
  </head>
  <body>
	<br>
	<br>
	<br>
    <h1>มีไรจะบอกมั้ยยย???</h1>
    <form action="linenotify.php" method="post">
      <label for="name">Name :</label>
      <input type="text" id="name" name="name" placeholder="Enter your name!" required>
      <label for="message">Message :</label>
      <textarea id="message" name="message" placeholder="Enter your message!" required></textarea>
      <input type="submit" value="Submit">
    </form>

	<!-- Footer code starts here -->
	<footer>
	  <br>
	  <br>
	  <br>
      <p>Copyright &copy; 2022 <a href="mailto:contact@thirapat.com">contact@thirapat.com</a> All Rights Reserved</p>
      <h4>Developed by Gartol 5% and Chat-GPT 95%</h4>
    </footer>
    <!-- Footer code ends here -->

    <button class="mode-button">Light/Dark Mode</button>
    <script>
      const modeButton = document.querySelector('.mode-button');
      const body = document.querySelector('body');

      modeButton.addEventListener('click', function() {
        body.classList.toggle('light-mode');
      });
    </script>
  </body>
</html>