<!--
   quiSommesNous.html

   Copyright 2020 afacqueu <afacqueu@b2-IG-201PC20.domaine.lan>

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.


-->
<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=surMesure");
	die("");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Sur Mesure</title>
	<meta charset="UTF-8">
	<link href="css/serviceClient.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="js/surMesure.js"></script>
</head>

<body>
	<div class="container">
	  <h1 class="titre">Créez votre bague sur mesures</h1>
    <form class="surMesure" action="controleur.php" method="POST">

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6 lead">
            <h2>Quel style de bague préférez-vous ?</h2>
            <select class="custom-select my-1 mr-sm-2" id="selStyle" name="selStyle">
              <option value="solitaire">Solitaire</option>
              <option value="eternity">Eternity</option>
              <option value="bagueDeMariage">Bague de mariage</option>
              <option value="toiEtMoi">Toi et Moi</option>
              <option value="bagueAPhalange">Bague à phalange</option>
              <option value="trinity">Trinity</option>
              <option value="trilogy">Trilogy</option>
              <option value="bagueSecret">Bague secret</option>
              <option value="cocktail">Cocktail</option>
              <option value="halo">Halo</option>
            </select>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 lead">
            <h2>Quel alliage souhaitez-vous ?</h2>
            <select class="custom-select my-1 mr-sm-2" id="selAlliage" name="selAlliage">
              <option value="orBlanc">Or blanc</option>
              <option value="orRose">Or rose</option>
              <option value="orJaune">Or jaune</option>
            </select>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 lead">

            <h2>Quel pureté pour cet alliage (en carat)?</h2>
            <select class="custom-select my-1 mr-sm-2" id="selPurete" name="selPurete">
              <option value="0.30ct">0.30 ct</option>
              <option value="0.50ct">0.50 ct</option>
              <option value="0.70ct">0.70 ct</option>
              <option value="0.75ct">0.75 ct</option>
              <option value="0.90ct">0.90 ct</option>
              <option value="1.00ct">1.00 ct</option>
              <option value="1.25ct">1.25 ct</option>
              <option value="1.50ct">1.50 ct</option>
              <option value="2.00ct">2.00 ct</option>
              <option value="2.50ct">2.50 ct</option>
              <option value="3.00ct">3.00 ct</option>

            </select>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 lead">
            <h2>Avec quelle pierre souhaitez vous orner votre bijou ?</h2>
            <select class="custom-select my-1 mr-sm-2" id="selPierre" name="selPierre">
              <option value="aucune">Aucune pierre</option>
              <option value="diamant">Diamant</option>
              <option value="saphire">Saphire</option>
              <option value="rubi">Rubi</option>
            </select>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 lead">
            <h2>Quele sera la  de votre bague ?</h2>
            <select class="custom-select my-1 mr-sm-2" id="selTaille" name="selTaille">
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
              <option value="48">48</option>
              <option value="49">49</option>
              <option value="50">50</option>
              <option value="51">51</option>
              <option value="52">52</option>
              <option value="53">53</option>
              <option value="54">54</option>
              <option value="55">55</option>
              <option value="56">56</option>
							<option value="57">57</option>
              <option value="58">58</option>
              <option value="59">59</option>
              <option value="60">60</option>
              <option value="61">61</option>
              <option value="62">62</option>
              <option value="63">63</option>
              <option value="64">64</option>
              <option value="65">65</option>
              <option value="66">66</option>
              <option value="67">67</option>
              <option value="68">68</option>
              <option value="69">69</option>
              <option value="70">70</option>
              <option value="71">71</option>
              <option value="72">72</option>
              <option value="73">73</option>
              <option value="74">74</option>
              <option value="75">75</option>
            </select>
          </div>

        </div>
        <h2>Entrez votre mail</h2>
        <input type="text" name="mailEnvoyeur" id="mailEnvoyeur" value="xyz@123.fr">
        <button type="submit" class="btn btn-dangerous" name="action" value="Mail sur mesure">Submit</button>
    </form>

	</div>

</body>

</html>
