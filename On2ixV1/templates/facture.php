<?php

//C'est la propriété php_self qui nous l'indique : 
// Quand on vient de index : 
// [PHP_SELF] => /chatISIG/index.php 
// Quand on vient directement par le répertoire templates
// [PHP_SELF] => /chatISIG/templates/accueil.php

// Si la page est appelée directement par son adresse, on redirige en passant pas la page index
// Pas de soucis de bufferisation, puisque c'est dans le cas où on appelle directement la page sans son contexte
if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=facture");
	die("");
}
?>


<style>
.form-control,.form-group>label,.form-group>span{
				margin-left:1%;
				width:40%;
}

</style>

<h2>Adresse de facturation</h2>
<form  action="controleur.php" method="POST" >

<div>


</div>

<!--Adresse mail-->
 <div class="form-group" >
<label for="mail">Adresse e-mail:</label>
<br/>
<input type="text" class="form-control" name="mail" id="mail" required>
<span></span>
 </div>

<!--Nom-->
 <div class="form-group" >
<label for="nom">Nom:</label>
<br/>
<input type="text" name="nom" id="nom" class="form-control" required>
<span></span>
 </div>

<!--Prenom-->
 <div class="form-group" >
<label for="prenom">Prenom:</label>
<br/>
<input type="text" name="prenom" id="prenom" class="form-control" required>
<span></span>
 </div>

<!--Adresse-->
 <div class="form-group" >
<label for="adresse">Adresse:</label>
<br/>
<input type="text" name="adresse" id="adresse" class="form-control" required>
<span></span>
 </div>

<!--Code Postal-->
 <div class="form-group" >
<label for="cdp">Code Postal:</label>
<br/>
<input type="text" name="cdp" id="cdp" class="form-control" required>
<span></span>
 </div>


<!--Ville-->
 <div class="form-group" >
<label for="ville">Ville:</label>
<br/>
<input type="text" name="ville" id="ville" class="form-control" required>
<span></span>
 </div>

<!--Pays-->
 <div class="form-group" >
