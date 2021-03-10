<html>
    <head>
        <title>ciBlog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
                </div>
                <div id="navbar">
                    <ul class="navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
                    <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create">Create Categories</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- flash messge -->
            <?php if($this->session->flashdata('user_registered')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('post_updated')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>' ; ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('category_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>' ; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_deleted')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>' ; ?>
            <?php endif; ?>
