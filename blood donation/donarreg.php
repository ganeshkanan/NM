<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML CSS Register Form</title>
    <link rel="stylesheet" href="css/reg.css">
  </head>
  <body>
    <form class="signup-form" action="connect.php" method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>DONAR REGISTRATION</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Name -->
        <div class="horizontal-group">
          <div class="form-group left">
            <!--<label for="firstname" class="label-title"> Name *</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" />-->
            <label class="label-title">Name <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><input type="text" name="name" placeholder="Name"  class="form-control" required></div>
										</div>
          
        </div>

        <!-- Email -->
        <div class="form-group">
          <!--<label for="email" class="label-title">Email*</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">-->
          <label class="label-title"> E-Mail Id <span style="color:#d42e2e;">*</span></label>
					<div class="col-sm-7">
					<input onkeyup="TovlidateEmailDonar(this.value);" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-Mail Id" lass="form-control" required >
</div>	
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
          <label class="label-title">Password <span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7"><input type="password" placeholder="Password" name="pass" class="form-control" required></div>
										</div>
										
         

        <!-- state and district -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">city<span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7">
											
											<select onchange="GetCitys(this.value,'ddlstCity');" class="form-control" name="city">
												<option value="">-Select City-</option>
                        <option value="Abiramam">Abiramam</option>
    <option value="Adirampattinam">Adirampattinam</option>
    <option value="Aduthurai">Aduthurai</option>
    <option value="Alagapuram">Alagapuram</option>
    <option value="Alandur">Alandur</option>
    <option value="Alanganallur">Alanganallur</option>
    <option value="Alangayam">Alangayam</option>
    <option value="Alangudi">Alangudi</option>
    <option value="Alangulam">Alangulam</option>
    <option value="Alappakkam">Alappakkam</option>
    <option value="Alwa Tirunagari">Alwa Tirunagari</option>
    <option value="Ambasamudram">Ambasamudram</option>
    <option value="Ambattur">Ambattur</option>
    <option value="Ambur">Ambur</option>
    <option value="Ammapettai">Ammapettai</option>
    <option value="Anamalais">Anamalais</option>
    <option value="Andippatti">Andippatti</option>
    <option value="Annamalainagar">Annamalainagar</option>
    <option value="Annavasal">Annavasal</option>
    <option value="Annur">Annur</option>
    <option value="Anthiyur">Anthiyur</option>
    <option value="Arakkonam">Arakkonam</option>
    <option value="Arantangi">Arantangi</option>
    <option value="Arcot">Arcot</option>
    <option value="Arimalam">Arimalam</option>
    <option value="Ariyalur">Ariyalur</option>
    <option value="Arni">Arni</option>
    <option value="Arumbavur">Arumbavur</option>
    <option value="Arumuganeri">Arumuganeri</option>
    <option value="Aruppukkottai">Aruppukkottai</option>
    <option value="Aruvankad">Aruvankad</option>
    <option value="Attayyampatti">Attayyampatti</option>
    <option value="Attur">Attur</option>
    <option value="Auroville">Auroville</option>
    <option value="Avadi">Avadi</option>
    <option value="Avinashi">Avinashi</option>
    <option value="Ayakudi">Ayakudi</option>
    <option value="Ayyampettai">Ayyampettai</option>
    <option value="Belur">Belur</option>
    <option value="Bhavani">Bhavani</option>
    <option value="Bodinayakkanur">Bodinayakkanur</option>
    <option value="Chengam">Chengam</option>
    <option value="Chennai">Chennai</option>
    <option value="Chennimalai">Chennimalai</option>
    <option value="Chetput">Chetput</option>
    <option value="Chettipalaiyam">Chettipalaiyam</option>
    <option value="Cheyyar">Cheyyar</option>
    <option value="Cheyyur">Cheyyur</option>
    <option value="Chidambaram">Chidambaram</option>
    <option value="Chingleput">Chingleput</option>
    <option value="Chinna Salem">Chinna Salem</option>
    <option value="Chinnamanur">Chinnamanur</option>
    <option value="Chinnasekkadu">Chinnasekkadu</option>
    <option value="Cholapuram">Cholapuram</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Colachel">Colachel</option>
    <option value="Cuddalore">Cuddalore</option>
    <option value="Cumbum">Cumbum</option>
    <option value="Denkanikota">Denkanikota</option>
    <option value="Desur">Desur</option>
    <option value="Devadanappatti">Devadanappatti</option>
    <option value="Devakottai">Devakottai</option>
    <option value="Dhali">Dhali</option>
    <option value="Dharapuram">Dharapuram</option>
    <option value="Dharmapuri">Dharmapuri</option>
    <option value="Dindigul">Dindigul</option>
    <option value="Dusi">Dusi</option>
    <option value="Elayirampannai">Elayirampannai</option>
    <option value="Elumalai">Elumalai</option>
    <option value="Eral">Eral</option>
    <option value="Eraniel">Eraniel</option>
    <option value="Erode">Erode</option>
    <option value="Erumaippatti">Erumaippatti</option>
    <option value="Ettaiyapuram">Ettaiyapuram</option>
    <option value="Gandhi Nagar">Gandhi Nagar</option>
    <option value="Gangaikondan">Gangaikondan</option>
    <option value="Gangavalli">Gangavalli</option>
    <option value="Gingee">Gingee</option>
    <option value="Gobichettipalayam">Gobichettipalayam</option>
    <option value="Gudalur">Gudalur</option>
    <option value="Gudiyatham">Gudiyatham</option>
    <option value="Guduvancheri">Guduvancheri</option>
    <option value="Gummidipundi">Gummidipundi</option>
    <option value="Harur">Harur</option>
    <option value="Hosur">Hosur</option>
    <option value="Idappadi">Idappadi</option>
    <option value="Ilampillai">Ilampillai</option>
    <option value="Iluppur">Iluppur</option>
    <option value="Injambakkam">Injambakkam</option>
    <option value="Irugur">Irugur</option>
    <option value="Jalakandapuram">Jalakandapuram</option>
    <option value="Jalarpet">Jalarpet</option>
    <option value="Jayamkondacholapuram">Jayamkondacholapuram</option>
    <option value="Kadambur">Kadambur</option>
    <option value="Kadayanallur">Kadayanallur</option>
    <option value="Kalakkadu">Kalakkadu</option>
    <option value="Kalavai">Kalavai</option>
    <option value="Kallakkurichchi">Kallakkurichchi</option>
    <option value="Kallidaikurichi">Kallidaikurichi</option>
    <option value="Kallupatti">Kallupatti</option>
    <option value="Kalugumalai">Kalugumalai</option>
    <option value="Kamuthi">Kamuthi</option>
    <option value="Kanadukattan">Kanadukattan</option>
    <option value="Kancheepuram">Kancheepuram</option>
    <option value="Kanchipuram">Kanchipuram</option>
    <option value="Kangayam">Kangayam</option>
    <option value="Kanniyakumari">Kanniyakumari</option>
    <option value="Karaikkudi">Karaikkudi</option>
    <option value="Karamadai">Karamadai</option>
    <option value="Karambakkudi">Karambakkudi</option>
    <option value="Kariapatti">Kariapatti</option>
    <option value="Karumbakkam">Karumbakkam</option>
    <option value="Karur">Karur</option>
    <option value="Katpadi">Katpadi</option>
    <option value="Kattivakkam">Kattivakkam</option>
    <option value="Kattupputtur">Kattupputtur</option>
    <option value="Kaveripatnam">Kaveripatnam</option>
    <option value="Kayalpattinam">Kayalpattinam</option>
    <option value="Kayattar">Kayattar</option>
    <option value="Keelakarai">Keelakarai</option>
    <option value="Kelamangalam">Kelamangalam</option>
    <option value="Kil Bhuvanagiri">Kil Bhuvanagiri</option>
    <option value="Kilvelur">Kilvelur</option>
    <option value="Kiranur">Kiranur</option>
    <option value="Kodaikanal">Kodaikanal</option>
    <option value="Kodumudi">Kodumudi</option>
    <option value="Kombai">Kombai</option>
    <option value="Konganapuram">Konganapuram</option>
    <option value="Koothanallur">Koothanallur</option>
    <option value="Koradachcheri">Koradachcheri</option>
    <option value="Korampallam">Korampallam</option>
    <option value="Kotagiri">Kotagiri</option>
    <option value="Kottaiyur">Kottaiyur</option>
    <option value="Kovilpatti">Kovilpatti</option>
    <option value="Krishnagiri">Krishnagiri</option>
    <option value="Kulattur">Kulattur</option>
    <option value="Kulittalai">Kulittalai</option>
    <option value="Kumaralingam">Kumaralingam</option>
    <option value="Kumbakonam">Kumbakonam</option>
    <option value="Kunnattur">Kunnattur</option>
    <option value="Kurinjippadi">Kurinjippadi</option>
    <option value="Kuttalam">Kuttalam</option>
    <option value="Kuzhithurai">Kuzhithurai</option>
    <option value="Lalgudi">Lalgudi</option>
    <option value="Madambakkam">Madambakkam</option>
    <option value="Madipakkam">Madipakkam</option>
    <option value="Madukkarai">Madukkarai</option>
    <option value="Madukkur">Madukkur</option>
    <option value="Madurai">Madurai</option>
    <option value="Madurantakam">Madurantakam</option>
    <option value="Mallapuram">Mallapuram</option>
    <option value="Mallasamudram">Mallasamudram</option>
    <option value="Mallur">Mallur</option>
    <option value="Manali">Manali</option>
    <option value="Manalurpettai">Manalurpettai</option>
    <option value="Manamadurai">Manamadurai</option>
    <option value="Manappakkam">Manappakkam</option>
    <option value="Manapparai">Manapparai</option>
    <option value="Manavalakurichi">Manavalakurichi</option>
    <option value="Mandapam">Mandapam</option>
    <option value="Mangalam">Mangalam</option>
    <option value="Mannargudi">Mannargudi</option>
    <option value="Marakkanam">Marakkanam</option>
    <option value="Marandahalli">Marandahalli</option>
    <option value="Masinigudi">Masinigudi</option>
    <option value="Mattur">Mattur</option>
    <option value="Mayiladuthurai">Mayiladuthurai</option>
    <option value="Melur">Melur</option>
    <option value="Mettuppalaiyam">Mettuppalaiyam</option>
    <option value="Mettur">Mettur</option>
    <option value="Minjur">Minjur</option>
    <option value="Mohanur">Mohanur</option>
    <option value="Mudukulattur">Mudukulattur</option>
    <option value="Mulanur">Mulanur</option>
    <option value="Musiri">Musiri</option>
    <option value="Muttupet">Muttupet</option>
    <option value="Naduvattam">Naduvattam</option>
    <option value="Nagapattinam">Nagapattinam</option>
    <option value="Nagercoil">Nagercoil</option>
    <option value="Namagiripettai">Namagiripettai</option>
    <option value="Namakkal">Namakkal</option>
    <option value="Nambiyur">Nambiyur</option>
    <option value="Nambutalai">Nambutalai</option>
    <option value="Nandambakkam">Nandambakkam</option>
    <option value="Nangavalli">Nangavalli</option>
    <option value="Nangilickondan">Nangilickondan</option>
    <option value="Nanguneri">Nanguneri</option>
    <option value="Nannilam">Nannilam</option>
    <option value="Naravarikuppam">Naravarikuppam</option>
    <option value="Nattam">Nattam</option>
    <option value="Nattarasankottai">Nattarasankottai</option>
    <option value="Needamangalam">Needamangalam</option>
    <option value="Neelankarai">Neelankarai</option>
    <option value="Negapatam">Negapatam</option>
    <option value="Nellikkuppam">Nellikkuppam</option>
    <option value="Nilakottai">Nilakottai</option>
    <option value="Nilgiris">Nilgiris</option>
    <option value="Odugattur">Odugattur</option>
    <option value="Omalur">Omalur</option>
    <option value="Ooty">Ooty</option>
    <option value="Padmanabhapuram">Padmanabhapuram</option>
    <option value="Palakkodu">Palakkodu</option>
    <option value="Palamedu">Palamedu</option>
    <option value="Palani">Palani</option>
    <option value="Palavakkam">Palavakkam</option>
    <option value="Palladam">Palladam</option>
    <option value="Pallappatti">Pallappatti</option>
    <option value="Pallattur">Pallattur</option>
    <option value="Pallavaram">Pallavaram</option>
    <option value="Pallikondai">Pallikondai</option>
    <option value="Pallipattu">Pallipattu</option>
    <option value="Pallippatti">Pallippatti</option>
    <option value="Panruti">Panruti</option>
    <option value="Papanasam">Papanasam</option>
    <option value="Papireddippatti">Papireddippatti</option>
    <option value="Papparappatti">Papparappatti</option>
    <option value="Paramagudi">Paramagudi</option>
    <option value="Pattukkottai">Pattukkottai</option>
    <option value="Pennadam">Pennadam</option>
    <option value="Pennagaram">Pennagaram</option>
    <option value="Pennathur">Pennathur</option>
    <option value="Peraiyur">Peraiyur</option>
    <option value="Perambalur">Perambalur</option>
    <option value="Peranamallur">Peranamallur</option>
    <option value="Peranampattu">Peranampattu</option>
    <option value="Peravurani">Peravurani</option>
    <option value="Periyakulam">Periyakulam</option>
    <option value="Periyanayakkanpalaiyam">Periyanayakkanpalaiyam</option>
    <option value="Periyanegamam">Periyanegamam</option>
    <option value="Periyapatti">Periyapatti</option>
    <option value="Periyapattinam">Periyapattinam</option>
    <option value="Perundurai">Perundurai</option>
    <option value="Perungudi">Perungudi</option>
    <option value="Perur">Perur</option>
    <option value="Pollachi">Pollachi</option>
    <option value="Polur">Polur</option>
    <option value="Ponnamaravati">Ponnamaravati</option>
    <option value="Ponneri">Ponneri</option>
    <option value="Poonamalle">Poonamalle</option>
    <option value="Porur">Porur</option>
    <option value="Pudukkottai">Pudukkottai</option>
    <option value="Puduppatti">Puduppatti</option>
    <option value="Pudur">Pudur</option>
    <option value="Puduvayal">Puduvayal</option>
    <option value="Puliyangudi">Puliyangudi</option>
    <option value="Puliyur">Puliyur</option>
    <option value="Pullambadi">Pullambadi</option>
    <option value="Punjai Puliyampatti">Punjai Puliyampatti</option>
    <option value="Rajapalaiyam">Rajapalaiyam</option>
    <option value="Ramanathapuram">Ramanathapuram</option>
    <option value="Rameswaram">Rameswaram</option>
    <option value="Rasipuram">Rasipuram</option>
    <option value="Saint Thomas Mount">Saint Thomas Mount</option>
    <option value="Salem">Salem</option>
    <option value="Sathankulam">Sathankulam</option>
    <option value="Sathyamangalam">Sathyamangalam</option>
    <option value="Sattur">Sattur</option>
    <option value="Sayalkudi">Sayalkudi</option>
    <option value="Seven Pagodas">Seven Pagodas</option>
    <option value="Sholinghur">Sholinghur</option>
    <option value="Singanallur">Singanallur</option>
    <option value="Singapperumalkovil">Singapperumalkovil</option>
    <option value="Sirkazhi">Sirkazhi</option>
    <option value="Sirumugai">Sirumugai</option>
    <option value="Sivaganga">Sivaganga</option>
    <option value="Sivagiri">Sivagiri</option>
    <option value="Sivakasi">Sivakasi</option>
    <option value="Srimushnam">Srimushnam</option>
    <option value="Sriperumbudur">Sriperumbudur</option>
    <option value="Srivaikuntam">Srivaikuntam</option>
    <option value="Srivilliputhur">Srivilliputhur</option>
    <option value="Suchindram">Suchindram</option>
    <option value="Sulur">Sulur</option>
    <option value="Surandai">Surandai</option>
    <option value="Swamimalai">Swamimalai</option>
    <option value="Tambaram">Tambaram</option>
    <option value="Tanjore">Tanjore</option>
    <option value="Taramangalam">Taramangalam</option>
    <option value="Tattayyangarpettai">Tattayyangarpettai</option>
    <option value="Thanjavur">Thanjavur</option>
    <option value="Tharangambadi">Tharangambadi</option>
    <option value="Theni">Theni</option>
    <option value="Thenkasi">Thenkasi</option>
    <option value="Thirukattupalli">Thirukattupalli</option>
    <option value="Thiruthani">Thiruthani</option>
    <option value="Thiruvaiyaru">Thiruvaiyaru</option>
    <option value="Thiruvallur">Thiruvallur</option>
    <option value="Thiruvarur">Thiruvarur</option>
    <option value="Thiruvidaimaruthur">Thiruvidaimaruthur</option>
    <option value="Thoothukudi">Thoothukudi</option>
    <option value="Tindivanam">Tindivanam</option>
    <option value="Tinnanur">Tinnanur</option>
    <option value="Tiruchchendur">Tiruchchendur</option>
    <option value="Tiruchengode">Tiruchengode</option>
    <option value="Tiruchirappalli">Tiruchirappalli</option>
    <option value="Tirukkoyilur">Tirukkoyilur</option>
    <option value="Tirumullaivasal">Tirumullaivasal</option>
    <option value="Tirunelveli">Tirunelveli</option>
    <option value="Tirunelveli Kattabo">Tirunelveli Kattabo</option>
    <option value="Tiruppalaikudi">Tiruppalaikudi</option>
    <option value="Tirupparangunram">Tirupparangunram</option>
    <option value="Tiruppur">Tiruppur</option>
    <option value="Tiruppuvanam">Tiruppuvanam</option>
    <option value="Tiruttangal">Tiruttangal</option>
    <option value="Tiruvannamalai">Tiruvannamalai</option>
    <option value="Tiruvottiyur">Tiruvottiyur</option>
    <option value="Tisaiyanvilai">Tisaiyanvilai</option>
    <option value="Tondi">Tondi</option>
    <option value="Turaiyur">Turaiyur</option>
    <option value="Udangudi">Udangudi</option>
    <option value="Udumalaippettai">Udumalaippettai</option>
    <option value="Uppiliyapuram">Uppiliyapuram</option>
    <option value="Usilampatti">Usilampatti</option>
    <option value="Uttamapalaiyam">Uttamapalaiyam</option>
    <option value="Uttiramerur">Uttiramerur</option>
    <option value="Ūttukkuli">Ūttukkuli</option>
    <option value="V.S.K.Valasai (Dindigul-Dist.)">V.S.K.Valasai (Dindigul-Dist.)</option>
    <option value="Vadakku Valliyur">Vadakku Valliyur</option>
    <option value="Vadakku Viravanallur">Vadakku Viravanallur</option>
    <option value="Vadamadurai">Vadamadurai</option>
    <option value="Vadippatti">Vadippatti</option>
    <option value="Valangaiman">Valangaiman</option>
    <option value="Valavanur">Valavanur</option>
    <option value="Vallam">Vallam</option>
    <option value="Valparai">Valparai</option>
    <option value="Vandalur">Vandalur</option>
    <option value="Vandavasi">Vandavasi</option>
    <option value="Vaniyambadi">Vaniyambadi</option>
    <option value="Vasudevanallur">Vasudevanallur</option>
    <option value="Vattalkundu">Vattalkundu</option>
    <option value="Vedaraniyam">Vedaraniyam</option>
    <option value="Vedasandur">Vedasandur</option>
    <option value="Velankanni">Velankanni</option>
    <option value="Vellanur">Vellanur</option>
    <option value="Vellore">Vellore</option>
    <option value="Velur">Velur</option>
    <option value="Vengavasal">Vengavasal</option>
    <option value="Vettaikkaranpudur">Vettaikkaranpudur</option>
    <option value="Vettavalam">Vettavalam</option>
    <option value="Vijayapuri">Vijayapuri</option>
    <option value="Vikravandi">Vikravandi</option>
    <option value="Vilattikulam">Vilattikulam</option>
    <option value="Villupuram">Villupuram</option>
    <option value="Viraganur">Viraganur</option>
    <option value="Virudhunagar">Virudhunagar</option>
    <option value="Vriddhachalam">Vriddhachalam</option>
    <option value="Walajapet">Walajapet</option>
    <option value="Wallajahbad">Wallajahbad</option>
    <option value="Wellington">Wellington</option>