<label for="pays">Pays:</label>
<br/>
<select name="pays" class="form-control" required>
<option value="Afghanistan">Afghanistan</option>
<option value="Afrique_du_Sud">Afrique du Sud</option>
<option value="Albanie">Albanie</option>
<option value="Algerie">Algérie</option>
<option value="Allemagne">Allemagne</option>
<option value="Andorre">Andorre</option>
<option value="Angola">Angola</option>
<option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
<option value="Arabie_saoudite">Arabie saoudite</option>
<option value="Argentine">Argentine</option>
<option value="Armenie">Arménie</option>
<option value="Australie">Australie</option>
<option value="Autriche">Autriche</option>
<option value="Azerbaidjan">Azerbaïdjan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrein">Bahreïn</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbade">Barbade</option>
<option value="Belau">Belau</option>
<option value="Belgique">Belgique</option>
<option value="Belize">Belize</option>
<option value="Benin">Bénin</option>
<option value="Bhoutan">Bhoutan</option>
<option value="Bielorussie">Biélorussie</option>
<option value="Birmanie">Birmanie</option>
<option value="Bolivie">Bolivie</option>
<option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
<option value="Botswana">Botswana</option>
<option value="Bresil">Brésil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgarie">Bulgarie</option>
<option value="Burkina">Burkina</option>
<option value="Burundi">Burundi</option>
<option value="Cambodge">Cambodge</option>
<option value="Cameroun">Cameroun</option>
<option value="Canada">Canada</option>
<option value="Cap-Vert">Cap-Vert</option>
<option value="Chili">Chili</option>
<option value="Chine">Chine</option>
<option value="Chypre">Chypre</option>
<option value="Colombie">Colombie</option>
<option value="Comores">Comores</option>
<option value="Congo">Congo</option>
<option value="Cook">Cook</option>
<option value="Coree_du_Nord">Corée du Nord</option>
<option value="Coree_du_Sud">Corée du Sud</option>
<option value="Costa_Rica">Costa Rica</option>
<option value="Cote_Ivoire">Côte d'Ivoire</option>
<option value="Croatie">Croatie</option>
<option value="Cuba">Cuba</option>
<option value="Danemark">Danemark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominique">Dominique</option>
<option value="Egypte">Égypte</option>
<option value="Emirats_arabes_unis">Émirats arabes unis</option>
<option value="Equateur">Équateur</option>
<option value="Erythree">Érythrée</option>
<option value="Espagne">Espagne</option>
<option value="Estonie">Estonie</option>
<option value="Etats-Unis">États-Unis</option>
<option value="Ethiopie">Éthiopie</option>
<option value="Fidji">Fidji</option>
<option value="Finlande">Finlande</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambie">Gambie</option>
<option value="Georgie">Géorgie</option>
<option value="Ghana">Ghana</option>
<option value="Grèce">Grèce</option>
<option value="Grenade">Grenade</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinee">Guinée</option>
<option value="Guinee-Bissao">Guinée-Bissao</option>
<option value="Guinee_equatoriale">Guinée équatoriale</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haïti</option>
<option value="Honduras">Honduras</option>
<option value="Hongrie">Hongrie</option>
<option value="Inde">Inde</option>
<option value="Indonesie">Indonésie</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Irlande">Irlande</option>
<option value="Islande">Islande</option>
<option value="Israël">Israël</option>
<option value="Italie">Italie</option>
<option value="Jamaique">Jamaïque</option>
<option value="Japon">Japon</option>
<option value="Jordanie">Jordanie</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kirghizistan">Kirghizistan</option>
<option value="Kiribati">Kiribati</option>
<option value="Koweit">Koweït</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Lettonie">Lettonie</option>
<option value="Liban">Liban</option>
<option value="Liberia">Liberia</option>
<option value="Libye">Libye</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituanie">Lituanie</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedoine">Macédoine</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaisie">Malaisie</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malte">Malte</option>
<option value="Maroc">Maroc</option>
<option value="Marshall">Marshall</option>
<option value="Maurice">Maurice</option>
<option value="Mauritanie">Mauritanie</option>
<option value="Mexique">Mexique</option>
<option value="Micronesie">Micronésie</option>
<option value="Moldavie">Moldavie</option>
<option value="Monaco">Monaco</option>
<option value="Mongolie">Mongolie</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibie">Namibie</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Népal</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norvège">Norvège</option>
<option value="Nouvelle-Zelande">Nouvelle-Zélande</option>
<option value="Oman">Oman</option>
<option value="Ouganda">Ouganda</option>
<option value="Ouzbekistan">Ouzbékistan</option>
<option value="Pakistan">Pakistan</option>
<option value="Panama">Panama</option>
<option value="Papouasie-Nouvelle_Guinee">Papouasie - Nouvelle Guinée</option>
<option value="Paraguay">Paraguay</option>
<option value="Pays-Bas">Pays-Bas</option>
<option value="Perou">Pérou</option>
<option value="Philippines">Philippines</option>
<option value="Pologne">Pologne</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Republique_centrafricaine">République centrafricaine</option>
<option value="Republique_dominicaine">République dominicaine</option>
<option value="Republique_tcheque">République tchèque</option>
<option value="Roumanie">Roumanie</option>
<option value="Royaume-Uni">Royaume-Uni</option>
<option value="Russie">Russie</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint-Christophe-et-Nieves">Saint-Christophe-et-Niévès</option>
<option value="Sainte-Lucie">Sainte-Lucie</option>
<option value="Saint-Marin">Saint-Marin </option>
<option value="Saint-Siège">Saint-Siège, ou leVatican</option>
<option value="Saint-Vincent-et-les_Grenadines">Saint-Vincent-et-les Grenadines</option>
<option value="Salomon">Salomon</option>
<option value="Salvador">Salvador</option>
<option value="Samoa_occidentales">Samoa occidentales</option>
<option value="Sao_Tome-et-Principe">Sao Tomé-et-Principe</option>
<option value="Senegal">Sénégal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra_Leone">Sierra Leone</option>
<option value="Singapour">Singapour</option>
<option value="Slovaquie">Slovaquie</option>
<option value="Slovenie">Slovénie</option>
<option value="Somalie">Somalie</option>
<option value="Soudan">Soudan</option>
<option value="Sri_Lanka">Sri Lanka</option>
<option value="Sued">Suède</option>
<option value="Suisse">Suisse</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Syrie">Syrie</option>
<option value="Tadjikistan">Tadjikistan</option>
<option value="Tanzanie">Tanzanie</option>
<option value="Tchad">Tchad</option>
<option value="Thailande">Thaïlande</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinite-et-Tobago">Trinité-et-Tobago</option>
<option value="Tunisie">Tunisie</option>
<option value="Turkmenistan">Turkménistan</option>
<option value="Turquie">Turquie</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="Uruguay">Uruguay</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet_Nam">Viêt Nam</option>
<option value="Yemen">Yémen</option>
<option value="Yougoslavie">Yougoslavie</option>
<option value="Zaire">Zaïre</option>
<option value="Zambie">Zambie</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
 </div>

