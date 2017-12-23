<style >
	body{
		background-color: #424242 !important;
	}
	hr{
		border-top: 1px solid #9E9E9E !important;
		color: #9E9E9E !important;
	}
	.carousel-indicators .active{
		background-color: #424242 !important;
		color: #424242 !important;
	}
	.container{
		border-radius: 3px !important;
	}
</style>
@extends('layouts.app')

@section('content')

<div class="carousel slide" id="myCarousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item active">
			<img src="{{URL::asset('/images/main-banner.jpg')}}" alt="Image 1" class="img-responsive">
		</div>
		<div class="item">
			<img src="{{URL::asset('/images/image2.jpg')}}" alt="Image 2" class="img-responsive">
		</div>
		<div class="item">
			<img src="{{URL::asset('/images/image3.jpg')}}" alt="Image 3" class="img-responsive">
		</div>
	</div>

	<div>
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
</div>
<div class="row" style="padding: 5%;">
<div class="container col-md-8 col-md-offset-2" style="background-color: #EEEEEE">
<div class="container-fluid">
	<div class="container col-md-12">
		<div class="heading">
			<h2>Heading 1</h2>
		</div>
		<hr>
		<div class="paragraph">
			<p>
				Lorem ipsum dolor sit amet, tation putent ius te, est quem quodsi splendide id. Dolorum placerat invidunt ad vis. At vix conceptam omittantur, id nec epicurei postulant. Putant utroque definitiones his ea, mei quaestio gubergren delicatissimi in, eu harum postea sed. Eam ut nulla singulis, pro ne minim eloquentiam, ea rebum menandri mediocritatem usu. In vel inani partem accumsan, ex cum velit dolorum nominavi. Ne senserit efficiantur instructior eam.

Mentitum percipitur adversarium usu ne, vel mucius gloriatur philosophia cu, vis epicuri senserit ei. Dicunt feugait patrioque eam id, no duo laudem voluptua, tation delectus qui ex. Per in viderer intellegat conclusionemque. Ut sea stet omittam. Te mundi possit tacimates duo. Sea ne velit meliore prodesset, nam ad autem errem, ad vel erat putent tincidunt.


			</p>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container col-md-12">
		<div class="heading">
			<h2>Heading 2</h2>
		</div>
		<hr>
		<div class="paragraph ">
			<p>
				Cu velit bonorum verterem nam, vel ea nominavi antiopam democritum. Ne pro dolor aliquip adipiscing, dicat salutandi inciderint in ius. Vim dicant vocent aliquip ex, et nulla instructior sea, te eripuit alterum sapientem eam. Dicunt dolores intellegat nec et, et quas neglegentur voluptatibus est.

Partem impetus omittam ad vis. Eos et altera mediocrem, consul necessitatibus sed an. Munere percipit ad duo, nam at option convenire, per ut esse volutpat. Eos et ancillae voluptua temporibus, an solet docendi gubergren mei. Cum wisi putent explicari ea.

Est iisque concludaturque et, lorem postea partiendo ne mei, eos mutat meliore vituperatoribus cu. Has habeo ancillae insolens et, ex putant scripta admodum mel. Eu virtute mentitum probatus vel, omnis sonet dissentias vim cu. Eum ea esse percipit. Sed decore corrumpit ex. Nostro aliquam eam eu, sed ex dico malis graecis, in error vocent vim.
			</p>
		</div>
	</div>
</div>
</div>
</div>
@if(session('status'))
	<script type="text/javascript">
		alert('Registrations done successfully.')
	</script>
@endif
@endsection