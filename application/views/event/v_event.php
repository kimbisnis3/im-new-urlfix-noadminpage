<!-- <div class="content">
	<div class="container">
		<style media="screen">
			.img-artikel {
				width: 50%;
			}
		</style>
		<div class="form-artikel">
			<div class=""><?php foreach ($mevent as $t)
							{
							?>
					<div class="tab-1 ">
						<div class="title">
					    <h2><?php echo $t->judul; ?></h2>
					  </div>
					<img class="img-artikel" src="<?php echo base_url('gopanel/uploads/event/'.$t->image); ?>">
					<div><?php echo $t->artikel; ?></div>
						<div class="clearfix"></div>
					</div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".event" ).addClass( "active" );
</script> -->
<div class="body">
	
	<div class="container">
		
		<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
				<meta itemprop="position" content="0" />
			</li>
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="" class="breadcrumb-label" itemprop="item">Event</a>
				<meta itemprop="position" content="1" />
			</li>
		</ul>
		<main class="page">
			<?php foreach ($mevent as $t) { ?>
			<h1 class="page-heading"><?php echo $t->judul; ?></h1>
			<div class="page-content page-content--centered">
				<img style="width: 50%; margin: 0 auto;" src="<?php echo base_url('gopanel/uploads/event/'.$t->image); ?>">
				<p><p style="text-align: center;"><span style="font-family: verdana, geneva; font-size: small;"><span style="font-size: small; font-family: verdana, geneva;"><br /><span style="color: #312e29; background-color: #ffffff; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;"><?php echo $t->artikel; ?></span></span></span></p></p>
			</div>
			<?php } ?>
		</main>
	</div>
</div>