<!--Telephone-->
 <div class="form-group" >
<label for="telephone">Téléphone:</label>
<br/>

<select name="prefixe" id="prefixe" class="form-control form-row" style="width:10%;display:inline-block">


  <option data-countryCode="US" value="1" selected>USA (+1)</option>
  <option data-countryCode="GB" value="44">UK (+44)</option>

  <option disabled="disabled">Other Countries</option>
  <option data-countryCode="DZ" value="213">Algeria (+213)</option>
  <option data-countryCode="AD" value="376">Andorra (+376)</option>
  <option data-countryCode="AO" value="244">Angola (+244)</option>
  <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
  <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
  <option data-countryCode="AR" value="54">Argentina (+54)</option>
  <option data-countryCode="AM" value="374">Armenia (+374)</option>
  <option data-countryCode="AW" value="297">Aruba (+297)</option>
  <option data-countryCode="AU" value="61">Australia (+61)</option>
  <option data-countryCode="AT" value="43">Austria (+43)</option>
  <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
  <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
  <option data-countryCode="BH" value="973">Bahrain (+973)</option>
  <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
  <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
  <option data-countryCode="BY" value="375">Belarus (+375)</option>
  <option data-countryCode="BE" value="32">Belgium (+32)</option>
  <option data-countryCode="BZ" value="501">Belize (+501)</option>
  <option data-countryCode="BJ" value="229">Benin (+229)</option>
  <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
  <option data-countryCode="BT" value="975">Bhutan (+975)</option>
  <option data-countryCode="BO" value="591">Bolivia (+591)</option>
  <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
  <option data-countryCode="BW" value="267">Botswana (+267)</option>
  <option data-countryCode="BR" value="55">Brazil (+55)</option>
  <option data-countryCode="BN" value="673">Brunei (+673)</option>
  <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
  <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
  <option data-countryCode="BI" value="257">Burundi (+257)</option>
  <option data-countryCode="KH" value="855">Cambodia (+855)</option>
  <option data-countryCode="CM" value="237">Cameroon (+237)</option>
  <option data-countryCode="CA" value="1">Canada (+1)</option>
  <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
  <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
  <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
  <option data-countryCode="CL" value="56">Chile (+56)</option>
  <option data-countryCode="CN" value="86">China (+86)</option>
  <option data-countryCode="CO" value="57">Colombia (+57)</option>
  <option data-countryCode="KM" value="269">Comoros (+269)</option>
  <option data-countryCode="CG" value="242">Congo (+242)</option>
  <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
  <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
  <option data-countryCode="HR" value="385">Croatia (+385)</option>
  <option data-countryCode="CY" value="90">Cyprus - North (+90)</option>
  <option data-countryCode="CY" value="357">Cyprus - South (+357)</option>
  <option data-countryCode="CZ" value="420">Czech Republic (+420)</option>
  <option data-countryCode="DK" value="45">Denmark (+45)</option>
  <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
  <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
  <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
  <option data-countryCode="EC" value="593">Ecuador (+593)</option>
  <option data-countryCode="EG" value="20">Egypt (+20)</option>
  <option data-countryCode="SV" value="503">El Salvador (+503)</option>
  <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
  <option data-countryCode="ER" value="291">Eritrea (+291)</option>
  <option data-countryCode="EE" value="372">Estonia (+372)</option>
  <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
  <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
  <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
  <option data-countryCode="FJ" value="679">Fiji (+679)</option>
  <option data-countryCode="FI" value="358">Finland (+358)</option>
  <option data-countryCode="FR" value="33">France (+33)</option>
  <option data-countryCode="GF" value="594">French Guiana (+594)</option>
  <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
  <option data-countryCode="GA" value="241">Gabon (+241)</option>
  <option data-countryCode="GM" value="220">Gambia (+220)</option>
  <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
  <option data-countryCode="DE" value="49">Germany (+49)</option>
  <option data-countryCode="GH" value="233">Ghana (+233)</option>
  <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
  <option data-countryCode="GR" value="30">Greece (+30)</option>
  <option data-countryCode="GL" value="299">Greenland (+299)</option>
  <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
  <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
  <option data-countryCode="GU" value="671">Guam (+671)</option>
  <option data-countryCode="GT" value="502">Guatemala (+502)</option>
  <option data-countryCode="GN" value="224">Guinea (+224)</option>
  <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
  <option data-countryCode="GY" value="592">Guyana (+592)</option>
  <option data-countryCode="HT" value="509">Haiti (+509)</option>
  <option data-countryCode="HN" value="504">Honduras (+504)</option>
  <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
  <option data-countryCode="HU" value="36">Hungary (+36)</option>
  <option data-countryCode="IS" value="354">Iceland (+354)</option>
  <option data-countryCode="IN" value="91">India (+91)</option>
  <option data-countryCode="ID" value="62">Indonesia (+62)</option>
  <option data-countryCode="IQ" value="964">Iraq (+964)</option>
  <!-- <option data-countryCode="IR" value="98">Iran (+98)</option> -->
  <option data-countryCode="IE" value="353">Ireland (+353)</option>
  <option data-countryCode="IL" value="972">Israel (+972)</option>
  <option data-countryCode="IT" value="39">Italy (+39)</option>
  <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
  <option data-countryCode="JP" value="81">Japan (+81)</option>
  <option data-countryCode="JO" value="962">Jordan (+962)</option>
  <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
  <option data-countryCode="KE" value="254">Kenya (+254)</option>
  <option data-countryCode="KI" value="686">Kiribati (+686)</option>
  <!-- <option data-countryCode="KP" value="850">Korea - North (+850)</option> -->
  <option data-countryCode="KR" value="82">Korea - South (+82)</option>
  <option data-countryCode="KW" value="965">Kuwait (+965)</option>
  <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
  <option data-countryCode="LA" value="856">Laos (+856)</option>
  <option data-countryCode="LV" value="371">Latvia (+371)</option>
  <option data-countryCode="LB" value="961">Lebanon (+961)</option>
  <option data-countryCode="LS" value="266">Lesotho (+266)</option>
  <option data-countryCode="LR" value="231">Liberia (+231)</option>
  <option data-countryCode="LY" value="218">Libya (+218)</option>
  <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
  <option data-countryCode="LT" value="370">Lithuania (+370)</option>
  <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
  <option data-countryCode="MO" value="853">Macao (+853)</option>
  <option data-countryCode="MK" value="389">Macedonia (+389)</option>
  <option data-countryCode="MG" value="261">Madagascar (+261)</option>
  <option data-countryCode="MW" value="265">Malawi (+265)</option>
  <option data-countryCode="MY" value="60">Malaysia (+60)</option>
  <option data-countryCode="MV" value="960">Maldives (+960)</option>
  <option data-countryCode="ML" value="223">Mali (+223)</option>
  <option data-countryCode="MT" value="356">Malta (+356)</option>
  <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
  <option data-countryCode="MQ" value="596">Martinique (+596)</option>
  <option data-countryCode="MR" value="222">Mauritania (+222)</option>
  <option data-countryCode="YT" value="269">Mayotte (+269)</option>
  <option data-countryCode="MX" value="52">Mexico (+52)</option>
  <option data-countryCode="FM" value="691">Micronesia (+691)</option>
  <option data-countryCode="MD" value="373">Moldova (+373)</option>
  <option data-countryCode="MC" value="377">Monaco (+377)</option>
  <option data-countryCode="MN" value="976">Mongolia (+976)</option>
  <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
  <option data-countryCode="MA" value="212">Morocco (+212)</option>
  <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
  <option data-countryCode="MN" value="95">Myanmar (+95)</option>
  <option data-countryCode="NA" value="264">Namibia (+264)</option>
  <option data-countryCode="NR" value="674">Nauru (+674)</option>
  <option data-countryCode="NP" value="977">Nepal (+977)</option>
  <option data-countryCode="NL" value="31">Netherlands (+31)</option>
  <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
  <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
  <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
  <option data-countryCode="NE" value="227">Niger (+227)</option>
  <option data-countryCode="NG" value="234">Nigeria (+234)</option>
  <option data-countryCode="NU" value="683">Niue (+683)</option>
  <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
  <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
  <option data-countryCode="NO" value="47">Norway (+47)</option>
  <option data-countryCode="OM" value="968">Oman (+968)</option>
  <option data-countryCode="PK" value="92">Pakistan (+92)</option>
  <option data-countryCode="PW" value="680">Palau (+680)</option>
  <option data-countryCode="PA" value="507">Panama (+507)</option>
  <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
  <option data-countryCode="PY" value="595">Paraguay (+595)</option>
  <option data-countryCode="PE" value="51">Peru (+51)</option>
  <option data-countryCode="PH" value="63">Philippines (+63)</option>
  <option data-countryCode="PL" value="48">Poland (+48)</option>
  <option data-countryCode="PT" value="351">Portugal (+351)</option>
  <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
  <option data-countryCode="QA" value="974">Qatar (+974)</option>
  <option data-countryCode="RE" value="262">Reunion (+262)</option>
  <option data-countryCode="RO" value="40">Romania (+40)</option>
  <option data-countryCode="RU" value="7">Russia (+7)</option>
  <option data-countryCode="RW" value="250">Rwanda (+250)</option>
  <option data-countryCode="SM" value="378">San Marino (+378)</option>
  <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
  <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
  <option data-countryCode="SN" value="221">Senegal (+221)</option>
  <option data-countryCode="CS" value="381">Serbia (+381)</option>
  <option data-countryCode="SC" value="248">Seychelles (+248)</option>
  <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
  <option data-countryCode="SG" value="65">Singapore (+65)</option>
  <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
  <option data-countryCode="SI" value="386">Slovenia (+386)</option>
  <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
  <option data-countryCode="SO" value="252">Somalia (+252)</option>
  <option data-countryCode="ZA" value="27">South Africa (+27)</option>
  <option data-countryCode="ES" value="34">Spain (+34)</option>
  <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
  <option data-countryCode="SH" value="290">St. Helena (+290)</option>
  <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
  <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
  <option data-countryCode="SR" value="597">Suriname (+597)</option>
  <option data-countryCode="SD" value="249">Sudan (+249)</option>
  <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
  <option data-countryCode="SE" value="46">Sweden (+46)</option>
  <option data-countryCode="CH" value="41">Switzerland (+41)</option>
  <!-- <option data-countryCode="SY" value="963">Syria (+963)</option> -->
  <option data-countryCode="TW" value="886">Taiwan (+886)</option>
  <option data-countryCode="TJ" value="992">Tajikistan (+992)</option>
  <option data-countryCode="TH" value="66">Thailand (+66)</option>
  <option data-countryCode="TG" value="228">Togo (+228)</option>
  <option data-countryCode="TO" value="676">Tonga (+676)</option>
  <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
  <option data-countryCode="TN" value="216">Tunisia (+216)</option>
  <option data-countryCode="TR" value="90">Turkey (+90)</option>
  <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
  <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
  <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
  <option data-countryCode="UG" value="256">Uganda (+256)</option>
  <option data-countryCode="UA" value="380">Ukraine (+380)</option>
  <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
  <option data-countryCode="UY" value="598">Uruguay (+598)</option>
  <option data-countryCode="UZ" value="998">Uzbekistan (+998)</option>
  <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
  <option data-countryCode="VA" value="379">Vatican City (+379)</option>
  <option data-countryCode="VE" value="58">Venezuela (+58)</option>
  <option data-countryCode="VN" value="84">Vietnam (+84)</option>
  <option data-countryCode="VG" value="1">Virgin Islands - British (+1)</option>
  <option data-countryCode="VI" value="1">Virgin Islands - US (+1)</option>
  <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
  <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
  <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
  <option data-countryCode="ZM" value="260">Zambia (+260)</option>
  <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
