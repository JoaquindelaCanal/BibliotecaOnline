<?= $this->Html->css('login') ?>
<?= $this->Html->script('login') ?>

<div id="background-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(http://cdn-image.travelandleisure.com/sites/default/files/styles/1600x1000/public/201407-w-most-beautiful-libraries-in-the-world-klementinum-prague.jpg?itok=iEn3LTLq)"></div>
        <div class="item" style="background-image:url(http://mentalfloss.com/sites/default/legacy/blogs/wp-content/uploads/2012/04/370663920_b87c065936_z-565x378.jpg)"></div>
        <div class="item" style="background-image:url(http://cdn-image.travelandleisure.com/sites/default/files/styles/tnl_redesign_article_landing_page/public/201407-w-most-beautiful-libraries-in-the-world-austrias-national-library.jpg?itok=4KtEs9tX)"></div>  
      </div>
    </div>
</div>
<div id="content-wrapper">
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Por favor, identifíquese</h3>
			 	</div>
			  	<div class="panel-body">
			  	<?= $this->Flash->render('auth') ?>
			    	<?= $this->Form->create() ?>
                    <fieldset>
                    	<?php
			    	  	echo '<div class="form-group">';
			    	  	echo $this->Form->input('email',['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'label' => false]);
			    		echo '</div>';
			    		echo '<div class="form-group">';
			    		echo $this->Form->input('password',['class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false]);
			    		echo '</div>';
			    		echo '
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Recordarme
			    	    	</label>
			    	    </div>';
			    	    ?>
			    	    </fieldset>
			    	    <?= $this->Form->button('Ingresar', ['class' => 'btn btn-lg btn-success btn-block']) ?>			 
			      	 <?= $this->Form->end() ?>
			    </div>
			</div>
		</div>
	</div>
</div>
</div>