
<!-- start navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>			  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter Results
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $urlP ?>">Print Books</a>
                <a class="dropdown-item" href="<?php echo $urlE ?>">Electronic Books</a>
				<a class="dropdown-item" href="<?php echo $url ?>">Print and Electronic Books</a>
              </div>
			</li>  
            <li class="nav-item">
              <a class="nav-link" href="https://udayton.edu/libraries/services/book-list.php">Subscribe</a>
            </li>		  
          </ul>
        </div>
      </nav>