</select>


<input type="text" name="telephone" id="telephone" class="form-control form-row" style="width:30%;display:inline-block" required>
<span></span>
 </div>

<!--Remarques-->
 <div class="form-group" >
<label for="remarques">Remarques:</label>
<br/>
<textarea  rows="5" cols="3" class="form-control"  name="remarques" id="remarques" required ></textarea>
 </div>
<div class="form-group" >

<br/>
<input type="submit" class="form-control"  name="bpayment" id="bpayment" value="Continuer vers le payment" style="background-color:#b6a573;color:white">
 </div>
</form>


<!-- ********************************************************Validation des champs en jquery******************************** -->
<script>
// Au chargement du DOM
$(document).ready(function () {
//Reg ex pour vérifier si le champs est bien un mail
function validateEmail(mail) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(mail);
}

//fonction de validation si le champ est valide est vert sinon rouge
function validate() {
  var $res = $("#mail+span");
  var email = $("#mail").val();
  $res.text("");
	console.log($("#mail").val());
  if (validateEmail(email)) {
    $res.css("color", "green");
	 $("#mail").css("border","solid 3px green");
  } else {
	$res.css("color", "red");
	$("#mail").css("border","solid 3px red");
	if(email!="")
	{
    $res.text("Veuillez saisir un mail valide");
    
	}
	else
	{
	 $res.text("Ce champ est requis.");
    
	}
  }
  return false;
}

//valider nom pour qu'il ne soit pas vide

function validateNom() {
 var $res = $("#nom+span");
if($("#nom").val()!="")
	{
    $res.css("color", "green");
	 $("#nom").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#nom").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}

//valider prenom pour qu'il ne soit pas vide

function validatePrenom() {
 var $res = $("#prenom+span");
if($("#prenom").val()!="")
	{
    $res.css("color", "green");
	 $("#prenom").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#prenom").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}

//valider adresse pour que le champ ne soit pas vide

function validateAdresse() {
 var $res = $("#adresse+span");
if($("#adresse").val()!="")
	{
    $res.css("color", "green");
	 $("#adresse").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#adresse").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}

//valider adresse pour que le champ ne soit pas vide

function validateCodepostal() {
 var $res = $("#cdp+span");
if($("#cdp").val()!="")
	{
    $res.css("color", "green");
	 $("#cdp").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#cdp").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}

//valider adresse pour que le champ ne soit pas vide

function validateVille() {
 var $res = $("#ville+span");
if($("#ville").val()!="")
	{
    $res.css("color", "green");
	 $("#ville").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#ville").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}

//valider adresse pour que le champ ne soit pas vide

function validateTel() {
 var $res = $("#telephone+span");
if($("#telephone").val()!="")
	{
    $res.css("color", "green");
	 $("#telephone").css("border","solid 3px green"); 
	$res.text(""); 
	}
	else
	{
	 $res.css("color", "red");
	$("#telephone").css("border","solid 3px red");
	 $res.text("Ce champ est requis.");
    
	}

}


//***validation du champ mail***
$("#mail").on("keyup",validate);

//***validation du champ nom***
$("#nom").on("keyup",validateNom);

//***validation du champ prenom***
$("#prenom").on("keyup",validatePrenom);

//***validation du champ adresse***
$("#adresse").on("keyup",validateAdresse);

//***validation du champ code postal***
$("#cdp	").on("keyup",validateCodepostal);

//***validation du champ ville***
$("#ville").on("keyup",validateVille);

//***validation du champ prenom***
$("#tel").on("keyup",validateAdresse);



});


</script>











