<?php
  /* Variables */
  $uri = 'task-1';
?>

<!-- Header -->
<?php include 'inc/header.php' ?>

  <!-- Main -->
  <div class="layout-main">
    
    <!-- Sidebar -->
    <?php include 'inc/sidebar.php' ?>
    
    <!-- Content -->
    <div class="layout-content custom-text">

      <h1>Задание 1</h1>
      
      <h2>Постановка задачи</h2>
      <div class="panel panel-default">
        <p>There are all elements on this page.</p>
        <p>Colors You can change in settings.scss file.</p>
        <p>Scripts and Styles for tasks You should set into the proper folders.</p>
        <p>And don't forget to check tasks in navigation with classes "done" if they are done and "progress" if they are in progress state.</p>
        <p>Use classes "primary" to set <strong class="primary">Primary</strong> color and class "emphasis" to <strong class="emphasis">emphasise</strong>.</p>
        <p>Enjoy it!</p>
      </div>

      <h2>Реализация</h2>
      
      <h3>Default Panel</h3>
      <div class="panel panel-default">
        <p>This task is done!</p>
        <hr>
        <p>This panel is default. There is also panel for notifications. It is a little bit lower.</p>
      </div>

      <h3>Notification Panel</h3>
      <div class="panel panel-note">
        <p>Notification goes here... Or You can just emphasise the text You want.</p>
      </div>

<h3>Code</h3>
<pre class="code">
This is a piece of code.

var a, b;

( a > b ) ? a : b;

// Tha same as: 

if ( a > b ) { a; }
else { b; }
</pre>
    
      <h3>Table</h3>
      <div class="panel panel-default">
        <table class="table table-default">
          <thead>
            <tr>
              <th>This is a Default Table in the Default Panel!</th>
              <th>Table Head</th>
              <th>Table Head</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td>Table Footer</td>
              <td>Table Footer</td>
              <td>Table Footer</td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Table Content</td>
              <td>Table Content</td>
              <td>Table Content</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>Columns</h3>
      <div class="columns cols-2">
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem in ex et voluptate doloremque inventore eligendi esse incidunt beatae repellat blanditiis ducimus, vero. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem in ex et voluptate doloremque inventore eligendi esse incidunt beatae repellat blanditiis ducimus, vero. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
      </div>
      <br>
      <div class="columns cols-3">
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem in ex et voluptate. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem in ex et voluptate. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem in ex et voluptate. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
      </div>
      <br>
      <div class="columns cols-4">
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
        <div class="columns-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque aperiam sint laudantium, vitae deleniti similique?</div>
      </div>

      <h3>Textarea</h3>
      <input class="textfield" type="text" placeholder="Input">
      <textarea class="textfield" placeholder="Textarea"></textarea>

      <h3>Buttons</h3>
      <button class="button button-default">Default Button</button>
      <button class="button button-emphasis">Emphasis Button</button>

    </div>

  </div>

  <script src="js/tasks/task-1.js"></script>

<!-- Footer -->
<?php include 'inc/footer.php' ?>