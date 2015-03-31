<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<style>
.content-area {
	margin-top: 150px;
}
.share-panel {
	display: none !important;
}
.site-title {
	font-size: 40px;
}
h1.site-title {
		color: black !important;
}
.main-wrap {
	position: relative;
	margin: 100px auto;
	width: 90%;
  text-align: center !important;
}
#wpbgallery_container {
    width: 50%;
    margin: 0 auto;
    position: relative;
}
#wpbgallery_container ul {
    margin-top: 50px;
}
#wpbgallery_container ul li {
    width: 50%;
    padding: 25px 10%;
}
.timer {
  text-align: center !important; 
  width: 90%; 
  position: relative; 
  margin: 0 auto; 
  margin-bottom: 25px;
}
  
.btn-primary {
  color: #fff;
	background-color: #0D77B3 !important;
	border-color: #357ebd;
}
  
.btn-primary.active, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #0D77B3 !important;
}

@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2) {
    
  .main-wrap {
    position: relative;
    margin: 100px auto;
    width: 100%;
    text-align: center !important;
  }
    
  .timer {
    text-align: center; 
    width: 100%; 
    position: relative; 
    margin: 0 auto; 
    margin-bottom: 25px;
    border: 1px solid black;
    
	}
}
  
  /* Portrait and Landscape */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2) {
  
  .main-wrap {
    position: relative;
    margin: 100px auto;
    width: 100%;
    text-align: center !important;
  }
    
  .timer {
    text-align: center; 
    width: 100%; 
    position: relative; 
    margin: 0 auto; 
    border: 1px solid black;
    
	}
}
</style>
		
		<div class="main-wrap">      
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
			
		</div>

<?php get_footer(); ?>