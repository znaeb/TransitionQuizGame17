<?php session_start(); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_login_status(); ?>

<?php include("../includes/header.php"); ?>

<script src="static/js/jquery.easing.min.js"></script>
</head>
<body>
  <?php echo get_navbar(); ?>

  <!-- Scripts -->
  <link rel="stylesheet" type="text/css" href="./static/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="./static/js/datatables.min.js"></script>
  <script>
  $(document).ready(function() {
    var table = $('#accepted').DataTable({responsive:true});
    var table2 = $('#submitted').DataTable({responsive:true});

    if(window.location.pathname+window.location.search == "/ReviewMyQuestions")
    {
      document.getElementById("pageTitle").innerHTML = "Your Questions";
    }
  } );
  </script>

  <br/><br/><br/><br/>
  <div class="container" style="text-align: center;">
  <h2 id="pageTitle" style="display:inline;">Question Database</h2>
  <p style="font-size:0.9em;margin-top:10px;">Use the search bar to find specific Questions / Categories / Subcategories.</p>
  <hr>
  </div>
  <div class="container">
    <table id="accepted" class="table table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Question</th>
          <th>Category</th>
          <th>Subcategory</th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <th>Question</th>
          <th>Category</th>
          <th>Subcategory</th>
        </tr>
      </tfoot>

      <tbody>


      </tbody>
    </table>
  </div>

</body>
