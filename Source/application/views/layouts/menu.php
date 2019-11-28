<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>assets/img/boy-reading.png" class="img-fluid" alt="menu"><span>Menu</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <span>Commerce</span>
                                    <ul class="nav flex-column">


                                        <li class="nav-item dropdown nav-sub-one">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounting</a>
                                            <div class="dropdown-menu-sub" aria-labelledby="navbarDropdown">
                                                <ul class="nav flex-column">

                                                    <li class="nav-item dropdown nav-sub-two">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Basics of accounting
                                                        </a>
                                                        <div class="dropdown-menu-sub-two" aria-labelledby="navbarDropdown">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item ">
                                                                    <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">Balance sheet
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">Economics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">Finance
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-md-3">
                                    <span>Arts</span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="<?php echo base_url().'blog/articles'; ?>">Literature</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">Languages </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url().'blog/articles'; ?>">Fine Arts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <li class="nav-item ml-auto" style="list-style: none;">
                <button class="btn btn-primary pull-right contribute-btn" type="button" onClick="window.open('<?php echo base_url().'article'; ?>', 'admin')">
                    <img src="<?php echo base_url(); ?>assets/img/boy-writing.png" class="img-fluid" alt="menu">
                    Contribute
                </button>
            </li>
        </div>
    </div>
</nav>