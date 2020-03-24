/*---------------------Variable globale---------------------------*/
var apiRoot = "http://localhost/on2ix/api";
var listeBaguesPossible=[];
var listeBaguesAffichee=[];
var listeBaguesAfficher=[];
var dejaTri=0;
var quimapl=0;
/*------------------------Declachement lorsque la page est chargé---------------------------------------*/
$(document).ready(function(){
  $("#titre").html("Bienvenue Dans La Galerie de vos Bagues");
  listerBagues();
  $('#err').hide();
});
/*-----------Declachement au click-------------------*/
$(document).on('click', '.option', triSelectBagues);
$(document).on('click', '.buttonFav', mettreFav);
$(document).on('click', '.buttonShop', mettreShop);
$(document).on('click', '.checkalliage', triButtonBagues);
$(document).on('click', '.checkgenre', triCheckBagues);
$(document).on('change', '.selectPrix', triPrixBagues);
$(document).on('change', '.selectCarat', triCaratBagues);
/*----------afficherBagues----------*/
//permet d'afficher les bagues
function afficherBagues(){
  $("#bague").html("");
  for (var i in listeBaguesPossible) {
    var div=$("<div>")
    var h3=$("<h3>")
    var img=$("<img>")
    var p=$("<p>")
	   var btn=$("<button class=\"buttonFav\"> <i class=\"fa fa-heart\"></i> </button>").attr('type','button')
	   var btn2=$("<button class=\"buttonShop\"> <i class=\"fa fa-shopping-basket\"></i> </button>").attr('type','button')
    div.attr({"id":listeBaguesPossible[i].id,"class":"bagues"});
    img.attr("src",listeBaguesPossible[i].source);
    p.text("a partir de "+listeBaguesPossible[i].prix+" €");
    h3.html(listeBaguesPossible[i].titre);
    div.append(img)
    div.prepend(h3);
    div.append(p);
    div.append(btn)
    div.append(btn2)
    $("#bague").append(div);
  }
}
/*----------afficherBaguesTri----------*/
//permet d'afficher les bagues suite a un tri
function afficherBaguesTri(criTri,tripar1,tripar2,info){
  var nb=0;
  if (dejaTri>0){
    listeBaguesAfficher=listeBaguesAffichee;
  }else {
    listeBaguesAfficher=listeBaguesPossible;
    listeBaguesAffichee=[];
  }
  for (var i in listeBaguesAfficher) {
    var div=$("<div>")
    var h3=$("<h3>")
    var img=$("<img>")
    var p=$("<p>")
    var btn=$("<button class=\"buttonFav\"> <i class=\"fa fa-heart\"></i> </button>").attr('type','button')
    var btn2=$("<button class=\"buttonShop\"> <i class=\"fa fa-shopping-basket\"></i> </button>").attr('type','button')
    if (info=="test") {
      if (listeBaguesAfficher[i][criTri]==tripar1) {
            listeBaguesAffichee.push(listeBaguesAfficher[i]);
        nb++;
        div.attr({"id":listeBaguesAfficher[i].id,"class":"bagues"});
        img.attr("src",listeBaguesAfficher[i].source);
        p.text("a partir de "+listeBaguesAfficher[i].prix+" €");
        h3.html( listeBaguesAfficher[i].titre);
        div.append(img)
        div.prepend(h3);
        div.append(p);
       div.append(btn)
       div.append(btn2)
        $("#bague").append(div);
      }
    }
    if (info=="entre") {
      if (tripar1<=parseFloat( listeBaguesAfficher[i][criTri]) && parseFloat( listeBaguesAfficher[i][criTri]) <= tripar2){
            listeBaguesAffichee.push( listeBaguesAfficher[i]);
        nb++;
        div.attr({"id": listeBaguesAfficher[i].id,"class":"bagues"});
        img.attr("src", listeBaguesAfficher[i].source);
        p.text("a partir de "+ listeBaguesAfficher[i].prix+" €");
        h3.html( listeBaguesAfficher[i].titre);
        div.append(img)
        div.prepend(h3);
        div.append(p);
       div.append(btn)
       div.append(btn2)
        $("#bague").append(div);
      }
    }
  }
  dejaTri=1;
  listeBaguesAffichee = Array.from(new Set(listeBaguesAffichee));
  return nb;
}
/*----------CacherBaguesTri----------*/
//permet de cacher les bagues suite a un tri par genre
function CacherBaguesTri(genre){
  for (var i in  listeBaguesAfficher) {
    if ( listeBaguesAfficher[i].genre==genre) {
    var id=listeBaguesAfficher[i].id;
      $("#"+id).remove();
              dejaTri=0;
    }
  }
}
/*-------------listerBijoux---------------*/
//permet de lister les bijoux Sans aucun filtre
function listerBagues() {
  $.ajax({
		type: "GET",
		// GET /api/bijoux
		url: apiRoot + "/bijoux",
		headers: {"debug-data":true},
		success: function(oRep){
      console.log(oRep.bijoux);
      listeBaguesPossible=oRep.bijoux;
      afficherBagues();
		},
    error:function(oRep){
      console.log(oRep);
		},
		dataType: "json"
	});
}
/*-------------triSelectBagues---------------*/
//permet de lister les bijoux avec un filtre Select
function triSelectBagues (){
  var tripar=$("#tri").children(":selected").attr("id");
  $.ajax({
    type: "GET",
    // GET /api/select?tri=...
    url: apiRoot + "/select?tri="+tripar,
    headers: {"debug-data":true},
    success: function(oRep){
      listeBaguesPossible=oRep.bijoux;
          afficherBagues();
    },
    error:function(oRep){
      console.log(oRep);
    },
    dataType: "json"
  });
}
/*-------------triButtonBagues---------------*/
//permet de lister les bijoux avec un filtre button
function triButtonBagues (){
  var nb;
  quimapl=1;
  console.log(9446);
  if (this.id=="raz") {
      listerBagues();
        dejaTri=0;
  } else {
    if (quimapl==1 || quimapl==0 ){
      dejaTri=0;
    }else {
      quimapl=1;
    }
     $("#bague").html("");
    nb=afficherBaguesTri("alliage",this.id,0,"test");
    if (nb==0) {
      listerBagues();
			$("#err").show();
			setTimeout(function () {
				$("#err").hide();
			}, 1000);
        dejaTri=0;
    }
  }
}
/*-------------triCheckBagues---------------*/
//permet de afficher ou cacher les bijoux selon le sexe choisi
function triCheckBagues(){
var nb;
quimapl=3
console.log(dejaTri);
if (!$("#F").is(":checked") && !$("#M").is(":checked") && !$("#U").is(":checked")){
  afficherBagues();
            dejaTri=0;
}


  if (this.checked) {
    if ($("#F").is(":checked") && $("#M").is(":checked") ||
        $("#F").is(":checked") && $("#U").is(":checked") ||
        $("#M").is(":checked") && $("#U").is(":checked")){
          nb=afficherBaguesTri("genre",this.id,0,"test")
        if (nb==0) {
            $("#err").show();
            setTimeout(function () {
              $("#err").hide();

            }, 1000);
                    dejaTri=0;
             $("#"+this.id).prop('checked', false);
          }


        }
        else {
       $("#bague").html("");
       nb=afficherBaguesTri("genre",this.id,0,"test")
       if (nb==0) {
         listerBagues();
         $("#"+this.id).prop('checked', false);
         $("#err").show();
         setTimeout(function () {
           $("#err").hide();
         }, 1000);
                 dejaTri=0;
       }
     }
     if (quimapl==3){
       dejaTri=0;
     }else {
       dejaTri=1;
     }
  }else {
    if (!$("#F").is(":checked"))CacherBaguesTri("F");
    if (!$("#M").is(":checked")) CacherBaguesTri("M");
    if (!$("#U").is(":checked")) CacherBaguesTri("U");
    if (!$("#F").is(":checked") && !$("#M").is(":checked") && !$("#U").is(":checked"))
    afficherBagues();
  }
}
/*-------------triPrixBagues---------------*/
//permet de afficher ou cacher les bijoux selon la tranche de prix choisi
function triPrixBagues(){
  var nb;
  quimapl=4
  var min=parseFloat( $("#selectPrixMin").children(":selected").val() );
  var max=parseFloat( $("#selectPrixMax").children(":selected").val() );
  $("#bague").html("");
  nb=afficherBaguesTri("prix",min,max,"entre")
  if (nb==0) {
    listerBagues();
    var min= $("#selectPrixMin").children("#"+0).attr("selected");
    var max= $("#selectPrixMax").children("#"+50000).attr("selected");
    $("#err").show();
    setTimeout(function () {
      $("#err").hide();
    }, 1000);
            dejaTri=0;
  }else{
    if (quimapl==4){
      dejaTri=0;
    }else {
      dejaTri=1;
    }
  }

}
/*-------------triCaratBagues---------------*/
//permet de afficher ou cacher les bijoux selon la tranche de carat choisi
function triCaratBagues(){
  var nb;
  quimapl=5;
  var min=parseFloat( $("#selectCaratMin").children(":selected").val() );
  var max=parseFloat( $("#selectCaratMax").children(":selected").val() );
  $("#bague").html("");
  nb=afficherBaguesTri("purete",min,max,"entre")
  if (nb==0) {
    listerBagues();
    $("#err").show();
    setTimeout(function () {
      $("#err").hide();
    }, 1000);
            dejaTri=0;
  }else{
    if (quimapl==5){
      dejaTri=0;
    }else {
      dejaTri=1;
    }
}
}
function mettreShop (){
  console.log(this);

}
function mettreFav (){
  console.log(this);

}
