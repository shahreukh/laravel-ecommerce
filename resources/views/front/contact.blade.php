@extends('front.layout.layout2')

@section('content')

<div id="mainBody">
	<div class="container">
		<hr class="soften">
		<h1>Visit us</h1>
		<hr class="soften"/>	
		<div class="row">
			<div class="span4">
				<h4>Contact Details</h4>
				<p>	12 Çankaya 06800<br/>
					Ankara / Türkiye<br/><br/>
					info@shahreukh.com<br/>
					﻿Tel +90-000-1111<br/>
					web:shahreukh.github.io/portfolio
				</p>		
			</div>
				
			<div class="span4">
			<h4>Opening Hours</h4>
				<h5> Monday - Friday</h5>
				<p>09:00am - 09:00pm<br/><br/></p>
				<h5>Saturday</h5>
				<p>09:00am - 07:00pm<br/><br/></p>
				<h5>Sunday</h5>
				<p>12:30pm - 06:00pm<br/><br/></p>
			</div>
			<div class="span4">
			<h4>Email Us</h4>
			<form class="form-horizontal">
			<fieldset>
			<div class="control-group">
			
				<input type="text" placeholder="name" class="input-xlarge"/>
			
			</div>
			<div class="control-group">
			
				<input type="text" placeholder="email" class="input-xlarge"/>
			
			</div>
			<div class="control-group">
			
				<input type="text" placeholder="subject" class="input-xlarge"/>
			
			</div>
			<div class="control-group">
				<textarea rows="3" id="textarea" class="input-xlarge"></textarea>
			
			</div>

				<button class="btn btn-large" type="submit">Send Messages</button>

			</fieldset>
		</form>
			</div>
		</div>
		<div class="row">
		<div class="span12">
		<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195884.7199739243!2d32.76276475!3d39.903376550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara!5e0!3m2!1str!2str!4v1664787749846!5m2!1str!2str"></iframe><br />
		<small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195884.7199739243!2d32.76276475!3d39.903376550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara!5e0!3m2!1str!2str!4v1664787749846!5m2!1str!2st" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
		</div>
	</div>
</div>

@endsection