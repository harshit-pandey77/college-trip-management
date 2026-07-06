function populateCities(){

let state=document.getElementById("state").value;

let city=document.getElementById("city");

city.innerHTML="";

let cities=[];

if(state=="Uttar Pradesh"){

cities=["Lucknow","Kanpur","Noida","Varanasi"];

}

else if(state=="Bihar"){

cities=["Patna","Gaya","Muzaffarpur"];

}

else if(state=="Delhi"){

cities=["New Delhi","Dwarka","Rohini"];

}

cities.forEach(function(item){

let option=document.createElement("option");

option.text=item;

option.value=item;

city.add(option);

});

}