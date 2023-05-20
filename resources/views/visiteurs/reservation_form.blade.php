

    {{-- Contact Section --}}
    @can('isUser')
	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading " data-animate-effect="fadeIn">
					<h1>Contact Us</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text " data-animate-effect="fadeIn">Contact</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="{{route('reservation.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" id="email">
                                </div>
                            </div>
                        </div>
                        {{-- End Row --}}

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" id="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Titre De Reunuent</label>
                                    <input type="text" class="form-control" name="title_reunion" placeholder="Titre de reunuent" id="name">
                                </div>
                            </div>
                        </div>
                        {{-- End Row --}}
						
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Date</label>
                                    <input type="date" name class="form-control" placeholder="Name" id="name">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Heure Debut</label>
                                    <input type="time" class="form-control" name="heureDebut" placeholder="Name" id="name">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Durée</label>
                                    <input type="number" class="form-control" name="duree" placeholder="Durée" id="name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
							<label for="file" class="sr-only">Piéce Join</label>
							<input type="file" class="form-control" style="background: transparent;" name="file">
						</div>
                        
                        
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea name="description" id="message" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
						</div>
                        
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    @endcan
    {{-- End Contact Section --}}