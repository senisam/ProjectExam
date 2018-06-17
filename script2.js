 
// Section1 

var deadline = new Date("2018-06-29T05:41:00-04:00").getTime();

var x = setInterval(function() {

var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days ;
document.getElementById("hour").innerHTML =hours;
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (t < 0) {
		clearInterval(x);
		document.getElementById("launchTime").innerHTML = "TIME UP";
		document.getElementById("day").innerHTML ='0';
		document.getElementById("hour").innerHTML ='0';
		document.getElementById("minute").innerHTML ='0' ; 
		document.getElementById("second").innerHTML = '0'; }
}, 1000);

// Section2 

fetch("https://api.spacexdata.com/v2/rockets") 
      .then(result => result.json())
  .then((data) => {
    createRocketList(data);
  })
    

function createRocketList(resultItem) { 
    console.log(resultItem);
    var containerDiv= document.getElementById("rocket");
    for (var i=0; i< resultItem.length; i++) {
    var outputDiv = document.createElement("div");
    var nameDiv = document.createElement("h4"); 
    var heightDiv = document.createElement("div");
    var massDiv = document.createElement("div");
    var engineDiv = document.createElement("div");
    
    
    nameDiv.innerHTML = resultItem[i].name;
    nameDiv.className = "Name";
    heightDiv.innerHTML = "Height(meter): " + resultItem[i].height.meters; 
    massDiv.innerHTML = "Mass(kg): " + resultItem[i].mass.kg;
    engineDiv.innerHTML = "Engines: " + resultItem[i].engines.number;
    
     
        
    nameDiv.style.textAlign="center";
    nameDiv.style.color="#ffffff";
    nameDiv.style.fontSize="24px";   
    nameDiv.style.marginTop="10px"; 
    nameDiv.style.padding="5px";   
        
    heightDiv.style.textAlign="center";
    heightDiv.style.color="#ffffff";
    heightDiv.style.padding="5px"; 
    heightDiv.style.fontSize="18px"; 
    
    massDiv.style.textAlign="center";
    massDiv.style.color="#ffffff";
     massDiv.style.padding="5px"; 
    massDiv.style.fontSize="18px"; 
        
    engineDiv.style.textAlign="center";
    engineDiv.style.color="#ffffff";
    engineDiv.style.padding="5px";
    engineDiv.style.fontSize="18px"; 
    
   
   
    outputDiv.style.width="100%";
    outputDiv.style.height="120px";
    outputDiv.style.padding="20px";   
    outputDiv.style.marginTop="0px";
    
    
    containerDiv.style.display="flex";
    containerDiv.style.flexDirection="row";
    outputDiv.style.display="inline-block";
        

    
    outputDiv.appendChild(nameDiv); 
    outputDiv.appendChild(heightDiv); 
    outputDiv.appendChild(massDiv);
    outputDiv.appendChild(engineDiv);
    containerDiv.appendChild(outputDiv);
     }
 
}

     
      

     
      
      

    

// Section 5
// contact form

// Form validation code will come here. 
function validateForm() 
{ 
     if( document.myForm.firstName.value == "" ) 
   { 
     alert( "Please provide your first name!" ); 
     document.myForm.firstName.focus() ; 
         return false; 
   }
    
     if( document.myForm.lastName.value == "" ) 
   { 
     alert( "Please provide your last name!" ); 
     document.myForm.lastName.focus() ; 
         return false; 
   }
  
     if( document.myForm.phoneNumber.value == "" || 
           isNaN( document.myForm.phoneNumber.value ))
   { 
     alert( "Please provide a Phone Number " ); 
     document.myForm.phoneNumber.focus() ; 
         return false; 
   }
   
     if (document.myForm.eMail.value === ""|| 
         (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) ;
   { 
     alert( "Please provide your Email!" ); 
     document.myForm.eMail.focus() ; 
         return false; 
    } 
   
   
} 