</select>

											
											</div>
          </div>
        

        <!-- location and pincode-->
        <div class="horizontal-group">
        <div class="form-group right">
        <label class="label-title">Pin code </label>
											<div class="col-sm-7"><input type="number" placeholder="PIN" class="form-control" name="pincode"></div>
										</div>
        
          </div>
</div>
          <div class="form-group">
          <label class="label-title">Location </label>
											<div class="col-sm-7"><input placeholder="Location" type="text"  class="form-control" name="location"></div>
										</div>
											
        </div>

        <!-- blood donation an last date donate-->
        <div class="horizontal-group">
        <div class="form-group left">
        <label class="label-title">Blood Group <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><select class="form-control" required name="blood">
												<option value="">-Group-</option>
												<option value="A1+">A1+</option>
												<option value="A1-">A1-</option>
												<option value="A2+">A2+</option>
												<option value="A2-">A2-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="A1B+-">A1B+</option>
												<option value="A1B-">A1B-</option>
												<option value="A2B+">A2B+</option>
												<option value="A2B-">A2B-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
												<option value="O+">O+</option>
												<option value="O-">O-</option>
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="Bombay Group">Bombay Group</option>
												</select>
</div>
          </div>
          

         <!-- age and geder-->
         <div class="horizontal-group">
        <div class="form-group left">
        <label class="label-title">Age <span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7"><input type="number" min="18"  placeholder="Age"  class="form-control" required name="age"></div>
										</div>
          </div>
          <div class="form-group left">
          <label class="label-title">Gender  <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7">
											<select class="form-control" required name="gender">

												 <option value="Male">male</option>
                         <option value="female">Female</option>
                         <option value="transgender">Transgender</option>
												</select>
											</div>
											
        </div>
        <!--paid-->
        <div class="form-group left">
          <label class="label-title">paid <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7">
											<select class="form-control" required  name="paid">
								
												 <option value="yes">YES</option>
                         <option value="no">NO</option>
												</select>
											</div>
											
        </div>
        <!-- phone number-->
         <div class="horizontal-group">
        <div class="form-group ">
        <!--<label class="label-title">Phone : Mobile <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><input type="number" value="" maxlength="10" placeholder="Phone : Mobile" required class="form-control"  name="mobile"></div>
										</div>-->
                    <label class="label-title">Phone : Mobile <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><input type="text" value="" maxlength="10" placeholder="Phone : Mobile" required="" class="form-control" autocomplete="off"  name="mobile"></div>
										</div>
          <!--<div class="form-group">
          <label class="label-title">Phone : Res </label>
											<div class="col-sm-7"><input type="text" value="" placeholder="Phone : Res" class="form-control" autocomplete="off" id="txtRes" name="txtRes"></div>
										</div>-->
											
        </div>

       

      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
<!--<button type="submit" class="btn">REGISTER</button>-->
<button type="submit" class="btn btn-primary to_be_register">Submit</button> &nbsp;&nbsp;
								<button type="reset" class="btn btn-primary to_be_register">Reset</button>
							</div>
      </div>

    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

  </body>
</html>